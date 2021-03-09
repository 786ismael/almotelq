<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class LandingPage extends Model
{
    protected $table = 'landing_pages';
    
    public function getImageAttribute($image){
        if($image){
            return asset('public/landing/images/'.$image);
        }
        return asset('public/landing/images/image-not-available.png');
    }

    public function Images(){
        $imageList = \DB::table('landing_page_images')->where('section','home_top_slider')->get();
        $data = array();
        if($imageList->toarray()){
            foreach($imageList as $key => $value){
                 array_push($data,[
                     'id'    => $value->id,
                     'image' => asset('public/landing/images/'.$value->image)
                 ]);
            }
            return $data;
        }
        return array();
    }

}

