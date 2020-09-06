<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Item;
use App\Brand;
use App\Subcategory;
use App\Category;
class PageController extends Controller
{
     public function mainfun($value='')
    {
   	 
     $items=Item::all();
     //dd($items);
     $brands=Brand::all();
     return view('frontend.main',compact('items','brands'));

   }
   public function brandfun($id)
    {
      $brand=Brand::find($id);
   	 return view('frontend.brand',compact('brand'));
   }
    public function itemdetailfun($id)
    {
      $items=Item::find($id);
   	 return view('frontend.itemdetail',compact('items'));
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
   public function subcategoryfun($id)
    {
      $subcategory=Subcategory::find($id);
      $subcategories=Subcategory::all();
   	 return view('frontend.subcategory',compact('subcategories','subcategory'));
   }
}
