<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Hairstyle;

class HairstyleController extends Controller
{
    public function home () {
        $hairstyles = Hairstyle::get();

        return view('hairstyle', [
            'hairstyleValues' => $hairstyles
        ]);
    }

    public function save (REQUEST $request) {

        $hairstyle = new Hairstyle();
        $hairstyle->name = $request->name;
        $hairstyle->saloon_id = $request->saloon_id;
        $hairstyle->save();

        return redirect()->back();
    }

    public function update ($id) {
        $hairstyle = Hairstyle::find($id);
        $hairstyles = Hairstyle::get();

        return view('hairstyle', [
            'updatingValues' => $hairstyle,
            'hairstyleValues' => $hairstyles
        ]);
    }

    public function saveUpdate (REQUEST $request, $id) {
        $hairstyle = Hairstyle::find($id);
        $hairstyle->name = $request->name;
        $hairstyle->save();

        return redirect('/hairstyle');
    }

    public function delete ($id) {
        $hairstyle = Hairstyle::find($id);
        $hairstyle->delete();

        return redirect()->back();
    }
}