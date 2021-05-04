@extends('layouts.default')

@section('content')
<div class="container py-4">
    <div class="text-center">
        <ul class="tabs d-flex mt-3">
            <li class="tab-link tab-custom current mx-0 text-center" data-tab="tab-1">
                <img src="images/btn-icons/ntp.png" alt="" class="img">
                <br>
                <p>NTP</p>
            </li>
            <li class="tab-link tab-custom mx-0 text-center" data-tab="tab-2" style="width:84px">
                <img src="images/btn-icons/perhutani.png" alt="" class="img">
                <br>
                <p style="text-align:center;white-space: nowrap;width: 84px;text-overflow: clip;left: -80px;position: relative;">Grafik Kehutanan, Perikana, Pertanian</p>
            </li>
        </ul>
    </div>
    <div id="tab-1" class="tab-content mt-4 p-3 border current">
        <div class="font-24 font-weight-bold font-lato text-center" style="color:#B44451">Perkembangan Nilai Tukar Petani</div>
        <div class="font-10 font-weight-bold font-lato text-center" style="color:#B44451">Berita Resmi Statistik No. 02/01/33/Th. XV, 4 Januari 2021</div>
        <div class="row mt-5 mx-0">
            <div class="col p-0 my-auto">
                <div class="row mx-0 text-center" style="border: 2px solid #B44451; border-radius:20px; color: #B44451">
                    <div class="w-25 px-3"><div class="font-24 rounded-circle font-weight-bold px-3 position-relative" style="background-color: #fff;border: 2px solid #B44451; width:fit-content; top:-20px">lt</div></div>
                    <div class="w-75 pl-3 text-left py-2 font-10 font-weight-bold">Index harga yang diterima</div>
                    <div class="col-5 p-0 font-24 font-weight-bold">109,24<br><div class="font-8">November</div></div>
                    <div class="col-2 p-0 text-danger my-auto"><div class='font-24 m-0 p-0 fas fa-sort-down'></div></div>
                    <div class="col-5 p-0 pb-2 font-24 font-weight-bold">108,94<br><div class="font-8">Desember</div></div>
                </div>
                <div class="row mx-0 mt-5 text-center" style="border: 2px solid #B44451; border-radius:20px; color: #B44451">
                    <div class="w-25 px-3">
                        <div class="font-24 rounded-circle font-weight-bold px-3 position-relative" style="background-color: #fff;border: 2px solid #B44451; width:fit-content; top:-20px">lb</div>
                    </div>
                    <div class="w-75 pl-3 text-left py-2 font-10 font-weight-bold">Index harga yang dijual</div>
                    <div class="col-5 p-0 font-24 font-weight-bold">106,90<br><div class="font-8">November</div></div>
                    <div class="col-2 p-0 text-success my-auto"><div class='font-24 m-0 p-0 fas fa-caret-up'></div></div>
                    <div class="col-5 p-0 pb-2 font-24 font-weight-bold">107,34<br><div class="font-8">Desember</div></div>
                </div>
            </div>
            <div class="col-5 p-3">
                <img src="images/ilustrasi-petani.png" alt="" class="img" width="100%">
            </div>
            <div class="col my-auto">
                <div class="row mx-0">
                    <div class="col-5 my-auto p-0 font-24">
                        <div class="rounded-circle py-4 px-1" style="border: 2px solid #B44451; color: #B44451;width:fit-content;">
                            <div class="align-middle align-self-center">101,49</div>
                        </div>
                    </div>
                    <div class="col-7 my-auto font-36 font-weight-bold" style="color: #B44451">NTP* <div class="font-14">Desember</div></div>
                    <div class="col-5 my-auto pt-4 px-0 font-24">
                        <div class="rounded-circle py-4 px-1" style="border: 2px solid #B44451; color: #B44451;width:fit-content;">
                            <div class="align-middle align-self-center">101,49</div>
                        </div>
                    </div>
                    <div class="col-7 pt-4 my-auto font-36 font-weight-bold" style="color: #B44451">NTP* <div class="font-14">November</div></div>
                </div>
            </div>
        </div>
        <div class="row mx-0 mt-5">
            <div class="col-8 offset-2 text-center font-weight-bold" style="color:#B44451">
                <div class="font-16">NTP SUB SEKTOR DESEMBER 2020</div>
                <div class="row mt-4 mx-0">
                    <div class="col">
                        <img src="images/tanaman-pangan.png" alt="" class="img" width="80%">
                        <div class="font-8">TANAMAN PANGAN</div>
                        <div class='font-24 text-danger fas fa-sort-down'></div>
                        <div class='font-24'>-0,82%</div>
                    </div>
                    
                    <div class="col">
                        <img src="images/hortikultura.png" alt="" class="img" width="80%">
                        <div class="font-8">HORTIKULTURA</div>
                        <div class='font-24 text-danger fas fa-sort-down'></div>
                        <div class='font-24'>-1,87%</div>
                    </div>
                    
                    <div class="col">
                        <img src="images/perkebunan.png" alt="" class="img" width="80%">
                        <div class="font-8">PERKEBUNAN</div>
                        <div class='font-24 text-success fas fa-caret-up'></div>
                        <div class='font-24'>-0,43%</div>
                    </div>
                    
                    <div class="col">
                        <img src="images/peternakan.png" alt="" class="img" width="80%">
                        <div class="font-8">PETERNAKAN</div>
                        <div class='font-24 text-success fas fa-caret-up'></div>
                        <div class='font-24'>-0,24%</div>
                    </div>
                    
                    <div class="col">
                        <img src="images/perikanan.png" alt="" class="img" width="80%">
                        <div class="font-8">PERIKANAN</div>
                        <div class='font-24 text-success fas fa-caret-up'></div>
                        <div class='font-24'>-0,92%</div>
                    </div>
                    
                </div>
            </div>
        </div>
        <div class="font-12 mt-3 text-right font-weight-bold" style="color:#B44451">
            *NTP : Nilai Tukar Petani
        </div>
    </div>
    <div id="tab-2" class="tab-content mt-4">
        tab 2
    </div>
</div>

@endsection

@push('before-style')
<style>
</style>
@endpush

@push('after-script')
<script>
</script>
@endpush
