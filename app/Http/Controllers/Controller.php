<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Str;

class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;


    public $data = array();


    public function __construct()
    {
        $this->data['categories'] = Category::query()->select('id', 'title')->get();
    }


    protected function saveImg($file, $folder, $fileDelete = false)
    {
        if($fileDelete){ $this->deleteImg($fileDelete, $folder); }
        $filename = Str::random(40) . '.' . $file->getClientOriginalExtension();
        $file->move(public_path('images/'.$folder), $filename);
        return $filename;
    }

    protected function deleteImg($file, $folder)
    {
        $fileForDelete = public_path('images/' . $folder . '/' . $file);
        if (File::exists($fileForDelete)) { File::delete($fileForDelete); }
    }




    ///////////////////////////////////////////////////////////////////////////////////////////////////////////////////
    protected function save($request, $model, $folder = null)
    {
        if(isset($request['active'])){ $model->active = $request['active']; }
        if(isset($request['title'])){ $model->title = $request['title']; }
        if(isset($request['text'])){ $model->text = $request['text']; }
        if(isset($request['price'])){ $model->price = $request['price']; }
        if(isset($request['description'])){ $model->description = $request['description']; }
        if(isset($request['visibility'])){ $model->visibility = $request['visibility']; }
        if(isset($request['rating'])){ $model->rating = $request['rating']; }


        if(isset($request['phone'])){ $model->phone = $request['phone']; }
        if(isset($request['phone_1'])){ $model->phone_1 = $request['phone_1']; }
        if(isset($request['phone_2'])){ $model->phone_2 = $request['phone_2']; }
        if(isset($request['email'])){ $model->email = $request['email']; }
        if(isset($request['email_1'])){ $model->email_1 = $request['email_1']; }
        if(isset($request['email_2'])){ $model->email_2 = $request['email_2']; }


        if(isset($request['banner_id'])){
            $model->banner_id = $request['banner_id'];
            if($model->banner_id == 'NOT') {$model->banner_id = null;}
        }
        if(isset($request['category_id'])){
            $model->category_id = $request['category_id'];
            if($model->category_id == 'NOT') {$model->category_id = null;}
        }

        if(isset($request['image'])){$model->image = $folder.'/'.$this->saveFile($request['image'], $folder, $model->image);}
        if(isset($request['image_2'])){$model->image_2 = $folder.'/'.$this->saveFile($request['image_2'], $folder, $model->image_2);}
        if(isset($request['image_v'])){$model->image_v = $folder.'/'.$this->saveFile($request['image_v'], $folder, $model->image_v);}


        $model->save();
    }


    protected function saveFile($file, $folder, $fileDelete = false)
    {
        if($fileDelete){ $this->deleteFile($fileDelete); }
        $filename = Str::random(40) . '.' . $file->getClientOriginalExtension();
        $file->move(public_path($folder), $filename);
        return $filename;
    }

    protected function deleteFile($file)
    {
        $fileForDelete = public_path($file);
        if (File::exists($fileForDelete)) { File::delete($fileForDelete); }
    }
    ///////////////////////////////////////////////////////////////////////////////////////////////////////////////////
}
