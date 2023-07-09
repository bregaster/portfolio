<?php

namespace App\Http\Controllers;

use App\Models\blog;
use App\Models\halaman;
use App\Models\quote;
use App\Models\riwayat;
use Illuminate\Http\Request;

class depanController extends Controller
{
    public function index()
    {
        $about_id = get_meta_value('_halaman_about');
        $about_data = halaman::where('id', $about_id)->first();

        $interest_id = get_meta_value('_halaman_interest');
        $interest_data = halaman::where('id', $interest_id)->first();

        $award_id = get_meta_value('_halaman_award');
        $award_data = halaman::where('id', $award_id)->first();

        $experience_data = riwayat::where('tipe', 'experience')->get();
        $education_data = riwayat::where('tipe', 'education')->get();

        return view('depan.index')->with([
            'about' => $about_data,
            'experience' => $experience_data,
            'education' => $education_data
        ]);
    }

    public function welcome(){
        $quote = quote::all()->random();
        return view('welcome')->with(['quote'=> $quote]);
    }
    public function blog(){
        $posts = blog::all();
        return view('blog.index')->with(['posts'=> $posts]);
    }

}