@extends('layouts.default')

@section('content')
<div class="container-fluid p-4">
    <div class="bg-overlay-black text-white p-5">
        <div class="font-24 font-weight-bold">
            <div class="grad-line"></div>
            MISI 2
        </div>
        <div class="font-20 pt-4">
            “Mempercepat reformasi birokrasi yang dinamis serta memperluas sasaran ke pemerintah kabupaten/kota.”
        </div>
    </div>
    <div class="rounded shadow-2 mt-5 px-5 py-4">
        <div class="font-20 font-weight-bold">Program Unggulan</div>
        <div class="font-18 pt-4">
            <ul>
                <li>Reformasi birokrasi di kabupaten/kota yang dinamis berbasis teknologi informasi dan sistem layanan terintegrasi.</li>
            </ul>
        </div>
    </div>

    <div class="row mt-4">
        <div class="col-lg-12 pb-4">
            <div class="font-20 font-weight-bold">Grafik Data</div>
        </div>
        <div class="col-xs-12 col-lg-6">
            <div class="shadow-2">
                <div class="mis-1-grad">
                    <div class="font-18">Indeks Reformasi Birokrasi
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 p-2">
                    <script type='text/javascript' src='https://smartanalytics.udata.id/javascripts/api/viz_v1.js'></script><div class='tableauPlaceholder' style='width: 100%; height: 100%;'><object class='tableauViz' width='100%' height='400' style='display:none;'><param name='host_url' value='https%3A%2F%2Fsmartanalytics.udata.id%2F' /> <param name='embed_code_version' value='3' /> <param name='site_root' value='' /><param name='name' value='JABARJATENG&#47;IndeksSistemPemerintahanbirokrasi' /><param name='tabs' value='no' /><param name='toolbar' value='no' /><param name='showAppBanner' value='false' /></object></div>
                    <p class="pt-3 pl-3">Sumber : Dummy</p>
                </div>
            </div>
        </div>
        <div class="col-xs-12 col-lg-6">
            <div class="shadow-2">
                <div class="mis-1-grad">
                    <div class="font-18">Indeks Kepuasan Masyarakat</div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 p-2">
                    <script type='text/javascript' src='https://smartanalytics.udata.id/javascripts/api/viz_v1.js'></script><div class='tableauPlaceholder' style='width: 100%; height: 100%;'><object class='tableauViz' width='100%' height='400' style='display:none;'><param name='host_url' value='https%3A%2F%2Fsmartanalytics.udata.id%2F' /> <param name='embed_code_version' value='3' /> <param name='site_root' value='' /><param name='name' value='JABARJATENG&#47;perIKU5-misi2' /><param name='tabs' value='no' /><param name='toolbar' value='no' /><param name='showAppBanner' value='false' /></object></div>
                    <p class="pt-3 pl-3">Sumber : Dummy</p>
                </div>
            </div>
        </div>
        <div class="col-lg-12 mt-4">
            <div class="shadow-2">
                <div class="mis-1-grad">
                    <div class="font-18">Indeks Sistem Pemerintahan Berbasis Elektronik</div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 p-2">
                    <script type='text/javascript' src='https://smartanalytics.udata.id/javascripts/api/viz_v1.js'></script><div class='tableauPlaceholder' style='width: 100%; height: 100%;'><object class='tableauViz' width='100%' height='400' style='display:none;'><param name='host_url' value='https%3A%2F%2Fsmartanalytics.udata.id%2F' /> <param name='embed_code_version' value='3' /> <param name='site_root' value='' /><param name='name' value='JABARJATENG&#47;IndeksSistemberbasiselektronik' /><param name='tabs' value='no' /><param name='toolbar' value='no' /><param name='showAppBanner' value='false' /></object></div>
                    <p class="pt-3 pl-3">Sumber : Dummy</p>
                </div>
            </div>
        </div>
    </div>
</div>

<?php
    // $url = 'https://smartanalytics.udata.id/trusted/';
	// $view = '/views/';
	// $view1 = "JABARJATENG/penurunankonflikdansara?:iid=1";  // konfliksara
	// $view2 = "JABARJATENG/indekstoleransi?:iid=2"; 
	// $view3 = "JABARJATENG/presentasetindakpidana?:iid=1";
	// $view4 = "JABARJATENG/Ds-MISI4?:iid=2";

	// $username = $data1->username;
	// $pass = $data1->password;
	// $params = array(
	// 	"username" => $username,
	// 	"password" => $pass,
	// );
	// $options = array(
	// 	CURLOPT_URL             => $url,
	// 	CURLOPT_RETURNTRANSFER  => true,    // return web page as var
	// 	CURLOPT_CONNECTTIMEOUT  => 30,      // timeout on connect
	// 	CURLOPT_TIMEOUT         => 30,      // timeout on response
	// 	CURLOPT_IPRESOLVE       => CURL_IPRESOLVE_V4,
	// 	CURLOPT_POSTFIELDS      => $params
	// );
	// $curl_connection1 = curl_init();
	// curl_setopt_array( $curl_connection1, $options );
	// $curl_connection2 = curl_init();
	// curl_setopt_array( $curl_connection2, $options );
	// $curl_connection3 = curl_init();
	// curl_setopt_array( $curl_connection3, $options );
	// $curl_connection4 = curl_init();
	// curl_setopt_array( $curl_connection4, $options );
	// $curl_connection5 = curl_init();
	// curl_setopt_array( $curl_connection5, $options ); 
	
	// $ticket1 = curl_exec($curl_connection1);
	// curl_close($curl_connection1);
	// $ticket2 = curl_exec($curl_connection2);
	// curl_close($curl_connection2);
	// $ticket3 = curl_exec($curl_connection3);
	// curl_close($curl_connection3);
	// $ticket4 = curl_exec($curl_connection4);
	// curl_close($curl_connection4);
	// $ticket5 = curl_exec($curl_connection5);
	// curl_close($curl_connection5); 
?>

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
