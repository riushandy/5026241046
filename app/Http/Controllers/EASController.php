<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Validation\Rule;

class EASController extends Controller
{
    //
     public function index()
    {
        $eas = DB::table('mypegawai')->get();
        return view('eas.index', compact('eas'));
    }

    public function create()
    {
        return view('EAS/create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'kodepegawai' => 'required|string|max:9|unique:mypegawai,kodepegawai',
            'namalengkap' => 'required|string|max:50',
            'divisi' => 'string|max:5',
            'departemen' => 'string|max:10',
        ]);

        DB::table('mypegawai')->insert([
            'kodepegawai' => $request->kodepegawai,
            'namalengkap' => $request->namalengkap,
            'divisi' => $request->divisi,
            'departemen' => $request->departemen,
        ]);

        return redirect()->route('eas.index')->with('success', 'Data Pegawai berhasil ditambahkan.');
    }

    public function view($kodepegawai)
    {
        $eas = DB::table('mypegawai')->where('kodepegawai', $kodepegawai)->get();

		// return view('EAS/view',['mypegawai' => $mypegawai]);
                return view('eas.view', compact('eas'));

        }

}
