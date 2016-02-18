<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use App\Nilaisiswa;
use Validator;

class NilaisiswasController extends Controller
{
    public function __construct()
    {
        //middleware here
    }

    public function index()
    {
        $nilai = Nilaisiswa::paginate(5);
        $no = 1;

        return view('nilaisiswa.index', compact('nilai', 'no'));
    }

    public function setGrafik()
    {
        $nilai = NilaiSiswa::all();
        return view('nilaisiswa.grafik', compact('nilai'));
    }

    public function create()
    {
        return view('nilaisiswa.create');
    }

    public function store(Request $request)
    {
        $rules = ['nama'=>'required|alpha|min:4', 'tahun'=>'required|size:4|date_format:Y', 'nilai'=>'required|numeric|digits_between:1,3'];
        $validator = Validator::make($request->all(), $rules);

        if($validator->fails()){
            return redirect()->route('nilaisiswa.create')->withErrors($validator)->withInput();
        }else{
             $nilaisiswa = Nilaisiswa::create($request->all());
            Session::flash('notif','<p class="alert alert-success"><span class="fa fa-check"></span>Data Inputan Anda Berhasil disimpan!</span> ');
            return redirect()->route('nilaisiswa.index');
        }
       
    }

    public function search_ajax(Request $request)
    {
        $nama = $request->get('nama');
        if(is_null($nama)) {
            echo false;
        }else{
            $q = NilaiSiswa::where('nama', 'LIKE', '%'.$nama.'%')->get();
            foreach($q as $d){
                echo "<tr><td><input type=checkbox name=id></td><td>".$d->nama."</td><td>".$d->tahun."</td><td>".$d->nilai."</td>
                    <td>
                        <a href=/nilaisiswa/".$d->id." class=btn btn-sm btn-default title=View data-toggle=tooltip><i class=fa fa-eye></i></a>
                        <a href=/nilaisiswa/".$d->id."/edit class=btn btn-sm btn-default title=Edit data-toggle=tooltip><i class=fa fa-edit></i></a>
                    </td>
                </tr>";
            }
        }
    }

    public function grafik()
    {
         return view('nilaisiswa.grafik');
    }

    public function show($id)
    {
        $nilai = Nilaisiswa::findOrFail($id);

        return view('nilaisiswa.show', compact('nilai'));
    }

    public function edit($id)
    {
        $nilai = Nilaisiswa::findOrFail($id);
        
        return view('nilaisiswa.edit', compact('nilai'));
    }

    public function update(Request $request, $id)
    {   
        if(is_null($id)){
            Session::flash('notif','<p class="alert alert-danger"><span class="fa fa-check"></span>Halaman Tidak ditemukan, Pastikan Anda memiliki Hak akses ke halaman ini!</span> ');
            return redirect()->route('nilaisiswa.index');
        }else{
             $rules = ['nama'=>'required|alpha|min:4', 'tahun'=>'required|size:4|date_format:Y', 'nilai'=>'required|numeric|digits_between:1,3'];
            $validator = Validator::make($request->all(), $rules);
            if($validator->fails()) {
                return redirect()->route('nilaisiswa.edit', $id)->withErrors($validator)->withInput();;
            } else {
                $nilai = Nilaisiswa::findOrFail($id);
                $nilai->update($request->all());
                Session::flash('notif','<p class="alert alert-success"><span class="fa fa-check"></span>Perubahan Data Berhasil disimpan!</span> ');
                return redirect()->route('nilaisiswa.index');
            }
        } 
    }

    public function destroy(Request $request, $id)
    {
        $nilai = Nilaisiswa::findOrFail($id);
        if(is_null($nilai)){
            Session::flash('notif','<p class="alert alert-danger"><span class="fa fa-check"></span>Proses Penghapusan Gagal. Silahkan Periksa kembali!</span> ');
            return redirect()->route('nilaisiswa.index');
        }
        $nilai->delete();
        Session::flash('notif','<p class="alert alert-success"><span class="fa fa-check"></span>Data yang Anda pilih Berhasil dihapus!</span> ');
        return redirect()->route('nilaisiswa.index');
    }

}
