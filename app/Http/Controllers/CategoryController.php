<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use Image;

use Illuminate\Support\Facades\DB;

class CategoryController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function category()
    {
        $category = Category::all();
        return view('admin.category.category', compact('category'));
    }
    public function storecategory(Request $request)
    {

        $validatedData = $request->validate([
            'category_name' => 'required|unique:categories|max:55',
        ]);
        $data = $request->except('_token');
        $category = new Category();
        $category->category_name = $data['category_name'];
        $category->tag_line = $data['tag_line'];
        $category->show_in_slider = $data['show_in_slider'];
        $category->status = $data['status'];
        // $image = $request->file('image');
        $main_image = $request->file('main_image');
        $imageName = $main_image->getClientOriginalName();
        $directory = 'public/media/category/';
        $imageUrl = $directory . $imageName;
        Image::make($main_image)->save($imageUrl);
        $category->main_image = $imageUrl;
        $category->save();
        $notification = array(
            'messege' => 'Category Insert Done',
            'alert-type' => 'success'
        );
        return Redirect()->back()->with($notification);
    }

    public function DeleteCategory($id)
    {
        DB::table('categories')->where('id', $id)->delete();
        DB::table('projects')->where('category_id', $id)->delete();
        DB::table('posts')->where('category_id', $id)->delete();
        $notification = array(
            'messege' => 'Category Successfully Deleted',
            'alert-type' => 'success'
        );
        return Redirect()->back()->with($notification);
    }

    public function EditCategory($id)
    {
        $category = DB::table('categories')->where('id', $id)->first();
        return view('admin.category.edit_category', compact('category'));
    }

    public function UpdateCategory(Request $request, $id)
    {
        $validatedData = $request->validate([
            'category_name' => 'required|max:55',
        ]);
        $data = array();
        $data['category_name'] = $request->category_name;
        $data['tag_line'] = $request->tag_line;
        $data['show_in_slider'] = $request->show_in_slider;
        $data['status'] = $request->status;
        $main_image = $request->file('main_image');
        $image_one_name = hexdec(uniqid()) . '.' . $main_image->getClientOriginalExtension();
        Image::make($main_image)->save('public/media/category/' . $image_one_name);
        $data['main_image'] = 'public/media/category/' . $image_one_name;
        $update = DB::table('categories')->where('id', $id)->update($data);
        if ($update) {
            $notification = array(
                'messege' => 'Category Successfully Updated',
                'alert-type' => 'success'
            );
            return Redirect()->route('categories')->with($notification);
        } else {
            $notification = array(
                'messege' => 'Nothing to update',
                'alert-type' => 'success'
            );
            return Redirect()->route('categories')->with($notification);
        }
    }
    public function projectByCategory($id)
    {

        $category = DB::table('categories')->where('id', $id)->first();
        $projects = DB::table('projects')->where('category_id', "=", $id)
            ->where('projects.status', 1)
            ->orderBy('id', 'asc')
            ->get();
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
        return view('admin.project.project2', compact('project', 'category'));
    }
    public function Editproject($id)
    {
        $project = DB::table('projects')->where('id', $id)->first();

        $category = Category::all();
        $categoryName = Category::where("id", "=", $project->category_id)->first();
        return view('admin.project.edit_by_category', compact('project', 'categoryName', 'category'));
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
            return Redirect()->route('admin_project.post')->with($notification);
        } else {
            $notification = array(
                'messege' => 'Nothing to update',
                'alert-type' => 'success'
            );
            return Redirect()->route('admin_project.post')->with($notification);
        }
    }
}
