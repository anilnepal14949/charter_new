<?php
	$categoryTitle = '';
	if(isset($category)){
		$categoryTitle = ($category->title != '')?$category->title:'';
	}
?>

<div class="form-group">
	<div class="col-md-12">
		<input type="text" class="form-control" name="categoryTitle" id="categoryTitle" placeholder="क्याटोगोरी Title....." autofocus value="{{ $categoryTitle }}">
	</div>
</div>


<div class="form-group">
    <div class="col-md-2">
        <input type="submit" value="Edit" class="form-control">
    </div>
</div>
<input type="hidden" name="_method" value="put" />