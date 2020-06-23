@extends('layouts.app')

@section('content')
<div class="container-fluid">
	<div class="row">
		<div class="col-md-2 col-md-offset-5">
			<div class="panel panel-default" style="margin-top:80%; background:rgba(200,10,10,0.9); border:none; box-shadow:1px 1px 1px #fff;">
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

					<form class="form-horizontal" role="form" method="POST" action="{{ url('/admin/index') }}" id="loginForm">
						<input type="hidden" name="_token" value="{!! csrf_token() !!}">

						<div class="form-group">
							<div class="col-md-12">
								<input type="text" class="form-control" name="username" value="{{ old('username') }}" autofocus placeholder="Enter Username...">
							</div>
						</div>

						<div class="form-group">
							<div class="col-md-12">
								<input type="password" class="form-control" name="password" placeholder="Enter Password...">
							</div>
						</div>
						<div class="form-group">
							<div class="col-md-12">
								<input type="submit" class="btn btn-primary col-md-12 col-lg-12" value="Login">
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection

@section('footerContent')
<script type="text/javascript">
	$(document).ready(function(){
		$('#loginForm').on('keyup keypress', function(e) {
		  var keyCode = e.keyCode || e.which;
		  if (keyCode === 13) {
		    e.preventDefault();
		    return false;
		  }
		});
	});
</script>
@endsection
