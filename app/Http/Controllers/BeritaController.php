<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreBeritaRequest;
use App\Http\Requests\UpdateBeritaRequest;
use App\Models\Berita;
use Illuminate\Http\Request;

class BeritaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $semua_berita = Berita::where('title', 'LIKE', '%' . $request->get('find') . '%')
            ->paginate(10);
        
        return view('dashboard.berita.index', [
            'semua_berita' => $semua_berita
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboard.berita.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreBeritaRequest $request)
    {
        $data = $request->validated();

        $file = $request->file('thumbnail');
        $filepath = 'assets/img/news/';
        $filename = date('YmdHis') . '.' . $file->getClientOriginalExtension();
        $file->move($filepath, $filename);

        $berita = Berita::make($data);
        $berita->thumbnail = $filename;
        $berita->saveOrFail();

        return redirect()->route('berita.index')->with(['success' => 'Berhasil menambahkan berita baru.']);
    }

    /**
     * Display the specified resource.
     */
    public function show(Berita $berita)
    {
        dd('show');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Berita $berita)
    {
        return view('dashboard.berita.update', [
            'berita' => $berita
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateBeritaRequest $request, Berita $berita)
    {
        $data = $request->validated();

        $filename = null;
        if ($request->hasFile('thumbnail')) {
            $file = $request->file('thumbnail');
            $filepath = 'assets/img/news/';
            $filename = date('YmdHis') . '.' . $file->getClientOriginalExtension();
            $file->move($filepath, $filename);
        }

        $berita->fill($data);
        if ($filename != null) {
            $berita->thumbnail = $filename;
        }
        $berita->saveOrFail();

        return redirect()->route('berita.index')->with(['success' => 'Berita berhasil diupdate.']);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Berita $berita)
    {
        $berita->delete();

        return redirect()->route('berita.index')->with(['success' => 'Berita berhasil dihapus.']);   
    }
}
