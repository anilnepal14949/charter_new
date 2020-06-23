@if($postsId == 0)
<div id="animation_div" style="color:#000 !important">
    <h1 class="text-center"> {!! html_entity_decode($category->title) !!} </h1><hr>
    <strong style="font-size:2.5vh;"> Press the number for the <span style="color:#0f0"> Desired Service </span> from the <span style="color:#f00;"> Right Side </span> of the screen. </strong><br>
    <img src="{{ asset('/public/images/rightarrow.png') }}"><br>
    <strong style="font-size:5vh; color:#f00; text-shadow: 1px 1px 1px #000;"> दाँयाभागमा रहेको सेवाको शिर्षक हेरी नम्बर थिच्नुहोस </strong>
</div>
@else
<div id="animation_div" style="color:#000 !important">
    <h2 class="text-center" style="color:#00f;text-shadow:1px 1px 1px #000;"> {!! html_entity_decode($post->title) !!} </h2><hr>
    <div id="postsContent" style="font-size:1.5vw;">
    	{!! html_entity_decode($post->description) !!}
    </div>
</div>
@endif