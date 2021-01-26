<?php

namespace App\Http\Controllers\v1;

use App\Club;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ClubController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $clubs = Club::all();
        return response()->json([
            'status' => 'success',
            'statuscode' => 200,
            'data' => $clubs
        ], 200);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $club = new Club();
        $club->nama = $request->nama;
        $club->pelatih = $request->pelatih;
        $club->stadion = $request->stadion;
        $club->pemilik = $request->pemilik;
        $club->lapangan_latihan = $request->lapangan_latihan;
        $club->lokasi = $request->lokasi;
        $club->save();
        return response()->json([
            'status' => 'success',
            'statuscode' => 200,
            'data' => 'Club berhasil ditambahkan'
        ], 200);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $club = Club::find($id);
        return response()->json([
            'status' => 'success',
            'statuscode' => '200',
            // 'data' => 'club berhasil ditampilkan'
            'data' => $club
        ], 200);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $club = Club::find($id);
        $club->nama = $request->nama;
        $club->pelatih = $request->pelatih;
        $club->stadion = $request->stadion;
        $club->pemilik = $request->pemilik;
        $club->lapangan_latihan = $request->lapangan_latihan;
        $club->lokasi = $request->lokasi;
        $club->save();
        return response()->json([
            'status' => 'success',
            'statuscode' => 200,
            'data' => 'Club berhasil diubah'
        ], 200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $club = Club::find($id);
        $club->delete();
        return response()->json([
            'status' => 'success',
            'statuscode' => 200,
            'data' => 'Club berhasil dihapus'
        ], 200);
    }
}
