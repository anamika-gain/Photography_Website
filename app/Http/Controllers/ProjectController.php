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
        $category=Category::all();
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
            $tmpValue['project_time'] = date_format(date_create($tmpProject->project_time),"dS,F,Y");
            //

            
            $tmpValue['status'] = $tmpProject->status;


            array_push($project, $tmpValue);
        }

        return view('admin.project.project', compact('project','category'));
    }
    public function create()
    {   $post=DB::table('posts')->get();
        $category = DB::table('categories')->get();
        return view('admin.project.create', compact('category','post'));
    }

    public function storeProject(Request $request)
    {

        dd($request);
        $validatedData = $request->validate([
            'project_name' => 'required|unique:projects|max:55',
        ]);


        $data = $request->except('_token');

        $project = new project();
        $project->project_name = $data['project_name'];
        $project->category_id=$data['category_id'];
        $project->tag_line = $data['tag_line'];
        $project->rolling_text = $data['rolling_text'];
        $project->project_info = $data['project_info'];
        $project->project_location = $data['project_location'];
        $project->project_time = $data['project_time'];
        $project->status = $data['status'];
        // $image = $request->file('image');
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
        DB::table('projects')->where('id', $id)->delete();
        $notification = array(
            'messege' => 'project Successfully Deleted',
            'alert-type' => 'success'
        );
        return Redirect()->back()->with($notification);
    }

    public function Editproject($id)
    {
        $project = DB::table('projects')->where('id', $id)->first();

       $category=Category::all();
        $categoryName = Category::where("id","=",$project->category_id)->first();


        return view('admin.project.edit_project', compact('project','categoryName','category'));
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
}

