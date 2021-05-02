@extends('layouts.default')

@section('content')
<div class="container bg-overlay">
	<div class="row mx-3">
        <div class="col text-center">
            <img class="img" src="images/gub.png" alt="" width="95%" height="auto">
            <div class="p-1 rounded" style="background-color: #D9D8D6">
                <div class="font-10 text-muted">Gubernur Provinsi Jawa Tengah</div>
                <div class="font-10 font-weight-bold">H. Ganjar Pranowo, S.H, M.IP</div>
            </div>
        </div>
        <div class="col-7 text-center my-auto">
            <h5 class="font-weight-bold" style="color: #413634;">"MENUJU JAWA TENGAH SEJAHTERA DAN BERDIKARI"</h5>
            <h5 class="font-weight-bold" style="color: #FAFAFA;">TETEP MBOTEN KORUPSI, MBOTEN NGAPUSI</h5>
        </div>
        <div class="col text-center">
            <img class="img" src="images/wagub.png" alt="" width="95%" height="auto">
            <div class="p-1 rounded" style="background-color: #D9D8D6">
                <div class="font-10 text-muted">Wagub Provinsi Jawa Tengah</div>
                <div class="font-10 font-weight-bold">H. Taj Yasin Maimoen</div>
            </div>
        </div>
	</div>
    <div class="row mx-3 mt-4 p-1">
        <div class="col bg-overlay-black text-white p-3">
            <div class="font-18 font-weight-bold">
                <div class="grad-line"></div>
                MISI 1
            </div>
            <div class="font-16 pt-2">
                “Membangun masyarakat jawa tengah yang religius, toleran dan guyup untuk menjaga Negara Kesatuan Republik Indonesia.”
            </div>
        </div>
        <div class="col-1"></div>
        <div class="col bg-overlay-black text-white p-3">
            <div class="font-18 font-weight-bold">
                <div class="grad-line"></div>
                MISI 2
            </div>
            <div class="font-16 pt-2">
            “Mempercepat reformasi birokrasi serta memperluas sasaran ke Pemerintah Kabupaten/Kota.”
            </div>
        </div>
    </div>
    <div class="row mx-3 mt-4 p-1">
        <div class="col bg-overlay-black text-white p-3">
            <div class="font-18 font-weight-bold">
                <div class="grad-line"></div>
                MISI 3
            </div>
            <div class="font-16 pt-2">
            “Memperkuat kapasitas ekonomi rakyat dan memperluas lapangan kerja untuk mengurangi kemiskinan dan pengangguran.”
            </div>
        </div>
        <div class="col-1"></div>
        <div class="col bg-overlay-black text-white p-3">
            <div class="font-18 font-weight-bold">
                <div class="grad-line"></div>
                MISI 4
            </div>
            <div class="font-16 pt-2">
            “Menjadikan masyarakat Jawa Tengah, lebih sehat, lebih pintar, lebih berbudaya, dan mencintai lingkungan.”
            </div>
        </div>
    </div>
</div>

