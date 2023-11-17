<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Str;

class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;





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
}
