<?php

namespace App\Http\Controllers\Peserta;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\AlamatKota;
use App\Models\AlamatProvinsi;
use App\Models\Peserta;

class ViewController extends Controller
{
    	public function register()
    	{
    		$data['kota'] = AlamatKota::orderBy('nama','asc')->get();
            $data['provinsi'] = AlamatProvinsi::orderBy('nama','asc')->get();
    		return view('peserta.register.index',$data);
    	}

        public function edit($id)
        {
            $data['peserta'] = Peserta::where('id',$id)->first();
            $data['kota'] = AlamatKota::orderBy('nama','asc')->get();
            $data['provinsi'] = AlamatProvinsi::orderBy('nama','asc')->get();
            return view('peserta.edit.index',$data);
        }

    	public function registerSukses($slug)
    	{
    		$data['peserta'] = Peserta::where('slug',$slug)->first();
            $data['allow_redir'] = 0;
    		return view('peserta.register.single',$data);
    	}

        public function editSukses($id)
        {
            $data['peserta'] = Peserta::where('id',$id)->first();
            $data['allow_redir'] = 1;
            return view('peserta.register.single',$data);
        }
}
