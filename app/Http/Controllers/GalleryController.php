<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Gallery;
use Symfony\Component\Console\Input\Input;

class GalleryController extends Controller
{
    public function addPicture(Request $request)
    {
        $Gallery = new Gallery;
        $image_title = $request->input('image_title');
        $Gallery->image_title = $request->input('image_title');
        $image = $request->file('image');
        $image_name = $image_title . "." . time() . '.' . $image->getClientOriginalExtension();
        $path = $request->file('image')->storeAs('', $image_name);
        $Gallery->image_path = "" . $image_name;
        $Gallery->save();
    }
    public function editPicture(Request $request)
    {
        $id = $request->input('id');
        $Gallery = Gallery::find($id);
        $image_title = $request->input('image_title');
        $Gallery->image_title = $request->input('image_title');
        $image = $request->file('image');
        $image_name = $image_title . "." . time() . '.' . $image->getClientOriginalExtension();
        $path = $request->file('image')->storeAs('', $image_title);
        $Gallery->image_path = "" . $image_name;
        $Gallery->save();
    }
    public function deleteGallery(Request $request, $id)
    {
        $Gallery = Gallery::find($id);
        $Gallery->delete();
        return redirect('')->with('');
    }
    public function viewAllImage(Request $request)
    {
        $Gallery = Gallery::orderBy('created_at', 'desc')->paginate(9);
        return view('')->with('', $Gallery);
    }
}