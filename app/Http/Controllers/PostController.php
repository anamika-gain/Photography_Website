<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Project;
use Illuminate\Support\Facades\DB;
use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        $post = DB::table('posts')->paginate(5);
        return view('admin.post.index', compact('post'));
    }
    public function create()
    {
        $category = DB::table('categories')->get();
        $project = DB::table('projects')->get();
        return view('admin.post.create', compact('category', 'project'));
    }

    public function createbyproject($id)
    {
        $project = DB::table('projects')
            ->where('id', $id)
            ->first();
        $cat_id = DB::table('projects')
            ->where('id', $id)
            ->first('category_id');

        //$category = DB::table('categories')->where('id', $id)->first();
        // $category=DB::table('categories')->where('id',$cat_id)->first();
        return view('admin.post.create_by_project', compact('project'));
    }
    public function store(Request $request)
    { //dd($request);
        $post_type = $request->post_type;
        $text = $request->text;
        if ($request->hasfile('image_one_p')) {
            $potraitImageNo1 = $request->file('image_one_p');
        }
        if ($request->hasfile('image_two_p')) {
            $potraitImageNo2 = $request->file('image_two_p');
        }
        if ($request->hasfile('image_one_l')) {
            $landscapeImageNo1 = $request->file('image_one_l');
        }
        for ($i = 0; $i < sizeof($post_type); $i++) {
            if ($post_type[$i] == 'potrait') {
                $potraitImageNo1Details = $potraitImageNo1[key($post_type)];
                $potraitImageName1 = 'potraitImg1'  . rand(1000, 9999) . time() . '.' . $potraitImageNo1Details->extension();
                $potraitImageNo1Details->move(public_path('/media/post'), $potraitImageName1);
                $potraitImageNo2Details = $potraitImageNo2[key($post_type)];
                $potraitImageName2 = 'potraitImg2' . rand(1000, 9999) . time() . '.' . $potraitImageNo2Details->extension();
                $potraitImageNo2Details->move(public_path('/media/post'), $potraitImageName2);

                $post = new Post();
                $post->category_id = $request->category_id;
                $post->project_id =  $request->project_id;
                $post->post_type =    $post_type[$i];

                $sequence = DB::table('posts')->where([
                    ['category_id', $request->category_id],
                    ['project_id', $request->project_id]
                ])->Max('sequence');



                if (+$sequence == 0) {
                    $post->sequence = 1;
                } else {
                    $maxSequence =  +$sequence + 1;
                    // dd($sequence, $maxSequence);
                    $post->sequence =   (string)$maxSequence;
                }
                $post->image_one =    $potraitImageName1;
                $post->image_two = $potraitImageName2;
                $post->save();
            } else if ($post_type[$i] == 'landscape') {

                if ($request->hasfile('image_one_l')) {
                    $lanscapeImageNo1Details = $landscapeImageNo1[key($post_type)];
                    $landscapeImageName1 = 'potraitImg1' . rand(1000, 9999) . time() . '.' . $lanscapeImageNo1Details->extension();
                    $lanscapeImageNo1Details->move(public_path('/media/post'), $landscapeImageName1);
                    $post = new Post();
                    $post->category_id = $request->category_id;
                    $post->project_id =  $request->project_id;
                    $post->post_type =    $post_type[$i];
                    $sequence = DB::table('posts')->where([
                        ['category_id', $request->category_id],
                        ['project_id', $request->project_id]
                    ])->Max('sequence');



                    if (+$sequence == 0) {
                        $post->sequence = 1;
                    } else {
                        $maxSequence =  +$sequence + 1;
                        // dd($sequence, $maxSequence);
                        $post->sequence =   (string)$maxSequence;
                    }
                    $post->image_one =    $landscapeImageName1;
                    $post->save();
                }
            } else if ($post_type[$i] == 'text') {
                $post = new Post();
                $post->category_id = $request->category_id;
                $post->project_id =  $request->project_id;
                $post->post_type =    $post_type[$i];

                $allPosts = DB::table('posts')->where([
                    ['category_id', $request->category_id],
                    ['project_id', $request->project_id]
                ])->orderBy('sequence', 'desc')->first();

                if ($allPosts == null) {
                    $post->sequence = 1;
                } else {
                    $post->sequence = ($allPosts->sequence) + 1;
                }
                $post->text = $text[key($post_type)];
                $post->post_name =    $request->post_name[$i];
                $post->save();
            }
        }
        return Redirect()->back()->with('message', "Post Added Successfully");
    }
    public function Inactive($id)
    {
        DB::table('posts')->where('id', $id)->update(['status' => 0]);
        $notification = array(
            'messege' => 'Successfully post Inactive ',
            'alert-type' => 'success'
        );
        return Redirect()->back()->with($notification);
    }

    public function Active($id)
    {
        DB::table('posts')->where('id', $id)->update(['status' => 1]);
        $notification = array(
            'messege' => 'Successfully post Aactive ',
            'alert-type' => 'success'
        );
        return Redirect()->back()->with($notification);
    }

    public function Deletepost($id)
    {
        $post = DB::table('posts')->where('id', $id)->first();
        if ($post->post_type == 'potrait') {
            $image1 = $post->image_one;
            $image2 = $post->image_two;
            unlink('public/media/post/' . $image1);
            unlink('public/media/post/' . $image2);
        } elseif ($post->post_type == 'landscape') {
            $image1 = $post->image_one;
            unlink('public/media/post/' . $image1);
        }

        DB::table('posts')->where('id', $id)->delete();
        $notification = array(
            'messege' => 'Successfully post Deleted ',
            'alert-type' => 'success'
        );
        return Redirect()->back()->with($notification);
    }

    public function Viewpost($id)
    {
        $post = DB::table('posts')

            ->where('posts.id', $id)
            ->first();

        $projectName = Project::where("id", "=", $post->project_id)->first();
        $categoryName = Category::where("id", "=", $post->category_id)->first();
        return view('admin.post.show', compact(['post', 'categoryName', 'projectName']));
    }

    public function Editpost($id)
    {
        $post = DB::table('posts')->where('id', $id)->first();
        return view('admin.post.edit', compact('post'));
    }

    public function Updatepost(Request $request, $id)
    {
        // dd($request);
        $data = array();
        $data['project_id'] = $request->project_id;
        $data['category_id'] = $request->category_id;
        $data['sequence'] = $request->sequence;

     
        $old_one = $request->old_one;
        $old_two = $request->old_two;
        //dd($old_one);
        if ($request->hasfile('image_one')) {

            unlink($old_one);
            $ImageNo1 = $request->file('image_one');
            $image_one_name = 'Img1' . time() . '.' . $ImageNo1->extension();
            $data['image_one'] = 'public/media/post/' . $image_one_name;
        }

        if ($request->hasfile('image_two')) {
            unlink($old_two);
            $ImageNo2 = $request->file('image_two');
            $image_two_name = 'Img2' . time() . '.' . $ImageNo2->extension();
            $data['image_two'] = 'public/media/post/' . $image_two_name;
        }

        $update = DB::table('posts')->where('id', $id)->update($data);
        if ($update) {

            return Redirect()->route('all.post')->with('message', "Successfully post Updated");
        } else {

            return Redirect()->route('all.post')->with('message', "Nothing To Updated");
        }
    }

    public function getProjectsFromCategory($id)
    {
        return DB::table('projects')->where([
            ['category_id', $id]
        ])->get();
    }
}
