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
        community poilcy
   	@endcomponent

	@include('nav.nav')
            
            </div>
        </div>

@endsection

@section('page_content')
<div class="bg1">
		<div class="media_content" style="
		                margin-top: 0px; 
						margin-bottom: 0px;  
						margin-left: auto;
           				margin-right: auto;
		">
			<div>
				<h1 style="background-color: black; color: white;">Summary</h1>

				<ul>
					<li>
						<h2>The community policy covers most of the rules and expectations within this gaming community.</h2>
					</li>
					<li>
						<h2>Our aim is to create a multinational community . With so many people a structured approach to manage it is required. Members can access this organisation chart within the website so they know who to approach with any problems or suggestions that they may wish to raise.</h2>
					</li>

				</ul>

			</div>
			<div>
				<h1 style="background-color: black; color: white;">general policy and rules</h1>

				<ul>
					<li>
						<h2>
							Do not harass, threaten, bully, verbal abuse, embarrass, or do anything else to another players, such as making personal attacks or statements about race, sexual orientation, religion, heritage, etc. Hate speech is not tolerated.
						</h2>
					</li>
					<li>
						<h2>
							Do not disrupt the normal flow of chat. This includes being abusive, excessive shouting, spamming, flooding or hitting the return key repeatedly.
						</h2>
					</li>
					<li>
						<h2>
							Do not impersonate another person.
						</h2>
					</li>
					<li>
						<h2>
							Do not name and shame other users of any service, this includes in-game cheating or harassment reports.
						</h2>
					</li>
					<li>
						<h2>
							No Recording or anything that violates the privacy rules (except for livestreams, but you must set [live] in your name & you must ask the permission of the people in your channel). (Recording is allowed when everyone agrees.)
						</h2>
					</li>
					<li>
						<h2>
							Respect Gamers Community Network admins and staff including other gaming companies employees such EA-DICE / BETHESDA / UPRISE etc.
						</h2>
					</li>
					<li>
						<h2>
							Do not copy names. For example: Nickname1, Nickname2, etc.
						</h2>
					</li>
					<li>
						<h2>
							Do not spam or bother others user with Poke and messages. (Channel hopping is also spam!)
						</h2>
					</li>
					<li>
						<h2>
							Voice converter software is not allowed.
						</h2>
					</li>
					<li>
						<h2>
							Please use a name that others will be able to recognise you from in-game. Do not use fake nickname.
						</h2>
					</li>
					<li>
						<h2>
							Don’t send links to scam websites, porn websites, phishing websites or anything that can harm the user’s computer or are considered inappropriate as we want the users on the Discord server to feel safe while being on it.Don’t send links to scam websites, porn websites, phishing websites or anything that can harm the user’s computer or are considered inappropriate as we want the users on the Discord server to feel safe while being on it.
						</h2>
					</li>

					<li>
						<h2>
							NO advertising of any kind, to links or sites that earn you money. Admins decide what is allowed and what is not. DONT assume anything check with an admin first.
						</h2>
					</li>

					<li>
						<h2>
							Do not link external websites or images that included sexual, racist, violent, disturbing or inappropriate content.
						</h2>
					</li>
				</ul>

				<h2 style="color: white;">
					breaching the policy will not be tolerated.
				</h2>
				

			</div>
			<div>
				<h1 style="background-color: black; color: white;">internal policy and rules</h1>
				<h2>All members must maintain respect to others, non-members and visitors; using offensive language will not be tolerated, including racist remarks in front of other members. All members including the founder shall not be dragged into conversation that will result in arguments or bad language. FOUNDER, MANAGERS AND ADMIN MEMBERS ROLES & FINANCIAL IN THE COMMUNITY FOUNDER / CEO The founder is the individual who leads the entire community and make the decisions supported by CE’s votes, any actions will have a vote system to ensure agreement on any issues. It is asked that any members that have a problem or suggestion should consult the organisation chart so that they can communicate with the correct person. If there is a problem the organisation chart should be the first port of call, NOT the founder. FINANCIAL At the present moment in time all server costs, website costs etc are paid by the founder. Therefore the founder has the right to make decisions regarding financial issues. The founder will ensure that there will be no late payments for any financial matters such as running servers, websites or current running software that support the community. If any other member decides to pay for any related hardware or software in the community it will be made at his/her own expense and no claims or reimbursement requests are considered.(edited)</h2>

			</div>
			<div>
				<div style="height: 25px"></div>
				<h1 style="background-color: black; color: white;">FOUNDER, MANAGERS AND ADMIN MEMBERS ROLES & FINANCIAL IN THE COMMUNITY</h1>

				<div style="height: 25px"></div>
				<ul>




					<li>
						<h2 style="color: white">FOUNDER / CEO</h2>
					</li>
					<hr class="style1" style="background-color: white">
					<h2>The founder is the individual who leads the entire community and make the decisions supported by CE’s votes, any actions will have a vote system to ensure agreement across any issues.It is asked that any members that have a problem or suggestions should consult the organisation chart so that they can communicate with the correct person. If there is a problem the organisation chart should be the first port of call, NOT the founder.
					</h2>





					<li>
						<h2 style="color: white">FINANCIAL</h2>
					</li>
					<hr class="style1" style="background-color: white">
					<h2>At the present moment in time all server costs, website costs etc are paid by the founder.
					</h2>
					<h2>
					Therefore the founder has the right to make decisions regarding financial issues. The founder will ensure that there will be no late payments for any financial matters such as running servers websites or current running software that support the community, If any other member decide to pay for any related hardware or software in the community it will be made by his/her own expense and no claims or reimbursements requests is considered.
					</h2>
					<h2>
						Any profit gains from advertisements, sponsorship etc. will be fully allocated by the founder and management board with judgment and put towards the management costs & payments such as:
					</h2>
					<h2>servers & teams speak costs and the provision of further rewarded tournaments.</h2>




					<li>
						<h2 style="color:white">CE’s & MANAGERS</h2>
					</li>
					<hr class="style1" style="background-color: white">
					<h2>E’s & Managers are the members who support the founder in running the community. CE’s & Managers will also provide support to the community by the way of general supervision and organizing the network. CE’s & Managers will support the founder to run, maintain and develop the standards to insure the best quality for the community network. CE’s & Managers have the right to warn and dismiss community members found breaking the the policy CE’s & Managers will respond to any issues raised by Admins, or members as soon as possible. If one of the managers is unavailable to deal with an issue at any given time they will ensure that the management board is made aware of the issue so that another manager is able to assist in reaching
					</h2>
					


					<li>
						<h2 style="color: white">ADMINS</h2>
					</li>
					<hr class="style1" style="background-color: white">
					<h2>
						Admins are the individuals, who run and manage game servers or Moderate the TeamSpeak and Discord servers or contribute to the community in a valuable way. Under the supervision of their reporting lines, it is the duty of an admin to -Moderate the VOICE chats in the community -fix issues we face in Team Speak or Discord – Assure and Maintain that the Policy is being followed by the members and visitors -Fulfill objectives agreed upon with their managers. Expectations of Admins 
					</h2>
					


					<li>
						<h2 style="color: white">MEMBERS</h2>
					</li>
					<hr class="style1" style="background-color: white">
					<h2>Members are the most important aspect of our community. All of the above is written to support the members in finding this community to be a fun, rich environment with a strong community feel.
					</h2>
					<h2>
					From our members we ask for the following:
					</h2>
					<h2>
						- Members shall be active, both on the website forums and on the Teamspeak or Discord.
					</h2>
					<h2>
					- Members are kindly asked to play on GC gaming servers also with other GC members.
					</h2>
					<h2>
					- Recruit new members where possible, helping admins to grow this community and the network.
					</h2>
					<h2>
					- Co-operate with the admins, managers and founder. We are putting in a lot of personal time in order to make gamers community the best it can be for its members.
					</h2>

				</ul>


				<hr class="style1" style="background-color: white">
				<h1>Gamers Community provide sponsorships to various content creators and sponsored parties however we do have a minimum requirement criteria, in order to be qualified</h1>
				<hr class="style1" style="background-color: white">
				<h2>1) If you own a YouTube channel you will need to have no less than 7k-10k subscribers;</h2>
				<h2>2) If you own a Twitch channel you will need to have no less than 5k followers and an average of 20 viewers or higher during live streams;</h2>
				<h2>3) Professional behaviour;</h2>
				<h2>4) Minimum age of 18 years;</h2>
				<h2>5) Follow our rules and code of conduct; Gamers Community will not ask for any value of money in return at all times, as we provide the sponsorship in order to grow the Network and create a good place for talented people in the gaming industry and in our Community.</h2>
				<h2>To apply for Sponsorship please contact GC-Goddess ( GC – Goddess#0649 ), GC_Archery ( GC_ARCHERY#4189 ) via Discord.</h2>


			</div>
			<div style="height: 25px; background-color: #111111"></div>

		</div>
		</div>
@endsection
