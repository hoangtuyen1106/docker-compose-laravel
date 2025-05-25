<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class UserController extends Controller
{
    public function getRemoteUsers()
    {
        $response = Http::get('http://app/users');
        return $response->json();
    }
}
