<div class="col-md-3 body_info">
	<div class="panel panel-default panelContent">
		<div class="panel-heading">
			<h2 class="panel-title"> सबै बिशेष सूचनाहरु </h2>
		</div>
		<div class="panel-body">
			<table class="table">
				<tbody>
					<?php $i = 1; ?>
					@foreach($allInfos as $info)
						<tr>
							<td> {{ $i }} </td>
							<td> {!! html_entity_decode($info->infoContent) !!} </td>
							<td> <a href="{{ route('info.edit',$info->id) }}" class="btn btn-xs btn-info" data-toggle="tooltip" title="Edit Info..."><span class="fa fa-pencil"></span></a>
							<form method="POST" action="{{ route('info.destroy',$info->id) }}" id="deleteForm{{$i}}">
								{{ csrf_field() }}
								<button type="button" class="btn btn-xs btn-danger" data-toggle="tooltip" title="Delete Info..."><span class="fa fa-trash" onclick="deleteThis('deleteForm{{$i}}');"></span></button>
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