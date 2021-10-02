<?php

namespace App\Http\Controllers\Peserta;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Peserta;
use Carbon\Carbon;

class PostController extends Controller
{
    public function register(Request $request)
    {
        $peserta = new Peserta;
        $peserta->peserta_1_nama = $request->peserta_1_nama;
        $peserta->peserta_1_gender = $request->peserta_1_gender;
        $peserta->peserta_1_kelas = $request->peserta_1_kelas;
        $peserta->peserta_1_telp = $request->peserta_1_telp;
        $peserta->peserta_1_alamat = $request->peserta_1_alamat;
        $peserta->peserta_1_kota = $request->peserta_1_kota;
        $peserta->peserta_1_nama_wali = $request->peserta_1_nama_wali;
        $peserta->peserta_1_telp_wali = $request->peserta_1_telp_wali;
        $peserta->sekolah_nama = $request->sekolah_nama;
        $peserta->sekolah_alamat = $request->sekolah_alamat;
        $peserta->sekolah_kota = $request->sekolah_kota;
        $peserta->sekolah_telp = $request->sekolah_telp;
        $peserta->cara_pembayaran = $request->cara_pembayaran;
        $peserta->lo_nama = $request->lo_nama;
        $peserta->save();

        $peserta->peserta_1_img_path = $this->uploadPhoto($request->file('peserta_1_photo'),$peserta->id);
        $peserta->slug = md5($peserta->id);
        $peserta->save();

        return redirect('register-sukses/'.$peserta->slug);

    }
    public function edit($id, Request $request)
    {


        $peserta = Peserta::find($id);
        $peserta->peserta_1_nama = $request->peserta_1_nama;
        $peserta->peserta_1_gender = $request->peserta_1_gender;
        $peserta->peserta_1_kelas = $request->peserta_1_kelas;
        $peserta->peserta_1_telp = $request->peserta_1_telp;
        $peserta->peserta_1_alamat = $request->peserta_1_alamat;
        $peserta->peserta_1_kota = $request->peserta_1_kota;
        $peserta->peserta_1_nama_wali = $request->peserta_1_nama_wali;
        $peserta->peserta_1_telp_wali = $request->peserta_1_telp_wali;
        $peserta->sekolah_nama = $request->sekolah_nama;
        $peserta->sekolah_alamat = $request->sekolah_alamat;
        $peserta->sekolah_kota = $request->sekolah_kota;
        $peserta->sekolah_telp = $request->sekolah_telp;
        $peserta->cara_pembayaran = $request->cara_pembayaran;
        $peserta->lo_nama = $request->lo_nama;
        $peserta->save();

        if($request->file('peserta_1_photo')){

            $peserta->peserta_1_img_path = $this->uploadPhoto($request->file('peserta_1_photo'),$peserta->id);
            $peserta->save();
        }


        return redirect('peserta/'.$peserta->id.'/edit-sukses');

    }

    private function uploadPhoto($file,$filename)
    {
        $path_dir = 'uploads/peserta';
        $ext = $file->getClientOriginalExtension();
        $current_date_time = Carbon::now()->format('YmdHis'); 
        $new_filename = $filename.'__'.$current_date_time.'.'.$ext;
        $file->move($path_dir,$new_filename);
        return $new_filename;
    }
}
