<!-- Scripts -->
<script src="{{ asset('js/app.js') }}" defer></script>
<script src="{{ asset('js/main.js') }}" defer></script>
<script src="{{ asset('slick/slick.min.js') }}" defer></script>
<!-- <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script> -->
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.4/dist/umd/popper.min.js"></script>
<script src="https://kit.fontawesome.com/c1d704309b.js" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.min.js" integrity="sha256-VazP97ZCwtekAsvgPBSUwPFKdrwD3unUfSGVYrahUqU=" crossorigin="anonymous"></script>
<!-- <script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script> -->
<!-- Jquery Mask -->
<script src="{{ asset('jquery-mask/dist/jquery.mask.min.js') }}" defer></script>
<!-- Auto Numeric JS -->
<!-- <script src="https://cdn.jsdelivr.net/npm/autonumeric@4.1.0"></script> -->
<script>
    //  $(document).ready(function(){
    //     new AutoNumeric('#rupiah');
    //     // $('#rupiah').AutoNumeric('#rupiah').french();;
    //     // $('#rupiah').AutoNumeric('init');
    // });
    $(document).ready(function(){

    // Format mata uang.
    $( '.uang' ).mask('000.000.000.000.000,-', {reverse: true});
    $('.jumlah').mask('000.000.000.000.000', {reverse: true});

    })
</script>
