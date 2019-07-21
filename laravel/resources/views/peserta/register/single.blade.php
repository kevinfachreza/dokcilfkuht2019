@extends('layouts.app')

@section('title')
Registrasi Peserta
@endsection

@section('content')


<div style=" 
background: url({{url('img/bg-blue.png')}});
background-repeat: no-repeat;
background-attachment: fixed;
background-position: center top;
background-size: 100% 100% ;
padding: 10px" 
>

<div class="container position-relative" style="min-height: 643px;" id="home">
	<div class="row align-items-center py-5">
		<div class="col-12" style="background-color: #fff;box-shadow: 5px 5px 10px #555;padding-top: 50px;padding-bottom: 50px">
			<div class="text-center">
				<div class="overflow-hidden mb-1">
					<i class="far fa-check-circle fa-4x text-primary"></i>
					<br><br>
					<h2 class="font-weight-normal text-7 mb-0">Registrasi <strong class="font-weight-extra-bold">Sukses</strong> </h2>
					@if($allow_redir)
					<a href="{{url('admin/home')}}" class="btn btn-primary">Kembali ke Daftar Peserta</a>
					@endif
					<hr>
				</div>
			</div>
			<div class="row">
				<div class="col-lg-4">
					<h4>Data Peserta 1</h4>
					<label class="text-muted mb-0">Nama</label>
					<h4 class="font-w400">{{$peserta->peserta_1_nama ?? '-'}}</h4>
					<label class="text-muted mb-0">Gender</label>
					<h4 class="font-w400">{{$peserta->peserta_1_gender == 'L' ? 'Laki laki' : 'Perempuan'}}</h4>
					<label class="text-muted mb-0">Kelas</label>
					<h4 class="font-w400">Kelas {{$peserta->peserta_1_kelas ?? '-'}}</h4>
					<label class="text-muted mb-0">No Telp</label>
					<h4 class="font-w400">{{$peserta->peserta_1_telp ?? '-'}}</h4>
					<label class="text-muted mb-0">No Telp Wali</label>
					<h4 class="font-w400">{{$peserta->peserta_1_telp_wali ?? '-'}}</h4>
				</div>
				<div class="col-lg-4">
					<h4>Data Peserta 2</h4>
					<label class="text-muted mb-0">Nama</label>
					<h4 class="font-w400">{{$peserta->peserta_2_nama ?? '-'}}</h4>
					<label class="text-muted mb-0">Gender</label>
					<h4 class="font-w400">{{$peserta->peserta_2_gender == 'L' ? 'Laki laki' : 'Perempuan'}}</h4>
					<label class="text-muted mb-0">Kelas</label>
					<h4 class="font-w400">Kelas {{$peserta->peserta_2_kelas ?? '-'}}</h4>
					<label class="text-muted mb-0">No Telp</label>
					<h4 class="font-w400">{{$peserta->peserta_2_telp ?? '-'}}</h4>
					<label class="text-muted mb-0">No Telp Wali</label>
					<h4 class="font-w400">{{$peserta->peserta_2_telp_wali ?? '-'}}</h4>
				</div>
				<div class="col-lg-4">
					<h4>Data Sekolah</h4>
					<label class="text-muted mb-0">Nama</label>
					<h4 class="font-w400">{{$peserta->sekolah_nama ?? '-'}}</h4>
					<label class="text-muted mb-0">Alamat</label>
					<h4 class="font-w400">{{$peserta->sekolah_alamat ?? '-'}}</h4>
					<label class="text-muted mb-0">Kota</label>
					<h4 class="font-w400">{{$peserta->sekolah_kota ?? '-'}}</h4>
					<label class="text-muted mb-0">No Telp</label>
					<h4 class="font-w400">{{$peserta->sekolah_telp ?? '-'}}</h4>
					<label class="text-muted mb-0">Cara Pembayaran</label>
					<h4 class="font-w400">
						@if($peserta->cara_pembayaran == 'transfer')
							Transfer ke Bank BNI
						@elseif($peserta->cara_pembayaran == 'lo')
							Bayar Di Liason Officer (LO)
						@else
							Bayar Pada Waktu TM (Technical Meeting)
						@endif
					</h4>
				</div>
				<div class="col-12">
					*jika terdapat kesalahan segera hubungi panitia.
				</div>

			</div>
		</div>
	</div>
</div>

@endsection