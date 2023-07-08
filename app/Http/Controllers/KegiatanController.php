<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreKegiatanRequest;
use App\Http\Requests\UpdateKegiatanRequest;
use App\Models\Kegiatan;
use Illuminate\Http\Request;

class KegiatanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $semua_kegiatan = Kegiatan::where('title', 'LIKE', '%' . $request->get('find') . '%')
            ->orderBy('created_at', 'DESC')
            ->paginate(10);

        return view('dashboard.kegiatan.index', [
            'semua_kegiatan' => $semua_kegiatan
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboard.kegiatan.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreKegiatanRequest $request)
    {
        $data = $request->validated();

        $file = $request->file('thumbnail');
        $filepath = 'assets/img/kegiatan/';
        $filename = date('YmdHis') . '.' . $file->getClientOriginalExtension();
        $file->move($filepath, $filename);

        $kegiatan = Kegiatan::make($data);
        $kegiatan->thumbnail = $filename;
        $kegiatan->saveOrFail();

        return redirect()->route('kegiatan.index')->with(['success' => 'Berhasil membuat kegiatan baru.']);
    }

    /**
     * Display the specified resource.
     */
    public function show(Kegiatan $kegiatan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Kegiatan $kegiatan)
    {
        return view('dashboard.kegiatan.update', [
            'kegiatan' => $kegiatan
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateKegiatanRequest $request, Kegiatan $kegiatan)
    {
        $data = $request->validated();

        $filename = null;
        if ($request->hasFile('thumbnail')) {
            $file = $request->file('thumbnail');
            $filepath = 'assets/img/kegiatan/';
            $filename = date('YmdHis') . '.' . $file->getClientOriginalExtension();
            $file->move($filepath, $filename);
        }

        $kegiatan->fill($data);
        if ($filename != null) $kegiatan->thumbnail = $filename;
        $kegiatan->saveOrFail();

        return redirect()->route('kegiatan.index')->with(['success' => 'Berhasil melakukan update kegiatan.']);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Kegiatan $kegiatan)
    {
        $kegiatan->delete();

        return redirect()->route('kegiatan.index')->with(['success' => 'Berhasil menghapus kegiatan.']);
    }
}
