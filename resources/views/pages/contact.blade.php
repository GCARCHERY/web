@extends('index')

@section('content')


<div class="flex-center position-ref full-height background3">
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
        contact
   	@endcomponent

	@include('nav.nav')
            
            </div>
        </div>

@endsection

@section('page_content')
<div class="bg4">
<div style="height: 10px"></div>

	<div class="media_content" style="
		                margin-top: 25px; 
						margin-bottom: 0px;  
						margin-left: auto;
           				margin-right: auto;
		"> 

		<div>
			<div style="padding-right: 50%; padding-left: 50%; width: 200%; margin-left: -50%; background-color: #111111">
				<h1 style="background-color: #111111; color: lightgrey;">Gamers Community provide sponsorships to various content creators and sponsored parties however we do have a minimum requirement criteria, in order to be qualified</h1>
			</div>

			<h2 style="text-decoration: underline; color: lightgrey;">Requirements are as follows</h2>

			<ul>
				<li>
					If you own a YouTube channel you will need to have no less than 7k-10k subscribers;
				</li>
				<li>
					If you own a Twitch channel you will need to have no less than 5k followers and an average of 20 viewers or higher during live streams;
				</li>
				<li>
					Professional behaviour;
				</li>
				<li>
					Minimum age of 18 years;
				</li>
				<li>
					Follow our rules and code of conduct;
				</li>
			</ul>

			<h2 style="color: lightgrey">Gamers Community will not ask for any value of money in return at all times, as we provide the sponsorship in order to grow the Network and create a good place for talented people in the gaming industry and in our Community.</h2>

			<hr class="style1" style="background-color: lightgrey;">

			<h2 style="color: lightgrey">To apply for Sponsorship please contact  GC-Goddess ( GC – Goddess#0649 ), GC_Archery ( GC_ARCHERY#4189 ) via Discord, you can find both our Discord and TeamSpeak links below:</h2>

			<hr class="style1" style="background-color: lightgrey;">

			<div>
				
				<a class="btn btn-secondary" href="https://discord.gg/bvNdPKN" style="font-weight: bold; color: #111111;  margin-right: 10px; font-size: 25px;">Join our discord</a>
				<a class="btn btn-secondary" href="http://www.teamspeak.com/invite/79.137.33.25/" style="font-weight: bold; color: #111111; margin-left: 10px;  font-size: 25px;">Join our teamspeak</a>

			</div>
			<div style="height: 25px"></div>
		</div>
</div>
</div>
		
@endsection

