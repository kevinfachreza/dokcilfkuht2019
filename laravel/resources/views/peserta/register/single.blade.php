@extends('layouts.app')

@section('title')
Registrasi Peserta
@endsection

@section('content')

<div style=" background: var(--yellowp);padding: 10px" >
<div class="container position-relative" style="min-height: 643px;" id="home">
	<div class="row align-items-center py-5">
		<div class="col-12" style="background-color: #fff;box-shadow: 5px 5px 10px #555;padding-top: 50px;padding-bottom: 50px">
			<div class="text-center">
				<div class="overflow-hidden mb-1">
					<i class="far fa-check-circle fa-4x text-primary"></i>
					<br><br>
					<h2 class="font-weight-normal text-7 mb-0">Registrasi <strong class="font-weight-extra-bold">Sukses</strong> </h2>
					<hr>
				</div>
			</div>
			<div class="row justify-content-center mb-20">
				<div class="col-lg-4 col-md-6 col-12 mb-20">
					<h4>Data Peserta</h4>

					<img src="{{url('')}}/uploads/peserta/{{$peserta->peserta_1_img_path}}" style="max-width: 200px; max-height: 100px;">
					<table>
						<tr>
							<td><h5 class="font-w400 text-muted mb-0">Nama</h5></td>
							<td style="width:20px" class="text-center">:</td>
							<td><h5 class="font-w400 mb-0">{{$peserta->peserta_1_nama ?? '-'}}</h5></td>
						</tr>
						<tr>
							<td><h5 class="font-w400 text-muted mb-0">Gender</h5></td>
							<td class="text-center">:</td>
							<td><h5 class="font-w400 mb-0">{{$peserta->peserta_1_gender == 'L' ? 'Laki laki' : 'Perempuan'}}</h5></td>
						</tr>
						<tr>
							<td><h5 class="font-w400 text-muted mb-0">Kelas</h5></td>
							<td class="text-center">:</td>
							<td><h5 class="font-w400 mb-0">Kelas {{$peserta->peserta_1_kelas ?? '-'}}</h5></td>
						</tr>
						<tr>
							<td><h5 class="font-w400 text-muted mb-0">No Telp</h5></td>
							<td class="text-center">:</td>
							<td><h5 class="font-w400 mb-0">{{$peserta->peserta_1_telp ?? '-'}}</h5></td>
						</tr>
						<tr>
							<td><h5 class="font-w400 text-muted mb-0">Alamat</h5></td>
							<td class="text-center">:</td>
							<td><h5 class="font-w400 mb-0">{{$peserta->peserta_1_alamat ?? '-'}}</h5></td>
						</tr>
						<tr>
							<td><h5 class="font-w400 text-muted mb-0">Kota</h5></td>
							<td class="text-center">:</td>
							<td><h5 class="font-w400 mb-0">{{$peserta->peserta_1_kota ?? '-'}}</h5></td>
						</tr>
						<tr>
							<td><h5 class="font-w400 text-muted mb-0">Nama Wali</h5></td>
							<td class="text-center">:</td>
							<td><h5 class="font-w400 mb-0">{{$peserta->peserta_1_nama_wali ?? '-'}}</h5></td>
						</tr>
						<tr>
							<td><h5 class="font-w400 text-muted mb-0">No Telp Wali</h5></td>
							<td class="text-center">:</td>
							<td><h5 class="font-w400 mb-0">{{$peserta->peserta_1_telp_wali ?? '-'}}</h5></td>
						</tr>
					</table>
				</div>
				<div class="col-lg-4 col-md-6 col-12">
					<h4>Data Sekolah</h4>

					<table>
						<tr>
							<td><h5 class="font-w400 text-muted mb-0">Nama</h5></td>
							<td style="width:20px" class="text-center">:</td>
							<td><h5 class="font-w400 mb-0">{{$peserta->sekolah_nama ?? '-'}}</h5></td>
						</tr>
						<tr>
							<td><h5 class="font-w400 text-muted mb-0">Alamat</h5></td>
							<td class="text-center">:</td>
							<td><h5 class="font-w400 mb-0">Kelas {{$peserta->sekolah_alamat ?? '-'}}</h5></td>
						</tr>
						<tr>
							<td><h5 class="font-w400 text-muted mb-0">Kota</h5></td>
							<td class="text-center">:</td>
							<td><h5 class="font-w400 mb-0">{{$peserta->sekolah_kota ?? '-'}}</h5></td>
						</tr>
						<tr>
							<td><h5 class="font-w400 text-muted mb-0">Cara Pembayaran</h5></td>
							<td class="text-center">:</td>
							<td><h5 class="font-w400 mb-0">
								@if($peserta->cara_pembayaran == 'transfer')
								Transfer ke Bank BTN
								@elseif($peserta->cara_pembayaran == 'lo')
								Bayar Di Liason Officer (LO) - {{$peserta->lo_nama}}
								@endif
							</h5></td>
						</tr>
					</table>
				</div>
			</div>

			<div style="border: solid 1px #ccc; padding: 10px;margin-bottom: 10px">
				<label>Note</label>
				<ul>
					<li>Segera melakukan konfirmasi pembayaran ke nomor 081234762002 (Vivi) dengan format
						DOKCILFKUHT21_Nama Peserta_Nama Sekolah_Nama Pengirim_Jumlah Pembayaran
					Contoh : DOKCILFKUHT21_Dinda Putri_SD Hang Tuah Surabaya_Joko Sanjoyo_85.000</li>
					<li>Mengirim foto bukti pembayaran untuk mendapatkan link grup Whatsapp peserta DOKCIL 2021.</li>
				</ul>
			</div>

			<div class="row justify-content-center mb-20">
				<div class="col-lg-8 col-md-12 col-12 text-center">
					<small>*jika terdapat kesalahan segera hubungi panitia.</small>
				</div>
			</div>

			<div class="col-12 text-center">
				<hr>
				@if($allow_redir)
				<a href="{{url('admin/home')}}" class="btn btn-primary">Kembali ke Daftar Peserta</a>
				@else
				<a href="{{url('/register')}}" class="btn btn-primary">Daftarkan Peserta Lagi</a>
				@endif
				<div class="pt-5">
					<a href="{{url('')}}">Kembali ke halaman utama</a>
				</div>
			</div>


		</div>
	</div>
</div>

@endsection