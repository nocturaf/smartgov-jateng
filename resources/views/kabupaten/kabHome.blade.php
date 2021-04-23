@extends('layouts.default')

@section('content')
<div class="container py-4">
    <div class="row mx-3">
        <div class="col-2">
            <img class="img" src="images/gub.png" alt="" width="100%" height="auto">
        </div>
        <div class="col-8 text-center my-auto">
            <h3 class="text-danger pb-3 font-weight-bold">VISI</h3>
            <h5 class="font-weight-bold">"MENUJU JAWA TENGAH SEJAHTERA DAN BERDIKARI"</h5>
            <h5 class="text-muted font-weight-bold">TETEP MBOTEN KORUPSI, MBOTEN NGAPUSI</h5>
        </div>
        <div class="col-2">
            <img class="img" src="images/wagub.png" alt="" width="100%" height="auto">
        </div>
        <div class="col-4 offset-8 mt-5 mb-3">
            <label class="sr-only" for="inlineFormInputGroupUsername2">Pencarian Sektor</label>
            <div class="input-group mb-2 mr-sm-2">
                <div class="input-group-prepend">
                <div class="input-group-text"><em class="fas fa-search"></em></div>
                </div>
                <input type="text" class="form-control form-control-sm" id="inlineFormInputGroupUsername2" placeholder="Pencarian Sektor">
            </div>
        </div>
        <div class="col-3 px-2">
            <div class=" text-center shadow-2 rounded px-2 py-5">
                <div class="font-20 font-weight-bold">Sektor Pertanian</div>
                <img class="img" style="margin:48px 0px" src="images/pertanian.png" alt="" width="60%" height="auto">
                <div class="font-36">101,49</div>
                <div class="font-16 font-weight-bold">Nilai Tukar Petani</div>
            </div>
        </div>
        <div class="col-3 px-2">
            <div class=" text-center shadow-2 rounded px-2 py-5">
                <div class="font-20 font-weight-bold">Sektor Pertanian</div>
                <img class="img" style="margin:48px 0px" src="images/pertanian.png" alt="" width="60%" height="auto">
                <div class="font-36">101,49</div>
                <div class="font-16 font-weight-bold">Nilai Tukar Petani</div>
            </div>
        </div>
        <div class="col-3 px-2">
            <div class=" text-center shadow-2 rounded px-2 py-5">
                <div class="font-20 font-weight-bold">Sektor Pertanian</div>
                <img class="img" style="margin:48px 0px" src="images/pertanian.png" alt="" width="60%" height="auto">
                <div class="font-36">101,49</div>
                <div class="font-16 font-weight-bold">Nilai Tukar Petani</div>
            </div>
        </div>
        <div class="col-3 px-2">
            <div class=" text-center shadow-2 rounded px-2 py-5">
                <div class="font-20 font-weight-bold">Sektor Pertanian</div>
                <img class="img" style="margin:48px 0px" src="images/pertanian.png" alt="" width="60%" height="auto">
                <div class="font-36">101,49</div>
                <div class="font-16 font-weight-bold">Nilai Tukar Petani</div>
            </div>
        </div>
    </div>
</div>
@endsection

@push('before-style')
<style >
    .input-group-text{
        background-color: #fff !important;
        border-right: 0px solid white !important;
    }
    .form-control{
        border-left:0px !important
    }
    .form-control:focus {
        border-color: none !important;
        box-shadow: none !important;
    }
</style>
@endpush

