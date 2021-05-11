<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Hairtype;

class HairtypeController extends Controller
{
    public function home () {
        $hairtypes = Hairtype::get();

        return view("hairtype", [
            
            'hairtypeValues'=> $hairtypes
        
        ]);
    }

       public  function save(REQUEST $request) {
    
             $hairtype= new HairType();
             $hairtype->name= $request->name;
             $hairtype->size= $request->size;
             $hairtype->save();

             return redirect()->back();
       }
       public function delete($id){

            $hairtype= Hairtype::find($id);
            $hairtype->delete();

            return redirect()->back();

       }
       
       public function update ($id){

         $hairtype= Hairtype::find($id);
         $hairtypes= Hairtype::get();
         return view('hairtype',[
             'updatingValues' => $hairtype,
             'hairtypeValues' => $hairtypes

         ]);

       }
       public function saveUpdate(REQUEST $request,$id){
             $hairtype= Hairtype::find($id);

             $hairtype->name=$request->name;
             $hairtype->size=$request->size;
             
             $hairtype->save();

             return view('/hairtype');

       }
}
