@extends('layouts.default')

@section('content')
<div class="container-fluid p-4">
    <div class="bg-overlay-black text-white p-5">
        <div class="font-24 font-weight-bold">
            <div class="grad-line"></div>
            MISI 1
        </div>
        <div class="font-20 pt-4">
            “Membangun masyarakat jawa tengah yang religius, toleran dan guyup untuk menjaga Negara Kesatuan Republik Indonesia.”
        </div>
    </div>
    <div class="rounded shadow-2 mt-5 px-5 py-4">
        <div class="font-20 font-weight-bold">Program Unggulan</div>
        <div class="font-18 pt-4">
            <ul>
                <li>Pelatihan Tentang Demokrasi dan Pemilu.</li>
                <li>Peningkatan peran rumah ibadah, fasilitasi Pendakwah, dan Guru agama.</li>
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
                    <div class="font-18">Penurunan Konflik dan SARA</div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <div id="grafikindekskerukunanumatberagama"></div>
                    <p>Sumber : Dummy</p>
                </div>
            </div>
        </div>
        <div class="col-xs-12 col-lg-6">
            <div class="shadow-2">
                <div class="mis-1-grad">
                    <div class="font-18">Indeks Toleransi</div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <div id="grafikindekskerukunanumat"></div>
                    <p>Sumber : Dummy</p>
                </div>
            </div>
        </div>
        <div class="col-lg-12 mt-4">
            <div class="shadow-2">
                <div class="mis-1-grad">
                    <div class="font-18">Presentase Tindak Pidana Tertinggi</div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <div id="grafikikumisiketiga"></div>
                    <p>Sumber : Dummy</p>
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
<!-- <script type="text/javascript">
    localStorage.clear();
</script>
sidebar button
<script type='text/javascript' src="https://smartanalytics.udata.id/javascripts/api/tableau-2.min.js"></script>
<script type="text/javascript">
    // //DECLARE FUNCTION
    // chart1();
    // var viz, viz2, viz3, viz4, viz5;
    // //CHART1
    // function chart1() {
    //     var containerDiv = document.getElementById("grafikindekskerukunanumatberagama"),
    //         url = "<?php 
    // echo $url , $ticket1, $view, $view1;?>";
    //         // alert(url)
    //     options = {
    //         hideTabs: true,
    //         hideToolbar: true,
    //         width: "100%",
    //         height: "200px",
    //         onFirstInteractive: () => {
    //             chart2();
    //         }
    //     };
    //     viz = new tableau.Viz(containerDiv, url, options);
    // }

    // function exportToPDF1() {
    //     viz.showExportPDFDialog();
    // }

    // function exportToImage1() {
    //     viz.showExportImageDialog();
    // }

    // function exportToCrosstab1() {
    //     viz.showExportCrossTabDialog();
    // }

    // function exportToData1() {
    //     viz.showExportDataDialog();
    // }
    // //CHART2
    // function chart2() {
    //     var containerDiv2 = document.getElementById("grafikindekskerukunanumat"),
    //         url = "<?php 
    // echo $url , $ticket2, $view, $view2;?>";
    //     options = {
    //         hideTabs: true,
    //         hideToolbar: true,
    //         width: "100%",
    //         height: "200px",
    //         onFirstInteractive: () => {
    //             chart3();
    //         }
    //     };
    //     viz2 = new tableau.Viz(containerDiv2, url, options);
    // }

    // function exportToPDF2() {
    //     viz2.showExportPDFDialog();
    // }

    // function exportToImage2() {
    //     viz2.showExportImageDialog();
    // }

    // function exportToCrosstab2() {
    //     viz2.showExportCrossTabDialog();
    // }

    // function exportToData2() {
    //     viz2.showExportDataDialog();
    // }
    // //CHART3
    // function chart3() {
    //     var containerDiv3 = document.getElementById("grafikikumisiketiga"),
    //         url = "<?php 
    // echo $url , $ticket3, $view, $view3;?>";
    //     options = {
    //         hideTabs: true,
    //         hideToolbar: true,
    //         width: "100%",
    //         height: "350px",
    //         onFirstInteractive: () => {
    //             // chart4();
    //         }
    //     };
    //     viz3 = new tableau.Viz(containerDiv3, url, options);
    // }

    // function exportToPDF3() {
    //     viz3.showExportPDFDialog();
    // }

    // function exportToImage3() {
    //     viz3.showExportImageDialog();
    // }

    // function exportToCrosstab3() {
    //     viz3.showExportCrossTabDialog();
    // }

    // function exportToData3() {
    //     viz3.showExportDataDialog();
    // }
    // //CHART4
    // function chart4() {
    //     var containerDiv4 = document.getElementById("grafikikumisikeempat"),
    //         url = "<?php 
    // echo $url , $ticket4, $view, $view4;?>";
    //     options = {
    //         hideTabs: true,
    //         hideToolbar: true,
    //         width: "100%",
    //         height: "200px",
    //         onFirstInteractive: () => {}
    //     };
    //     viz4 = new tableau.Viz(containerDiv4, url, options);
    // }

    // function exportToPDF4() {
    //     viz4.showExportPDFDialog();
    // }

    // function exportToImage4() {
    //     viz4.showExportImageDialog();
    // }

    // function exportToCrosstab4() {
    //     viz4.showExportCrossTabDialog();
    // }

    // function exportToData4() {
    //     viz4.showExportDataDialog();
    // }
</script>
@endpush
