@extends('layouts.app')

@section('extra-css')
<link rel="stylesheet" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css">
<link rel="stylesheet" href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css">
<link rel="stylesheet" href="https://cdn.datatables.net/buttons/1.5.6/css/buttons.dataTables.min.css">
@endsection

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    <table id="myTable" class="table table-striped">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th colspan="5" class="text-center">Peserta 1</th>
                                <th colspan="5" class="text-center">Peserta 2</th>
                                <th colspan="5" class="text-center">Sekolah</th>
                                <th>Aksi</th>
                            </tr>
                            <tr>
                                <th>No</th>
                                <th>Nama</th>
                                <th>Gender</th>
                                <th>Kelas</th>
                                <th>No Telp</th>
                                <th>No Telp Wali</th>
                                <th>Nama</th>
                                <th>Gender</th>
                                <th>Kelas</th>
                                <th>No Telp</th>
                                <th>No Telp Wali</th>
                                <th>Nama Sekolah</th>
                                <th>Alamat Sekolah</th>
                                <th>Kota Sekolah</th>
                                <th>Telp Sekolah</th>
                                <th>Cara Pembayaran</th>
                                <th>Edit</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($peserta as $item)
                            <tr>
                                <td>{{$item->id}}</td>
                                <td>{{$item->peserta_1_nama}}</td>
                                <td>{{$item->peserta_1_gender}}</td>
                                <td>{{$item->peserta_1_kelas}}</td>
                                <td>{{$item->peserta_1_telp}}</td>
                                <td>{{$item->peserta_1_telp_wali}}</td>
                                <td>{{$item->peserta_2_nama}}</td>
                                <td>{{$item->peserta_2_gender}}</td>
                                <td>{{$item->peserta_2_kelas}}</td>
                                <td>{{$item->peserta_2_telp}}</td>
                                <td>{{$item->peserta_2_telp_wali}}</td>
                                <td>{{$item->sekolah_nama}}</td>
                                <td>{{$item->sekolah_alamat}}</td>
                                <td>{{$item->sekolah_kota}}</td>
                                <td>{{$item->sekolah_telp}}</td>
                                <td>{{$item->cara_pembayaran}} {{$item->lo_nama}}</td>
                                <td><a href="{{url('peserta')}}/{{$item->id}}/edit" class="btn btn-primary">Edit</a></td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('js')
<script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.5.6/js/dataTables.buttons.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.5.6/js/buttons.flash.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
<script src="https://cdn.datatables.net/buttons/1.5.6/js/buttons.html5.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.5.6/js/buttons.print.min.js"></script>
<script type="text/javascript">
    $(document).ready( function () {
        $('#myTable').DataTable( {
            "scrollX": true,
            dom: 'Bfrtip',
            buttons: [
            'excel',
            ]
        } );
    } );
</script>
@endsection