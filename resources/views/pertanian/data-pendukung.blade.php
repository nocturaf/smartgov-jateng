@extends('layouts.default')

@section('content')
<div class="container py-4">
    <div class="text-center">
        <ul class="tabs d-flex mt-3">
            <li class="tab-link tab-custom mx-0 text-center" data-tab="tab-1">
                <img src="images/btn-icons/hortikultura2.png" alt="" class="img">
                <br>
                <p style="text-align:center;white-space: nowrap;width: 40px;text-overflow: clip;left: 4px;position: relative;">Hortikultura</p>

            </li>
            <li class="tab-link tab-custom mx-0 text-center" data-tab="tab-2">
                <img src="images/btn-icons/hama-dan-penyakit.png" alt="" class="img">
                <br>
                <p style="text-align:center;white-space: nowrap;width: 40px;text-overflow: clip;left: -14px;position: relative;">Hama dan Penyakit</p>

            </li>
            <li class="tab-link tab-custom mx-0 text-center current" data-tab="tab-3">
                <img src="images/btn-icons/alat-pertanian.png" alt="" class="img">
                <br>
                <p style="text-align:center;white-space: nowrap;width: 40px;text-overflow: clip;left: -8px;position: relative;">Alat Pertanian</p>
            </li>
            <li class="tab-link tab-custom mx-0 text-center" data-tab="tab-4">
                <img src="images/btn-icons/produksi.png" alt="" class="img">
                <br>
                <p>Produksi</p>
            </li>
            <li class="tab-link tab-custom mx-0 text-center" data-tab="tab-5" style="width:84px">
                <img src="images/btn-icons/tanaman-pangan2.png" alt="" class="img">
                <br>
                <p style="text-align:center;white-space: nowrap;width: 40px;text-overflow: clip;left: -14px;position: relative;">Tanaman Pangan</p>
            </li>
        </ul>
    </div>
    <div id="tab-1" class="tab-content mt-4 p-3 border">
        <div class="font-24 font-weight-bold font-lato text-center" style="color:#B44451">Hortikultura</div>
        <div class="text-center p-5">
            <div class='tableauPlaceholder' id='viz1621904142939' style='position: relative'><noscript><a href='#'><img alt='Tanaman Pangan ' src='https:&#47;&#47;public.tableau.com&#47;static&#47;images&#47;Da&#47;DashTanamanPangan&#47;TanamanPangan&#47;1_rss.png' style='border: none' /></a></noscript><object class='tableauViz'  style='display:none;'><param name='host_url' value='https%3A%2F%2Fpublic.tableau.com%2F' /> <param name='embed_code_version' value='3' /> <param name='site_root' value='' /><param name='name' value='DashTanamanPangan&#47;TanamanPangan' /><param name='tabs' value='no' /><param name='toolbar' value='yes' /><param name='static_image' value='https:&#47;&#47;public.tableau.com&#47;static&#47;images&#47;Da&#47;DashTanamanPangan&#47;TanamanPangan&#47;1.png' /> <param name='animate_transition' value='yes' /><param name='display_static_image' value='yes' /><param name='display_spinner' value='yes' /><param name='display_overlay' value='yes' /><param name='display_count' value='yes' /><param name='language' value='en' /><param name='filter' value='publish=yes' /></object></div>                <script type='text/javascript'>                    var divElement = document.getElementById('viz1621904142939');                    var vizElement = divElement.getElementsByTagName('object')[0];                    if ( divElement.offsetWidth > 800 ) { vizElement.style.width='800px';vizElement.style.height='827px';} else if ( divElement.offsetWidth > 500 ) { vizElement.style.width='800px';vizElement.style.height='827px';} else { vizElement.style.width='100%';vizElement.style.height='927px';}                     var scriptElement = document.createElement('script');                    scriptElement.src = 'https://public.tableau.com/javascripts/api/viz_v1.js';                    vizElement.parentNode.insertBefore(scriptElement, vizElement);                </script>
        </div>
    </div>
    <div id="tab-2" class="tab-content mt-4 p-3 border">
        <div class="font-24 font-weight-bold font-lato text-center" style="color:#B44451">Hama dan Penyakit</div>
        <div class="text-center p-5">
            <div class='tableauPlaceholder' id='viz1621495835107' style='position: relative'><noscript><a href='#'><img alt='Dash Hama dan Penyakit ' src='https:&#47;&#47;public.tableau.com&#47;static&#47;images&#47;Da&#47;DashHamadanPenyakit&#47;DashHamadanPenyakit&#47;1_rss.png' style='border: none' /></a></noscript><object class='tableauViz'  style='display:none;'><param name='host_url' value='https%3A%2F%2Fpublic.tableau.com%2F' /> <param name='embed_code_version' value='3' /> <param name='site_root' value='' /><param name='name' value='DashHamadanPenyakit&#47;DashHamadanPenyakit' /><param name='tabs' value='no' /><param name='toolbar' value='yes' /><param name='static_image' value='https:&#47;&#47;public.tableau.com&#47;static&#47;images&#47;Da&#47;DashHamadanPenyakit&#47;DashHamadanPenyakit&#47;1.png' /> <param name='animate_transition' value='yes' /><param name='display_static_image' value='yes' /><param name='display_spinner' value='yes' /><param name='display_overlay' value='yes' /><param name='display_count' value='yes' /><param name='language' value='en' /><param name='filter' value='publish=yes' /></object></div>                <script type='text/javascript'>                    var divElement = document.getElementById('viz1621495835107');                    var vizElement = divElement.getElementsByTagName('object')[0];                    if ( divElement.offsetWidth > 800 ) { vizElement.style.width='800px';vizElement.style.height='827px';} else if ( divElement.offsetWidth > 500 ) { vizElement.style.width='800px';vizElement.style.height='827px';} else { vizElement.style.width='100%';vizElement.style.height='727px';}                     var scriptElement = document.createElement('script');                    scriptElement.src = 'https://public.tableau.com/javascripts/api/viz_v1.js';                    vizElement.parentNode.insertBefore(scriptElement, vizElement);                </script>
        </div>
    </div>
    <div id="tab-3" class="tab-content current mt-4 p-3 border">
        <div class="font-24 font-weight-bold font-lato text-center" style="color:#B44451">Alat Pertanian</div>
        <div class="text-center p-5">
            <div class='tableauPlaceholder' id='viz1622088690852' style='position: relative'><noscript><a href='#'><img alt='Dash Alat Pertanian ' src='https:&#47;&#47;public.tableau.com&#47;static&#47;images&#47;Da&#47;DashAlatPertanian&#47;DashAlatPertanian&#47;1_rss.png' style='border: none' /></a></noscript><object class='tableauViz'  style='display:none;'><param name='host_url' value='https%3A%2F%2Fpublic.tableau.com%2F' /> <param name='embed_code_version' value='3' /> <param name='site_root' value='' /><param name='name' value='DashAlatPertanian&#47;DashAlatPertanian' /><param name='tabs' value='no' /><param name='toolbar' value='no' /><param name='static_image' value='https:&#47;&#47;public.tableau.com&#47;static&#47;images&#47;Da&#47;DashAlatPertanian&#47;DashAlatPertanian&#47;1.png' /> <param name='animate_transition' value='yes' /><param name='display_static_image' value='yes' /><param name='display_spinner' value='yes' /><param name='display_overlay' value='yes' /><param name='display_count' value='yes' /><param name='language' value='en-US' /></object></div>                <script type='text/javascript'>                    var divElement = document.getElementById('viz1622088690852');                    var vizElement = divElement.getElementsByTagName('object')[0];                    if ( divElement.offsetWidth > 800 ) { vizElement.style.width='800px';vizElement.style.height='327px';} else if ( divElement.offsetWidth > 500 ) { vizElement.style.width='800px';vizElement.style.height='327px';} else { vizElement.style.width='100%';vizElement.style.height='327';}                     var scriptElement = document.createElement('script');                    scriptElement.src = 'https://public.tableau.com/javascripts/api/viz_v1.js';                    vizElement.parentNode.insertBefore(scriptElement, vizElement);                </script>
        </div>
    </div>
    <div id="tab-4" class="tab-content mt-4 p-3 border">
        <div class="font-24 font-weight-bold font-lato text-center" style="color:#B44451">Produksi</div>
        <div class="text-center p-5">
            <div class='tableauPlaceholder' id='viz1621824569265' style='position: relative'><noscript><a href='#'><img alt='Dash Produksi ' src='https:&#47;&#47;public.tableau.com&#47;static&#47;images&#47;Da&#47;DashProduksi&#47;DashProduksi&#47;1_rss.png' style='border: none' /></a></noscript><object class='tableauViz'  style='display:none;'><param name='host_url' value='https%3A%2F%2Fpublic.tableau.com%2F' /> <param name='embed_code_version' value='3' /> <param name='site_root' value='' /><param name='name' value='DashProduksi&#47;DashProduksi' /><param name='tabs' value='no' /><param name='toolbar' value='yes' /><param name='static_image' value='https:&#47;&#47;public.tableau.com&#47;static&#47;images&#47;Da&#47;DashProduksi&#47;DashProduksi&#47;1.png' /> <param name='animate_transition' value='yes' /><param name='display_static_image' value='yes' /><param name='display_spinner' value='yes' /><param name='display_overlay' value='yes' /><param name='display_count' value='yes' /><param name='language' value='en' /><param name='filter' value='publish=yes' /></object></div>                <script type='text/javascript'>                    var divElement = document.getElementById('viz1621824569265');                    var vizElement = divElement.getElementsByTagName('object')[0];                    if ( divElement.offsetWidth > 800 ) { vizElement.style.width='800px';vizElement.style.height='627px';} else if ( divElement.offsetWidth > 500 ) { vizElement.style.width='800px';vizElement.style.height='627px';} else { vizElement.style.width='100%';vizElement.style.height='727px';}                     var scriptElement = document.createElement('script');                    scriptElement.src = 'https://public.tableau.com/javascripts/api/viz_v1.js';                    vizElement.parentNode.insertBefore(scriptElement, vizElement);                </script>
        </div>
    </div>
    <div id="tab-5" class="tab-content mt-4 p-3 border">
        <div class="font-24 font-weight-bold font-lato text-center" style="color:#B44451">Tanaman Pangan</div>
        <div class="text-center p-5">
            <div class='tableauPlaceholder' id='viz1621842806647' style='position: relative'><noscript><a href='#'><img alt='Tanaman Pangan ' src='https:&#47;&#47;public.tableau.com&#47;static&#47;images&#47;Da&#47;DashTanamanPangan&#47;TanamanPangan&#47;1_rss.png' style='border: none' /></a></noscript><object class='tableauViz'  style='display:none;'><param name='host_url' value='https%3A%2F%2Fpublic.tableau.com%2F' /> <param name='embed_code_version' value='3' /> <param name='site_root' value='' /><param name='name' value='DashTanamanPangan&#47;TanamanPangan' /><param name='tabs' value='no' /><param name='toolbar' value='yes' /><param name='static_image' value='https:&#47;&#47;public.tableau.com&#47;static&#47;images&#47;Da&#47;DashTanamanPangan&#47;TanamanPangan&#47;1.png' /> <param name='animate_transition' value='yes' /><param name='display_static_image' value='yes' /><param name='display_spinner' value='yes' /><param name='display_overlay' value='yes' /><param name='display_count' value='yes' /><param name='language' value='en' /><param name='filter' value='publish=yes' /></object></div>                <script type='text/javascript'>                    var divElement = document.getElementById('viz1621842806647');                    var vizElement = divElement.getElementsByTagName('object')[0];                    if ( divElement.offsetWidth > 800 ) { vizElement.style.width='800px';vizElement.style.height='827px';} else if ( divElement.offsetWidth > 500 ) { vizElement.style.width='800px';vizElement.style.height='827px';} else { vizElement.style.width='100%';vizElement.style.height='927px';}                     var scriptElement = document.createElement('script');                    scriptElement.src = 'https://public.tableau.com/javascripts/api/viz_v1.js';                    vizElement.parentNode.insertBefore(scriptElement, vizElement);                </script>
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
