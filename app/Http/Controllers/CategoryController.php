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

            $update=DB::table('categories')->where('id', $id)->update($data);
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
}
