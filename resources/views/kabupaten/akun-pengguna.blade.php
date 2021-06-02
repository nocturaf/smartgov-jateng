@extends('layouts.default')

@section('content')
<div class="container-fluid py-4">
    <div class="font-24 font-weight-bold">Akun Pengguna</div>
    <div class="mt-4 border">
        <div class="row mx-0">
            <div class="w-50 p-5">
                <div class="font-20 font-weight-bold">Data Kedinasan <div class="grad-line"></div></div>
                <div class="font-18 font-weight-bold mt-3">Provinsi</div>
                <div class="font-18">Jawa Tengah</div>
                <div class="font-18 font-weight-bold mt-3">SKPD</div>
                <div class="font-18">Dinas Komunikasi dan Informatika</div>
                <div class="font-18 font-weight-bold mt-3">NIP</div>
                <div class="font-18">20201101201000</div>
            </div>
            <div class="w-50 p-5">
                <div class="font-20 font-weight-bold">Data Pribadi <div class="grad-line"></div></div>
                <div class="font-18 font-weight-bold mt-3">Nama</div>
                <div class="font-18">Diskominfo</div>
                <div class="font-18 font-weight-bold mt-3">Email</div>
                <div class="font-18">jatengprov@gmail.com</div>
                <div class="font-18 font-weight-bold mt-3">Nomor Telepon/Handphone</div>
                <div class="font-18">-</div>
                <div class="font-18 font-weight-bold mt-3">Level</div>
                <div class="font-18">Pengguna Kabupaten/Kota</div>
            </div>
            <div class="w-100 text-right pb-3">
                <a href="{{route('ubah-password')}}" class="btn btn-danger rounded mr-3">Ubah Password</a>
            </div>
        </div>
    </div>
</div>

@endsection

@push('before-style')
<style>
    .grad-line {
        width: 32px;
        height: 5px;
        background: linear-gradient(258.28deg, #E53935 4.73%, #575988 94.22%);
        border-radius: 10px;
    }

</style>
@endpush

@push('after-script')
<script>

</script>
@endpush
