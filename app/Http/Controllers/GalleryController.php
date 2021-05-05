<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GalleryController extends Controller
{
    public function index(){
        return view('gallery.index');
    }
    
    public function class(){
        return view('gallery.class');
    }
    public function assembly(){
        return view('gallery.assembly');
    }
    public function tour(){
        return view('gallery.tour');
    }
    public function ifter(){
        return view('gallery.ifter');
    }
    public function therapy(){
        return view('gallery.therapy');
    }
    public function play(){
        return view('gallery.play');
    }
    public function prize(){
        return view('gallery.prize');
    }
    public function outing(){
        return view('gallery.outing');
    }
    public function sport(){
        return view('gallery.sport');
    }
}
