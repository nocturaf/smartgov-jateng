@extends('layouts.default')

@section('content')
<div class="container py-4">
    <div class="text-center">
        <ul class="tabs d-flex mt-3">
            <li class="tab-link tab-custom mx-0 text-center" data-tab="tab-1">
                <img src="images/btn-icons/tanaman-pangan2.png" alt="" class="img">
                <br>
                <p style="text-align:center;white-space: nowrap;width: 40px;text-overflow: clip;left: 4px;position: relative;">Tanaman Pangan</p>

            </li>
            <li class="tab-link tab-custom mx-0 text-center" data-tab="tab-2">
                <img src="images/btn-icons/hama-dan-penyakit.png" alt="" class="img">
                <br>
                <p style="text-align:center;white-space: nowrap;width: 40px;text-overflow: clip;left: -14px;position: relative;">Hama dan Penyakit</p>

            </li>
            <li class="tab-link tab-custom mx-0 text-center current" data-tab="tab-3">
                <img src="images/btn-icons/hortikultura2.png" alt="" class="img">
                <br>
                <p style="text-align:center;white-space: nowrap;width: 40px;text-overflow: clip;left: -14px;position: relative;">Hortikultura</p>
            </li>
            <li class="tab-link tab-custom mx-0 text-center" data-tab="tab-4">
                <img src="images/btn-icons/alat-pertanian.png" alt="" class="img">
                <br>
                <p style="text-align:center;white-space: nowrap;width: 40px;text-overflow: clip;left: -8px;position: relative;">Alat Pertanian</p>
            </li>
            <li class="tab-link tab-custom mx-0 text-center" data-tab="tab-5">
                <img src="images/btn-icons/produksi.png" alt="" class="img">
                <br>
                <p>Produksi</p>
            </li>
        </ul>
    </div>
    <div id="tab-1" class="tab-content mt-4 p-3 border">
        <div class="font-24 font-weight-bold font-lato text-center" style="color:#B44451">Tanaman Pangan</div>
        <div class="text-center p-5">
            <script type='text/javascript' src='https://smartanalytics.udata.id/javascripts/api/viz_v1.js'></script><div class='tableauPlaceholder' style='width: 100%; height: 100%;'><object class='tableauViz' width="100%" height='893' style='display:none;'><param name='host_url' value='https%3A%2F%2Fsmartanalytics.udata.id%2F' /> <param name='embed_code_version' value='3' /> <param name='site_root' value='' /><param name='name' value='DashTanamanPangan_16231344456280&#47;TanamanPangan' /><param name='tabs' value='no' /><param name='toolbar' value='no' /><param name='showAppBanner' value='false' /></object></div>
        </div>
    </div>
    <div id="tab-2" class="tab-content mt-4 p-3 border">
        <div class="font-24 font-weight-bold font-lato text-center" style="color:#B44451">Hama dan Penyakit</div>
        <div class="text-center p-5">
        <script type='text/javascript' src='https://smartanalytics.udata.id/javascripts/api/viz_v1.js'></script><div class='tableauPlaceholder' style='width: 100%; height: 100%;'><object class='tableauViz' width='100%' height='400' style='display:none;'><param name='host_url' value='https%3A%2F%2Fsmartanalytics.udata.id%2F' /> <param name='embed_code_version' value='3' /> <param name='site_root' value='' /><param name='name' value='SheeetHamadanPenyakit&#47;HamadanPenyakit' /><param name='tabs' value='no' /><param name='toolbar' value='no' /><param name='showAppBanner' value='false' /></object></div>
        </div>
    </div>
    <div id="tab-3" class="tab-content current mt-4 p-3 border">
        <div class="font-24 font-weight-bold font-lato text-center" style="color:#B44451">Hortikultura</div>
        <div class="text-center p-5">
            <script type='text/javascript' src='https://smartanalytics.udata.id/javascripts/api/viz_v1.js'></script><div class='tableauPlaceholder' style='width: 100%; height: 2027px;'><object class='tableauViz' width='100%' height='2027' style='display:none;'><param name='host_url' value='https%3A%2F%2Fsmartanalytics.udata.id%2F' /> <param name='embed_code_version' value='3' /> <param name='site_root' value='' /><param name='name' value='DashTanamanPangan_16231344456280&#47;TanamanPangan' /><param name='tabs' value='no' /><param name='toolbar' value='no' /><param name='showAppBanner' value='false' /></object></div>
        </div>
    </div>
    <div id="tab-4" class="tab-content mt-4 p-3 border">
        <div class="font-24 font-weight-bold font-lato text-center" style="color:#B44451">Alat Pertanian</div>
        <div class="text-center p-5">
        <script type='text/javascript' src='https://smartanalytics.udata.id/javascripts/api/viz_v1.js'></script><div class='tableauPlaceholder' style='width: 100%; height: 100%;'><object class='tableauViz' width='100%' height='400' style='display:none;'><param name='host_url' value='https%3A%2F%2Fsmartanalytics.udata.id%2F' /> <param name='embed_code_version' value='3' /> <param name='site_root' value='' /><param name='name' value='SheeetAlatPertanian&#47;AlatPertanian' /><param name='tabs' value='no' /><param name='toolbar' value='no' /><param name='showAppBanner' value='false' /></object></div>
        </div>
    </div>
    <div id="tab-5" class="tab-content mt-4 p-3 border">
        <div class="font-24 font-weight-bold font-lato text-center" style="color:#B44451">Produksi</div>
        <div class="text-center p-5">
        <script type='text/javascript' src='https://smartanalytics.udata.id/javascripts/api/viz_v1.js'></script><div class='tableauPlaceholder' style='width: 100%; height: 100%;'><object class='tableauViz' width='100%' height='400' style='display:none;'><param name='host_url' value='https%3A%2F%2Fsmartanalytics.udata.id%2F' /> <param name='embed_code_version' value='3' /> <param name='site_root' value='' /><param name='name' value='SheeetProduksi&#47;Produksi' /><param name='tabs' value='no' /><param name='toolbar' value='no' /><param name='showAppBanner' value='false' /></object></div>
        </div>
    </div>
    
</div>

@endsection

@push('before-style')
<style>
.tab-dashboard, .dashboardSpacer{
    height: 277px !important;
}
#viz-client-container{
    height: 277px !important;
}
#dashboard-spacer{
    height: 277px !important;
}
</style>
@endpush

@push('after-script')
<script>
</script>
@endpush
