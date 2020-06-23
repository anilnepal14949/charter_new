<div class="form-group">
	<div class="col-md-12">
		<input type="text" class="form-control" name="title" id="title" placeholder="शिर्षक....." autofocus>
	</div>
</div>
<div class="form-group">
	<h4 style="margin-left:2vh; color:#000;"> विस्तृत विवरण : </h4>
	<div class="col-md-12">
		<textarea class="form-control ckeditor" name="description" id="description"></textarea>
	</div>
</div>
<div class="form-group">
	<div class="col-md-12">
		<input type="text" class="form-control" name="cost" id="cost" placeholder="खर्च.....">
	</div>
</div>
<div class="form-group">
	<div class="col-md-12">
		<input type="text" class="form-control" name="duration" id="duration" placeholder="समय....." value="सोही दिन, सर्जमिनको हकमा बढीमा ३ दिनभित्र">
	</div>
</div>
<div class="form-group">
	<div class="col-md-12">
		<input type="text" class="form-control" name="responsible_person" id="responsible_person" placeholder="संबन्धित व्यक्ति/शाखा ....." value="वडा अध्यक्ष/वडा सदस्य/वडा सचिव, सम्बन्धित फाँटका कर्मचारी">
	</div>
</div>
<div class="form-group">
	<div class="col-md-12">
		<input type="text" class="form-control" name="complain_officer" id="complain_officer" placeholder="गुनासो सुन्ने पदाधिकारी.....">
	</div>
</div>
<div class="form-group">
	<div class="col-md-12">
		<input type="text" class="form-control" name="compensation_provision" id="compensation_provision" placeholder="क्ष्यतिपूर्ति रकम.....">
	</div>
</div>
<div class="form-group">
	<div class="col-md-12">
		<input type="text" class="form-control" name="other" id="other" placeholder="अन्य.....">
	</div>
</div>
<div class="form-group">
	<div class="col-md-12">
		<input type="text" class="form-control" name="remarks" id="remarks" placeholder="कैफियत.....">
	</div>
</div>

<input type="hidden" name="category_id" value="{{ $category->id }}">

<div class="form-group">
    <div class="col-md-2">
        <input type="submit" value="Add" class="form-control">
    </div>
</div>