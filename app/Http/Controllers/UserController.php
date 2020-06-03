<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Request;

class UserController extends Controller
{
    public function toggle_saved()
    {
        $id = Request::get('id');
        $user = Auth::user();
        $saved = $user->saved;

        $key   = array_search($id, $saved);
        if ($key === false) {
            array_push($saved, $id);
        } else {
            array_splice($saved, $key, 1);
        }

        $user->saved = $saved;
        $user->save();

        return response()->json();
    }
}
