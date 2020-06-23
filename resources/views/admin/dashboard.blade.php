@extends('layouts.app')

@section('content')
<div class="container-fluid" tabindex="-1" id="bodyWrapper">
    <div class="row">
        @include('admin.sidebar')

        <div class="col-md-6 body_info" id="informationDiv">
            @include('admin.slider')
        </div>

        @include('admin.sidebar_right')
    </div>
</div>
<div class="container-fluid footer">
    <marquee direction="left"> 
        @foreach($infos as $info)
        <strong>  {!! html_entity_decode($info->infoContent) !!} </strong>  
        @endforeach
    </marquee>
</div>
<div class="container-fluid footer_copy text-center">
    <h4> Powered by <strong> GeoWeb Solution Nepal &nbsp;&nbsp;&nbsp; </strong> Contact No.: <strong> 9845514949 / 9855069599</strong></h4>
</div>
@endsection
