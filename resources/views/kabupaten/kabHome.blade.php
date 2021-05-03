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
    </div>
    <div class="row mx-3 sektor">
        <div class="flipper col-4 my-auto px-2">
            <div class="flip-content">
                <div class="front">
                    <div id="front-card" class="front-card text-center shadow-2 rounded pt-5" data-toggle="tooltip" data-html="true" data-placement="right" 
                        title="<div style='max-width:500px;width:500px;position:relative;overflow:auto;'>
                                <div class='font-weight-bold'>Nilai Tukar Petani</div> 
                                <br> Nilai tukar petani adalah rasio antara indeks harga yang diterima petani dengan indeks harga yang dibayar petani yang dinyatakan dalam persentase. Nilai tukar petani merupakan salah satu indikator dalam menentukan tingkat kesejahteraan petani. 
                                <div class='row mx-0 pt-3'>
                                    <div class='col-5 p-0'>
                                        <div class='h5 p-0 m-0'>102,19</div>
                                        November
                                    </div>
                                    <div class='col-2 p-0 my-auto text-danger'>
                                        <div class='h3 m-0 p-0 fas fa-sort-down'></div>
                                    </div>
                                    <div class='col-5 p-0'>
                                        <div class='h5 p-0 m-0'>102,19</div>
                                        Desember
                                    </div>
                                </div>
                            </div>
                        ">
                        <div class="font-20 font-weight-bold">Sektor Pertanian</div>
                        <img class="img mx-auto" style="margin:48px 0px" src="images/pertanian.png" alt="" height="90px" width="auto">
                        <div class="font-36">101,49</div>
                        <div class="font-16 font-weight-bold">Nilai Tukar Petani</div>
                        <button class="btn btn-red rounded-bottom mt-4">Data Pendukung</button>
                    </div>
                </div>
                <div class="back">
                    <div id="back-card" class="back-card text-center shadow-2 rounded pt-5">
                        <div class="px-2">

                            <div class="font-20 font-weight-bold mb-5"><span><img class="img" src="images/pertanian.png" height="20px" alt=""></span> Sektor Pertanian</div>

                            <div class="row mx-0">
                                <div class="w-75 font-12 font-weight-bold text-left my-auto pt-2">Nilai Tukar Petani</div>
                                <div class="w-25 font-18 font-weight-bold tet-right my-auto pt-2">101,49</div>
                                <div class="w-75 font-12 font-weight-bold text-left my-auto pt-2">Pertumbuhan Sektor Kehutanan, Perikanan, dan Pertanian</div>
                                <div class="w-25 font-18 font-weight-bold tet-right my-auto pt-2">80%</div>
                            </div>
                            
                        </div>
                    <button class="btn-back btn btn-red rounded-bottom mt-4">Data Pendukung</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="flipper col-4 px-2">
            <div class="flip-content">
                <div class="front">
                    <div class=" text-center shadow-2 rounded pt-5" data-toggle="tooltip" data-html="true" data-placement="right" 
                        title="<div style='max-width:500px;width:500px;position:relative;overflow:auto;'>
                            <div class='font-weight-bold'>Nilai Tukar Petani</div> 
                            <br> Nilai tukar petani adalah rasio antara indeks harga yang diterima petani dengan indeks harga yang dibayar petani yang dinyatakan dalam persentase. Nilai tukar petani merupakan salah satu indikator dalam menentukan tingkat kesejahteraan petani. 
                            <div class='row mx-0 pt-3'>
                                <div class='col-5 p-0'>
                                    <div class='h5 p-0 m-0'>102,19</div>
                                    November
                                </div>
                                <div class='col-2 p-0 my-auto text-danger'>
                                    <div class='h3 m-0 p-0 fas fa-sort-down'></div>
                                </div>
                                <div class='col-5 p-0'>
                                    <div class='h5 p-0 m-0'>102,19</div>
                                    Desember
                                </div>
                            </div>
                        </div>">
                        <div class="font-20 font-weight-bold">Sektor Pariwisata</div>
                        <img class="img mx-auto" style="margin:48px 0px" src="images/pariwisata.png" alt="" height="90px" width="auto">
                        <div class="font-36">3,21%</div>
                        <div class="font-16 font-weight-bold">PRDB</div>
                        <button class="btn btn-red rounded-bottom mt-4">Data Pendukung</button>
                    </div>
                </div>
                <div class="back">
                    <div id="back-card" class="back-card text-center shadow-2 rounded pt-5">
                        <div class="px-2">

                            <div class="font-20 font-weight-bold mb-5"><span><img class="img" src="images/pariwisata.png" height="20px" alt=""></span> Sektor Pariwisata</div>

                            <div class="row mx-0">
                                <div class="w-75 font-12 font-weight-bold text-left my-auto pt-2">Nilai Tukar Petani</div>
                                <div class="w-25 font-18 font-weight-bold tet-right my-auto pt-2">101,49</div>
                                <div class="w-75 font-12 font-weight-bold text-left my-auto pt-2">Pertumbuhan Sektor Kehutanan, Perikanan, dan Pertanian</div>
                                <div class="w-25 font-18 font-weight-bold tet-right my-auto pt-2">80%</div>
                            </div>
                            
                        </div>
                    <button class="btn-back btn btn-red rounded-bottom mt-4">Data Pendukung</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="flipper col-4 px-2">
            <div class="flip-content">
                <div class="front">
                    <div class=" text-center shadow-2 rounded pt-5" data-toggle="tooltip" data-html="true" data-placement="right" 
                        title="<div style='max-width:500px;width:500px;position:relative;overflow:auto;'>
                                    <div class='font-weight-bold'>Nilai Tukar Petani</div> 
                                    <br> Nilai tukar petani adalah rasio antara indeks harga yang diterima petani dengan indeks harga yang dibayar petani yang dinyatakan dalam persentase. Nilai tukar petani merupakan salah satu indikator dalam menentukan tingkat kesejahteraan petani. 
                                    <div class='row mx-0 pt-3'>
                                        <div class='col-5 p-0'>
                                            <div class='h5 p-0 m-0'>102,19</div>
                                            November
                                        </div>
                                        <div class='col-2 p-0 my-auto text-danger'>
                                            <div class='h3 m-0 p-0 fas fa-sort-down'></div>
                                        </div>
                                        <div class='col-5 p-0'>
                                            <div class='h5 p-0 m-0'>102,19</div>
                                            Desember
                                        </div>
                                    </div>
                                </div>">
                        <div class="font-20 font-weight-bold">Sektor UMKM</div>
                        <img class="img mx-auto" style="margin:48px 0px" src="images/umkm.png" alt="" height="90px" width="auto">
                        <div class="font-36">14,18%</div>
                        <div class="font-16 font-weight-bold">Pertumbuhan Omset</div>
                        <button class="btn btn-red rounded-bottom mt-4">Data Pendukung</button>
                    </div>                    
                </div>
                <div class="back">
                    <div id="back-card" class="back-card text-center shadow-2 rounded pt-5">
                        <div class="px-2">

                            <div class="font-20 font-weight-bold mb-5"><span><img class="img" src="images/umkm.png" height="20px" alt=""></span> Sektor UMKM</div>

                            <div class="row mx-0">
                                <div class="w-75 font-12 font-weight-bold text-left my-auto pt-2">Nilai Tukar Petani</div>
                                <div class="w-25 font-18 font-weight-bold tet-right my-auto pt-2">101,49</div>
                                <div class="w-75 font-12 font-weight-bold text-left my-auto pt-2">Pertumbuhan Sektor Kehutanan, Perikanan, dan Pertanian</div>
                                <div class="w-25 font-18 font-weight-bold tet-right my-auto pt-2">80%</div>
                            </div>
                            
                        </div>
                    <button class="btn-back btn btn-red rounded-bottom mt-4">Data Pendukung</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="flipper col-4 px-2">
            <div class="flip-content">
                <div class="front">
                    <div class=" text-center shadow-2 rounded pt-5" data-toggle="tooltip" data-html="true" data-placement="right" 
                        title="<div style='max-width:500px;width:500px;position:relative;overflow:auto;'>
                                    <div class='font-weight-bold'>Nilai Tukar Petani</div> 
                                    <br> Nilai tukar petani adalah rasio antara indeks harga yang diterima petani dengan indeks harga yang dibayar petani yang dinyatakan dalam persentase. Nilai tukar petani merupakan salah satu indikator dalam menentukan tingkat kesejahteraan petani. 
                                    <div class='row mx-0 pt-3'>
                                        <div class='col-5 p-0'>
                                            <div class='h5 p-0 m-0'>102,19</div>
                                            November
                                        </div>
                                        <div class='col-2 p-0 my-auto text-danger'>
                                            <div class='h3 m-0 p-0 fas fa-sort-down'></div>
                                        </div>
                                        <div class='col-5 p-0'>
                                            <div class='h5 p-0 m-0'>102,19</div>
                                            Desember
                                        </div>
                                    </div>
                                </div>">
                        <div class="font-20 font-weight-bold">Sektor Kesehatan</div>
                        <img class="img mx-auto" style="margin:48px 0px" src="images/kesehatan.png" alt="" height="90px" width="auto">
                        <div class="font-36">238</div>
                        <div class="font-16 font-weight-bold">Angka Kematian Ibu</div>
                        <button class="btn btn-red rounded-bottom mt-4">Data Pendukung</button>
                    </div>
                </div>
                <div class="back">
                    <div id="back-card" class="back-card text-center shadow-2 rounded pt-5">
                        <div class="px-2">

                            <div class="font-20 font-weight-bold mb-5"><span><img class="img" src="images/kesehatan.png" height="20px" alt=""></span> Sektor Kesehatan</div>

                            <div class="row mx-0">
                                <div class="w-75 font-12 font-weight-bold text-left my-auto pt-2">Nilai Tukar Petani</div>
                                <div class="w-25 font-18 font-weight-bold tet-right my-auto pt-2">101,49</div>
                                <div class="w-75 font-12 font-weight-bold text-left my-auto pt-2">Pertumbuhan Sektor Kehutanan, Perikanan, dan Pertanian</div>
                                <div class="w-25 font-18 font-weight-bold tet-right my-auto pt-2">80%</div>
                            </div>
                            
                        </div>
                    <button class="btn-back btn btn-red rounded-bottom mt-4">Data Pendukung</button>
                    </div>
                </div>
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
    .tooltip-inner {
        max-width: 300px !important;
        background-color: #fff !important;
        color: #212121 !important;
        border: 1px solid #212121;

    }
    .flipper{
        cursor: pointer;
    }
    .flip-content {
      text-align: center;
      width: 100%;
      transition: 0.6s;
      min-height: 350px;
      transform-style: preserve-3d;
      /* position: relative; */
    }
    /* flip the pane when hovered */
    .flipper.flip .flip-content {
      transform: rotateY(180deg);
    }
    .front,
    .back {
      width: 100%;
      backface-visibility: hidden;
      position: absolute;
    }
    /* front pane, placed above back */
    .front {
      z-index: 2;
      /* for firefox 31 */
      transform: rotateY(0deg);
      height: 100%;
    }
    /* back, initially hidden pane */
    .back {
      transform: rotateY(180deg);
      height: 100%;
    }
    .goback {
      bottom: 0px;
      left: 0px;
      text-decoration: underline;
      cursor: pointer;
    }
    .btn-back{
        position: absolute;
        left: 0px;
    }
