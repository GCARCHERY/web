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
	<div style="height: 25px"></div>


 @auth @if(Auth::user()->id == 1)


<div class="container">
   <h3 align="center">Avatar </h3>
   <br />
   @if (count($errors) > 0)
    <div class="alert alert-danger">
     Upload Validation Error<br><br>
     <ul>
      @foreach ($errors->all() as $error)
       <li>{{ $error }}</li>
      @endforeach
     </ul>
    </div>
   @endif
   @if ($message = Session::get('success'))
   <div class="alert alert-success alert-block">
    <button type="button" class="close" data-dismiss="alert">×</button>
           <strong>{{ $message }}</strong>
   </div>

   <img src="/images/{{ Session::get('path') }}" width="300" style="size: 150px 150px; border-radius: 50%;" />

   @endif
   <form method="post" action="{{url('/uploadfile')}}" enctype="multipart/form-data">
    {{ csrf_field() }}
    <div class="form-group">
     <table class="table">
      <tr>
       <td width="40%" align="right"><label>Select File to Upload</label></td>
       <td width="30"><input type="file" name="select_file" /></td>
       <td width="30%" align="left"><input type="submit" name="upload" class="btn btn-primary" value="Upload"></td>
      </tr>
      <tr>
       <td width="40%" align="right"></td>
       <td width="30"><span class="text-muted">jpg, png, gif</span></td>
       <td width="30%" align="left"></td>
      </tr>
     </table>
    </div>
   </form>
   <br />
  </div>




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
		<h3 style="background-color: white">Edit Sponsored</h3>
		<br>
		<form method="POST" action="{{action('SponsorController@update', $id)}}">
			{{csrf_field()}}
			<input type="hidden" name="_method" value="PATCH">
				<input type="text" id="name" name="name" class="form-control" value="{{$spons->name}}"  placeholder="Enter Name">
				<input type="text" id="description" name="description" class="form-control" value="{{$spons->description}}"  placeholder="Enter description">
				<input type="text" id="link" name="link" class="form-control" value="{{$spons->link}}"  placeholder="Enter link">
				<input type="text" id="avatar" name="avatar" class="form-control" value="{{ Session::get('path') }}"  placeholder="Avatar">
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