<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Saloon;

class SaloonController extends Controller {
    public function allSaloons () {
        $saloons = Saloon::get();
        return view('saloons', [
            'saloons' => $saloons
        ]);
    }

    public function addNew (){
        return view('saloon');
    }

    public function saveNew (REQUEST $request) {
        $salon = new Saloon();
        $salon->name = $request->name;
        $salon->location = $request->location;
        $salon->account_number = $request->account_number;
        $salon->services = $request->services;
        $salon->save();
        return redirect('saloons');
    }

    public function update ($id) {
        $salon = Saloon::find($id);
        return view('saloon', [
            'salon' => $salon,
        ]);
    }

    public function saveUpdate (REQUEST $request, $id) {
        $salon = Saloon::find($id);
        $salon->name = $request->name;
        $salon->location=$request->location;
        $salon->services=$request->services;
        $salon->save();
        return redirect('/saloons');
    }

    public function delete ($id) {
        $salon = Saloon::find($id);
        $salon->delete();
        return redirect('/saloons');
    }
}
