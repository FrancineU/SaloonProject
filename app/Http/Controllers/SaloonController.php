<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Saloon;

class SaloonController extends Controller {
    public function allSaloons () {
        $saloons = Saloon::get();

        return view('saloons', [
            'saloonValues' => $saloons
        ]);
    }

    public function addNew (){
        return view('addNewSaloon');
    }

    public function saveNew (REQUEST $request) {
        $salon = new Saloon();
        $salon->name = $request->name;
        $salon->location=$request->location;
        $salon->services=$request->services;
        $salon->save();

        return redirect()->back();
    }

    public function update ($id) {
        $salon = Saloon::find($id);
        $saloons = Saloon::get();

        return view('saloon', [
            'updatingValues' => $salon,
            'saloonValues' => $saloons
        ]);
    }

    public function saveUpdate (REQUEST $request, $id) {
        $salon = Saloon::find($id);

        $salon->name = $request->name;
        $salon->location=$request->location;
        $salon->services=$request->services;

        $salon->save();

        return redirect('/saloon');
    }

    public function delete ($id) {
        $salon = Saloon::find($id);
        $salon->delete();

        return redirect()->back();
    }
}
