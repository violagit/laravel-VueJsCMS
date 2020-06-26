<!DOCTYPE html>
<html lang="en">
  <head>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <script src="{{ asset('js/app.js') }}" defer></script>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Neo Ighodaro">
    <title>TechBlog</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css?family=Vibur" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" rel="stylesheet">

    <style> 
    body {
      padding-top: 54px;
    }
    @media (min-width: 992px) {
      body {
          padding-top: 56px;
      }
      .row.align-items-center {
          margin-top: 40px !important;
        }
        a.navbar-brand {
          color: blueviolet !important;
          font-family: 'Open Sans', sans-serif;
        }
        a.btn.btn-primary.read-more-btn {
          background-color: blueviolet;
          font-family: 'Open Sans', sans-serif;
        }
        h4.card-title.text-left.title-st {
          color: #732C7B;
          font-family: "Open Sans", sans-serif;
        }
        h3.mt-4.single-title {
          color: #732C7B;
        }
        a.posted-by{
          color: #732C7B;
          font-family: "Open Sans", sans-serif;
        }
        button.btn.btn-primary.auth-btn {
          background-color: blueviolet;
          border-color: blueviolet;
        }
    }
    </style>
  </head>
  <body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
      <div class="container">
        <b><a class="navbar-brand" href="/"   >Tech Blog</a>
        </b>
         <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
             @if (Route::has('login'))
                @auth
                <li class="nav-item">
                  <b> <a class="nav-link" href="{{ url('/home') }}"  style="color: blueviolet">Home</a></b> 
                </li>
                <li class="nav-item">
                 <b><a class="nav-link" href="{{ route('logout') }}" style="color: blueviolet"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                    Log out
                  </a></b> 
                  <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                  </form>
                 </li>
                 @else
                 <li class="nav-item">
                    <b>
                      <a class="nav-link" href="{{ route('login') }}" style="color: blueviolet" >Login</a>
                    </b> 
                </li>
                 <li class="nav-item">
                    <b>
                      <a class="nav-link" href="{{ route('register') }}" style="color: blueviolet" >Register</a>
                    </b> 
                    </li>
                 @endauth
             @endif
          </ul>
        </div>
      </div>
    </nav>

    <div id="app">
        @yield('content')
    </div>

    <footer class="py-5 bg-lighbg-light">
      <div class="container">
      </div>
    </footer>
  </body>
</>