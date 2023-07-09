<?php

namespace App\Http\Controllers;

use App\Models\Berita;
use Illuminate\Http\Request;

class SiteController extends Controller
{
    public function index()
    {
        $semua_berita = Berita::orderBy('created_at', 'DESC')->paginate(5);
        
        return view('public.home', [
            'semua_berita' => $semua_berita
        ]);
    }
}
