<!DOCTYPE html>
<html>
<head>
    <title>PointsKeeda</title>
    <!-- Latest compiled and minified CSS & JS -->
    <link rel="stylesheet" media="screen" href="//netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
    <script src="//code.jquery.com/jquery.js"></script>
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>

    {{HTML::style('/font-awesome/css/font-awesome.min.css')}}
    {{ HTML::style('/css/style.css') }}

</head>
<body>
<div class="container">
    <nav class="navbar navbar-default" role="navigation">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="{{ URL::to('/') }}">PointsKeeda</a>
        </div>
        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse navbar-ex1-collapse">
            <ul class="nav navbar-nav navbar-right">
                <li class="dropdown">
                    @if (Auth::check())
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Welcome {{ ucwords(Auth::user()->username) }} <b class="caret"></b></a>
                        <ul class="dropdown-menu">
                        <li><a href="{{ URL::to('admin') }}">Admin Panel</a></li>
                            <li><a href="{{ URL::to('logout') }}">Logout</a></li>
                        </ul>
                    @else
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">Admin Panel <b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li><a href="{{ URL::to('login') }}">Login</a></li>
                    </ul>
                    @endif
                </li>
            </ul>
        </div><!-- /.navbar-collapse -->
    </nav>
       @if (!empty($player_data) && count($player_data) > 0)
        <div class="panel panel-default">
            <div class="panel-body">
               <table class="table table-bordered table-hover tablesorter">
                    <thead>
                      <tr>
                      
                        <th>Id<i class="fa fa-sort"></i></th>
                        <th>Player Name<i class="fa fa-sort"></i></th>
                        <th>Player Points<i class="fa fa-sort"></i></th>
                      </tr>
                    </thead>
                    <tbody>
                        @foreach ($player_data as $player)
                        <tr>
                            <td>{{ $player->id }}</td>
                            <td>{{ $player->player_name }}</td>
                            <td>{{ $player->points }}</td>
                        </tr>
                        @endforeach
                        
                    </tbody>
                    
                  </table>
            </div>
        </div>
    @else
    <div class="panel panel-default">
            <div class="panel-body">
                <table class="table table-bordered table-hover tablesorter">
                    <thead>
                      <tr>
                      
                        <th>Id</th>
                        <th>Player Name</th>
                        <th>Player Points</th>
                        <th>Modify</th>
                      </tr>
                    </thead>
                    <tbody>
                    <form action="" method="POST" class="form-horizontal" role="form">
                           <tr>
                           <td>1</td>
                            <td>
                            <div class="form-group">
                                <label for="input" class="col-sm-2 control-label">Name:</label>
                                <div class="col-sm-10">
                                    <input type="text" name="player_name" id="input" class="form-control" value="" required="required" pattern="" title="">
                                </div>
                            </div></td>
                            <td>
                            <div class="form-group">
                                <label for="inputPoints" class="col-sm-2 control-label">Points:</label>
                                <div class="col-sm-10">
                                    <input type="number" name="points" id="inputPoints" class="form-control" min="0" max="100" step="" required="required" title="">
                                </div>
                            </div>
                            </td>
                            <td>
                                <div class="form-group">
                                    <div class="col-sm-10 col-offset-2">
                                        <button type="submit" class="btn btn-primary">Add New Player</button>
                                    </div>
                                </div>
                            </td>
                        </tr>
                    </form>
                    </tbody>
                    
                  </table>
            </div>
    </div>
    @endif
    </div>
</div>
<!-- Page Specific Plugins -->
{{HTML::script('/js/tablesorter/jquery.tablesorter.js')}}
{{HTML::script('/js/tablesorter/tables.js')}}
</body>
</html>