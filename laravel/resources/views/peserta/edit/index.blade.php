@extends('layouts.app')

@section('title')
Edit Peserta
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
						<h2 class="font-weight-normal text-7 mb-0"><strong class="font-weight-extra-bold">Edit</strong> Peserta - DOKCIL FK UHT 2019</h2>
						<hr>
					</div>
				</div>
				<form method="POST">
					@csrf
					<div class="row">
						<div class="col-lg-6">
							<h3>Data Peserta 1</h3>
							<div class="form-group">
								<label>Nama Peserta</label>
								<input class="form-control" name="peserta_1_nama" required value="{{$peserta->peserta_1_nama}}">
							</div>
							<div class="form-group">
								<label>Gender</label>
								<div class="custom-control custom-radio">
									<input type="radio" id="peserta_1_gender_lk" value="L" name="peserta_1_gender" class="custom-control-input"  @if($peserta->peserta_1_gender == 'L') checked @endif>
									<label class="custom-control-label" for="peserta_1_gender_lk">Laki laki</label>
								</div>
								<div class="custom-control custom-radio">
									<input type="radio" id="peserta_1_gender_pr" value="P" name="peserta_1_gender" class="custom-control-input"  @if($peserta->peserta_1_gender == 'P') checked @endif>
									<label class="custom-control-label" for="peserta_1_gender_pr">Perempuan</label>
								</div>
							</div>
							<div class="form-group">
								<label>Kelas</label>
								<div class="custom-control custom-radio">
									<input type="radio" id="peserta_1_kelas_4" value="4" name="peserta_1_kelas" class="custom-control-input" @if($peserta->peserta_1_kelas == 4) checked @endif>
									<label class="custom-control-label" for="peserta_1_kelas_4">Kelas 4</label>
								</div>
								<div class="custom-control custom-radio"> 
									<input type="radio" id="peserta_1_kelas_5" value="5" name="peserta_1_kelas" class="custom-control-input"  @if($peserta->peserta_1_kelas == 5) checked @endif>
									<label class="custom-control-label" for="peserta_1_kelas_5">Kelas 5</label>
								</div>
								<div class="custom-control custom-radio">
									<input type="radio" id="peserta_1_kelas_6" value="6" name="peserta_1_kelas" class="custom-control-input"  @if($peserta->peserta_1_kelas == 6) checked @endif>
									<label class="custom-control-label" for="peserta_1_kelas_6">Kelas 6</label>
								</div>
							</div>
							<div class="form-group">
								<label>No Telp</label>
								<input class="form-control" name="peserta_1_telp" required value="{{$peserta->peserta_1_telp}}">
							</div>
							<div class="form-group">
								<label>No Telp Wali</label>
								<input class="form-control" name="peserta_1_telp_wali" value="{{$peserta->peserta_1_telp_wali}}">
							</div>
						</div>
						<div class="col-lg-6">
							<h3>Data Peserta 2</h3>
							<div class="form-group">
								<label>Nama Peserta</label>
								<input class="form-control" name="peserta_2_nama" required value="{{$peserta->peserta_2_nama}}">
							</div>
							<div class="form-group">
								<label>Gender</label>
								<div class="custom-control custom-radio">
									<input type="radio" id="peserta_2_gender_lk" value="L" name="peserta_2_gender" class="custom-control-input" @if($peserta->peserta_2_gender == 'P') checked @endif>
									<label class="custom-control-label" for="peserta_2_gender_lk">Laki laki</label>
								</div>
								<div class="custom-control custom-radio">
									<input type="radio" id="peserta_2_gender_pr" value="P" name="peserta_2_gender" class="custom-control-input" @if($peserta->peserta_2_gender == 'P') checked @endif>
									<label class="custom-control-label" for="peserta_2_gender_pr">Perempuan</label>
								</div>
							</div>
							<div class="form-group">
								<label>Kelas</label>
								<div class="custom-control custom-radio">
									<input type="radio" id="peserta_2_kelas_4" value="4" name="peserta_2_kelas" class="custom-control-input" @if($peserta->peserta_2_kelas == '4') checked @endif>
									<label class="custom-control-label" for="peserta_2_kelas_4">Kelas 4</label>
								</div>
								<div class="custom-control custom-radio">
									<input type="radio" id="peserta_2_kelas_5" value="5" name="peserta_2_kelas" class="custom-control-input" @if($peserta->peserta_2_kelas == '5') checked @endif >
									<label class="custom-control-label" for="peserta_2_kelas_5">Kelas 5</label>
								</div>
								<div class="custom-control custom-radio">
									<input type="radio" id="peserta_2_kelas_6" value="6" name="peserta_2_kelas" class="custom-control-input" @if($peserta->peserta_2_kelas == '6') checked @endif>
									<label class="custom-control-label" for="peserta_2_kelas_6">Kelas 6</label>
								</div>
							</div>
							<div class="form-group">
								<label>No Telp</label>
								<input class="form-control" name="peserta_2_telp" required value="{{$peserta->peserta_2_telp}}">
							</div>
							<div class="form-group">
								<label>No Telp Wali</label>
								<input class="form-control" name="peserta_2_telp_wali" value="{{$peserta->peserta_2_telp_wali}}">
							</div>
						</div>
						<div class="col-12">
							<hr>
						</div>
						<div class="col-lg-12">
							<h3>Data Sekolah</h3>
							<div class="form-group">
								<label>Nama Sekolah</label>
								<input class="form-control" name="sekolah_nama" required value="{{$peserta->sekolah_nama}}">
							</div>
							<div class="form-group">
								<label>Alamat Sekolah</label>
								<input class="form-control" name="sekolah_alamat" required value="{{$peserta->sekolah_alamat}}">
							</div>
							<div class="form-group">
								<label>Kota Sekolah</label>
								<select class="select2 form-control" name="sekolah_kota">
									@foreach($kota as $item)
									<option value="{{$item->name}}"  @if($peserta->sekolah_kota == $item->name) selected @endif>{{$item->name}}</option>
									@endforeach
								</select>
							</div>
							<div class="form-group">
								<label>No Telp Sekolah</label>
								<input class="form-control" name="sekolah_telp" required value="{{$peserta->sekolah_telp}}">
							</div>
							<div class="form-group">
								<label>Cara Membayar</label>
								<div class="custom-control custom-radio">
									<input type="radio" id="cara_pembayaran_1" value="transfer" name="cara_pembayaran" class="custom-control-input" @if($peserta->cara_pembayaran == 'transfer') checked @endif>
									<label class="custom-control-label" for="cara_pembayaran_1">Transfer ke Bank BNI
									</label>
								</div>
								<div class="custom-control custom-radio">
									<input type="radio" id="cara_pembayaran_2" value="lo" name="cara_pembayaran" class="custom-control-input" @if($peserta->cara_pembayaran == 'lo') checked @endif>
									<label class="custom-control-label" for="cara_pembayaran_2">Bayar di Liason Officer (LO)</label>
								</div>
								<div class="custom-control custom-radio">
									<input type="radio" id="cara_pembayaran_3" value="tm" name="cara_pembayaran" class="custom-control-input" @if($peserta->cara_pembayaran == 'tm') checked @endif>
									<label class="custom-control-label" for="cara_pembayaran_3">Bayar pada waktu TM (Technical Meeting)
									</label>
								</div>
							</div>
							<div style="border: solid 1px #ccc; padding: 10px;margin-bottom: 10px">
								<label>Cara Pembayaran Transfer</label>
								<ol>
									<li>
										Transfer ke Bank BNI dengan nomor rekening <strong>0438368080</strong>  
										Atas nama <strong>Norika Fairuza Irbach</strong>
									</li>
									<li>
										Lalu konfirmasi pembayaran ke <strong>081335226752</strong> (Agnes) dengan Format 
										<br>
										<strong>DOKCILFKUHT19_Nama Peserta(salah satu)_Nama Sekolah_Nama Pengirim_Jumlah Pembayaran</strong>
										<br>
										Contoh : DOKCILFKUHT19_Kevin Fachreza_SD Masa Depan Cerah 22 Surabaya_Joko Sanjoyo_85.000
									</li>
									<li>
										Mengirim foto bukti pembayaran untuk mendapatkan nomer kwitansi
									</li>
								</ol>

								<label>Note</label>
								<ol>
									<li>Nama yang tercantum dalam formulir pendaftaran adalah nama yang tercetak pada sertifikat
									</li>
									<li>Membawa Fotokopi 1 lembar Kartu Identitas/Kartu Pelajar masing-masing peserta saat hari H pelaksanaan  
									</li>
								</ol>
							</div>
							<div class="form-group">
								<button class="btn btn-primary font-weight-semibold text-3 btn-px-5 btn-py-2 order-1 order-lg-2 mr-3 mr-lg-0">Submit</button>
							</div>
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>

@endsection