<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Merchandise;

class MerchController extends Controller
{
    public function GetAllMerch(Request $request){
        $merch = Merchandise::orderBy('created_at', 'desc')->get();
        return view('page.merchandise')->with('merch', $merch);
    }

    public function GetLatestMerch(Request $requset){
        $merch = Merchandise::orderBy('created_at', 'desc')->limit(3)->get();
        return view('page.home')->with('merch', $merch);
    }

    public function AddMerch(Request $request){
        $merch = new Merchandise;
        $name = $request->input('name');
        $merch->name = $request->input('name');
        $merch->description = $request->input('description');
        $merch->price = $request->input('price');
        $merch_img = $request->file('image');
        $imgName = $name . $merch_img->getClientOriginalExtension();
        $merch_img->move("upload/merchandise", $imgName);
        $merch->img_path = "upload/merchandise" . $imgName;
        $merch->save();

    }

    public function EditMerch(Request $request){
        $id = $request->input('id');
        $merch = Merchandise::find($id);
        $merch->name = $request->input('name');
        $merch->description = $request->input('description');
        $merch->price = $request->input('price');
        if($request->hasFile('image')){
            $merch_img = $request->file('image');
            $imgName = $name . $merch_img->getClientOriginalExtension();
            $merch_img->move("upload/merchandise", $imgName);
            $merch->img_path = "upload/merchandise" . $imgName;
        }
        $merch->save();

    }

    public function DeleteMerch(Request $request, $id){
        $merch = Merchandise::find($id);
        $merch->delete();
    }
}
