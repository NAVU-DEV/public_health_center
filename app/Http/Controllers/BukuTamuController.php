<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreBukuTamuRequest;
use App\Http\Requests\UpdateBukuTamuRequest;
use App\Models\BukuTamu;
use Carbon\Carbon;
use Illuminate\Http\Request;

class BukuTamuController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $semua_buku_tamu = BukuTamu::where(function ($query) use ($request) {
                $query->whereDate('gb_date', Carbon::now());
            
                if ($request->has('find')) {
                    $query->whereDate('gb_date', $request->get('find'));
                }
            })
            ->paginate(10);
        

        return view('dashboard.buku-tamu.index', [
            'semua_buku_tamu' => $semua_buku_tamu
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboard.buku-tamu.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreBukuTamuRequest $request)
    {
        $data = $request->validated();

        $buku_tamu = BukuTamu::make($data);
        $buku_tamu->saveOrFail();

        return redirect()->route('buku-tamu.store')->with(['success' => 'Berhasil menambahkan buku tamu.']);
    }

    /**
     * Display the specified resource.
     */
    public function show(BukuTamu $bukuTamu)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(BukuTamu $bukuTamu)
    {
        return view('dashboard.buku-tamu.update', [
            'buku_tamu' => $bukuTamu
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateBukuTamuRequest $request, BukuTamu $bukuTamu)
    {
        $data = $request->validated();

        $bukuTamu->fill($data);
        $bukuTamu->saveOrFail();

        return redirect()->route('buku-tamu.index')->with(['success' => 'Berhasil mengupdate buku tamu.']);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(BukuTamu $bukuTamu)
    {
        $bukuTamu->delete();

        return redirect()->route('buku-tamu.index')->with(['success' => 'Berhasil menghapus data buku tamu.']);
    }
}
