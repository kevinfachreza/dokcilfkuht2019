<div class="container" style="padding-top:20px" id="pembekalan">
    <div class="row">
        <div class="col-12 text-center mb-2">
            <h2 class="font-weight-bold text-6">Pembekalan</h2>
        </div>

        @php
                $array_judul = [
                                    'Ketentuan Karya Esai',
                                    'Contoh Karya Esai - 1',
                                    'Contoh Karya Esai - 2'
                                ];
                $array_file     = [
                                    'ketentuan_karya_esai.pdf',
                                    'contoh_karya_esai_1.pdf',
                                    'contoh_karya_esai_2.pdf'
                                ];
            @endphp

            @foreach($array_judul as $index => $judul)
            <div class="col-md-4 col-lg-4 col-xl-3 mb-20">
                <div class="card">
                    <div class="card-body text-center">
                        <h4 class="card-title mb-4 text-4 font-weight-normal">{{$judul}}</h4>
                        <a href="{{url('')}}/download/2021/pembekalan/{{$array_file[$index]}}" class="btn btn-primary btn-modern" download>Download</a>
                    </div>
                </div>
            </div>

            @endforeach

    </div>
</div>