<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Slider;
use App\Category;

class SliderController extends Controller
{
    protected $my_data;

    public function __construct(){
        $this->my_data['activeMenu'] = 'slider';
        $this->my_data['sliders'] = Slider::all();
        $this->my_data['categories'] = Category::all();
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $this->my_data['sliderOrder'] = Slider::max('imgOrder');
        return view('admin.includes.slider.index',$this->my_data);
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
        $imageName = '';
        if($request->file('sliderImage')){
            $imageName = time().$request->file('sliderImage')->getClientOriginalName();
            $this->uploadImage('slider',$imageName,$request->file('sliderImage'));
        }

        Slider::create([
            'imgName'=>$imageName,
            'imgDescription'=>$request->get('imgDescription'),
            'imgOrder'=>$request->get('imgOrder'),
            'imgStatus'=>0
        ]);

        return redirect()->route('slider.index');
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
        $this->my_data['slider'] = Slider::whereId($id)->first();

        return view('admin.includes.slider.edit',$this->my_data);
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
        $slider = Slider::whereId($id)->first();

        $imageName = '';
        if($request->file('sliderImage')){
            $imageName = time().$request->file('sliderImage')->getClientOriginalName();
            $this->uploadImage('slider',$imageName,$request->file('sliderImage'));
            $this->removeFiles('slider',$slider->imgName);
        }else{
            $imageName = $slider->imgName;
        }

        $slider->fill([
            'imgName'=>$imageName,
            'imgDescription'=>$request->get('imgDescription'),
            'imgOrder'=>$request->get('imgOrder'),
            'imgStatus'=>0
        ])->save();

        return redirect()->route('slider.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $slider = Slider::whereId($id)->first();

        $this->removeFiles('slider',$slider->imgName);

        $slider->delete();

        return redirect()->route('slider.index');
    }
}
