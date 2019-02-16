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
		<form method="POST" action="{{action('PostController@update', $id)}}">
			{{csrf_field()}}
			<input type="hidden" name="_method" value="PATCH">
				<input type="text" id="post_title" name="post_title" class="form-control" value="{{$posts->post_title}}"  placeholder="Enter Post Title">
				<input type="text" id="post_content" name="post_content" class="form-control" value="{{$posts->post_content}}" placeholder="Enter Post Content">
			<div>
				<input type="submit" class="btn btn-primary" value="Edit" style="margin-top: 20px">
			</div>
		</form>
	</div>
</div>




 @endif


 @endauth

</div>
</div>

@endsection