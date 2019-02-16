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

            @component('nav.hero')
       
<p style=" color: white; margin-bottom: -20px">
     <span style="color:#b73f40">G</span>amers <span style="color:#b73f40">C</span>ommunity 
</p>

   	@endcomponent

	@include('nav.nav')
            
            </div>
        </div>
	
@endsection

@section('page_content')

<div class="bg1" style="background-color: #111111">
<div style="height: 10px"></div>
	<div class="media_content" style="
		                margin-top: 0px; 
						margin-bottom: -20px;  
						margin-left: auto;
           				 margin-right: auto;

	"> 



<div style="height: 25px;"></div>

<img src="/img/BPT.png"   style=" width: 
200%; margin-left: -50%" />


<div style="height: 25px;"></div>

<h1>
<p style=" color: white;">
     <span style="color:#b73f40">● C</span>ommunities <span style="color:#b73f40">we focus</span> on supportin<span style="color:#b73f40">g ●</span> 
</p>
</h1>

<div style="margin-bottom: 50px;">

<div style=" margin-top: 25px;">
					<div class="" style="color: lightgrey; ">

					<div style="background-color: black; width: 95%; color: white; margin-left: auto; margin-right: auto;">
				
					</div>

					<div style="height: 15px"></div>
				 	<img src="/images/eadice.png" width="100" height="100" style="outline-style: solid; outline-color: #b73f40; outline-width: 2px; display:inline-block; margin-top: -10px" />

				<div style="display: inline-block; margin-left:0px; width: 400px; background-color: #f8f8f8; padding-left: 35px; padding-right: 35px; padding-top: 10px; padding-bottom: 5px;">
					<h2 style=" color: #b73f40; ">EA DICE</h2>
				</div>

				 <div style="height: 10px"></div>

				<a class="btn btn-outline-danger" href="http://www.dice.se/" style=" margin-right: 10px; font-size: 20px; width: 350px;">Check them out!</a>
				
			</div>

</div>

<div style=" margin-top: 25px;">
					<div class="" style="color: lightgrey; ">

					<div style="background-color: black; width: 95%; color: white; margin-left: auto; margin-right: auto;">
				
					</div>

					<div style="height: 15px"></div>
				 	<img src="/images/gportal.png" width="100" height="100" style="outline-style: solid; outline-color: #b73f40; outline-width: 2px; display:inline-block; margin-top: -10px" />

				<div style="display: inline-block; margin-left:0px; width: 400px; background-color: #f8f8f8; padding-left: 35px; padding-right: 35px; padding-top: 10px; padding-bottom: 5px;">
					<h2 style=" color: #b73f40; ">GPortal</h2>
				</div>

				 <div style="height: 10px"></div>

				<a class="btn btn-outline-danger" href="https://www.g-portal.com/" style=" margin-right: 10px; font-size: 20px; width: 350px;">Check them out!</a>
				
			</div>

</div>

<div style=" margin-top: 25px;">
					<div class="" style="color: lightgrey; ">

					<div style="background-color: black; width: 95%; color: white; margin-left: auto; margin-right: auto;">
				
					</div>

					<div style="height: 15px"></div>
				 	<img src="/images/eso.png" width="100" height="100" style="outline-style: solid; outline-color: #b73f40; outline-width: 2px; display:inline-block; margin-top: -10px" />

				<div style="display: inline-block; margin-left:0px; width: 400px; background-color: #f8f8f8; padding-left: 35px; padding-right: 35px; padding-top: 10px; padding-bottom: 5px;">
					<h2 style=" color: #b73f40; ">ESO</h2>
				</div>

				 <div style="height: 10px"></div>

				<a class="btn btn-outline-danger" href="https://localhost:8000/" style=" margin-right: 10px; font-size: 20px; width: 350px;">Check them out!</a>
				
			</div>

</div>

</div>

