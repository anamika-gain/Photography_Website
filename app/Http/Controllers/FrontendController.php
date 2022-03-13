<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function index()
    {
        return view('pages.category');
    }
    public function contact()
    {
        return view('pages.contact');
    }
    public function projectByCategory($id)
    {   $category=DB::table('categories')->where('id',$id)->first();
        $projects=DB::table('projects')->where('category_id',"=",$id)
        ->where('projects.status',1)
        ->orderBy('id','asc')
        ->get();
        return view('pages.category',compact('projects','category'));
    }
    public function postByProject($id)
    {   $project=DB::table('projects')->where('id',$id)->first();
        $posts=DB::table('posts')->where('project_id',"=",$id)
        ->where('posts.status',1)
        ->orderBy('id','asc')
        ->get();
        return view('pages.project',compact('project','posts'));
    }
}
