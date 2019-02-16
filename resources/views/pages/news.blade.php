@extends('index')





@section('content')

<div class="flex-center position-ref full-height background2">
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
     <span style="color:#5f78b0">N</span>ews
</p>
   	@endcomponent

	@include('nav.nav')
            
            </div>
        </div>
@endsection

@section('page_content')
		<div class="row bg3">
        <div class="col-md-12">
        <br />
        <h1 style="align-content: center; background-color: #111111; font-size: 75px; color: lightgrey;" >RECENT POSTS</h1>


        	

        	@foreach($post as $row)
        	
        			<br>
        			<h1>{{$row['post_title']}}</h1> 
        			<div class="media_content" style="
						margin-top: -20px; 
						margin-bottom: -10px;  
						margin-left: auto;
           				 margin-right: auto;
						">
						<div style="height: 20px"></div>
        					<!-- <hr class="style1" style="background-color: lightgrey; height: 2px; margin-top: 20px"> -->
        			</div>

					<h6>Published: {{$row['created_at']}}</h6> 

					<div style="
						 position: relative;
           				 margin-left: auto;
           				 margin-right: auto;
            			 width: 50%;
					">
						


						@if (Route::has('login'))
               
                    @auth @if(Auth::user()->id == 1)
                    <div class="links">
                        <a href="{{action('PostController@edit', $row['id'])}}" class="btn btn-info" style="margin-top: -3px">Edit</a>
                        <form method="post" class="delete_form" action="{{action('PostController@destroy', $row['id'])}}">
                        	
                        	{{csrf_field()}}
                    		
                    		<input type="hidden" name="_method" value="DELETE">
                    		<br>
                    		<div id = "del" style="margin-top: -15px; margin-bottom: 10px">
                    			<button type="submit" class="btn btn-danger">Remove</button>
                    		</div>
                    	</form>
                    	</div>
                        @endif
                    @endauth

            @endif
            <h4>{{$row['post_content']}}</h4>
						<div style="height:200px; width:100%; clear:both;"></div>
					</div>
        	@endforeach
        	 

        </div>
    </div>
</div>




@endsection