<h1>
<p style=" color: white;">
     <span style="color:#b73f40">● P</span>eople we sponso<span style="color:#b73f40">r ●</span> 
</p>
</h1>
<div style="height: 50px;"></div>



<?php if (Route::has('login')): ?>
	
 @auth <?php if (Auth::user()->id == 1): ?>
	

<div class="container">
   <h3 align="center">Upload avatar</h3>
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

   <img src="/images/{{ Session::get('path') }}" width="150" height="150" style=" border-radius: 50%;" />

   @endif
   <form method="post" action="{{url('/uploadfile')}}" enctype="multipart/form-data">
    {{ csrf_field() }}
    <div class="form-group">
     <table class="table">
      <tr>
       <td width="40%" align="right"><label>Select File to Upload</label></td>
       <td width="30"><input type="file" name="select_file"  /></td>
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
        <h3 align="center">Add Sponsored Individual</h3>
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
                <input type="text" name="description" class="form-control" placeholder="Enter description"/>
            </div>
            <br>


            <div class="form-group">
                <input type="text" name="avatar" class="form-control" placeholder="Avatar" value="{{ Session::get('path') }}" />
            </div>
            <br>


             <div class="form-group">
                <input type="text" name="link" class="form-control" placeholder="Enter link"/>
            </div>
            <br>

            <div class="form-group">
                <input type="submit" value="Add Sponsored Individual" class="btn btn-primary"/>
            </div>
        </form>
        </div>
    </div>




	
@endauth <?php endif ?>



	
<?php endif ?>




<div class="align_sponsors" style="width: 150% !important; margin-left: -20%">


		<ul  style="list-style-type: none; overflow-x:hidden;
			white-space:nowrap; 
			width: 100%; ">
	
		
		<?php foreach ($spon as $row): ?>
			<li > <div></div>
			<div class="inline" style="margin-left: 30px; margin-top: 25px;">
					<div class="" style="color: lightgrey; ">

					<div style="background-color: black; width: 95%; color: white; margin-left: auto; margin-right: auto;">
				
					</div>

					<div style="height: 15px"></div>
				 	<img src="/images/{{$row['avatar']}}" width="100" height="100" style="outline-style: solid; outline-color: #b73f40; outline-width: 2px; display:inline-block; margin-top: -10px" />

				<div style="display: inline-block; margin-left:0px; width: 400px; background-color: #f8f8f8; padding-left: 35px; padding-right: 35px; padding-top: 10px; padding-bottom: 5px;">
					<h2 style=" color: #b73f40; ">{{$row['name']}}</h2>
				</div>

				 <div style="height: 10px"></div>
				<h4>{{$row['description']}}</h4>

				<a class="btn btn-outline-danger" href="{{$row['link']}}" style=" margin-right: 10px; font-size: 20px; width: 350px;">Check them out!</a>
				
			</div>

			

		


<?php if (Route::has('login')): ?>
	
 @auth <?php if (Auth::user()->id == 1): ?>

			<div style="height: 25px"></div>

			<div class="links">
                        <a href="{{action('SponsorController@edit', $row['id'])}}" class="btn btn-info" style="margin-top: -3px">Edit</a>
                        <form method="post" class="delete_form" action="{{action('SponsorController@destroy', $row['id'])}}">
                        	
                        	{{csrf_field()}}
                    		
                    		<input type="hidden" name="_method" value="DELETE">
                    		<br>
                    		<div id = "del" style="margin-top: -15px; margin-bottom: 10px">
                    			<button type="submit" class="btn btn-danger">Remove</button>
                    		</div>
                    	</form>
                    	</div>


                    	@endauth	<?php endif ?>
	</div>
	</li>


	
<?php endif ?>

                    	
			
			<div style="height: 0px; "></div>
		<?php endforeach ?> 
	</ul> 
</div>
<div></div>
		</div>

</div>

<div style="height: 30px;"></div>

</div>







@endsection
