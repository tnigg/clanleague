<?php 
namespace App\Classes;

use App\Models\Image;

class FileManager {
    
     // File UPLOAD
     public static function uploadFile($request, $model, $path) {
        
        $path = 'public/' . $path; 

        if(request()->hasFile('filename')) {
           $id = random_int(1000000000, 9999999999);
           $name = request()->file('filename')->getClientOriginalName();
           $file = request()->file('filename')->storeAs($path, $id . $name);          
           Image::create([
               'imageable_id' => $model->id,
               'imageable_type' => get_class($model),
               'filename' => $file,
           ]);
           }        
       }
}
