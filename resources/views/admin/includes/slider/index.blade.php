@extends('layouts.welcome')

@section('adminContent')
<div class="col-md-6 body_info">
	<div class="panel panel-default panelContent">
		<div class="panel-heading">
			<h2 class="panel-title"> 
				नयाँ तस्बिर थप्नुहोस् 
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
			<form class="form-horizontal" role="form" method="POST" action="{{ route('slider.store') }}" enctype="multipart/form-data">
				{{ csrf_field() }}
				@include('admin.includes.slider._form')
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
    	if(confirm("Are you sure to delete this slider?")){
    		$('form#'+id).submit();
    	}else{
    		return false;
    	}
    }
</script>
@endsection
