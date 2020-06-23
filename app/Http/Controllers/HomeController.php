<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

use App\ImpInfo;
use App\Category;
use App\Post;
use App\Slider;

class HomeController extends Controller
{
    protected $my_data;
    public function __construct(){
        $this->my_data['activeMenu'] = "";
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $this->my_data['infos'] = ImpInfo::all();
        $this->my_data['categories'] = Category::all();
        $this->my_data['sliders'] = Slider::all();
        $this->my_data['postsId'] = 0;

        return view('admin.dashboard',$this->my_data);
    }

    public function goToHome(Request $request){
        if($request->ajax()){
            $id = $request->get('selector');
            $category = Category::whereId($id)->first();
            $posts = Post::whereCategoryId($id)->get();

            if($category){
                return $id;
            }else{
                return 0;
            }
        }
    }

    public function showPosts($id){

        // dd($id);

        $this->my_data['category'] = $category = Category::whereId($id)->first();

        if($category){
            $this->my_data['posts'] = Post::whereCategoryId($id)->get();
        }
        $this->my_data['infos'] = ImpInfo::all();
        $this->my_data['postsId'] = 0;

        if($category){
            return view('admin.dashboard_new',$this->my_data);
        }else{
            return view('admin.dashboard_error',$this->my_data);
        }
    }

    public function showPostsContent($id,$cid){
        $this->my_data['post'] = $post = Post::whereCategoryId($cid)->whereSubId($id)->first();
        $this->my_data['category_id'] = $cid;
        if($post){
            $this->my_data['category'] = Category::whereId($post->category_id)->first();
            $this->my_data['posts'] = Post::whereCategoryId($post->category_id)->get();
        }
        $this->my_data['infos'] = ImpInfo::all();

        $this->my_data['postsId'] = $id;

        if($post){
            return view('admin.dashboard_new',$this->my_data);
        }
        else{
            return view('admin.dashboard_error',$this->my_data);
        }
    }

    public function printt(){
        $this->my_data['activeMenu'] = "print";
        $this->my_data['categories'] = Category::all();
        $this->my_data['postsId'] = 0;
        $this->my_data['infos'] = ImpInfo::all();

        return view('admin.print',$this->my_data);
    }

    public function printAllTitles(){
        $this->my_data['categories'] = Category::all();
        return view('admin.print.print_all_titles',$this->my_data);
    }

    public function printAllPosts(){
      $this->my_data['categories'] = Category::all();
      return view('admin.print.print_all_posts',$this->my_data);
    }
}
