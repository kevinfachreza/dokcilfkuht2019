<?php

namespace App\Http\Controllers\Peserta;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\AlamatKota;
use App\Models\Peserta;

class ViewController extends Controller
{
    	public function register()
    	{
    		$data['kota'] = AlamatKota::orderBy('name','asc')->get();
    		return view('peserta.register.index',$data);
    	}

    	public function registerSukses($slug)
    	{
    		$data['peserta'] = Peserta::where('slug',$slug)->first();
    		return view('peserta.register.single',$data);
    	}
}
