<section class="section section-default border-0" id="hasil-tm" style="background-color:#EFEAE4">
    <div class="container">
        <div class="row j">
            <div class="col-12 text-center mb-2">
                <h2 class="font-weight-bold text-6">Hasil TM</h2>
            </div>

            @php
                $array_judul = [
                                    'Ketentuan Umum',
                                    'Ketentuan Babak Penyisihan',
                                    'Ketentuan Quarter Final',
                                    'Ketentuan Final',
                                    'Ketentuan Juara'
                                ];
                $array_file     = [
                                    'ketentuan_umum.pptx',
                                    'babak_penyisihan_dokcil_2021.pptx',
                                    'babak_quarter_final_dokcil_2021.pptx',
                                    'final_dokcil_dokcil_2021.pptx',
                                    'ketentuan_juara_dokcil_2021.zip',
                                ];
            @endphp

            @foreach($array_judul as $index => $hasil_tm)
            <div class="col-md-4 col-lg-4 col-xl-3 mb-20">
                <div class="card">
                    <div class="card-body text-center">
                        <h4 class="card-title mb-4 text-4 font-weight-normal">{{$hasil_tm}}</h4>
                        <a href="{{url('')}}/download/2021/hasil-tm/{{$array_file[$index]}}" download>Download</a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>