@extends('layouts.app')

@section('content')
<div class="container-fluid" style="margin-top:-1vh;">
    <div class="row">
        @include('admin.sidebar_left_menu')

        @yield('adminContent')
    </div>
</div>
<div class="container-fluid footer_copy text-center">
    <h4> Powered by <strong> GeoWeb Solution Nepal &nbsp;&nbsp;&nbsp; </strong> Contact No.: <strong> 9845514949 / 9855069599</strong></h4>
</div>
@endsection
