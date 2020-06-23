<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Post;
use App\Category;

use DateTime;

class PostsController extends Controller
{
    protected $my_data;

    public function __construct(){
        $this->my_data['categories'] = Category::all();
    }

    public function index($cid){
        $this->my_data['category'] = Category::whereId($cid)->first();
        $this->my_data['posts'] = Post::whereCategoryId($cid)->get();
        $this->my_data['activeMenu'] = $cid;

        return view('admin.includes.posts.index',$this->my_data);
    }

    public function store(Request $request){
        $dt = new DateTime();

        $postC = Post::whereCategoryId($request->get('category_id'))->first();

        if($postC){
            $sub_id = (Post::max('sub_id')) + 1;
        }else{
            $sub_id = 1;
        }

        Post::create([
            'title'=>$request->get('title'),
            'description'=>$request->get('description'),
            'category_id'=>$request->get('category_id'),
            'sub_id'=>$sub_id,
            'duration'=>$request->get('duration'),
            'cost'=>$request->get('cost'),
            'responsible_person'=>$request->get('responsible_person'),
            'complain_officer'=>$request->get('complain_officer'),
            'compensatory_provision'=>$request->get('compensatory_provision'),
            'other'=>$request->get('other'),
            'remarks'=>$request->get('remarks'),
            'title'=>$request->get('title'),
            'created_at'=>$dt->format('Y-m-d H:i:s')
        ]);

        return redirect()->route('posts.new',$request->get('category_id'));
    }

    public function edit($id){
        $this->my_data['post']= $post = Post::whereId($id)->first();
        $this->my_data['posts'] = Post::whereCategoryId($post->category_id)->get();
        $this->my_data['activeMenu'] = $post->category_id;

        return view('admin.includes.posts.edit',$this->my_data);
    }

    public function update(Request $request, $id){
        $post = Post::whereId($id)->first();

        $post->fill([
            'title'=>$request->get('title'),
            'description'=>$request->get('description'),
            'category_id'=>$request->get('category_id'),
            'sub_id'=>$post->sub_id,
            'duration'=>$request->get('duration'),
            'cost'=>$request->get('cost'),
            'responsible_person'=>$request->get('responsible_person'),
            'complain_officer'=>$request->get('complain_officer'),
            'compensatory_provision'=>$request->get('compensatory_provision'),
            'other'=>$request->get('other'),
            'remarks'=>$request->get('remarks'),
            'title'=>$request->get('title')
        ])->save();

        return redirect()->route('posts.new',$request->get('category_id'));
    }

    public function destroy($id){
        $post = Post::whereId($id)->first();

        $cid = $post->category_id;

        $post->delete();

        return redirect()->route('posts.new',$cid);
    }
}
