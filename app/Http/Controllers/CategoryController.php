<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Category;
use App\Post;

class CategoryController extends Controller
{
    protected $my_data;

    public function __construct(){
        $this->my_data['activeMenu'] = 'category';
        $this->my_data['categories'] = Category::all();
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.includes.category.index',$this->my_data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Category::create([
            'title'=>$request->get('categoryTitle'),
            'status'=>0
        ]);

        return redirect()->route('category.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $this->my_data['category'] = Category::whereId($id)->first();
        return view('admin.includes.category.edit',$this->my_data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $category = Category::whereId($id)->first();

        $category->fill([
            'title' => $request->get('categoryTitle')
        ])->save();

        return redirect()->route('category.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $category = Category::whereId($id)->first();
        $posts = Post::whereCategoryId($id)->get();

        foreach($posts as $post){
            $post->delete();
        }
        
        $category->delete();

        return redirect()->route('category.index');
    }
}
