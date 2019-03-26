<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
        <link rel="stylesheet" type="text/css" href="/css/bootstrap.min.css">
    </head>
    <body>
        <nav class="navbar navbar-inverse">
          <div class="container-fluid">
            <div class="navbar-header">
              <a class="navbar-brand" href="#">Employee adminstrator</a>
            </div>
            <ul class="nav navbar-nav">
              <li class="active"><a href="/posts">Home</a></li>
              <li><a href="/employees/create">Add employee</a></li>
            </ul>
          </div>
        </nav>
        <div class="container">
            @yield('content')
        </div>
        <script type="text/javascript" src="js/bootstrap.min.js"></script>
    </body>
</html>