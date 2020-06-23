<div class="form-group">
	<div class="col-md-12">
		<input type="text" class="form-control" name="pid" id="pid" value="{{ $post->id }}" readonly>
	</div>
</div>
<div class="form-group">
	<div class="col-md-12">
		<input type="text" class="form-control" name="title" id="title" placeholder="शिर्षक....." autofocus value="{{ $post->title }}">
	</div>
</div>
<div class="form-group">
	<h4 style="margin-left:2vh; color:#000;"> विस्तृत विवरण : </h4>
	<div class="col-md-12">
		<textarea class="form-control ckeditor" name="description" id="description">{{ $post->description }}</textarea>
	</div>
</div>
<div class="form-group">
	<div class="col-md-12">
		<input type="text" class="form-control" name="cost" id="cost" placeholder="खर्च....." value="{{ $post->cost }}">
	</div>
</div>
<div class="form-group">
	<div class="col-md-12">
		<input type="text" class="form-control" name="duration" id="duration" placeholder="समय....." value="{{ $post->duration }}">
	</div>
</div>
<div class="form-group">
	<div class="col-md-12">
		<input type="text" class="form-control" name="responsible_person" id="responsible_person" placeholder="संबन्धित व्यक्ति/शाखा ....." value="{{ $post->responsible_person }}">
	</div>
</div>
<div class="form-group">
	<div class="col-md-12">
		<input type="text" class="form-control" name="complain_officer" id="complain_officer" placeholder="गुनासो सुन्ने पदाधिकारी....." value="{{ $post->complain_officer }}">
	</div>
</div>
<div class="form-group">
	<div class="col-md-12">
		<input type="text" class="form-control" name="compensation_provision" id="compensation_provision" placeholder="क्ष्यतिपूर्ति रकम....." value="{{ $post->compensation_provision }}">
	</div>
</div>
<div class="form-group">
	<div class="col-md-12">
		<input type="text" class="form-control" name="other" id="other" placeholder="अन्य....." value="{{ $post->other }}">
	</div>
</div>
<div class="form-group">
	<div class="col-md-12">
		<input type="text" class="form-control" name="remarks" id="remarks" placeholder="कैफियत....." value="{{ $post->remarks }}">
	</div>
</div>

<input type="hidden" name="category_id" value="{{ $post->category_id }}">

<div class="form-group">
    <div class="col-md-2">
        <input type="submit" value="Edit" class="form-control">
    </div>
</div>
<input type="hidden" name="_method" value="put" />