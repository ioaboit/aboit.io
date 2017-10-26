<link href="https://fonts.googleapis.com/css?family=Libre+Baskerville:400,400i,700" rel="stylesheet">
<div class="container-fluid" id="head-container">
    <div class="row">
        <div class="col remove-padding">
            <div class="logo-header">
                <nav class="navbar navbar-expand-lg navbar-light">
                    <a class="navbar-brand logo-text" href="{{ url('/') }}">{{ config('app.name', 'Aboit') }}</a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav mr-auto">
                            <li class="nav-item active">
                                <a class="nav-link" href="#">about <span class="sr-only">(current)</span></a>
                            </li>
                            <!-- <li class="nav-item">
                                <a class="nav-link" href="{{url('/story')}}">Story</a>
                            </li> -->
                        </ul>
                        <!-- Right Side Of Navbar -->
                        <ul class="nav navbar-nav navbar-right">
                            <!-- Authentication Links -->
                            @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">signin</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('register') }}">signup</a>
                            </li>
                            @else
                            <li class="nav-item">
                                <a class="nav-link" href="{{url('/story/new')}}">write</a>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="{{url('/')}}" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    {{ Auth::user()->name }}
                                </a>
                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
                                    <a class="dropdown-item" href="#">Dashboard</a>
                                    <a class="dropdown-item" href="{{url('/me/stories')}}">Stories</a>
                                    <a class="dropdown-item" href="{{ url('/logout') }}">Logout</a>
                                </div>
                            </li>
                            @endguest
                        </ul>
                        <!-- <form class="form-inline my-2 my-lg-0">
                            <input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search">
                            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
                        </form> -->
                    </div>
                </nav>
            </div>
        </div>
    </div>
</div>
<style type="text/css">
.logo-text{
font-size: 30px;
font-weight: bold;
font-family: 'Libre Baskerville', serif;
color: #4d4d4d !important;
}
#head-container{
box-shadow: 0px 1px 11px #ccc;
}
.logo-header{
/*border-bottom: 1px solid var(--menu-border-color);*/
}
.navbar{
    /*padding: .5rem 6rem !important;*/
    padding: 0px 100px !important;
}
</style>
