<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use App\Models\loker;
use App\Model\Seller;


class LokerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index()
    {
        $loker = loker::orderBy('id','asc')->paginate(5);
        return view('lowongan_pekerjaan.detail',compact('detail'))
                ->with('i',(request()->input('page',1) -1)*5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pasang_loker.tambahloker');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $loker = loker::create([
            'nama_perusahaan' => $request->nama_perusahaan,
            'bidang' => $request->bidang,
            'bagian' => $request->bagian,
            'no_perusahaan' => $request->no_perusahaan,
            'berlaku'=>$request->berlaku,
            'kadaluarsa' => $request->kadaluarsa,
            'lokasi' => $request->lokasi,
            'email' => $request->email,
            'no_telp' => $request->no_telp,

        ]);


        
        return redirect()->route('lowongan_pekerjaan.detail')
                         ->with('success','Data berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $loker = loker::find($id);

        return view('loker.detail-profile', compact('loker'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $loker = loker::find($id);

        return view('penjual.editProduk', compact('loker'));
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
        $request->validate([
            'nama'=>'required',
            'harga' => 'required',
            'stok'=>'required',
            'penjual_id' => 'required',
            'foto' => 'required'
        ]);
        $loker = loker::find($id);
        $loker->nama = $request->get('nama');
        $loker->harga = $request->get('harga');
        $loker->stok = $request->get('stok');
        $loker->penjual_id = $request->get('penjual_id');
        $loker->foto = $request->get('foto');
        $loker->save();

        return redirect()->route('loker.index')
                         ->with('success', 'Data berhasil diupdate');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $loker = loker::find($id);
        $loker->delete();

        return redirect()->route('loker.index')
                         ->with('success', 'Data Alumni berhasil dihapus');
    }
}