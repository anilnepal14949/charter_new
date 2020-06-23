@extends('layouts.welcome')

@section('adminContent')
<div class="col-md-6 body_info">
	<div class="panel panel-default panelContent">
		<div class="panel-heading">
			<h2 class="panel-title"> 
				स्लाईडर सच्चाउनुहोस् 
			</h2>
		</div>
		<div class="panel-body">
			@if (count($errors) > 0)
				<div class="alert alert-danger">
					<strong>Whoops!</strong> There were some problems with your input.<br><br>
					<ul>
						@foreach ($errors->all() as $error)
							<li>{{ $error }}</li>
						@endforeach
					</ul>
				</div>
			@endif
			<form class="form-horizontal" role="form" method="POST" action="{{ route('slider.update',$slider->id) }}" enctype="multipart/form-data">
				{{ csrf_field() }}
				@include('admin.includes.slider._edit_form')
			</form>
		</div>
	</div>		
</div>

@include('admin.includes.slider.all')
@endsection

@section('footerContent')
<script>

    $('[data-toggle="tooltip"]').tooltip(); 
    
    function deleteThis(id){
    	if(confirm("Are you sure to delete this information?")){
    		$('form#'+id).submit();
    	}else{
    		return false;
    	}
    }
</script>
@endsection
