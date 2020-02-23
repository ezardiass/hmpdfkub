<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Proker;

class ProkerController extends Controller
{
    public function GetProkerByBidangId(Request $request, $bidang_id) {
        $proker = Proker::where('bidang_id', '=', $bidang_id)->get();
        return view('page.bidang-kerja')->with('proker', $proker);
    }

    public function AddProker(Request $request){
        $proker = new Proker;
        $proker_title = $request->input('proker_title');
        $proker->proker_title = $request->input('proker_title');
        $proker->proker_description = $request->input('proker_description');
        $proker->bidang_id = $request->input('bidang_id');
        $proker->save();
    }

    public function EditProker(Request $request){
        $id = $request->input('id');
        $proker = Proker::find($id);
        $proker->proker_title = $request->input('proker_title');
        $proker->proker_description = $request->input('proker_description');
        $proker->bidang_id = $request->input('bidang_id');
        $proker->save();
    }

    public function DeleteProker(Request $request, $id) {
        $proker = Proker::find($id);
        $proker->delete();
    }
}
