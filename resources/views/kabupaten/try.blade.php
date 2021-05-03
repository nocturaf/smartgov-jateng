@extends('layouts.try-layout')

@section('content')
<section class="custom">
  <div class="container">
    <div class="row">
      <div class="flipper col-sm-3">
        <div class="flip-content">
          <div class="front">
            <p>
              <img src="http://dummyimage.com/150x110/999/fff">
            </p>
            <p>Lorem consectetu adidfsicdding elitdafdd. At quaessrat iste mollitia aspedriores.</p>
            <button class="btn btn-default bottom" type="submit">Learn More</button>
          </div>
          <div class="back">
            <p>here is some information on the back of card one. I would like to <a href="http://davidwalsh.name/css-flip">link some text</a> for people to follow on the back of the card - but the click action messes that up.</p>
            <div class="goback">
              <p>back</p>
            </div>
          </div>
        </div>
      </div>
      <div class="flipper col-3 px-2">
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
                        </div>
                ">
                <div class="font-20 font-weight-bold">Sektor Pertanian</div>
                <img class="img" style="margin:48px 0px" src="images/pertanian.png" alt="" height="90px" width="auto">
                <div class="font-36">101,49</div>
                <div class="font-16 font-weight-bold">Nilai Tukar Petani</div>
                <button class="btn btn-red rounded-bottom mt-4">Data Pendukung</button>
            </div>
          </div>
          <div class="back">
            <div class=" text-center shadow-2 rounded pt-5">
              <p>here is some information on the back of card one. I would like to 
              <a href="http://davidwalsh.name/css-flip">link some text</a> 
              for people to follow on the back of the card - but the click action messes that up.</p>
              <div class="goback">
                <p>back</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<br>
<br>
<br>
<br>
<div class="myClass">
  <div class="mx-0">
  <div class="flipper col-3 px-2">
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
                        </div>
                ">
                <div class="font-20 font-weight-bold">Sektor Pertanian</div>
                <img class="img" style="margin:48px 0px" src="images/pertanian.png" alt="" height="90px" width="auto">
                <div class="font-36">101,49</div>
                <div class="font-16 font-weight-bold">Nilai Tukar Petani</div>
                <button class="btn btn-red rounded-bottom mt-4">Data Pendukung</button>
            </div>
          </div>
          <div class="back">
            <div class=" text-center shadow-2 rounded pt-5">
              <p>here is some information on the back of card one. I would like to 
              <a href="http://davidwalsh.name/css-flip">link some text</a> 
              for people to follow on the back of the card - but the click action messes that up.</p>
              <div class="goback">
                <p>back</p>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="span5 mx-1">a</div>
      <div class="span5 mx-1">a</div>
      <div class="span5 mx-1">a</div>
  </div>
</div>
@endsection

@push('before-style')
<style>

/* from: https://davidwalsh.name/css-flip  */

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

    .myClass {
        overflow-x: auto;
        white-space: nowrap;
    }
    .myClass [class*="col"],
    .myClass [class*="span"] {
        display: inline-block;
        float: none; /* Very important */
    }
    .myClass .span5, .myClass .col-3 { background: blue; margin-top: 5px;min-height: 50px; min-width:200px }
    .myClass {
        max-width: 400px;
        height: auto;
        margin-left: auto;
        margin-right: auto;
    }
  
</style>
@endpush

@push('after-script')
    <script>
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
      $(function () {
        $('[data-toggle="tooltip"]').tooltip()
      });
    </script>
@endpush


