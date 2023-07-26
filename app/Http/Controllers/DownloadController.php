<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreDownloadRequest;
use App\Http\Requests\UpdateDownloadRequest;
use App\Models\Download;
use Illuminate\Http\Request;

class DownloadController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $semua_download = Download::where('title', 'LIKE', '%' . $request->get('find') . '%')
            ->paginate(10);

        return view('dashboard.download.index', [
            'semua_download' => $semua_download
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreDownloadRequest $request)
    {
        $data = $request->validated();

        $file = $request->file('file');
        $filename = date('YmdHis') . '.' . $file->getClientOriginalExtension();
        $file->move(Download::FILE_PATH, $filename);

        $download = Download::make($data);
        $download->file = $filename;
        $download->saveOrFail();

        return redirect()->route('download.index')->with(['success' => 'Berhasil menambahkan file download baru.']);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateDownloadRequest $request, Download $download)
    {
        $data = $request->validated();

        $filename = null;
        if ($request->hasFile('file')) {
            $file = $request->file('file');
            $filename = Date('YmdHis') . '.' . $file->getClientOriginalExtension();
            $file->move(Download::FILE_PATH, $filename);
        }

        $download->fill($data);
        if ($filename != null) $download->file = $filename;
        $download->saveOrFail();

        return redirect()->route('download.index')->with(['success' => 'Berhasil mengupdate file.']);        
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Download $download)
    {
        $download->delete();

        return redirect()->route('download.index')->with(['success' => 'Berhasil menghapus file download.']);
    }

    /**
     * Downloading file from database.
     */ 
    public function downloadFile(Download $download)
    {
        return response()->download(Download::FILE_PATH . $download->file);
    }
}
