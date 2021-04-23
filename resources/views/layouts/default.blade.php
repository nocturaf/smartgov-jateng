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
  <title>IDSG Pemprov Jateng</title>
  <meta name="description" content="IDSG Pemprov Jateng">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- STYLE -->
  @stack('before-style')
  @include('includes.style')
  @stack('after-style')

</head>

<body>
  <!-- NAVBAR -->
  <div class="row mx-0">
    <div class="w-25 min-vh-100 bg-white shadow-1" style="z-index:1">
      <!-- SIDEBAR -->
      @include('includes.sidebar')
    </div>
    <div id="right-panel" class="w-75 bg-white">
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

</body>

</html>