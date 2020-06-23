<div class="col-md-3 body_info">
	<div class="panel panel-default panelContent">
		<div class="panel-heading">
			<h2 class="panel-title"> सबै डाटाहरु </h2>
		</div>
		<div class="panel-body">
			<table class="table">
				<tbody>
					<?php $i = 1; ?>
					@foreach($posts as $post)
						<tr>
							<td> {{ $i }}. </td>
							<td> {!! html_entity_decode($post->title) !!} </td>
							<td> <a href="{{ route('posts.edit',$post->id) }}" class="btn btn-xs btn-info" data-toggle="tooltip" title="Edit Post..."><span class="fa fa-pencil"></span></a>
							<form method="POST" action="{{ route('posts.destroy',$post->id) }}" id="deletePostForm{{$i}}">
								{{ csrf_field() }}
								<button type="button" class="btn btn-xs btn-danger" data-toggle="tooltip" title="Delete Post..."><span class="fa fa-trash" onclick="deleteThis('deletePostForm{{$i}}');"></span></button>
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