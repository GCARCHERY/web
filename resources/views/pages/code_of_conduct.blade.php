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
        code of conduct
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
			
			<h1 style="background-color: black; color: white;">Gamers community Code of conduct</h1>

			<h2>References: GC ( gamers-community.network )</h2>

		</div>


		<div>
			
			<h1 style="background-color: black; color: white;">Preface</h1>

			<h2>“Be friendly.” Gamers generally apply those words to how we serve our users. But “ be friendly” is much more than that. Yes, it’s about providing our members a good gaming environment, focusing on their needs and giving them the best services that we can. But it’s also about doing the right thing more generally – following the Policies, acting honorably, and treating all members with courtesy and respect.</h2>
			<h2>The Gamers community Code of Conduct is one of the ways we put “Be friendly” into practice. It’s built around the recognition that everything we do in connection with our  gaming communities will be, and should be, measured against the highest possible standards of ethical business conduct. We set the bar that high for practical as well as aspirational reasons: Our commitment to the highest standards helps us hire great people, build great products, and attract loyal users. Trust and mutual respect among employees and users are the foundation of our success, and they are something we need to earn every day.The Gamers community Code of Conduct is one of the ways we put “Be friendly” into practice. It’s built around the recognition that everything we do in connection with our  gaming communities will be, and should be, measured against the highest possible standards of ethical business conduct. We set the bar that high for practical as well as aspirational reasons: Our commitment to the highest standards helps us hire great people, build great products, and attract loyal users. Trust and mutual respect among employees and users are the foundation of our success, and they are something we need to earn every day.</h2>
			<h2>So please do read the Code, and follow both its spirit and letter, always bearing in mind that each of us has a personal responsibility to incorporate, and to encourage other gamers to incorporate, the principles of the Code into our community. And if you have a question or ever think that one of your fellow gamers or the partners as a whole may be falling short of our commitment, don’t be silent. We want – and need – to hear from you.</h2>

		</div>


		<div>
			
			<h1 style="background-color: black; color: white;">Who Must Follow Our Code?</h1>

			<h2>We expect all of our members and partners and Board members to know and follow the Code. Failure to do so can result in disciplinary action, including termination of employment/membership. Moreover, while the Code is specifically written for members, staff and Board members, we expect all the work force, and others who may be temporarily assigned to perform work or services for gamers community to follow the Code in connection with their work for us. Failure of a GC member / partner, or other covered service and support provider to follow the Code can result in termination of their relationship with GC.</h2>

		</div>


		<div>
			
			<h1 style="background-color: black; color: white;">If you Have a Code-Related Question or Concern?</h1>

			<h2>If you have a question or concern, don’t just sit there. You can contact the admins, or Ethics & Compliance. You can also submit a question or raise a concern of a suspected violation of our Code or any other GC policy through the Ethics & Compliance Helpline. Finally, if you believe a violation of law has occurred, you can always raise that through the Ethics & Compliance helpline or with a government agency.</h2>

		</div>


		<div>
			
			<h1 style="background-color: black; color: white;">No Retaliation</h1>

			<h2>GC prohibits retaliation against any member here at GC who reports or participates in an investigation of a possible violation of our Code, policies, If you believe you are being retaliated against, please contact Ethics & Compliance.</h2>

		</div>


		<div>
			
			<h1 style="background-color: black; color: white;">Serve Our Members</h1>

			<h2>Our members value GC not only because we deliver great support to other communities, but because we hold ourselves to a higher standard in how we treat members and operate more generally. Keeping the following principles in mind will help us to maintain that high standard:</h2>

		</div>

		<div>
			
			<h1 style="background-color: black; color: white;">Integrity</h1>

			<h2>Our reputation as a company that our members can trust is our most valuable asset, and it is up to all of us to make sure that we continually earn that trust. All of our communications and other interactions with our members should increase their trust in us.</h2>

		</div>
		<div>
			
			<h1 style="background-color: black; color: white;">Usefulness</h1>

			<h2>Our support, sponsorship, and services should make GC more useful for all our members. We have many different types of users, from individuals, communities to a large businesses, but one guiding principle: “Is what we are offering useful?”</h2>

		</div>
		<div>
			
			<h1 style="background-color: black; color: white;">Privacy, Security, and Freedom of Expression</h1>

			<h2>Always remember that we are asking members to trust us with their opinion, Preserving that trust requires that each of us respect and protect the privacy and security of that information. however make sure that nothing is typed in public could be negative or may result to show the GC in bad image, also speaking bad about any game or any game producing company is not accepted, as they put effort, time and money to create such games that some of us enjoy playing, Remember “be friendly”</h2>

		</div>
		<div>
			
			<h1 style="background-color: black; color: white;">Responsiveness</h1>

			<h2>Part of being useful and honest is being responsive: We recognize relevant members feedback when we see it, and we do something about it. We take pride in responding to communications from our users, whether questions, problems, or compliments. If something is broken, we will fix.</h2>

		</div>
		<div>
			
			<h1 style="background-color: black; color: white;">Take Action</h1>

			<h2>ny time you feel our members aren’t being well-served, don’t be bashful – let someone in the company know about it. Continually improving our support and services takes all of us, we advise all our members and staff to take the initiative to step forward when the interests of our members are at stake</h2>

		</div>
		<div>
			
			<h1 style="background-color: black; color: white;">Support Each Other</h1>

			<h2>We are committed to a supportive gaming environment, where members have the opportunity to reach their fullest potential. Each member is expected to do his or her utmost to create a good gaming culture/environment that is free of harassment, intimidation, bias, and unlawful discrimination. Please read the public and privet policy.</h2>

		</div>
		<div>
			
			<h1 style="background-color: black; color: white;">Harassment, Discrimination, and Bullying</h1>

			<h2>Gamers Community prohibits discrimination, harassment and bullying in any form – verbal, physical, or visual, as stated in our Policy Against Discrimination, Harassment and Retaliation. If you believe you’ve been bullied or harassed by anyone at gamers community, or by one of our partners or members, we strongly encourage you to immediately report the incident to the admins, or both. Similarly, Admins and managers who learn of any such incident should immediately report it to the Management, we will promptly and thoroughly investigate any complaints and take appropriate action.</h2>

		</div>
		<div>
			
			<h1 style="background-color: black; color: white;">Reporting</h1>

			<h2>Ethics & Compliance will periodically report to the gamers community Compliance Steering Committee all matters involving GC staff – CE’s and above – approved under this section of the Code, and will periodically report to the GC Audit Committee all matters involving GC executive officers and Board members approved under this section.</h2>

		</div>
		<div>
			
			<h1 style="background-color: black; color: white;">Confidential Information</h1>

			<h2>Make sure that information that is classified as “Need to Know” or “Confidential” in GC’s Data Security Guidelines is handled in accordance with those Guidelines and GC’s Data Security advise. At times, a particular project or negotiation may require you to disclose Need to Know or Confidential information to an outside party: Disclosure of that information should be on an “only as needed” basis and only under a non-disclosure agreement. In addition, GC management may require a prior security assessment of the outside party that is to receive the confidential information. Be sure to conduct the appropriate due diligence and have the appropriate agreement in place before you disclose the information.There are, of course, “gray areas” in which you will need to apply your best judgment in making sure you don’t disclose any confidential information. If you’re in a gray area, be cautious in what advice or insight you provide or, better yet, ask for guidance from the Management.And don’t forget about pictures you and your guests take at GC – it is up to you to be sure that those pictures don’t disclose confidential information.</h2>
			<h2>Finally, some of us will find ourselves having family or other personal relationships with people employed by our competitors or business partners. As in most cases, common sense applies. Don’t tell your significant other or family members anything confidential, and don’t solicit confidential information from them about their company.</h2>

		</div>
		<div>
			
			<h1 style="background-color: black; color: white;">GC Partners</h1>

			<h2>Just as you are careful not to disclose confidential GC information, it’s equally important not to disclose any confidential information from our partners. Don’t accept confidential information from other companies without first having all parties sign an appropriate Non-disclosure Agreement approved by Legal. Even after the agreement is signed, try only to accept as much information as you need to accomplish your  objectives.</h2>

		</div>
		<div>
			
			<h1 style="background-color: black; color: white;">Competitors/Former staff</h1>

			<h2>We respect our competitors and want to compete with them fairly. But we don’t want their confidential information. The same goes for confidential information belonging to any GC’s former employers. If an opportunity arises to take advantage of a competitor’s or former employer’s confidential information, don’t do it. Should you happen to come into possession of a competitor’s confidential information, contact GC Management immediately.</h2>

		</div>
		<div>
			
			<h1 style="background-color: black; color: white;">Outside Communications</h1>

			<h2>You probably know that our policy is to be extremely careful about disclosing confidential proprietary information. Consistent with that, you should also ensure your outside communications (including online and social media posts) do not disclose confidential proprietary information or represent (or otherwise give the impression) that you are speaking on behalf of GC unless you’re authorized to do so by the company. The same applies to communications with the press. Finally, check with the GC Management  before accepting any public speaking engagement on behalf of the GC. In general, before making any external communication or disclosure, we advise  you should consult our Management before taking any step.</h2>

		</div>
		<div>
			
			<h1 style="background-color: black; color: white;">Ensure Financial Integrity and Responsibility</h1>

			<h2>Financial integrity and fiscal responsibility are core aspects of corporate professionalism. This is more than accurate reporting of our financials, though that’s certainly important. The money we spend on behalf of GC is not ours; it’s the company’s and, ultimately, our Partners, Each person at GC – not just those in Finance – has a role in making sure that money is appropriately spent, our financial records are complete and accurate, and internal controls are honored. This matters every time we hire a new vendor, expense something to GC, sign a new business contract, or enter into any deals on GC’s behalf.</h2>
			<h2>
				To make sure that we get this right, GC maintains a system of internal controls to reinforce our compliance with legal, accounting, tax, and other regulatory requirements in every location in which we operate.
			</h2>
			<h2>Stay in full compliance with our system of internal controls, and don’t hesitate to contact the Management if you have any questions. What follows are some core concepts that lie at the foundation of financial integrity and fiscal responsibility here at GC.</h2>

		</div>
		<div>
			
			<h1 style="background-color: black; color: white;">Spending GC’s Money</h1>

			<h2>A core GC value has always been to spend money wisely. When you submit an expense for reimbursement or spend money on GC’s behalf, make sure that the cost is reasonable, directly related to our work, and supported by appropriate documentation. Always record the  purpose  and comply with other submission requirements.</h2>

		</div>
		<div>
			
			<h1 style="background-color: black; color: white;">Obey the Law</h1>

			<h2>GC takes its responsibilities to comply with laws and regulations very seriously and each of us is expected to comply with applicable legal requirements and prohibitions. While it’s impossible for anyone to know all aspects of every applicable law, you should understand the major laws and regulations that apply in our line of work with other gaming companies and communities.</h2>

		</div>
		<div>
			
			<h1 style="background-color: black; color: white;">Competition Laws</h1>

			<h2>Most countries have laws – known as “antitrust,” “competition,” or “unfair competition” laws – designed to promote free and fair competition. Generally speaking, these laws prohibit 1) arrangements with competitors that restrain trade in some way, 2) abuse of intellectual property rights, and 3) use of market power to unfairly disadvantage competitors.</h2>

		</div>
		<div>
			
			<h1 style="background-color: black; color: white;">Conclusion</h1>

			<h2>GC aspires to be a different kind of company. It’s impossible to spell out every possible ethical scenario we might face. Instead, we rely on one another’s good judgment to uphold a high standard of integrity for ourselves and our community. We expect all members to be guided by both the letter and the spirit of this Code. Sometimes, identifying the right thing to do isn’t an easy call. If you aren’t sure, don’t be afraid to ask questions to the management.</h2>

		</div>

		<h2>And remember… be friendly, and if you see something that you think isn’t right – report it.</h2>

<div style="height: 25px; background-color: #111111"></div>
			

		 </div>
		</div>
@endsection
