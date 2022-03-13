<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Project;
use Illuminate\Support\Facades\DB;
use App\Models\Post;
use Illuminate\Http\Request;
use Image;

class PostController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $post = DB::table('posts')
            ->get();
        return view('admin.post.index', compact('post'));
    }

    public function create()
    {   $project=DB::table('projects')->get();
        $category = DB::table('categories')->get();
        return view('admin.post.create', compact('category','project'));
    }


    public function store(Request $request)
    {

       
        $datas[] =  $request->except('_token');
        dd($datas);
        $category_id = $datas['category_id'];
        $project_id = $datas['project_id'];
        $sequence=$datas['sequence'];
      
        foreach($sequence as $data){
        $post = new Post();
        $post->category_id = $category_id;
        $post->project_id =  $project_id;
        $post->text = isset($data['post_text']) ?$data['post_text'] : '';
        $post->post_type= $data['post_type'];
        $post->sequence = $data['sequence'];
        $post->status = 1;
        $image_one = $request->file('image_one');
        
        $image_one_name = $image_one->getClientOriginalName();
        $directory = 'public/media/post/';
        $imageUrl = $directory . $image_one_name;
        Image::make($image_one)->save($imageUrl);
        $post-> image_one = $imageUrl;
        $image_two = $request->file('image_two');
        $image_two_name = $image_one->getClientOriginalName();
        $directory = 'public/media/post/';
        $imageUrl = $directory . $image_two_name;
        Image::make($image_two)->save($imageUrl);
        $post-> image_two = $imageUrl;

     
        $post->save();
        $notification = array(
            'messege' => 'Successfully post Inserted ',
            'alert-type' => 'success'
        );
            return Redirect()->back()->with($notification);
        }
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
        $image1 = $post->image_one;
        $image2 = $post->image_two;
        unlink($image1);
        unlink($image2);
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
        $projectName=Project::where("id","=",$post->project_id)->first();
        $categoryName = Category::where("id","=",$post->category_id)->first();



        return view('admin.post.show', compact(['post','categoryName','projectName']));
    }

    public function Editpost($id)
    {
        $post = DB::table('posts')->where('id', $id)->first();

        return view('admin.post.edit', compact('post'));
    }

    public function UpdatepostWithoutPhoto(Request $request, $id)
    {
        $data = array();
        $data['post_id'] = $request->post_name;
        $data['category_id'] = $request->category_id;
        $data['discount_price'] = $request->discount_price;
        $data['subcategory_id'] = $request->subcategory_id;
        $data['brand_id'] = $request->brand_id;
        $data['post_size'] = $request->post_size;
        $data['post_color'] = $request->post_color;
        $data['selling_price'] = $request->selling_price;
        $data['post_details'] = $request->post_details;
        $data['video_link'] = $request->video_link;
        $data['main_slider'] = $request->main_slider;
        $data['hot_deal'] = $request->hot_deal;
        $data['best_rated'] = $request->best_rated;
        $data['trend'] = $request->trend;
        $data['mid_slider'] = $request->mid_slider;
        $data['hot_new'] = $request->hot_new;
        $data['buyone_getone'] = $request->buyone_getone;

        $update = DB::table('posts')->where('id', $id)->update($data);
        if ($update) {
            $notification = array(
                'messege' => 'Successfully post Updated ',
                'alert-type' => 'success'
            );
            return Redirect()->route('all.post')->with($notification);
        } else {
            $notification = array(
                'messege' => 'Nothing To Updated ',
                'alert-type' => 'success'
            );
            return Redirect()->route('all.post')->with($notification);
        }
    }

    public function UpdatepostPhoto(Request $request, $id)
    {
        $old_one = $request->old_one;
        $old_two = $request->old_two;
        $old_three = $request->old_three;

        $image_one = $request->image_one;
        $image_two = $request->image_two;
        $image_three = $request->image_three;
        $data = array();

        if ($request->has('image_one')) {
            unlink($old_one);
            $image_one_name = hexdec(uniqid()) . '.' . $image_one->getClientOriginalExtension();
            Image::make($image_one)->resize(300, 300)->save('public/media/post/' . $image_one_name);
            $data['image_one'] = 'public/media/post/' . $image_one_name;
            DB::table('posts')->where('id', $id)->update($data);
            $notification = array(
                'messege' => 'Image One Updated ',
                'alert-type' => 'success'
            );
            return Redirect()->route('all.post')->with($notification);
        }
        if ($request->has('image_two')) {
            unlink($old_two);
            $image_two_name = hexdec(uniqid()) . '.' . $image_two->getClientOriginalExtension();
            Image::make($image_two)->resize(230, 300)->save('public/media/post/' . $image_two_name);
            $data['image_two'] = 'public/media/post/' . $image_two_name;
            DB::table('posts')->where('id', $id)->update($data);
            $notification = array(
                'messege' => 'Image Two Updated ',
                'alert-type' => 'success'
            );
            return Redirect()->route('all.post')->with($notification);
        }
        if ($request->has('image_three')) {
            unlink($old_three);
            $image_three_name = hexdec(uniqid()) . '.' . $image_three->getClientOriginalExtension();
            Image::make($image_three)->resize(230, 300)->save('public/media/post/' . $image_three_name);
            $data['image_three'] = 'public/media/post/' . $image_three_name;
            DB::table('posts')->where('id', $id)->update($data);
            $notification = array(
                'messege' => 'Image Three Updated ',
                'alert-type' => 'success'
            );
            return Redirect()->route('all.post')->with($notification);
        }
        if ($request->has('image_one') && $request->has('image_two')) {

            unlink($old_one);
            $image_one_name = hexdec(uniqid()) . '.' . $image_one->getClientOriginalExtension();
            Image::make($image_one)->resize(230, 300)->save('public/media/post/' . $image_one_name);
            $data['image_one'] = 'public/media/post/' . $image_one_name;

            unlink($old_two);
            $image_two_name = hexdec(uniqid()) . '.' . $image_two->getClientOriginalExtension();
            Image::make($image_two)->resize(230, 300)->save('public/media/post/' . $image_two_name);
            $data['image_two'] = 'public/media/post/' . $image_two_name;

            DB::table('posts')->where('id', $id)->update($data);
            $notification = array(
                'messege' => 'Image One and Two Updated ',
                'alert-type' => 'success'
            );
            return Redirect()->route('all.post')->with($notification);
        }
        if ($request->has('image_one') && $request->has('image_two') && $request->has('image_three')) {
            unlink($old_one);
            unlink($old_two);
            unlink($old_three);
            $image_one_name = hexdec(uniqid()) . '.' . $image_one->getClientOriginalExtension();
            Image::make($image_one)->resize(230, 300)->save('public/media/post/' . $image_one_name);
            $data['image_one'] = 'public/media/post/' . $image_one_name;

            $image_two_name = hexdec(uniqid()) . '.' . $image_two->getClientOriginalExtension();
            Image::make($image_two)->resize(230, 300)->save('public/media/post/' . $image_two_name);
            $data['image_two'] = 'public/media/post/' . $image_two_name;

            $image_three_name = hexdec(uniqid()) . '.' . $image_three->getClientOriginalExtension();
            Image::make($image_three)->resize(230, 300)->save('public/media/post/' . $image_three_name);
            $data['image_three'] = 'public/media/post/' . $image_three_name;
            DB::table('posts')->where('id', $id)->update($data);
            $notification = array(
                'messege' => 'Image One and Two Updated ',
                'alert-type' => 'success'
            );
            return Redirect()->route('all.post')->with($notification);
        }
        return Redirect()->route('all.post');
    }
}
