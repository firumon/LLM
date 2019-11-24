<?php

namespace Firumon\LLM\Controller;

use Firumon\LLM\Model\Hub;
use Firumon\LLM\Model\Image;
use Firumon\LLM\Model\User;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Storage;
use Milestone\Appframe\Model\ResourceFormField;

class ImageController extends Controller
{

    public function ImageableList(){
        return ['options' => User::all()->mapWithKeys(function($hub){ return [$hub->id => $hub->name]; })->toArray(),'latest' => 0];
    }

    public function getTypeList($form,$field,$data){
        $Class = implode("\\",["Firumon\LLM\Model",$data['type']]);
        $options = $Class::all()->pluck('name','id')->toArray();
        $option_id = ResourceFormField::find($field)->Options->id;
        $this->bag->store('FieldOption',$option_id,$options);
    }

    public function image($type,$type_id,$num = 1){
        $noimage = public_path('lmi\\images\\NO_IMG_600x600.png');
        $image = Image::where(compact('type','type_id'))->first();
        if(!$image) return response()->file($noimage);
        $img = Arr::get($image,'__upload_file_details.image' . $num,null);
        if(!$img) return response()->file($noimage);
        return response()->file(Storage::disk($img->disk)->getDriver()->getAdapter()->applyPathPrefix($img->file));
    }

}
