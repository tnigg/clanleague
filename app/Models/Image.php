<?php

namespace App\Models;

use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Image extends Model
{
    use HasFactory;
    protected $fillable = ['imageable_id', 'imageable_type', 'filename'];

    public function imageable() {
        return $this->morphTo();
    }

    // IMAGE UPLOAD
    public static function uploadImage($request, $model) {
        if($model instanceOf User) {
           $path = 'public/avatars';      
        }
        if($model instanceOf Team) {
           $path = 'public/logos';
        }
   
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
