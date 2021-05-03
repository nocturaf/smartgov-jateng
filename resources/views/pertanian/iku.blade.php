@extends('layouts.default')

@section('content')
<div class="container py-4">
    <div class="text-center">
        <!-- <div>

            <img src="images/btn-icons/ntp.png" alt="" class="img" height="84px">
        </div>
        <div>

            <img src="images/btn-icons/ntp.png" alt="" class="img" height="64px">
        </div> -->
        <ul class="tabs d-flex border-bottom mt-3">
            <li class="tab-link tab-custom current mx-0 text-center" data-tab="tab-1">
                <img src="images/btn-icons/ntp.png" alt="" class="img">
                <br>
                NTP
            </li>
            <li class="tab-link tab-custom mx-0 text-center" data-tab="tab-2">
                <img src="images/btn-icons/perhutani.png" alt="" class="img">
            </li>
        </ul>
    </div>
    <div id="tab-1" class="tab-content mt-4 current">
        tab 1
    </div>
    <div id="tab-2" class="tab-content mt-4">
        tab 2
    </div>
</div>

@endsection

@push('before-style')
<style>
</style>
@endpush

@push('after-script')
<script>
</script>
@endpush