<div class="container bg-overlay-blue pb-5" style="margin-top:-24px">
    <div class="row mx-0">
        <div class="col-6 pl-4 pr-5 border-right">
            <div class="font-24 font-weight-bold text-center">Pendapatan Asli Daerah</div>
            <?php foreach($profile as $p) :?>
                <?php if($p['nama'] == 'hkpp') :?>
                    <div class="mt-4 bg-overlay-custom" style="background-image: url('images/profil-page/bg-2.png');">
                        <div class="font-18 mb-5">
                            <div class="grad-line"></div>
                            Hasil Pengelolaan Keuangan<br>Daerah yang Dipisahkan
                        </div>
                        <div class="font-24 text-right" >
                    
                        <p>Rp <span class="uang"><?= $p['nilai'];?></span></p>   
                        </div>
                    </div>
                <?php endif;?>
                <?php if($p['nama'] == 'pajakdaerah') : ?>
                    <div class="mt-5 bg-overlay-custom" style="background-image: url('images/profil-page/bg-3.png');">
                        <div class="font-18 mb-5">
                            <div class="grad-line"></div>
                            Pajak Daerah
                        </div>
                        <div class="font-24 text-right">
                        <p>Rp <span class="uang"><?= $p['nilai'];?></span></p>  
                        </div>
                    </div>
                <?php endif;?>
            <?php if($p['nama'] == 'retribusidaerah') : ?>
            <div class="mt-5 bg-overlay-custom" style="background-image: url('images/profil-page/bg-4.png');">
                <div class="font-18 mb-5">
                    <div class="grad-line"></div>
                    Retribusi Daerah
                </div>
                <div class="font-24 text-right">
                <p>Rp <span class="uang"><?= $p['nilai'];?></span></p>  
                </div>
            </div>
            <?php endif;?>
            <?php if($p['nama'] == 'llps') : ?>
            <div class="mt-5 bg-overlay-custom" style="background-image: url('images/profil-page/bg-5.png');">
                <div class="font-18 mb-5">
                    <div class="grad-line"></div>
                    Lain-lain PAD yang Sah
                </div>
                <div class="font-24 text-right">
                <p>Rp <span class="uang"><?= $p['nilai'];?></span></p>  
                </div>
            </div>
            <?php endif;?>
            <?php endforeach;?>
        </div>
        <div class="col-6 pr-4 pl-5">
            <div class="font-24 font-weight-bold text-center">Demografis</div>
            <div class="mt-4 bg-overlay-custom" style="background-image: url('images/profil-page/bg-6.png');">
                <div class="font-18 mb-5">
                    <div class="grad-line"></div>
                    Jumlah Penduduk
                </div>
                <div class="row mx-0">
                <?php $total = 0;foreach($penduduk as $pen):?>
                    <?php if($pen['jenis_kelamin'] == "Laki Laki"):?>
                    <div class="col-4 text-right my-auto p-0">
                        <div class="font-14 font-weight-normal">Laki-laki</div>
                        <div class="font-16 jumlah"><?= $pen['total'];?></div>
                        <?php $total+= $pen['total'];?>
                        <div class="font-10 font-weight-normal">Jiwa</div>
                    </div>
                    <div class="col-4">
                        <img class="img text-center" src="images/profil-page/penduduk.png" alt="" width="100%">
                    </div>
                    <?php endif;?>
                    <?php if($pen['jenis_kelamin'] == "Perempuan"): ?>
                    <div class="col-4 text-left my-auto p-0">
                        <div class="font-14 font-weight-normal">Perempuan</div>
                        <div class="font-16 jumlah"><?= $pen['total'];?></div>
                        <?php $total+= $pen['total'];?>
                        <div class="font-10 font-weight-normal">Jiwa</div>
                    </div>
                    <div class="col-12 text-center pt-2">
                        <div class="font-14 font-weight-normal">Total</div>
                        <div class="font-16 "> <span class="jumlah"> <?= $total;?> </span><span class="font-10 font-weight-normal"> Jiwa</span></div>
                    </div>
                    <?php endif;?>
                <?php endforeach;?>
                </div>
            </div>
            <div class="mt-5 bg-overlay-custom" style="background-image: url('images/profil-page/bg-7.png');">
                <div class="font-18 mb-4">
                    <div class="grad-line"></div>
                    Agama
                </div>
                <div class="row mx-0 font-weight-normal">
                    <div class="col-6">
                        <div class="font-14 pt-3">Islam
                            <span class="float-right pt-1" style="width:80px">
                                <div class="progress">
                                    <div class="progress-bar" role="progressbar" style="width: 96%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                    <span class="float-right text-right position-absolute" style="right:18px">96,28%</span>
                                </div>
                            </span>
                        </div>
                        <div class="font-14 pt-3">Protestan
                            <span class="float-right pt-1" style="width:80px">
                                <div class="progress">
                                    <div class="progress-bar" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                    <span class="float-right text-right position-absolute" style="right:18px">1,91%</span>
                                </div>
                            </span>
                        </div>
                        <div class="font-14 pt-3">Katolik
                            <span class="float-right pt-1" style="width:80px">
                                <div class="progress">
                                    <div class="progress-bar" role="progressbar" style="width: 20%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                    <span class="float-right text-right position-absolute" style="right:18px">1,42%</span>
                                </div>
                            </span>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="font-14 pt-3">Hindu
                            <span class="float-right pt-1" style="width:80px">
                                <div class="progress">
                                    <div class="progress-bar" role="progressbar" style="width: 15%" aria-valuenow="96" aria-valuemin="0" aria-valuemax="100"></div>
                                    <span class="float-right text-right position-absolute" style="right:18px">0,20%</span>
                                </div>
                            </span>
                        </div>
                        <div class="font-14 pt-3">Buddha
                            <span class="float-right pt-1" style="width:80px">
                                <div class="progress">
                                    <div class="progress-bar" role="progressbar" style="width: 10%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                    <span class="float-right text-right position-absolute" style="right:18px">0,18%</span>
                                </div>
                            </span>
                        </div>
                        <div class="font-14 pt-3">Lainnya
                            <span class="float-right pt-1" style="width:80px">
                                <div class="progress">
                                    
                                    <div class="progress-bar" role="progressbar" style="width: 5%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                    <span class="float-right text-right position-absolute" style="right:18px">0,01%</span>
                                </div>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="mt-5 bg-overlay-custom" style="background-image: url('images/profil-page/bg-8.png');">
                <div class="font-18 mb-4">
                    <div class="grad-line"></div>
                    Suku
                </div>
                <div class="font-weight-normal">
                    <div class="font-14 pt-3">Jawa
                        <span class="float-right pt-1" style="width:280px">
                            <div class="progress">
                                <div class="progress-bar" role="progressbar" style="width: 90%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                <span class="float-right text-right position-absolute" style="right:48px">97,86%</span>
                            </div>
                        </span>
                    </div>
                    <div class="font-14 pt-3">Sunda
                        <span class="float-right pt-1" style="width:280px">
                            <div class="progress">
                                <div class="progress-bar" role="progressbar" style="width: 10%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                <span class="float-right text-right position-absolute" style="right:48px">1,40%</span>
                            </div>
                        </span>
                    </div>
                    <div class="font-14 pt-3">Tionghoa
                        <span class="float-right pt-1" style="width:280px">
                            <div class="progress">
                                <div class="progress-bar" role="progressbar" style="width: 8%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                <span class="float-right text-right position-absolute" style="right:48px">0,43%</span>
                            </div>
                        </span>
                    </div>
                    <div class="font-14 pt-3">Batak
                        <span class="float-right pt-1" style="width:280px">
                            <div class="progress">
                                <div class="progress-bar" role="progressbar" style="width: 5%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                <span class="float-right text-right position-absolute" style="right:48px">0,07%</span>
                            </div>
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container bg-overlay-blue2 py-5">
    <div class="font-24 font-weight-bold text-center" style="padding-bottom:100px">Letak Geografis</div>
    <div class="row mx-0 px-5 py-4">
        <div class="col-7 bg-overlay-black text-white p-3">
            <div class="font-18 font-weight-bold">
                <div class="grad-line"></div>
                Batas Wilayah
            </div>
            <div class="row mx-0 font-16 pt-2">
                <div class="w-25">
                    Utara
                    <br>Selatan
                    <br>Timur
                    <br>Barat
                </div>
                <div class="w-75">
                    : Laut Jawa
                    <br>: Samudera Hindia dan Provinsi DIY Yogyakarta
                    <br>: Provinsi Jawa Timur
                    <br>: Provinsi Jawa Barat
                </div>
            </div>
        </div>
        <div class="col-1 p-0"></div>
        <div class="col-4 bg-overlay-black text-white p-3">
            <div class="row mx-0 font-16 pt-2">
                <div class="w-50">
                    <div class="grad-line"></div>
                    Luas Wilayah
                    <br>Kabupaten
                    <br>Kota
                    <br>Kecamatan
                    <br>Desa
                    <br>Kelurahan
                </div>
                <div class="w-50">
                    : 3.254.412 ha
                    <br>: 29
                    <br>: 6
                    <br>: 573
                    <br>: 7.809
                    <br>: 769
                </div>
            </div>
        </div>
    </div>
