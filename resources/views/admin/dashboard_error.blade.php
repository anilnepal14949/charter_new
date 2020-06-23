@extends('layouts.app')

@section('content')
<div class="container-fluid" tabindex="-1" id="bodyWrapper1">
    <input type="hidden" id="newDashboardValue" name="newDashboardValue" value="geoweb">
    <input type="hidden" id="categoryId" name="category_id" value="{{ $category_id }}">
    <div class="row">
        <div class="col-md-3 left_sidebar">
            <div class="panel panel-default panel-flush panel-left">
                <div class="panel-heading">
                    <h2 class="panel-title"> Instructions for Users </h2>
                </div>
                <div class="panel-body">
                    <h4>
                        1. Please Enter the number according to the list of Titles at the right side of the screen.
                            ( दाँयाभागमा रहेको सेवाको शिर्षक हेरी नम्बर थिच्नुहोस )
                    </h4>
                    <h4>
                        2. Press 'Enter' to get back to homescreen
                            ( कुनैपनि पृष्ठबाट पहिलो पृष्ठमा आउनकोलागि 'Enter'थिच्नुहोस )
                    </h4>
                </div>
            </div>
        </div>

        <div class="col-md-9 body_info" id="informationDiv">
            <h1 style="font-size:8vh; color:#f00; text-shadow:1px 1px 1px #fff; margin-top:20%; text-align:center;">
                तपाईले गलत अङ्क प्रविष्टि गर्नु भएको छ । कृपया सहि अङ्क प्रविष्टि गर्नुहोस् ।
            </h1>
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
<div id="selectorWrapper">
    <input type="text" id="selector">
</div>
@endsection
