@extends('layouts.default')

@section('content')
<div class="container-fluid p-4">
    <div class="bg-overlay-black text-white p-5">
        <div class="font-24 font-weight-bold">
            <div class="grad-line"></div>
            MISI 4
        </div>
        <div class="font-20 pt-4">
            “Menjadikan rakyat Jawa Tengah lebih sehat, lebih pintar, lebih berbudaya, dan mencintai lingkungan.”
        </div>
    </div>
    <div class="rounded shadow-2 mt-5 px-5 py-4">
        <div class="font-20 font-weight-bold">Program Unggulan</div>
        <div class="font-18 pt-4">
            <ul>
                <li>Festival seni serta pengembangan infrastruktur olahraga, rumah kebudayaan dan kepedulian lingkungan.</li>
                <li>Sekolah tanpa sekat.</li>
                <li>Pelatihan tentang gender, anti korupsi, dan magang gubernur untuk siswa SMA/SMK.</li>
                <li>Rumah sakit tanpa dinding.</li>
                <li>Bantuan sekolah swasta, ponpes, madrasah dan difabel.</li>
            </ul>
        </div>
    </div>

    <div class="row mt-4">
        <div class="col-lg-12 pb-4">
            <div class="font-20 font-weight-bold">Grafik Data</div>
        </div>
        <div class="col-lg-12">
            <div class="shadow-2">
                <div class="mis-1-grad">
                    <div class="font-18">Rata-rata Lama Sekolah</div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 p-2">
                    <script type='text/javascript' src='https://smartanalytics.udata.id/javascripts/api/viz_v1.js'></script><div class='tableauPlaceholder' style='width: 100%; height: 100%;'><object class='tableauViz' width='100%' height='400' style='display:none;'><param name='host_url' value='https%3A%2F%2Fsmartanalytics.udata.id%2F' /> <param name='embed_code_version' value='3' /> <param name='site_root' value='' /><param name='name' value='JABARJATENG&#47;ALL-Rata-rataLamaSekolah' /><param name='tabs' value='no' /><param name='toolbar' value='no' /><param name='showAppBanner' value='false' /></object></div>
                    <p class="pt-3 pl-3">Sumber : Dummy</p>
                </div>
            </div>
        </div>
        <div class="col-lg-12 mt-4">
            <div class="shadow-2">
                <div class="mis-1-grad">
                    <div class="font-18">Angka Harapan Hidup</div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 p-2">
                    <script type='text/javascript' src='https://smartanalytics.udata.id/javascripts/api/viz_v1.js'></script><div class='tableauPlaceholder' style='width: 100%; height: 100%;'><object class='tableauViz' width='100%' height='400' style='display:none;'><param name='host_url' value='https%3A%2F%2Fsmartanalytics.udata.id%2F' /> <param name='embed_code_version' value='3' /> <param name='site_root' value='' /><param name='name' value='JABARJATENG&#47;AngkaHarapanHidup' /><param name='tabs' value='no' /><param name='toolbar' value='no' /><param name='showAppBanner' value='false' /></object></div>
                    <p class="pt-3 pl-3">Sumber : Dummy</p>
                </div>
            </div>
        </div>
        <div class="col-lg-12 mt-4">
            <div class="shadow-2">
                <div class="mis-1-grad">
                    <div class="font-18">Indeks Pembangunan Gender (IPG)</div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 p-2">
                    <script type='text/javascript' src='https://smartanalytics.udata.id/javascripts/api/viz_v1.js'></script><div class='tableauPlaceholder' style='width: 100%; height: 100%;'><object class='tableauViz' width='100%' height='400' style='display:none;'><param name='host_url' value='https%3A%2F%2Fsmartanalytics.udata.id%2F' /> <param name='embed_code_version' value='3' /> <param name='site_root' value='' /><param name='name' value='JABARJATENG&#47;indeksPembangunangender' /><param name='tabs' value='no' /><param name='toolbar' value='no' /><param name='showAppBanner' value='false' /></object></div>
                    <p class="pt-3 pl-3">Sumber : Dummy</p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@push('before-style')
<style>
    .bg-overlay-black {
        background-color: rgba(0, 0, 0, 0.7);
        background-image: url("images/profil-page/bg-dark.png");
        background-repeat: no-repeat;
        background-size: cover;
        background-position: center center;
        border-radius: 10px;
    }
    .grad-line {
        width: 27px;
        height: 5px;
        background: linear-gradient(258.28deg, #E53935 4.73%, #575988 94.22%);
        border-radius: 10px;
    }
    .mis-1-grad {
    position: relative;
    bottom: 15px;
    left: 30px;
    background-image: linear-gradient(to right, #575988  5%, #E53935 95%); 
    width: max-content;
    border-radius: 8px;
    padding: 5px 15px 5px 15px;
    color: white;
    text-align: center;
}
</style>
@endpush

@push('after-script')
<script type="text/javascript">
    
</script>
@endpush
