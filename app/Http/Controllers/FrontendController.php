<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;

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
    {
        DB::table('categories')->where('id', "=", $id)->increment('views');
        $category = DB::table('categories')->where('id', $id)->first();
        $projects = DB::table('projects')->where('category_id', "=", $id)
            ->where('projects.status', 1)
            ->orderBy('id', 'asc')
            ->get();
        $last = DB::table('categories')->latest('id')->first();

        if ($id == 5) {
            $next_id = 1;

        }
         else {

            $next_id = $id + 1;
        }
      // dd($next_id );
        $project_count =DB::table('projects')->where('category_id',"=",$id)
        ->count();
        $next_category = DB::table('categories')->where('id', "=", $next_id)->first();
        if ($project_count == 1) {

            return view('pages.postbycategory', compact('projects', 'category', 'next_category'));
        } else {
            return view('pages.category', compact('projects', 'category', 'next_category'));
        }
    }
    public function postByProject($id)
    {
        DB::table('projects')->where('id', "=", $id)->increment('views');
        $project = DB::table('projects')->where('id', $id)->first();
        $posts = DB::table('posts')->where('project_id', "=", $id)
            ->where('posts.status', 1)
            ->orderBy('sequence', 'asc')
            ->get();
        $last = DB::table('projects')->latest('id')->first();

        $next_project = DB::table('projects')->where('id', '>', $id)->orderBy('id', 'ASC')->first();

        if ($id == $last->id) {
            $next_project = DB::table('projects')->orderBy('id', 'ASC')->first();
        }

        return view('pages.project', compact('project', 'posts', 'next_project'));
    }
}
