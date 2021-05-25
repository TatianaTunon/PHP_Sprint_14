<?php

namespace App\Http\Controllers;

use App\Models\shop;

use Illuminate\Http\Request;
use App\Http\Requests\shopsRequest;
use Throwable;

class shopController extends Controller
{
    public function index(Request $request) {
        $shops = shop::all(); 
 
        //Modificación para el boton búsqueda shops
        $name = $request->get('buscar');
        $shops= shop::where('name','like',"%$name%")->paginate();
        return view('shops/index', compact ('shops'));
     }
 
     public function show (Request $request, $id)
     {
        $shops = shop::findOrFail ($id);
   
        return view ('shops/show')
                 ->with('shops', $shops)
                 ->with('quadres', $shops->quadres);
     }
 
     public function create() { 
         $shops= shop::all(); 
         return view('shops/create', compact('shops'));
      }
 
      public function store(shopsRequest $request) { 
         try {
         $shops = shop::create($request->all());
 
         } catch (Throwable $e) {
             report($e);  
             
         }
         return redirect()->route('shops.index');
      }
 
      public function edit(shop $shop) { 
       return view('shops/edit', compact('shop'));
   }
 
    public function update(Request $request, shop $shop) { 
       $request->validate([ 
           'name' => 'required | max:255',
           'capacitat' => 'required | max:255',
       ]);
       $shop->update($request->all());
       return redirect()->route('shops.index');
   }
 
    public function destroy(shop $shop) {
       $shop->delete();
       return redirect()->route('shops.index');
      
   }
}
