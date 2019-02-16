@extends('index')

@section('content')
<div class="flex-center position-ref full-height background">
           <div class="content ">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth @if(Auth::user()->id == 1)
                        <a href="{{ url('/profile') }}">Profile</a>
                        @endif
                    
                    @endauth
                </div>
            @endif

	<a class="btn btn-danger" href="/">HOME PAGE</a>


 @auth @if(Auth::user()->id == 1)

<div class="row">
	<div class="col-md-12">

@if(count($errors) > 0)
	<div class="alert">
		@foreach($errors->all() as $error)
			<h1>{{$error}}</h1>
		@endforeach
	</div>
@endif

		<br>
		<h3 style="background-color: white">Edit Post</h3>
		<br>
		<form method="POST" action="{{action('TeamController@update', $id)}}">
			{{csrf_field()}}
			<input type="hidden" name="_method" value="PATCH">
				<input type="text" id="name" name="name" class="form-control" value="{{$teams->name}}"  placeholder="Enter Name">
				<input type="text" id="rank" name="rank" class="form-control" value="{{$teams->rank}}"  placeholder="Enter Rank">
				<input type="text" id="department" name="department" class="form-control" value="{{$teams->department}}"  placeholder="Enter Department">
			<div>
				<input id="edit" type="submit" class="btn btn-primary" value="Edit" style="margin-top: 20px">
			</div>
		</form>
	</div>
</div>

<script type="text/javascript">
		let button = document.getElementById("edit");
	button.addEventListener("click", function() {
		alert("The post will now be edited.");
	}); 
</script>


 @endif


 @endauth
</div>
</div>
@endsection