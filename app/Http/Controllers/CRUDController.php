<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Session;

class CRUDController extends Controller
{
    public function insertData(Request $request)
    {
        $data = $request->except('_token');
         $tbl = decrypt($data['tbl']);
        unset($data['tbl']);
        $data['created_at'] = date('Y-m-d H:m:s');

        if($request->has('social')){
            $data['social'] = implode(',',$request->social);
        }


        if($request->has('categories_id')){
            $data['categories_id'] = implode(',',$request->categories_id);
        }

        if($request->has('subcategories_id')){
            $data['subcategories_id'] = implode(',',$request->subcategories_id);
        }
        if($request->has('reviewers')){
            $data['reviewers'] = implode(',',$request->reviewers);
        }

        if($request->has('tags')){
            $data['tags'] = implode(',',$request->tags);
        }


        if($request->has('image')){
            $data['image'] = $this->uploadImage($tbl, $data['image']);
        }

        if($request->has('footer_image')){
            $data['footer_image'] = $this->uploadImage($tbl, $data['footer_image']);
        }

        DB::table($tbl)->insert($data);
        if($tbl ==  'resource_cats'){
            $request->session()->flash('message-2', "Category created successfully");
        }else{
            $request->session()->flash('message', "Data inserted successfully");
        }
        return redirect()->back();
    }

    public function updateData(Request $request, $id)
    {
        $data = $request->except('_token');
         $tbl = decrypt($data['tbl']);
        unset($data['tbl']);
        $data['updated_at'] = date('Y-m-d H:m:s');

        if($request->has('social')){
            $data['social'] = implode(',',$request->social);
        }

        if($request->has('categories_id')){
            $data['categories_id'] = implode(',',$request->categories_id);
        }

        if($request->has('subcategories_id')){
            $data['subcategories_id'] = implode(',',$request->subcategories_id);
        }
        if($request->has('reviewers')){
            $data['reviewers'] = implode(',',$request->reviewers);
        }

        if($request->has('tags')){
            $data['tags'] = implode(',',$request->tags);
        }

        if($request->has('image')){
            $data['image'] = $this->uploadImage($tbl, $data['image']);
        }

        if($request->has('footer_image')){
            $data['footer_image'] = $this->uploadImage($tbl, $data['footer_image']);
        }

        DB::table($tbl)->where(key($data), reset($data))->update($data);
        $request->session()->flash('message', "Data updated successfully");
        return redirect()->back();
    }

    public function uploadImage($location, $fileName)  {
       $name = date('ymdgis').$fileName->getClientOriginalName();
        $fileName->move(public_path().'/'.$location, $name);
        return $name;
    }
}
