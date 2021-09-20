<?php

namespace App\Http\Controllers;

use Illuminate\Support\Arr;
use Illuminate\Http\Request;
use App\Models\PemindahBukuan;
use Maatwebsite\Excel\Facades\Excel;
use App\Imports\PemindahBukuansImport;

class PemindahBukuanController extends Controller
{
    public function welcome()
    {
        $bps = PemindahBukuan::query()
            ->get();

        return view('welcome', compact('bps'));
    }

    public function find(Request $request)
    {
        try {
            $bps = PemindahBukuan::query()
                ->where('nomor', $request->bps)
                ->firstOrFail();

            return redirect()
                ->route('detail', $bps->id);
        } catch (\Throwable $th) {
            return back();
        }
    }

    public function upload(Request $request)
    {
        Excel::import(new PemindahBukuansImport, $request->bps);

        return redirect()
            ->route('welcome')
            ->with('success', 'Upload data successfully');
    }

    public function detail(PemindahBukuan $pemindahBukuan)
    {
        return view('detail', compact('pemindahBukuan'));
    }

    public function all()
    {
        $pemindahBukuanData = PemindahBukuan::query()
            ->get();

        return view('all', compact('pemindahBukuanData'));
    }
}
