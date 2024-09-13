<?php

namespace App\Http\Controllers;

use App\Models\DataSiswa;
use App\Models\Kelas;
use Illuminate\Http\Request;

class DataSiswaController extends Controller
{
    public function index()
    {
        $datasiswa = DataSiswa::with('kelas')->get();
        return view('datasiswa.index', compact('datasiswa'));
    }

    public function create()
    {
        $kelas = Kelas::all();
        return view('datasiswa.create', compact('kelas'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'nis' => 'required|unique:datasiswa,nis',
            'nama_leng' => 'required',
            'kelas_id' => 'required'
        ]);

        DataSiswa::create($request->all());
        return redirect()->route('datasiswa.index');
    }

    public function edit(DataSiswa $datasiswa)
    {
        $kelas = Kelas::all();
        return view('datasiswa.edit', compact('datasiswa', 'kelas'));
    }

    public function update(Request $request, DataSiswa $datasiswa)
    {
        $request->validate([
            'nis' => 'required|unique:datasiswa,nis,' . $datasiswa->id,
            'nama_leng' => 'required',
            'kelas_id' => 'required'
        ]);

        $datasiswa->update($request->all());
        return redirect()->route('datasiswa.index');
    }

    public function destroy(DataSiswa $datasiswa)
    {
        $datasiswa->delete();
        return redirect()->route('datasiswa.index');
    }
}
