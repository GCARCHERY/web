@extends('index')

@section('content')

<div class="flex-center position-ref full-height background1">
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
     <span style="color:#ffd283">OUR</span> Team
</p>

   	@endcomponent

	@include('nav.nav')
            
            </div>
        </div>

@endsection

@section('page_content')
<div class="bg2">
<div style="height: 10px"></div>

	<div class="media_content" style="
		                margin-top: 0px; 
						margin-bottom: 0px;  
						margin-left: 50% ;

		"> 

					@if (Route::has('login'))
               
                    @auth @if(Auth::user()->id == 1)

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
        @if(\Session::has('success'))
            <div><h1>success</h1></div>
        @endif
        <form method="post" action="{{url('teams')}}">
            {{csrf_field()}}
            <div class="form-group">
                <input type="text" name="name" class="form-control" placeholder="Enter Member Name"/>
            </div>
            <br>
            <div class="form-group">
                <input type="text" name="rank" class="form-control" placeholder="Enter Member Rank"/>
            </div>
            <br>
			 <h6>( 1 for CEO | 2 for Executives | 3 IT Department | 4 Community Manager )</h6>	
			 <div style="height: 2px"></div>
             <div class="form-group">
                <input type="text" name="department" class="form-control" placeholder="Enter Member Department"/>
            </div>
            <br>

            <div class="form-group">
                <input type="submit" value="Add Team Member" class="btn btn-primary"/>
            </div>
        </form>
        </div>
    </div>
@endif
                    @endauth

            @endif


<div style="color: white; width: 50%; margin-right: auto; margin-left: auto;">
<div style="height: 50px"></div>
<h1 style=" color: #ae8762;">The Founder</h1>
<hr class="style1" style="margin-bottom: -5px; margin-top: -5px; height: 2px !important ; background-color: lightgrey !important">
<div style="height: 10px"></div>
			<?php foreach ($team as $row): ?>

				<?php if ($row['department'] == 1): ?>


					<h1 style="text-decoration: underline; color: lightgrey">{{$row['name']}}</h1>
					<h4 style="color: #ae8762">{{$row['rank']}}</h4>

					<?php if (Route::has('login')): ?>

	@auth

		<?php if (Auth::user()->id == 1): ?>

			<div class="links">
                        <a href="{{action('TeamController@edit', $row['id'])}}" class="btn btn-info" style="margin-top: -3px">Edit</a>
                        <form method="post" class="delete_form" action="{{action('TeamController@destroy', $row['id'])}}">
                        	
                        	{{csrf_field()}}
                    		
                    		<input type="hidden" name="_method" value="DELETE">
                    		<br>
                    		<div id = "del" style="margin-top: -15px; margin-bottom: 10px">
                    			<button type="submit" class="btn btn-danger">Remove</button>
                    		</div>
                    	</form>
                    	</div>
		
		<?php endif ?>

	@endauth
	
<?php endif ?>


<div style="height: 25px"></div>
				<?php endif ?>

			<?php endforeach ?>

			<div style="height: 50px"></div>
			<h1 style=" color: #4c789a;">Our Executives</h1>
			<hr class="style1" style="margin-bottom: -5px; margin-top: -5px; height: 2px !important ; background-color: lightgrey !important">
<div style="height: 10px"></div>
			<?php foreach ($team as $row): ?>

				<?php if ($row['department'] == 2): ?>

	
					<h1 style="text-decoration: underline; color: lightgrey">{{$row['name']}}</h1>
					<h4 style="color: #4c789a">{{$row['rank']}}</h4>

					<?php if (Route::has('login')): ?>

	@auth

		<?php if (Auth::user()->id == 1): ?>

			<div class="links">
                        <a href="{{action('TeamController@edit', $row['id'])}}" class="btn btn-info" style="margin-top: -3px">Edit</a>
                        <form method="post" class="delete_form" action="{{action('TeamController@destroy', $row['id'])}}">
                        	
                        	{{csrf_field()}}
                    		
                    		<input type="hidden" name="_method" value="DELETE">
                    		<br>
                    		<div id = "del" style="margin-top: -15px; margin-bottom: 10px">
                    			<button type="submit" class="btn btn-danger">Remove</button>
                    		</div>
                    	</form>
                    	</div>
		
		<?php endif ?>

	@endauth

	
<?php endif ?>

	
	<div style="height: 25px"></div>
				<?php endif ?>

			<?php endforeach ?>
			<div style="height: 50px"></div>
			<h1 style="color: #537363;">IT Department</h1>
			<hr class="style1" style="margin-bottom: -5px; margin-top: -5px; height: 2px !important ; background-color: lightgrey !important">
		<div style="height: 10px"></div>

			<?php foreach ($team as $row): ?>

				<?php if ($row['department'] == 3): ?>
	

					<h1 style="text-decoration: underline; color: lightgrey">{{$row['name']}}</h1>
					<h4 style="color: #537363">{{$row['rank']}}</h4>

					<?php if (Route::has('login')): ?>

	@auth

		<?php if (Auth::user()->id == 1): ?>

			<div class="links">
                        <a href="{{action('TeamController@edit', $row['id'])}}" class="btn btn-info" style="margin-top: -3px">Edit</a>
                        <form method="post" class="delete_form" action="{{action('TeamController@destroy', $row['id'])}}">
                        	
                        	{{csrf_field()}}
                    		
                    		<input type="hidden" name="_method" value="DELETE">
                    		<br>
                    		<div id = "del" style="margin-top: -15px; margin-bottom: 10px">
                    			<button type="submit" class="btn btn-danger">Remove</button>
                    		</div>
                    	</form>
                    	</div>
		
		<?php endif ?>

	@endauth

	
<?php endif ?>


<div style="height: 25px"></div>
				<?php endif ?>

			<?php endforeach ?>

<div style="height: 50px"></div>
			<h1 style=" color: #5b4646;">Community Managers</h1>
			<hr class="style1" style="margin-bottom: -5px; margin-top: -5px; height: 2px !important ; background-color: lightgrey !important">
			<div style="height: 10px"></div>

			<?php foreach ($team as $row): ?>

				<?php if ($row['department'] == 4): ?>
				
		
					<h1 style="text-decoration: underline; color: lightgrey">{{$row['name']}}</h1>
					<h4 style="color: #5b4646">{{$row['rank']}}</h4>

					<?php if (Route::has('login')): ?>

	@auth

		<?php if (Auth::user()->id == 1): ?>

			<div class="links">
                        <a href="{{action('TeamController@edit', $row['id'])}}" class="btn btn-info" style="margin-top: -3px">Edit</a>
                        <form method="post" class="delete_form" action="{{action('TeamController@destroy', $row['id'])}}">
                        	
                        	{{csrf_field()}}
                    		
                    		<input type="hidden" name="_method" value="DELETE">
                    		<br>
                    		<div id = "del" style="margin-top: -15px; margin-bottom: 10px">
                    			<button type="submit" class="btn btn-danger">Remove</button>
                    		</div>
                    	</form>
                    	</div>
		
		<?php endif ?>

	@endauth


	
<?php endif ?>

				
				<div style="height: 25px"></div>
				<?php endif ?>

			<?php endforeach ?>
		



		

		</div>

</div>
</div>


@endsection

