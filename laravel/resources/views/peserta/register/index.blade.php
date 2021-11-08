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
					<h2 class="font-weight-normal text-7 mb-0"><strong class="font-weight-extra-bold">Registrasi</strong> Peserta - DOKCIL FK UHT 2021</h2>
					<hr>
				</div>
			</div>
			<form method="POST" enctype="multipart/form-data">
				@csrf
				<div class="row">
					<div class="col-lg-12">
						<h3>Data Peserta</h3>
						<div class="form-group">
							<label>Nama Lengkap Peserta</label>
							<input class="form-control" name="peserta_1_nama" required>
						</div>
						<div class="form-group">
							<label>Gender</label>
							<div class="custom-control custom-radio">
								<input type="radio" id="peserta_1_gender_lk" value="L" name="peserta_1_gender" class="custom-control-input" checked="">
								<label class="custom-control-label" for="peserta_1_gender_lk">Laki laki</label>
							</div>
							<div class="custom-control custom-radio">
								<input type="radio" id="peserta_1_gender_pr" value="P" name="peserta_1_gender" class="custom-control-input">
								<label class="custom-control-label" for="peserta_1_gender_pr">Perempuan</label>
							</div>
						</div>
						<div class="form-group">
							<label>Kelas</label>
							<div class="custom-control custom-radio">
								<input type="radio" id="peserta_1_kelas_4" value="4" name="peserta_1_kelas" class="custom-control-input" checked="">
								<label class="custom-control-label" for="peserta_1_kelas_4">Kelas 4</label>
							</div>
							<div class="custom-control custom-radio">
								<input type="radio" id="peserta_1_kelas_5" value="5" name="peserta_1_kelas" class="custom-control-input">
								<label class="custom-control-label" for="peserta_1_kelas_5">Kelas 5</label>
							</div>
							<div class="custom-control custom-radio">
								<input type="radio" id="peserta_1_kelas_6" value="6" name="peserta_1_kelas" class="custom-control-input">
								<label class="custom-control-label" for="peserta_1_kelas_6">Kelas 6</label>
							</div>
						</div>
						<div class="form-group">
							<label>Alamat Domisili</label>
							<input class="form-control" name="peserta_1_alamat" required>
						</div>
						<div class="form-group">
							<label>Kota</label>
							<select class="select2 form-control" name="peserta_1_kota">
								@foreach($kota as $item)
								<option value="{{$item->nama}}" @if($item->nama == "KOTA SURABAYA") selected @endif>{{$item->nama}}</option>
								@endforeach
							</select>
						</div>
						<div class="form-group">
							<label>No Telp Peserta</label>
							<input class="form-control" name="peserta_1_telp" required>
						</div>
						<div class="form-group">
							<label>Email Peserta</label>
							<input class="form-control" name="peserta_1_email" required>
						</div>
						<div class="form-group">
							<label>Foto Peserta</label>
							<input type="file" class="form-control" name="peserta_1_photo" required accept="image/*">
							<small>Foto peserta dengan ukuran 6 x 4, bebas rapi dan memperlihatkan setengah badan. Diunggah dalam bentuk png. atau jpg.</small>
						</div>

						<div class="form-group">
							<label>Nama Wali</label>
							<input class="form-control" name="peserta_1_nama_wali" required>
						</div>
						<div class="form-group">
							<label>No Telp Wali</label>
							<input class="form-control" name="peserta_1_telp_wali" required>
						</div>
					</div>
					<div class="col-12">
						<hr>
					</div>
					<div class="col-lg-12">
						<h3>Data Sekolah</h3>
						<div class="form-group">
							<label>Nama Sekolah</label>
							<input class="form-control" name="sekolah_nama" required>
						</div>
						<div class="form-group">
							<label>Alamat Sekolah</label>
							<input class="form-control" name="sekolah_alamat" required>
						</div>
						<div class="form-group">
							<label>Kota Sekolah</label>
							<select class="select2 form-control" name="sekolah_kota">
								@foreach($kota as $item)
								<option value="{{$item->nama}}" @if($item->nama == "KOTA SURABAYA") selected @endif>{{$item->nama}}</option>
								@endforeach
							</select>
						</div>
						<div class="form-group">
							<label>Cara Membayar</label>
							<div class="custom-control custom-radio">
								<input type="radio" id="cara_pembayaran_1" value="transfer" name="cara_pembayaran" class="custom-control-input" checked="">
								<label class="custom-control-label" for="cara_pembayaran_1">Transfer ke Bank BTN
								</label>
							</div>
							<div class="custom-control custom-radio">
								<input type="radio" id="cara_pembayaran_2" value="lo" name="cara_pembayaran" class="custom-control-input">
								<label class="custom-control-label" for="cara_pembayaran_2">Bayar di Liason Officer (LO)</label>
							</div>
						</div>
						<div class="form-group" id="form-lo-nama" style="display: none">
							<label>Nama Liason Officer (LO)</label>
							<input class="form-control" name="lo_nama" id="form-lo-nama-input">
						</div>
						<div style="border: solid 1px #ccc; padding: 10px;margin-bottom: 10px">
							<label>Cara Pembayaran Transfer</label>
							<ol>
								<li>
									Transfer ke Bank BTN dengan nomor rekening <strong>0001201610081388 </strong>  
									Atas nama <strong>Vivi Viona</strong>.
								</li>
								<li>
									Lalu konfirmasi pembayaran ke <strong>081234762002</strong> (Vivi) dengan Format  :
									<br>
									<strong>DDOKCILFKUHT21_Nama Peserta_Nama Sekolah_Nama Pengirim_Jumlah Pembayaran</strong>
									<br>
									Contoh : DOKCILFKUHT21_Dinda Putri_SD Hang Tuah Surabaya_Joko Sanjoyo_85.000.
								</li>
								<li>
									Mengirim foto bukti pembayaran untuk mendapatkan link grup <i>Whatsapp</i> peserta DOKCIL 2021.
								</li>
							</ol>

							<label>Note</label>
							<ol>
								<li>Nama yang tercantum dalam formulir pendaftaran adalah nama yang tercetak pada sertifikat.
								</li>
								<li>Pastikan seluruh data peserta yang tertulis adalah benar.
								</li>
							</ol>
						</div>
						<div style="margin-bottom: 50px;">
							<input type="checkbox" required id="setuju_syarat" name="setuju_syarat"> 
							<label for="setuju_syarat">Ya, saya setuju dan bersedia memenuhi <a href="javascript:void(0)" data-toggle="modal" data-target="#modalSyaratKetentuan"> ketentuan peserta</a> DOKCIL 2021.</label><br>
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
<div class="modal fade" id="modalSyaratKetentuan" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="exampleModalLabel">Syarat dan Ketentuan</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				<div class="text-center">
					<h5>
						KETENTUAN <br>
						PESERTA DOKCIL 2021
					</h5>
				</div>
				<ol>
					<li>
						Peserta mengikuti lomba atas kemauan sendiri dan tanpa paksaan dari siapapun dan pihak manapun serta telah mendapat persetujuan Orang Tua/Wali.
					</li>
					<li>
						Bersedia mengikuti lomba dengan secara mandiri, jujur dan penuh tanggungjawab.
					</li>
					<li>
						Tidak akan membantu, meminta bantuan dan atau bekerja sama dengan siapapun selama perlombaan berlangsung.
					</li>
					<li>
						Bersedia dan patuh mengikuti segala peraturan yang telah ditentukan Panitia dan mematuhi semua Keputusan Tim Juri atau Panitia. Apabila saya tidak mematuhi segala ketentuan tersebut, saya dan Orang Tua/Wali bersedia menerima konsekuensinya, sesuai dengan ketentuan yang berlaku. 
					</li>
					<li>
						Apabila terjadi masalah teknis menyangkut komputer/laptop/smartphone, listrik, internet/jaringan dan sarana lainnya, sepenuhnya menjadi tanggung jawab peserta.
					</li>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
				</div>
			</div>
		</div>
	</div>

	@endsection

	@section('js')
	<script type="text/javascript">
		$("input[name=cara_pembayaran]").change(function () {
			if(this.value == "lo"){
				$('#form-lo-nama').show();
				$("#form-lo-nama-input").attr('required','required');
			}
			else{
				$('#form-lo-nama').hide();
				$("#form-lo-nama-input").removeAttr('required');
				$("#form-lo-nama-input").val('');
			}
		});
	</script>

	@endsection