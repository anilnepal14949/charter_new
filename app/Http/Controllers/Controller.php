<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

use Intervention\Image\Facades\Image as Image;

abstract class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function uploadImage($pathName, $fileName, $imageFile, $oldFileName = null){
        $this->makeFolders($pathName);
        Image::make($imageFile->getRealPath())->heighten(100)->save('public/images/'.$pathName.'/thumbnail/thumbgeo'.$fileName);
        Image::make($imageFile->getRealPath())->save('public/images/'.$pathName.'/original/origeo'.$fileName);
        Image::make($imageFile->getRealPath())->widen(400)->save('public/images/'.$pathName.'/'.$fileName);

        if($oldFileName != null){
            $this->removeFiles($pathName, $oldFileName);
        }
        return true;
    }

    // remove files
    public function removeFiles($pathName, $fileName){

        if(file_exists('public/images/'.$pathName.'/'.$fileName)){
            unlink('public/images/'.$pathName.'/'.$fileName);
        }
        if(file_exists('public/images/'.$pathName.'/original/origeo'.$fileName)){
            unlink('public/images/'.$pathName.'/original/origeo'.$fileName);
        }
        if(file_exists('public/images/'.$pathName.'/thumbnail/thumbgeo'.$fileName)){
            unlink('public/images/'.$pathName.'/thumbnail/thumbgeo'.$fileName);
        }
        return true;
    }

    // make folders
    public function makeFolders($pathName){
        if(!is_dir('public/images/'.$pathName)) mkdir('public/images/'.$pathName);
        if(!is_dir('public/images/'.$pathName.'/thumbnail')) mkdir('public/images/'.$pathName.'/thumbnail');
        if(!is_dir('public/images/'.$pathName.'/original')) mkdir('public/images/'.$pathName.'/original');
        return true;
    }
}
