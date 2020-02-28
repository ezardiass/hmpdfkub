<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Event;
use App\BidangKerja;
use App\Merchandises;

class HomeController extends Controller
{
    public function GetHomeView(){
        $event = Event::where('isDone', false)->orderBy('created_at', 'desc')->limit(6)->get();
        $merch = Merchandises::orderBy('created_at', 'desc')->limit(6)->get();
        $bidangKerja = BidangKerja::all();
        return view('page.home')
            ->with('event', $event)
            ->with('merch', $merch)
            ->with('bidangKerja', $bidangKerja);
    }
}
