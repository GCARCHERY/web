@extends('index')

@section('content')

<div class="container">
   <h3 align="center">File Uploading in Laravel</h3>
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
       <td width="40%" align="right"><label>Select File for Upload</label></td>
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
        <br />
        <h3 align="center">Add Team Member</h3>
        <br />
        @if(count($errors) > 0)
            <div class="alert alert-danger">
                <ul>
                    @foreach($errors->all() as $error)
                        <li>{{$error}}</li>
                    @endforeach
                </ul>
            </div>
        @endif
       
        <form method="post" action="{{url('sponsors')}}">
            {{csrf_field()}}
            <div class="form-group">
                <input type="text" name="name" class="form-control" placeholder="Enter Member Name"/>
            </div>
            <br>
            <div class="form-group">
                <input type="text" name="description" class="form-control" placeholder="Enter Member Rank"/>
            </div>
            <br>


            <div class="form-group">
                <input type="text" name="avatar" class="form-control" placeholder="Avatar" value="{{ Session::get('path') }}" />
            </div>
            <br>


             <div class="form-group">
                <input type="text" name="link" class="form-control" placeholder="Enter Member Department"/>
            </div>
            <br>

            <div class="form-group">
                <input type="submit" value="Add Sponsored Individual" class="btn btn-primary"/>
            </div>
        </form>
        </div>
    </div>


@endsection