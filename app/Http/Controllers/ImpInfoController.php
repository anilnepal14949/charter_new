<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\ImpInfo;
use App\Category;
use DateTime;

class ImpInfoController extends Controller
{
    protected $my_data;

    public function __construct(){
        $this->my_data['activeMenu'] = 'info';
        $this->my_data['allInfos'] = ImpInfo::where('infoStatus',0)->orderBy('infoOrder','desc')->get();
        $this->my_data['categories'] = Category::all();
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.includes.info.index',$this->my_data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $infoContent = $request->get('infoContent');
        $infoOrder = ImpInfo::max('infoOrder');

        $dt = new DateTime();

        ImpInfo::create([
            'infoDate'=>$dt->format('Y-m-d'),
            'infoTime'=>$dt->format('H:i:s'),
            'infoContent'=>$infoContent,
            'infoOrder'=>$infoOrder+1,
            'infoStatus'=> 0
        ]);

        return redirect()->route('info.index');
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
        $this->my_data['info'] = ImpInfo::whereId($id)->first();
        return view('admin.includes.info.edit',$this->my_data);
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
        $info = ImpInfo::whereId($id)->first();

        $info->fill([
            'infoContent' => $request->get('infoContent')
        ])->save();

        return redirect()->route('info.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $info = ImpInfo::whereId($id)->first();

        $info->delete();

        return redirect()->route('info.index');
    }
}
