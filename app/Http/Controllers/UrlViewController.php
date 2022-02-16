<?php

namespace App\Http\Controllers;
use App\Models\ShortUrl;
use Illuminate\Http\Request;
use DB;

class UrlViewController extends Controller
{
	 public function index()
  {

   
$count = ShortUrl::all();
return view('dashboard', compact('count'));
   //   $count = ShortUrl::count();
   
   // return view('dashboard',compact($count));
    
  
  }
  public function view()
  {

    $alu = ShortUrl::orderBy('id', 'DESC')->get();


    return view('urlshortener',compact('alu'));
    
  
  }
}
