<?php
	$infoContent = '';
	if(isset($info)){
		$infoContent = ($info->infoContent != '')?$info->infoContent:'';
	}
?>

<div class="form-group">
	<div class="col-md-12">
		<textarea class="form-control ckeditor" name="infoContent" id="infoContent">{!! $infoContent !!}</textarea>
	</div>
</div>

<div class="form-group">
    <div class="col-md-2">
        <input type="submit" value="Edit" class="form-control">
    </div>
</div>
<input type="hidden" name="_method" value="put" />