<?php

namespace App\Http\Controllers;

use App\Models\Berita;
use App\Models\Download;
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

    public function pusatFile(Request $request)
    {
        $semua_file = Download::where('title', 'LIKE', '%' . $request->get('find') . '%')
            ->paginate(10);

        $semua_berita = Berita::orderBy('created_at', 'DESC')->paginate(5);

        return view('public.file', [
            'semua_file' => $semua_file,
            'semua_berita' => $semua_berita
        ]);
    }

    public function bacaBerita(Berita $berita)
    {
        $berita_lainnya = Berita::where('id', '!=', $berita->id)
            ->orderBy('created_at', 'DESC')
            ->paginate(5);

        return view('public.baca-berita',[
            'berita' => $berita,
            'berita_lainnya' => $berita_lainnya
        ]);
    }
}
