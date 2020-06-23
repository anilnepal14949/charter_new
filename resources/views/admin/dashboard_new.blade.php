@extends('layouts.app')

@section('content')
<div class="container-fluid" tabindex="-1" id="bodyWrapper1">
    <input type="hidden" id="newDashboardValue" name="newDashboardValue" value="geoweb">
    <input type="hidden" id="categoryId" name="category_id" value="{{ $category->id }}">
    <div class="row">
        @include('admin.sidebar')

        <div class="col-md-6 body_info" id="informationDiv">
            @include('admin.slider_new')
        </div>

        @include('admin.sidebar_right_new')
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
<div id="selectorWrapper">
    <input type="text" id="selector">
</div>
@endsection
