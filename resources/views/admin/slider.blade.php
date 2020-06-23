<div id="animation_div">
	<?php $i=1; ?>
	@foreach($sliders as $slider)
    <div id="{{ $i }}" class="takeMeOnly"><img src="{{asset('/public/images/slider/original/origeo'.$slider->imgName)}}"></div><span class="animationDiv" id="charter{{ $i }}"></span><span class="animationCaption" id="caption{{ $i++ }}"> {{ $slider->imgDescription }} </span>
    @endforeach
</div>