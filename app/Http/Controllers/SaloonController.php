<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Saloon;

class SaloonController extends Controller {
    public function home () {
        $saloons = Saloon::get();

        return view('saloon', [
            'saloonValues' => $saloons
        ]);
    }

    public function save (REQUEST $request) {

        $salon = new Saloon();
        $salon->name = $request->name;
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
        $salon->save();

        return redirect('/saloon');
    }

    public function delete ($id) {
        $salon = Saloon::find($id);
        $salon->delete();

        return redirect()->back();
    }

}
