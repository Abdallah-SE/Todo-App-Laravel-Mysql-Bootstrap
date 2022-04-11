<!DOCTYPE HTML>
<html lang="en">
    <head>
        <meta charset=UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="view-port" content="width=device-width, initial-scale=1">
        <!-- CSS only -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" crossorigin="anonymous">
        <title>Todos App</title>
    </head>
    
    
    <body>
        <nav class="navbar navbar-expand-lg navbar-light bg-light" style="border-bottom: 3px solid blue;">
        <div class="container-fluid">
          <a class="navbar-brand" href="/">Todos App</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="/todos">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="/new-todos">Create Todos</a>
              </li>
              
            </ul>
            
          </div>
        </div>
        </nav>
        <div class="container">
            <br>
           @if(Session::has('success'))
            <div class="alert alert-success">
                {{Session::get('success')}}
            </div>
            @endif
            @yield('content');
        </div>
    </body>  
    <footer id="footer" class="footer-1  text-center  bg-light">
        <hr style="display: block;border-style: inset; border-width: 10px;border: 10px solid darkblue;border-radius: 5px;">
        <div class="main-footer widgets-dark typo-light">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 text-center">
                        <div class="widget subscribe no-box">
                            <h5 class="widget-title">My NAME IS<span></span></h5>
                            <p><strong class="text-warning">Abdallah Mahmoud Fahmy</strong>.</p>
                            <p>Software Developer.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <hr>
        <div class="footer-copyright">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 text-center">
                        <p>© Abdallah. 2022. All rights reserved.</p>
                    </div>
                </div>
            </div>
        </div>
    </footer>
</html>