
@extends('index')
 @if(Auth::user()->id == 1 && Auth::user()->name == "admin_baws")
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
<div class="content">
    <h1 class="title" style=" font-weight: bold; color: #111111; margin-bottom: 10px !important;">Dashboard</h1>
<div class="container cont">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div>
                
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <h1 style="margin-top: -40px; color: #111111">Logged in</h1>
                    <hr class="style1" style="margin-top: -5px">
                </div>
            </div>
        </div>
    </div>

            <div class="links" style="margin-top: -50px">
                <a class="navbar-brand"  href="{{ url('/') }}">
                    Home Page
                </a>
            </div>
                <hr class="style1">
                        @guest
                            <li class="nav-item">
                                <a class="button" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            <li class="nav-item">
                                @if (Route::has('register'))
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                @endif
                            </li>
                        @else

                                <div class="links">
                                    <h2 style="margin-bottom: 0px; text-decoration: underline;">
                                        Profile Name:
                                    </h2>
                                    <h1> {{ Auth::user()->name }} <span class="caret"></span></h1>
                                 <hr class="style1" style="margin-bottom:: 15px; ">

                                 <br>


                                    <a class="button" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}

                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>

                        @endguest

                    </div>
                </div>

                    </div>
                </div>

@endsection


@section('page_content')
    <div class="row">
        <div class="col-md-12">
        <br />
        <h3 align="center">Add Post</h3>
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
        <form method="post" action="{{url('posts')}}">
            {{csrf_field()}}
            <div class="form-group">
                <input type="text" name="post_title" class="form-control" placeholder="Enter Post Title"/>
            </div>
            <br>
            <div class="form-group">
                <input type="text" name="post_content" class="form-control" placeholder="Enter Post Content"/>
            </div>
            <br>
            <div class="form-group">
                <input id="add" type="submit" class="btn btn-primary"/>
            </div>
        </form>
        </div>
    </div>



   




    <script type="text/javascript">
        
        let button = document.getElementById("add");
    button.addEventListener("click", function() {
        alert("The post will now be published.");
    }); 

    </script>
@endsection

 @else
                     <div class="links" style="text-align: center;">
                                    <a class="button" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}

                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                                @endif