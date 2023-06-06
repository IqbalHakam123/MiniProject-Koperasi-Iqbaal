<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\DB;
use App\Models\Barang;
use App\Models\Satuan;

class BarangController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $pageTitle = 'List Barang';

        // ELOQUENT
        $barangs = Barang::all();

        return view('barang.index', [
            'pageTitle' => $pageTitle,
            'barangs' => $barangs
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $pageTitle = 'Create Barang';

        // ELOQUENT
        $satuans = Satuan::all();

        return view('barang.create', compact('pageTitle', 'satuans'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $messages = [
            'required' => ':Attribute harus diisi.',
            // 'hargaBarang' => 'Isi :attribute dengan format yang benar',
            'numeric' => 'Isi :attribute dengan angka'
        ];

        $validator = Validator::make($request->all(), [
            'kodeBarang' => 'required',
            'namaBarang' => 'required',
            'hargaBarang' => 'required|numeric',
            'deskripsi' => 'required',
            'satuanBarang' => 'required',
        ], $messages);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        // ELOQUENT
        $barang = New Barang;
        $barang->kode_barang = $request->kodeBarang;
        $barang->nama_barang = $request->namaBarang;
        $barang->harga_barang = $request->hargaBarang;
        $barang->deskripsi = $request->deskripsi;
        $barang->satuan_id = $request->satuanBarang;
        $barang->save();

        return redirect()->route('barangs.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $pageTitle = 'Detail Barang';

        // ELOQUENT
        $barang = Barang::find($id);

        return view('barang.show', compact('pageTitle', 'barang'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $pageTitle = 'Edit Barang';

        // ELOQUENT
        $satuans = Satuan::all();
        $barang = Barang::find($id);

        return view('barang.edit', compact('pageTitle', 'satuans', 'barang'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $messages = [
            'required' => ':Attribute harus diisi.',
            // 'hargaBarang' => 'Isi :attribute dengan format yang benar',
            'numeric' => 'Isi :attribute dengan angka'
        ];

        $validator = Validator::make($request->all(), [
            'kodeBarang' => 'required',
            'namaBarang' => 'required',
            'hargaBarang' => 'required|numeric',
            'deskripsi' => 'required',
            'satuanBarang' => 'required',
        ], $messages);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        // ELOQUENT
        $barang = Barang::find($id);
        $barang->kode_barang = $request->kodeBarang;
        $barang->nama_barang = $request->namaBarang;
        $barang->harga_barang = $request->hargaBarang;
        $barang->deskripsi = $request->deskripsi;
        $barang->satuan_id = $request->satuanBarang;
        $barang->save();

        return redirect()->route('barangs.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        // ELOQUENT
        Barang::find($id)->delete();

        return redirect()->route('barangs.index');
    }
}
