<aside id="left-panel" class="px-4 text-center">
    <img class="img py-3" src="images/logoJateng.png" alt="" width="30%" height="auto">
    <h5 class="text-center pb-4"><strong>Executive Dashboard<br>Jawa Tengah</strong></h5>
    <hr>

    <div class="sidenav text-left">
        @if( Route::current()->getName() == "home")
        <a href="{{route('home')}}" class="on px-3"><em class="side-beranda mr-2"></em> Beranda</a>
        @else
        <a href="{{route('home')}}" class="px-3"><em class="side-beranda mr-2"></em> Beranda</a>
        @endif

        @if( Route::current()->getName() == "profil")
        <a href="{{route('profil')}}" class="on px-3"><em class="side-profil mr-2"></em> Profil</a>
        @else
        <a href="{{route('profil')}}" class="px-3"><em class="side-profil mr-2"></em> Profil</a>
        @endif

        <button class="dropdown-btn px-3"><em class="side-misi mr-2"></em> Misi
            <em class="fa fa-caret-down"></em>
        </button>
        @if( Route::current()->getName() == "misi-pertama" || Route::current()->getName() == "misi-kedua" || Route::current()->getName() == "misi-ketiga" || Route::current()->getName() == "misi-keempat")
        <div class="dropdown-container active">
        @else
        <div class="dropdown-container">
        @endif
            @if( Route::current()->getName() == "misi-pertama")
            <a href="{{route('misi-pertama')}}" class="on px-3"><em class="side-misi1 mr-2"></em> IK Misi Pertama</a>
            @else
            <a href="{{route('misi-pertama')}}" class="px-3"><em class="side-misi1 mr-2"></em> IK Misi Pertama</a>
            @endif
            @if( Route::current()->getName() == "misi-kedua")
            <a href="{{route('misi-kedua')}}" class="on px-3"><em class="side-misi2 mr-2"></em> IK Misi Kedua</a>
            @else
            <a href="{{route('misi-kedua')}}" class="px-3"><em class="side-misi2 mr-2"></em> IK Misi Kedua</a>
            @endif
            @if( Route::current()->getName() == "misi-ketiga")
            <a href="{{route('misi-ketiga')}}" class="on px-3"><em class="side-misi3 mr-2"></em> IK Misi Ketiga</a>
            @else
            <a href="{{route('misi-ketiga')}}" class="px-3"><em class="side-misi3 mr-2"></em> IK Misi Ketiga</a>
            @endif
            @if( Route::current()->getName() == "misi-keempat")
            <a href="{{route('misi-keempat')}}" class="on px-3"><em class="side-misi4 mr-2"></em> IK Misi Keempat</a>
            @else
            <a href="{{route('misi-keempat')}}" class="px-3"><em class="side-misi4 mr-2"></em> IK Misi Keempat</a>
            @endif
        </div>

        <button class="dropdown-btn px-3"><em class="side-sektor mr-2"></em> Sektor
            <i class="fa fa-caret-down"></i>
        </button>
        @if( Route::current()->getName() == "iku-pertanian" || Route::current()->getName() == "data-pendukung-pertanian")
        <div class="dropdown-container active">
        @else
        <div class="dropdown-container">
        @endif
            <button class="dropdown-btn px-3"><em class="side-pertanian mr-2"></em> Pertanian <i class="fa fa-caret-down"></i></button>
            @if( Route::current()->getName() == "iku-pertanian" || Route::current()->getName() == "data-pendukung-pertanian")
            <div class="dropdown-container active">
            @else
            <div class="dropdown-container">
            @endif
                @if( Route::current()->getName() == "iku-pertanian")
                <a href="iku-pertanian" class="on px-3"><em class="side-iku mr-2"></em> IKU</a>
                @else
                <a href="iku-pertanian" class="px-3"><em class="side-iku mr-2"></em> IKU</a>
                @endif
                @if(Route::current()->getName() == "data-pendukung-pertanian")
                <a href="data-pendukung-pertanian" class="on px-3"><em class="side-datapendukung mr-2"></em> Data Pendukung</a>
                @else
                <a href="data-pendukung-pertanian" class="px-3"><em class="side-datapendukung mr-2"></em> Data Pendukung</a>
                @endif
            </div>
            <button class="dropdown-btn px-3"><em class="side-umkm mr-2"></em> UMKM <i class="fa fa-caret-down"></i></button>
            <div class="dropdown-container">
                <a href="#"><em class="side-iku mr-2"></em> IKU</a>
                <a href="#"><em class="side-datapendukung mr-2"></em> Data Pendukung</a>
            </div>
            <button class="dropdown-btn px-3"><em class="side-pariwisata mr-2"></em> Pariwisata <i class="fa fa-caret-down"></i></button>
            <div class="dropdown-container">
                <a href="#"><em class="side-iku mr-2"></em> IKU</a>
                <a href="#"><em class="side-datapendukung mr-2"></em> Data Pendukung</a>
            </div>
            <button class="dropdown-btn px-3"><em class="side-kesehatan mr-2"></em> Kesehatan <i class="fa fa-caret-down"></i></button>
            <div class="dropdown-container">
                <a href="#"><em class="side-iku mr-2"></em> IKU</a>
                <a href="#"><em class="side-datapendukung mr-2"></em> Data Pendukung</a>
            </div>
        </div>
        @if( Route::current()->getName() == "social-media")
        <a href="{{route('social-media')}}" class="on px-3"><em class="side-socmed mr-2"></em> Social Media Analytic</a>
        @else
        <a href="{{route('social-media')}}" class="px-3"><em class="side-socmed mr-2"></em> Social Media Analytic</a>
        @endif
        @if( Route::current()->getName() == "e-commerce")
        <a href="{{route('e-commerce')}}" class="on px-3"><em class="side-ecommerce mr-2"></em> E-Commerce Analytic</a>
        @else
        <a href="{{route('e-commerce')}}" class="px-3"><em class="side-ecommerce mr-2"></em> E-Commerce Analytic</a>
        @endif
    </div>
</aside>

