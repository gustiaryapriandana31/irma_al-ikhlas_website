<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MemberController extends Controller
{
    public function index() {
        return view('anggota', [
            "title" => "Anggota | M. Gusti Arya Priandana",
            "active" => "anggota"
        ]);
    }
}