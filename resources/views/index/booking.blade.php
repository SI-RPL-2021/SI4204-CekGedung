@extends('layouts._app')

@section('title')
Perizinan Akses Gedung
@endsection

@section('css')
<link rel="stylesheet" type="text/css" href="assets/libs/bootstrap-material-datetimepicker/css/bootstrap-material-datetimepicker.css">
@endsection

@section('header')
Perizinan Akses Gedung
@endsection

@section('content')
<div class="row">
    <div class="col-12 col-lg-6">
        <p>Untuk Menjaga Keamanan dan Kenyamanan, Dimohon untuk melakukan perizinan terlebih dahulu dengan mengisi form sebagai berikut : </p>
        <form method="post">
            @csrf
            <div class="form-group">
                <label for="reason">Alasan Penggunaan Akses</label>
                <textarea class="form-control" name="reason" id="reason" cols="30" rows="2" ></textarea>
            </div>
            <div class="form-group">
                <label for="date-format">Jadwal Digunakan</label>
                <p class="mt-0">* Akan kadaluarsa selama 7 hari</p>
                <input type="text" id="date-format" class="form-control">
            </div>
            <div class="form-group">
                <label for="reason">Surat Keterangan Sehat COVID-19</label>
                <p class="mt-0">* *Dikarenakan sedang terjadi pandemi COVID-19, Dimohon untuk memberi surat Rapid/Swab/Antigen.</p>
                <input type="file" class="form-control">
            </div>
        </form>
        <a href="{{ route('success') }}" class="btn btn-info btn-block mt-5">
            Buat Izin
        </a>
    </div>
    <div class="col-12 col-lg-6 d-none d-sm-block">
        <img src="vector/permission.svg" width="100%">
    </div>
</div>
@endsection

@section('js')
<script src="assets/libs/moment/moment.js"></script>
<script src="assets/libs/bootstrap-material-datetimepicker/js/bootstrap-material-datetimepicker-custom.js"></script>
<script>
    $('#date-format').bootstrapMaterialDatePicker({
        format: 'dddd DD MMMM YYYY - HH:mm'
    });
</script>
@endsection
