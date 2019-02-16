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
       about
   	@endcomponent

	@include('nav.nav')
            
            </div>
        </div>

@endsection

@section('page_content')
<div class="bg1">

	<div style="height: 10px"></div>
	<div style="
					
	">

	<div class="media_content" style="
		                margin-top: 15px; 
						margin-bottom: 100px;  
						margin-left: auto;
           				 margin-right: auto;
           				 
	">





			<h1 style="background-color: black; color: white;">Greetings and welcome</h1>
		
		<div>
			<ul>
				<li>
					<h2>
						We would love to take the chance to welcome you in gamers community website, we also would like to share what gamers community vision to deliver and achieve our goals,

						Gamers Community network (latter ‘GC Network’) is a growing network of communities that helps individuals, clans and communities to grow via professional sponsorship, and or partnership in order to support their growth and development.
					</h2>
				</li>

				<li>
					<h2>
						Gamers Community network (later ‘GC Network’) is a growing network that helps individuals, clans and communities to grow via professional sponsorship, and or partnership in order to support their growth and development.
					</h2>
				</li>

				<li>
					<h2>
						GC Network seeks to create and maintain a safe, friendly, professional gaming environment for players of various game genres. In order to do so we have outlined our main goals .
					</h2>
				</li>


				<li>
					<h2>
						GC network goals presented here are ongoing and aim to: 
					</h2>
					<h2>
						 1) Develop;
					</h2>
					<h2>
						2) Support;
					</h2>
					<h2>
						3) Assist; any promising gaming companies / communities by also creating the best gaming environment driven by an up to standard Policy and a unified Code of Conduct.
					</h2>
				</li>

				<li>
					<h2>
						GC network will be focusing on 4 main goals  Focus goals are as follows;
					</h2>
				</li>

			</ul>

			<h1 style="background-color: black; color: white;">Quality of the network and its members</h1>

				<ul>
					<li>
						<h2>
							High quality of processes undertaken by GC Network members in their community/individuals activities.
						</h2>
					</li>
					<li>
						<h2>
							High quality and unified policies towards members, community management representation and community created media.
						</h2>
					</li>
					<li>
						<h2>
							High quality of standards in internal and external Ethics and Compliance.
						</h2>
					</li>
				</ul>

			<h1 style="background-color: black; color: white;">Support and Development</h1>
			<ul>
					<li>
						<h2>
							Talent management aimed towards new and existing GC Network members.
						</h2>
					</li>
					<li>
						<h2>
							Financial support and responsibility for/of GC Network members.
						</h2>
					</li>
					<li>
						<h2>
							Advice and guidance for all current and future members of GC Network.
						</h2>
					</li>
					<li>
						<h2>
							Training and coaching directed towards current and future GC Network members.
						</h2>
					</li>
				</ul>
			<h1 style="background-color: black; color: white;">Increase of Manpower/Partnership Numbers in the network</h1>
			<ul>
					
						<h2>
							 1) Recruitment of promising GC Network members.
						</h2>
					
					
						<h2>
							2) Advertisement of GC Network and its partners conducted by Network members.
						</h2>
					
					
						<h2>
							3) Social media promotion and increase of social media presence for GC Network and its partners.
						</h2>
					
					
						<h2>
							4) Social/gaming events conducted by GC Network.
						</h2>
					
					
						<h2>
							5) Prize giveaways conducted by GC Network.
						</h2>
					
					
						<h2>
							6) Financial investment aimed towards GC Network members/partners.
						</h2>
					
					
						<h2>
							7) Charity.
						</h2>
					
				</ul>
			<h1 style="background-color: black; color: white;">Healthy Competition across the gaming market</h1> 
			<ul>
				<li>
						<h2>
							 Professional behaviour in various situations involving GC Network and its members.
						</h2>
					</li>
					<li>
						<h2>
							Maintainment of positive attitude in all areas of the GC Network and project undertaken by the network/network members.
						</h2>
					</li>
					<li>
						<h2>
							See any change as a possibility to learn, grow and benefit GC Network and its members.
						</h2>
					</li>
					<li>
						<h2>GC Network is combined of various talented individuals/communities specializing in, but not limited to:</h2>
					</li>
					
						<h2>
							 1) Providing a friendly/competitive gaming experience on multiple gaming platforms;
						</h2>
					
					
						<h2>
							2) Broadcasting and managing social/competitive tournaments on various gaming platforms and game genres;
						</h2>
					
					
						<h2>
							3) Producing high quality gaming content/entertainment from various game titles;
						</h2>
					
					
						<h2>
							4) Professional game journalism and creating informative content on various games and game related events;
						</h2>
					
			</ul>
			<h2>
				Network Partners are Expandable
			</h2>

		
		</div>
		<div style="height: 20px"></div>

	</div>
</div>
	<div style="height: 10px"></div>
</div>
@endsection