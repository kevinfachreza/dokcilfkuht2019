<section class="section section-default border-0" id="materi" style="background-color:#EFEAE4">
	<div class="container">
		<div class="row">
			<div class="col-12 text-center mb-2">
				<h2 class="font-weight-bold text-6">Materi</h2>
			</div>

			@php
				$array_judul = [
									'PHBS & Kesehatan Komunitas',
									'Sistem Pencernaan',
									'Sistem Pernapasan',
									'Sistem Peredaran Darah',
									'Sistem Gerak',
									'Sistem Indra',
									'Virus Corona',
									'P3K'
								];
				$array_file 	= [
									'1-phbs-dan-kesehatan-komunitas-dokcil-2021.pptx',
									'2-sistem-pencernaan-dokcil-2021.pptx',
									'3-sistem-pernapasan-dokcil-2021.pptx',
									'4-sistem-peredaran-darah-dokcil-2021.pptx',
									'5-sistem-gerak-dokcil-2021.pptx',
									'6-sistem-indra-dokcil-2021.pptx',
									'7-virus-corona-dokcil-2021.pptx',
									'8-p3k-dokcil-2021.pptx',
								];
			@endphp

			@foreach($array_judul as $index => $materi)
			<div class="col-md-4 col-lg-4 col-xl-3 mb-20">
				<div class="card">
					<div class="card-body text-center">
						<h4 class="card-title mb-4 text-4 font-weight-normal">{{$materi}}</h4>
						<a href="{{url('')}}/download/2021/materi/{{$array_file[$index]}}" download>Download</a>
					</div>
				</div>
			</div>
			@endforeach
		</div>
	</div>
</section>