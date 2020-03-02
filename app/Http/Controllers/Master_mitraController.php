<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Instansi;

 use App\Mitra_lokal;

class Master_mitraController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if ($request->has('search')) {

            $mitras = Instansi::where('id_kategori',2)->where('nama','LIKE','%' .$request->search. '%')->latest()->paginate(5);

        } else {

            $mitras = Instansi::where('id_kategori',2)->latest()->paginate(5);
        }

        return view('mitra.ngo.mitra.mitra',['mitras' => $mitras]);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $mitra = Instansi::join('mitra_lokals as mitra', 'mitra.instansi_id','=','instansis.id')
                            ->select('mitra.id as mitra_id','instansis.id as instansi_id','nama','alamat','no_regis_izin','mitra.pembiayaan','mitra.durasi_awal','mitra.durasi_akhir')
                            ->where('instansis.id',$id)
                            ->first(); 

        return view('mitra.ngo.mitra.lihatmitra',['mitra' => $mitra]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
