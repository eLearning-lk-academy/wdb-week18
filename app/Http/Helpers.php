<?php 
Namespace App\Helpers;

use Illuminate\Support\Facades\Storage;

if(!function_exists('imageCheck')){
    function imageCheck($image){
        //check if valid url
        if(str_contains($image, 'http')){
            return $image;
        //check if image exists in storage
        }elseif(Storage::disk('public')->exists($image)){
            return assets('storage/'.$image);
        }else{
            return assets('images/placeholder.jpg');
        }
    }
}