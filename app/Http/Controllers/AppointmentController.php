<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Appointment;

class AppointmentController extends Controller {
    public function allAppointments () {
        $appointments = Appointment::get();
        return view('appointments', [
            'appointments' => $appointments
        ]);
    }

    public function addNew (){
        return view('appointment');
    }

    public function saveNew (REQUEST $request) {
        $appointment = new Appointment();
        $appointment->name = $request->name;
        $appointment->location = $request->location;
        $appointment->account_number = $request->account_number;
        $appointment->services = $request->services;
        $appointment->save();
        return redirect('appointments');
    }

    public function update ($id) {
        $appointment = Appointment::find($id);
        return view('appointment', [
            'salon' => $appointment,
        ]);
    }

    public function saveUpdate (REQUEST $request, $id) {
        $appointment = Appointment::find($id);
        $appointment->name = $request->name;
        $appointment->location=$request->location;
        $appointment->services=$request->services;
        $appointment->save();
        return redirect('/appointments');
    }

    public function delete ($id) {
        $appointment = Appointment::find($id);
        $appointment->delete();
        return redirect('/appointments');
    }
}
