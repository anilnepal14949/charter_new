<div class="col-md-12">
	<img src="{{ asset('/public/images/slider/'.$slider->imgName) }}" class="img-thumbnail" width="200" style="margin-bottom:2vh !important">
</div>
<div class="form-group">
	<div class="col-md-12">
		<input type="file" class="form-control" name="sliderImage" id="sliderImage">
	</div>
</div>

<div class="form-group">
	<div class="col-md-12">
		<textarea name="imgDescription" id="imgDescription" class="form-control" placeholder="Enter Description">{{ $slider->imgDescription }}</textarea>
	</div>
</div>

<div class="form-group">
	<div class="col-md-12">
		<input type="number" class="form-control" name="imgOrder" id="imgOrder" placeholder="Enter Order" value="{{ $slider->imgOrder }}">
	</div>
</div>



<div class="form-group">
    <div class="col-md-2">
        <input type="submit" value="Edit" class="form-control">
    </div>
</div>
<input type="hidden" name="_method" value="put" />