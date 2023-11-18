<?php

namespace App\Http\Controllers;
use App\Models\User;
use App\Models\Bidang;
use App\Models\Member;
use Illuminate\Http\Request;

class BidangController extends Controller
{
    public function dakpen() {
        return view('dakpen', [
            "title" => "Dakwah dan Pendidikan",
            "active" => "Dakpen",
        ]);
    }
    
    public function humas() {
        return view('humas', [
            "title" => "Hubungan Masyarakat",
            "active" => "Dakpen"
        ]);
    }

    public function phbi() {
        return view('phbi', [
            "title" => "Peringatan Hari Besar Islam",
            "active" => "Dakpen"
        ]);
    }
    
    // public function index(Bidang $bidang, Member $member) {
    //     return view('bidang', [
    //         "title" => $bidang->nama_bidang,
    //         "bidang" => $bidang,
    //         "members" => $bidang->members->load('bidang'),
    //     ]);
    // }
}