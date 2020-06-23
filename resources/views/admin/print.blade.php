@extends('layouts.app')

@section('content')
<div class="container-fluid" tabindex="-1" id="bodyWrapper">
    <div class="row">
        @include('admin.sidebar_left_menu')

        <div class="col-md-9 body_info" id="informationDiv">
            <div class="panel panel-default panelContent">
                <div class="panel-heading">
                    <h2 class="panel-title">
                        प्रिन्ट व्यवस्थापन
                    </h2>
                </div>
                <div class="panel-body">
                    <div class="list-group">
                        <a href="{{ route('posts.print') }}" class="list-group-item @if($activeMenu == 'print') activeMenu @endif text-center" style="font-size:3vh;" target="_blank"><span class="fa fa-print"></span> सबै शिर्षकहरु प्रिन्ट गर्नुहोस् </a>
                        <a href="{{ route('posts.details.print') }}" class="list-group-item @if($activeMenu == 'print') activeMenu @endif text-center" style="font-size:3vh;" target="_blank"><span class="fa fa-print"></span> सबै साेवाहरु प्रिन्ट गर्नुहोस् </a>
                    </div>
                </div>
            </div>
        </div>

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
