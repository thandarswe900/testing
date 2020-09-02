<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Item;

class PageController extends Controller
{
     public function mainfun($value='')
    {
   	 
     $items=Item::take(6)->orderBy('id','DESC')->get();
     //dd($items);
     return view('frontend.main',compact('items'));

   }
   public function brandfun($value='')
    {
   	 return view('frontend.brand');
   }
    public function itemdetailfun($value='')
    {
   	 return view('frontend.itemdetail');
   }
   public function loginfun($value='')
    {
   	 return view('frontend.login');
   }
   public function promotionfun($value='')
    {
   	 return view('frontend.promotion');
   }
    public function registerfun($value='')
    {
   	 return view('frontend.register');
   }
    public function shoppingcartfun($value='')
    {
   	 return view('frontend.shoppingcart');
   }
   public function subcategoryfun($value='')
    {
   	 return view('frontend.subcategory');
   }
}
