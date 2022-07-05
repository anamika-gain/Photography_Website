<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\project;
use Illuminate\Http\Request;
use Image;
use Illuminate\Support\Facades\DB;

class ProjectController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }
    public function project()
    {
        $category = Category::all();
        $projects = project::all();
        $project = array();
        $tmpValue = array();
        foreach ($projects as $tmpProject) {
            $tmpValue['id'] = $tmpProject->id;
            $tmpValue['project_name'] = $tmpProject->project_name;
            $tmpValue['category_id'] = $tmpProject->category_id;
            $tmpValue['main_image'] = $tmpProject->main_image;
            $tmpValue['tag_line'] = $tmpProject->tag_line;
            $tmpValue['rolling_text'] = $tmpProject->rolling_text;
            $tmpValue['project_info'] = $tmpProject->project_info;
            $tmpValue['project_location'] = $tmpProject->project_location;
            $tmpValue['project_time'] = date_format(date_create($tmpProject->project_time), "dS,F,Y");
            $tmpValue['status'] = $tmpProject->status;
            array_push($project, $tmpValue);
        }

        return view('admin.project.project', compact('project', 'category'));
    }
    public function createbyCategory($id)
    {
        $post = DB::table('posts')->get();
        $category = DB::table('categories')
            ->where('id', $id)
            ->get();

        return view('admin.project.create_project_by_category', compact('category', 'post'));
    }
    public function create()
    {
        $post = DB::table('posts')->get();
        $category = DB::table('categories')->get();
        return view('admin.project.create', compact('category', 'post'));
    }

    public function storeProject(Request $request)
    {
        //dd($request);
        $validatedData = $request->validate([
            'project_name' => 'required|unique:projects|max:55',
        ]);
        $data = $request->except('_token');

        $project = new project();
        $project->project_name = $data['project_name'];
        $project->category_id = $data['category_id'];
        $project->tag_line = $data['tag_line'];
        $project->rolling_text = $data['rolling_text'];
        $project->project_info = $data['project_info'];
        $project->project_location = $data['project_location'];
        $project->project_time = $data['project_time'];
        $project->status = $data['status'];
        $main_image = $request->file('main_image');
        $imageName = $main_image->getClientOriginalName();
        $directory = 'public/media/project/';
        $imageUrl = $directory . $imageName;
        Image::make($main_image)->save($imageUrl);
        $project->main_image = $imageUrl;
        $project->save();

        $notification = array(
            'messege' => 'project Insert Done',
            'alert-type' => 'success'
        );
        return Redirect()->back()->with($notification);
    }

    public function Deleteproject($id)
    {
        DB::table('posts')->where('project_id', $id)->delete();
        DB::table('projects')->where('id', $id)->delete();

        $notification = array(
            'messege' => 'project Successfully Deleted',
            'alert-type' => 'success'
        );
        return Redirect()->back()->with($notification);
    }
    public function Inactive($id)
    {
        DB::table('projects')->where('id', $id)->update(['status' => 0]);
        $notification = array(
            'messege' => 'Successfully Project Inactive ',
            'alert-type' => 'success'
        );
        return Redirect()->back()->with($notification);
    }

    public function Active($id)
    {
        DB::table('projects')->where('id', $id)->update(['status' => 1]);
        $notification = array(
            'messege' => 'Successfully Project Aactive ',
            'alert-type' => 'success'
        );
        return Redirect()->back()->with($notification);
    }
    public function viewProject($id)
    {
        $project = DB::table('projects')->where('id', $id)->first();
        $category = Category::all();
        $categoryName = Category::where("id", "=", $project->category_id)->first();
        return view('admin.project.view_project', compact('project', 'categoryName', 'category'));
    }
    public function Editproject($id)
    {
        $project = DB::table('projects')->where('id', $id)->first();

        $category = Category::all();
        $categoryName = Category::where("id", "=", $project->category_id)->first();
        return view('admin.project.edit_project', compact('project', 'categoryName', 'category'));
    }

    public function Updateproject(Request $request, $id)
    {
        $validatedData = $request->validate([
            'project_name' => 'required|max:55',
        ]);
        $data = array();
        $data['project_name'] = $request->project_name;
        $data['category_id'] = $request->category_id;
        $data['tag_line'] = $request->tag_line;
        $data['rolling_text'] = $request->rolling_text;
        $data['project_info'] = $request->project_info;
        $data['project_location'] = $request->project_location;
        $data['project_time'] = $request->project_time;
        $data['status'] = $request->status;
        $main_image = $request->file('main_image');
        $image_one_name = hexdec(uniqid()) . '.' . $main_image->getClientOriginalExtension();
        Image::make($main_image)->save('public/media/project/' . $image_one_name);
        $data['main_image'] = 'public/media/project/' . $image_one_name;

        $update = DB::table('projects')->where('id', $id)->update($data);
        if ($update) {
            $notification = array(
                'messege' => 'project Successfully Updated',
                'alert-type' => 'success'
            );
            return Redirect()->route('projects')->with($notification);
        } else {
            $notification = array(
                'messege' => 'Nothing to update',
                'alert-type' => 'success'
            );
            return Redirect()->route('projects')->with($notification);
        }
    }

    public function postByProject($id)
    {
        // DB::table('projects')->where('id', "=", $id)->increment('views');
        $project = DB::table('projects')->where('id', $id)->first();
        $i = DB::table('projects')->where('id', $id)->first('category_id');
        // dd($i);
        // $category=DB::table('categories')->where('id',19)->first();
        // $category = DB::table('categories')->where('id', $id)->first();
        $post = DB::table('posts')->where('project_id', "=", $id)
            ->where('posts.status', 1)
            ->orderBy('sequence', 'asc')
            ->paginate(5);

        return view('admin.post.index2', compact('project', 'post'));
    }

    public function Editpost($id)
    {
        $post = DB::table('posts')->where('id', $id)->first();
        return view('admin.post.edit_by_project', compact('post'));
    }

    public function Updatepost(Request $request, $id)
    {
        $data = array();
        $data['project_id'] = $request->project_id;
        $data['category_id'] = $request->category_id;
        $data['text'] = $request->text;
        $data['sequence'] = $request->sequence;
        $old_one = $request->old_one;
        $old_two = $request->old_two;

        if ($request->hasfile('image_one')) {
            // dd($old_one);
            unlink('public/media/post/' . $old_one);
            $ImageNo1 = $request->file('image_one');
            $image_one_name = 'Img1' . time() . '.' . $ImageNo1->extension();
            $data['image_one'] = 'public/media/post/' . $image_one_name;
        }


        if ($request->hasfile('image_two')) {
            unlink('public/media/post/' . $old_two);
            $ImageNo2 = $request->file('image_two');
            $image_two_name = 'Img2' . time() . '.' . $ImageNo2->extension();
            $data['image_two'] = 'public/media/post/' . $image_two_name;
        }

        $update = DB::table('posts')->where('id', $id)->update($data);
        if ($update) {

            return Redirect()->route('admin_project.post')->with('message', "Successfully post Updated");
        } else {

            return Redirect()->route('admin_project.post')->with('message', "Nothing To Updated");
        }
    }
}
