<div class="col-md-3 body_info">
	<div class="panel panel-default panelContent">
		<div class="panel-heading">
			<h2 class="panel-title"> सबै बिशेष सूचनाहरु </h2>
		</div>
		<div class="panel-body">
			<table class="table">
				<tbody>
					<?php $i = 1; ?>
					@foreach($categories as $category)
						<tr>
							<td> {{ $i }}. </td>
							<td> {!! html_entity_decode($category->title) !!} </td>
							<td> <a href="{{ route('category.edit',$category->id) }}" class="btn btn-xs btn-info" data-toggle="tooltip" title="Edit Category..."><span class="fa fa-pencil"></span></a>
							<form method="POST" action="{{ route('category.destroy',$category->id) }}" id="deleteCategoryForm{{$i}}">
								{{ csrf_field() }}
								<button type="button" class="btn btn-xs btn-danger" data-toggle="tooltip" title="Delete Category..."><span class="fa fa-trash" onclick="deleteThis('deleteCategoryForm{{$i}}');"></span></button>
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