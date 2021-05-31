@extends('layouts.default')

@section('content')
<div class="container-fluid py-4">
    <div class="font-16">Social Media Analytic</div>
    <div class="mt-4">
        <iframe class="shadow-2" frameborder="0" cellspacing="0" src="https://demo.bigbox.co.id/bigsocial/public/twitter/_token/eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJ1aWQiOjY4MTQwMSwidW5hbWUiOiJiaWdzb2NpYWxfamF0ZW5nIn0.JrMppvl2B6vRxtCsxisiY0q1q7FDpXZZIKPXGA6lnNk" style="width:100%;height:500px;border-style: none;"></iframe>
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
.hutan-circle, .tani-circle, .ikan-circle {
    position: relative;
}
canvas{
    background: url('/images/icons/hutan-circle.png');

}
.circle-text, .bgg {
    position: absolute;
    transform: translate(-50%,-50%);
    top: 50%;
    left: 50%;
}
.bgg{
        background: url('/images/icons/hutan-circle.png');
        background-repeat: no-repeat;
        background-size: cover;
        background-position: center center;
    }
}
</style>
@endpush

@push('after-script')
<script>
    $(".hutan-circle").circleProgress({
        // lineCap: "round",
        size: 160,
        fill: {
        // gradient: ["red", "orange"]
        color: '#3D7067'
        }
    
    }).on("circle-animation-progress", function(event, progress) {
        let percent = $(this).attr("data-value") * 100;
        $(this).find(".circle-text").html(Math.round(percent * progress) + "%");
    });
    $(".tani-circle").circleProgress({
        // lineCap: "round",
        size: 160,
        fill: {
        // gradient: ["red", "orange"]
        color: '#F49D76'
        }
    
    }).on("circle-animation-progress", function(event, progress) {
        let percent = $(this).attr("data-value") * 100;
        $(this).find(".circle-text").html(Math.round(percent * progress) + "%");
    });
    $(".ikan-circle").circleProgress({
        // lineCap: "round",
        size: 160,
        fill: {
        // gradient: ["red", "orange"]
        color: '#1185C6'
        }
    
    }).on("circle-animation-progress", function(event, progress) {
        let percent = $(this).attr("data-value") * 100;
        $(this).find(".circle-text").html(Math.round(percent * progress) + "%");
    });
</script>
@endpush
