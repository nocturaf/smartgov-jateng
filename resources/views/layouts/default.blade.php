<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js" lang="">
<!--<![endif]-->

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <title>IDSG Pemprov Jateng</title>
  <meta name="description" content="IDSG Pemprov Jateng">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- STYLE -->
  @stack('before-style')
  @include('includes.style')
  @stack('after-style')
  <style>
    #left-panel{
      max-width: 280px;
      min-width: 280px;
    }
    .wrapper{
      height: 100%;
      position: relative;
      overflow-x: hidden;
      overflow-y: auto;
      display: flex;
      align-items: stretch;
      perspective: 1500px;
    }
    #right-panel{
      width:100%
    }
  </style>
  
</head>

<body>
  <!-- NAVBAR -->
  <div id="page" class="wrapper mx-0">
    <div id="left-panel" class="min-vh-100 bg-white shadow-1" style="z-index:1">
      <!-- SIDEBAR -->
      @include('includes.sidebar')
    </div>
    <div id="right-panel" class="bg-white">
      @include('includes.navbar')
      <div class="content">
        <!-- Content -->
        @yield('content')
      </div>
      <div class="clearfix"></div>
    </div>
  </div>

  <!-- SCRIPT -->
  @stack('before-script')
  @include('includes.script')
  @stack('after-script')

  <script>
  $(document).ready(function() {
        var leftPanel = document.getElementById('left-panel').offsetWidth;
        var page = document.getElementById('page').offsetWidth;
        var rightPanel = document.getElementById('right-panel');
        rightPanel.style.width = (page - leftPanel) + "px";
    });
  </script>

</body>

</html>