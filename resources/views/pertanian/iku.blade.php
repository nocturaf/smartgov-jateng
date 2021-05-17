@extends('layouts.default')

@section('content')
<div class="container-fluid py-4">
    <div class="text-center">
        <ul class="tabs d-flex mt-3">
            <li class="tab-link tab-custom current mx-0 text-center" data-tab="tab-1">
                <img src="images/btn-icons/ntp.png" alt="" class="img">
                <br>
                <p>NTP</p>
            </li>
            <li class="tab-link tab-custom  mx-0 text-center" data-tab="tab-2" style="width:84px">
                <img src="images/btn-icons/perhutani.png" alt="" class="img">
                <br>
                <p style="text-align:center;white-space: nowrap;width: 84px;text-overflow: clip;left: -80px;position: relative;">Grafik Kehutanan, Perikana, Pertanian</p>
            </li>
        </ul>
    </div>
    <div id="tab-1" class="tab-content current mt-4 p-3 border">
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
            <div class="col-5 p-3 text-center">
                <img src="images/ilustrasi-petani.png" alt="" class="img" width="80%">
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
        <div class="font-24 font-weight-bold font-lato text-center" style="color:#B44451">Grafik Pertumbuhan Sektor Kehutanan, Perikanan, dan Pertanian</div>

        <div class="row mt-5 mx-0">
            <div class="col-2 text-center font-12 text-white font-weight-bold py-2" style="background-color:#BF0404">Perhutanan</div>
            <div class="col-7 font-10 font-weight-bold py-2" style="background-color:#E0E0E0; border-top-right-radius: 10px">Harga Rata-Rata Penjualan Dalam Negeri Hutan Kayu dan Non Kayu </div>
            <div class="col-12 border text-center p-5">
                <!-- <img src="images/sample-diagram.png" alt="" class="img w-100"> -->
                <div class='tableauPlaceholder' id='viz1620630719003' style='position: relative'><noscript><a href='#'><img alt='Dash Perhutanan ' src='https:&#47;&#47;public.tableau.com&#47;static&#47;images&#47;Da&#47;DashPerhutanan&#47;DashPerhutanan&#47;1_rss.png' style='border: none' /></a></noscript><object class='tableauViz'  style='display:none;'><param name='host_url' value='https%3A%2F%2Fpublic.tableau.com%2F' /> <param name='embed_code_version' value='3' /> <param name='site_root' value='' /><param name='name' value='DashPerhutanan&#47;DashPerhutanan' /><param name='tabs' value='no' /><param name='toolbar' value='yes' /><param name='static_image' value='https:&#47;&#47;public.tableau.com&#47;static&#47;images&#47;Da&#47;DashPerhutanan&#47;DashPerhutanan&#47;1.png' /> <param name='animate_transition' value='yes' /><param name='display_static_image' value='yes' /><param name='display_spinner' value='yes' /><param name='display_overlay' value='yes' /><param name='display_count' value='yes' /><param name='language' value='en' /><param name='filter' value='publish=yes' /></object></div>                <script type='text/javascript'>                    var divElement = document.getElementById('viz1620630719003');                    var vizElement = divElement.getElementsByTagName('object')[0];                    if ( divElement.offsetWidth > 800 ) { vizElement.style.width='100%';vizElement.style.height=(divElement.offsetWidth*0.75)+'px';} else if ( divElement.offsetWidth > 500 ) { vizElement.style.width='100%';vizElement.style.height=(divElement.offsetWidth*0.75)+'px';} else { vizElement.style.width='100%';vizElement.style.height='727px';}                     var scriptElement = document.createElement('script');                    scriptElement.src = 'https://public.tableau.com/javascripts/api/viz_v1.js';                    vizElement.parentNode.insertBefore(scriptElement, vizElement);                </script>
            </div>
        </div>
        <div class="row mt-5 mx-0">
            <div class="col-2 text-center font-12 text-white font-weight-bold py-2" style="background-color:#BF0404">Perikanan</div>
            <div class="col-7 font-10 font-weight-bold py-2" style="background-color:#E0E0E0; border-top-right-radius: 10px">Banyaknya Tempat Pelelangan Ikan (TPI) Menurut Kabupaten/Kota di Jawa Tengah</div>
            <div class="col-12 border text-center p-5">
                <!-- <img src="images/sample-diagram.png" alt="" class="img w-100"> -->
                <div class='tableauPlaceholder' id='viz1620630610925' style='position: relative'><noscript><a href='#'><img alt='Dash Perikanan ' src='https:&#47;&#47;public.tableau.com&#47;static&#47;images&#47;Da&#47;DashPerikanan&#47;DashPerikanan&#47;1_rss.png' style='border: none' /></a></noscript><object class='tableauViz'  style='display:none;'><param name='host_url' value='https%3A%2F%2Fpublic.tableau.com%2F' /> <param name='embed_code_version' value='3' /> <param name='site_root' value='' /><param name='name' value='DashPerikanan&#47;DashPerikanan' /><param name='tabs' value='no' /><param name='toolbar' value='yes' /><param name='static_image' value='https:&#47;&#47;public.tableau.com&#47;static&#47;images&#47;Da&#47;DashPerikanan&#47;DashPerikanan&#47;1.png' /> <param name='animate_transition' value='yes' /><param name='display_static_image' value='yes' /><param name='display_spinner' value='yes' /><param name='display_overlay' value='yes' /><param name='display_count' value='yes' /><param name='language' value='en' /><param name='filter' value='publish=yes' /></object></div>                <script type='text/javascript'>                    var divElement = document.getElementById('viz1620630610925');                    var vizElement = divElement.getElementsByTagName('object')[0];                    if ( divElement.offsetWidth > 800 ) { vizElement.style.width='100%';vizElement.style.height=(divElement.offsetWidth*0.75)+'px';} else if ( divElement.offsetWidth > 500 ) { vizElement.style.width='100%';vizElement.style.height=(divElement.offsetWidth*0.75)+'px';} else { vizElement.style.width='100%';vizElement.style.height='727px';}                     var scriptElement = document.createElement('script');                    scriptElement.src = 'https://public.tableau.com/javascripts/api/viz_v1.js';                    vizElement.parentNode.insertBefore(scriptElement, vizElement);                </script>
            </div>
        </div>
        <div class="row mt-5 mx-0">
            <div class="col-2 text-center font-12 text-white font-weight-bold py-2" style="background-color:#BF0404">Pertanian</div>
            <div class="col-7 font-10 font-weight-bold py-2" style="background-color:#E0E0E0; border-top-right-radius: 10px">Produksi Buah-Buahan dan Sayuran Tahunan Menurut Jenis Tanaman di Provinsi Jawa Tengah</div>
            <div class="col-12 border text-center p-5">
                <!-- <img src="images/sample-diagram.png" alt="" class="img w-100"> -->
                <div class='tableauPlaceholder' id='viz1620630658189' style='position: relative'><noscript><a href='#'><img alt='Dash Pertanian ' src='https:&#47;&#47;public.tableau.com&#47;static&#47;images&#47;Da&#47;DashPertanian&#47;DashPertanian&#47;1_rss.png' style='border: none' /></a></noscript><object class='tableauViz'  style='display:none;'><param name='host_url' value='https%3A%2F%2Fpublic.tableau.com%2F' /> <param name='embed_code_version' value='3' /> <param name='site_root' value='' /><param name='name' value='DashPertanian&#47;DashPertanian' /><param name='tabs' value='no' /><param name='toolbar' value='yes' /><param name='static_image' value='https:&#47;&#47;public.tableau.com&#47;static&#47;images&#47;Da&#47;DashPertanian&#47;DashPertanian&#47;1.png' /> <param name='animate_transition' value='yes' /><param name='display_static_image' value='yes' /><param name='display_spinner' value='yes' /><param name='display_overlay' value='yes' /><param name='display_count' value='yes' /><param name='language' value='en' /><param name='filter' value='publish=yes' /></object></div>                <script type='text/javascript'>                    var divElement = document.getElementById('viz1620630658189');                    var vizElement = divElement.getElementsByTagName('object')[0];                    if ( divElement.offsetWidth > 800 ) { vizElement.style.width='100%';vizElement.style.height=(divElement.offsetWidth*0.75)+'px';} else if ( divElement.offsetWidth > 500 ) { vizElement.style.width='100%';vizElement.style.height=(divElement.offsetWidth*0.75)+'px';} else { vizElement.style.width='100%';vizElement.style.height='727px';}                     var scriptElement = document.createElement('script');                    scriptElement.src = 'https://public.tableau.com/javascripts/api/viz_v1.js';                    vizElement.parentNode.insertBefore(scriptElement, vizElement);                </script>
            </div>
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
