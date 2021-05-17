<?php

namespace App\Http\Controllers;

use App\Models\quadre;
use App\Models\shop;

use Illuminate\Http\Request;
use App\Http\Requests\quadresRequest;
use Throwable;

class quadreController extends Controller
{
    public function index(Request $request) {
        $quadres = quadre::all();   
        return view('quadres/index', compact ('quadres'));
     }
 
     public function create() { 
         //$quadres= quadre::all(); 
         $shops = shop::all(); 
         return view('quadres/create', compact('shops'));
      }
 
      public function store(quadresRequest $request) { 
        try {
            $quadres = quadre::create($request->all());
    
        } catch (Throwable $e) {
            report($e);
            }
        return redirect()->route('quadres.index');
        }    
      
 
      public function edit(quadre $quadre) { 
        $shops = shop::all(); 
       return view('quadres/edit', compact('quadre', 'shops'));
   }
 
    public function update(Request $request, quadre $quadre) { 
       $request->validate([ 
           'author_name' => 'required | max:255',
           'title' => 'required | max:255',
           'price' => 'required | max:255',
       ]);
       $quadre->update($request->all());
       return redirect()->route('quadres.index');
   }
 
    public function destroy(quadre $quadre) {
       $quadre->delete();
       return redirect()->route('quadres.index');
      
   }
}
