<?php

namespace App\Http\Controllers;

use App\Models\Participants;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ParticipantsController extends Controller
{
    public function addParticipants()
    {
        return view('users.addParticipants');
    }

    public function createParticipants(Request $request)
    {
        $data = $request->all();
        unset($data['_token']);
        $count = count($data) / 3;
        for ($i = 1; $i < $count; $i++) {
            $dt = new Participants([
                'name' => $data['name' . $i],
                'email' => $data['email' . $i],
                'phone' => $data['phone' . $i],
                'dob' => $data['dob' . $i]
            ]);
//            Auth::user()->participants()->save($dt);
        }
        return to_route('/');
    }

    public function displayParticipants()
    {
        $data = Auth::user()->participants()->get();
        return view('users.viewParticipants', compact('data'));
    }

    public function selectParticipants()
    {
        $data = Auth::user()->participants()->select('id', 'name')->get();

        return view('users.selectEvents', compact('data'));
    }

    public function selectAddParticipants(Request $request)
    {
        return $request->all();
    }
}