</div>

@endsection

@push('before-style')
<style >
    .bg-overlay {
    background: linear-gradient(180deg, rgba(0, 0, 0, 0.1) 0%, rgba(255, 255, 255, 0.3) 90.1%, #FFFFFF 100%), url("images/profil-page/bg-1.png");
    background-repeat: no-repeat;
    background-size: cover;
    background-position: center center;
    height: 736px;
    padding-top: 50px;
    }
    .bg-overlay-blue {
        background: linear-gradient(180deg, rgba(255, 255, 255, 0) -0.04%, #FFFFFF 77.32%, #66A2CB 100%);
        background-repeat: no-repeat;
        background-size: cover;
        background-position: center center;
    }
    .bg-overlay-blue2{
        background: linear-gradient(163.23deg, rgba(229, 57, 53, 0.12) 11.55%, rgba(87, 89, 136, 0.43) 88.43%), url("images/profil-page/bg-9.png");
        background-repeat: no-repeat;
        background-size: cover;
        background-position: center center;
        height: 591px;
    }
    .bg-overlay-black{
        background-color: rgba(0, 0, 0, 0.7 );
        background-image: url("images/profil-page/bg-dark.png");
        background-repeat: no-repeat;
        background-size: cover;
        background-position: center center;
        border-radius: 10px;
    }
    .bg-overlay-custom{
        background-color: rgba(0, 0, 0, 0.3);
        background-repeat: no-repeat;
        background-size: cover;
        background-position: center center;
        border-radius: 10px;
        box-shadow: 0px 0px 4px 2px rgba(0, 0, 0, 0.15);
        color: #fff;
        font-weight: bold;
        padding: 1rem;

    }
    .grad-line{
        width: 27px;
        height: 5px;
        background: linear-gradient(258.28deg, #E53935 4.73%, #575988 94.22%);
        border-radius: 10px;
    }
    .progress {
        height: 0.875rem !important;
        font-size: 0.675rem !important;
        background-color: #e9ecef !important;
        border-radius: 0.625rem !important;
        line-height: unset !important;
        color: #9E9297;
    }
    .progress-bar {
        background-color: #DC3B3A !important;
    }
    
</style>
@endpush