</style>
@endpush

@push('after-script')
<script type="text/javascript">
    $(document).ready(function() {
        var frontCardHeight = document.getElementById('front-card').offsetHeight;
        var back = document.querySelectorAll(".back-card");
        for(let i = 0; i < back.length; i++){
            back[i].style.height = (frontCardHeight-2) + "px";
        }

        var flipContent = document.getElementsByClassName('flip-content');
        var flipContentHeight = flipContent[0].offsetHeight;
        var jarak = frontCardHeight - flipContentHeight -2;
        var btnBack = document.querySelectorAll(".btn-back");
        for(let i = 0; i < back.length; i++){
            btnBack[i].style.bottom = -(jarak) + "px";
        }

    });
    $(function () {
        $('[data-toggle="tooltip"]').tooltip()
    });

    $(".flipper").click(function() {
        var target = $( event.target );
        if ( target.is("a") ) {
          //follow that link
          return true;
        } else {
          $(this).toggleClass("flip");
        }
        return false;
    });

    $(document).ready(function() {
        $('.sektor').slick({
            slidesToShow: 3,
            slidesToScroll: 1,
            responsive: [{
                breakpoint: 768,
                settings: {
                    arrows: false,
                    centerMode: true,
                    centerPadding: '40px',
                    slidesToShow: 3
                }
            },
            {
                breakpoint: 480,
                settings: {
                    arrows: false,
                    centerMode: true,
                    centerPadding: '40px',
                    slidesToShow: 1
                }
            }]
        });
    });
</script>
@endpush
