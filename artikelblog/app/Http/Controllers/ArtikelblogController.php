<?php

namespace App\Http\Controllers;

use App\Models\artikelblog;
use Illuminate\Http\Request;

class ArtikelblogController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // panggil model artikelblog
        $result = artikelblog::all();
       // dd($result);

       //kirim data $result ke view artikelblog/index.blade.php
       return view('artikelblog.index')->with('artikelblog', $result);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('artikelblog.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //validasi input
        $input = $request->validate([
            "namaartikel"       =>"required",
            "kategori"          =>"required",
            "deskripsi"         =>"required",
            "tanggalterbit"     =>"required"
        ]);

        //simpan
        artikelblog::create($input);

        //redirect berserta pesan success
        return redirect()->route('artikelblog.index')->with('success', $request->nama.' Berhasil Disimpan');
    }

    /**
     * Display the specified resource.
     */
    public function show(artikelblog $artikelblog)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(artikelblog $artikelblog)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, artikelblog $artikelblog)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(artikelblog $artikelblog)
    {
        //
    }
    public function getartikelblog() {
        $response['data'] = artikelblog::all();
        $response['message'] = 'List Data Manajemen Artikel Blog';
        $response['success'] = true;

        return response()->json($response, 200);
    }
    public function storeartikelblog(Request $request){
        //validasi input
        $input = $request->validate([
            "namaartikel"       =>"required",
            "kategori"          =>"required",
            "deskripsi"         =>"required",
            "tanggalterbit"     =>"required"
        ]);

        //simpan
        $artikelblog = artikelblog::create($input);
        if($artikelblog){
            $response['success'] = true;
            $response['messagge'] = $request->nama."Berhasil Disimpan";
            return response()->json($response, 201);
        }else {
            $response['success'] = false;
            $response['messagge'] = $request->nama."Gagal Disimpan";
            return response()->json($response, 400);         
        }
    }
}
