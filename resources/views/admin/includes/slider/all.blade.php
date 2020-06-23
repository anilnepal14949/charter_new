<div class="col-md-3 body_info">
	<div class="panel panel-default panelContent">
		<div class="panel-heading">
			<h2 class="panel-title"> सबै तस्बिरहरु </h2>
		</div>
		<div class="panel-body">
			<table class="table">
				<tbody>
					<?php $i = 1; ?>
					@foreach($sliders as $slider)
						<tr>
							<td> {{ $i }}. </td>
							<td> <img src="{{ asset('/public/images/slider/'.$slider->imgName) }}" class="img-thumbnail" width="200"></td>
							<td> <a href="{{ route('slider.edit',$slider->id) }}" class="btn btn-xs btn-info" data-toggle="tooltip" title="Edit Slider..."><span class="fa fa-pencil"></span></a>
							<form method="POST" action="{{ route('slider.destroy',$slider->id) }}" id="deleteSliderForm{{$i}}">
								{{ csrf_field() }}
								<button type="button" class="btn btn-xs btn-danger" data-toggle="tooltip" title="Delete Slider..."><span class="fa fa-trash" onclick="deleteThis('deleteSliderForm{{$i}}');"></span></button>
								<input type="hidden" name="_method" value="delete" />
							</form>
							</td>
						</tr>
						<?php $i++; ?>
					@endforeach
				</tbody>
			</table>
		</div>
	</div>		
</div>