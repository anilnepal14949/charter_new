<div class="form-group">
	<div class="col-md-12">
		<input type="file" class="form-control" name="sliderImage" id="sliderImage">
	</div>
</div>

<div class="form-group">
	<div class="col-md-12">
		<textarea name="imgDescription" id="imgDescription" class="form-control" placeholder="Enter Description"></textarea>
	</div>
</div>

<div class="form-group">
	<div class="col-md-12">
		<input type="number" class="form-control" name="imgOrder" id="imgOrder" placeholder="Enter Order" value="{{ $sliderOrder+1 }}">
	</div>
</div>


<div class="form-group">
    <div class="col-md-2">
        <input type="submit" value="Add" class="form-control">
    </div>
</div>