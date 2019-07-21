<?php

namespace App\Http\Controllers\Peserta;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Peserta;

class PostController extends Controller
{
    	public function register(Request $request)
    	{
    		$peserta = new Peserta;
    		$peserta->peserta_1_nama = $request->peserta_1_nama;
    		$peserta->peserta_1_gender = $request->peserta_1_gender;
    		$peserta->peserta_1_kelas = $request->peserta_1_kelas;
    		$peserta->peserta_1_telp = $request->peserta_1_telp;
    		$peserta->peserta_1_telp_wali = $request->peserta_1_telp_wali;
    		$peserta->peserta_2_nama = $request->peserta_2_nama;
    		$peserta->peserta_2_gender = $request->peserta_2_gender;
    		$peserta->peserta_2_kelas = $request->peserta_2_kelas;
    		$peserta->peserta_2_telp = $request->peserta_2_telp;
    		$peserta->peserta_2_telp_wali = $request->peserta_2_telp_wali;
    		$peserta->sekolah_nama = $request->sekolah_nama;
    		$peserta->sekolah_alamat = $request->sekolah_alamat;
    		$peserta->sekolah_kota = $request->sekolah_kota;
    		$peserta->sekolah_telp = $request->sekolah_telp;
    		$peserta->cara_pembayaran = $request->cara_pembayaran;
    		$peserta->save();

    		$peserta->slug = md5($peserta->id);
    		$peserta->save();

    		return redirect('register-sukses/'.$peserta->slug);
    		
    	}
}
