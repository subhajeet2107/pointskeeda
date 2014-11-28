<!DOCTYPE html>
<html>
<head>
    <title>PointsKeeda</title>
    <!-- Latest compiled and minified CSS & JS -->
    <link rel="stylesheet" media="screen" href="//netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
    <script src="//code.jquery.com/jquery.js"></script>
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
    <script src="http://templateplanet.info/tooltip.js"></script>
    <script src="http://templateplanet.info/modal.js"></script>

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
      
      @if(!empty($message))
      <div class="alert alert-success">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
        <strong>{{ $message }}</strong>
      </div>
      @endif

       @if (!empty($player_data) && count($player_data) > 0)
        <div class="panel panel-default">
            <div class="panel-body">
               <table class="table table-bordered table-hover tablesorter" id="tab_logic">
                    <thead>
                      <tr>
                      
                        <th>Id<i class="fa fa-sort"></i></th>
                        <th>Player Name<i class="fa fa-sort"></i></th>
                        <th>Player Points<i class="fa fa-sort"></i></th>
                        <th>Edit</th>
                        <th>Delete</th>
                      </tr>
                    </thead>
                    <tbody>
                        @foreach ($player_data as $player)
                        <tr>
                            <td>{{ $player->id }}</td>
                            <td>{{ $player->player_name }}</td>
                            <td>{{ $player->points }}</td>
                            <td><p><button class="btn btn-primary btn-xs edit_btn" data-title="Edit" data-toggle="modal" data-target="#edit" data-placement="top" rel="tooltip" ><span class="glyphicon glyphicon-pencil"></span></button></p></td>
                            <td><p><a href="{{ URL::to('/admin/delete').'/'.$player->id }}" class="btn btn-danger btn-xs" rel="tooltip"><span class="glyphicon glyphicon-trash"></span></a></p></td>
                        </tr>
                        @endforeach
                                                                  
                    </tbody>
                    
                  </table>
                  <a id="add_row" class="btn btn-success pull-right" data-title="Add" data-toggle="modal" data-target="#add" data-placement="top">Add New Player</a>
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
                    <form action="{{ URL::to('/admin/addnew') }}" method="POST" class="form-horizontal" role="form">
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
                                        <input type="submit" class="btn btn-primary" value="Add New Player" />
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

<div class="modal fade" id="add" tabindex="-1" role="dialog" aria-labelledby="add" aria-hidden="true">
      <div class="modal-dialog">
    <div class="modal-content">
    <form action="{{ URL::to('/admin/addnew') }}" method="POST" role="form">
          <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
        <h4 class="modal-title custom_align" id="Heading">Add New Player</h4>
      </div>

        <div class="modal-body">
              <div class="form-group">
                <input class="form-control" type="text" name="player_name" placeholder="Player Name">
            </div>
            <div class="form-group">
            <input class="form-control" type="number" name="points" placeholder = "Points">
            </div>
        </div>
          <div class="modal-footer">
        <input type="submit" class="btn btn-warning btn-lg" style="width: 100%;" value="Add New Player" name ="addnew-btn" />
      </div>
        </div>
         </form>
    <!-- /.modal-content --> 
  </div>
      <!-- /.modal-dialog --> 
    </div>


<div class="modal fade" id="edit" tabindex="-1" role="dialog" aria-labelledby="edit" aria-hidden="true">
      <div class="modal-dialog">
      <form action="{{ URL::to('/admin/update') }}" method="POST" role="form" class="update_player_form">
    <div class="modal-content">
          <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
        <h4 class="modal-title custom_align" id="Heading">Edit Player Details</h4>
      </div>
        <div class="modal-body">

              <div class="form-group">
                <input class="form-control player_name_edit" type="text" name="player_name_edit" placeholder="Player Name">
            </div>
            <div class="form-group">
            <input class="form-control points_edit" type="number" name="points_edit" placeholder = "Points">
            </div>
             <input class="player_id_edit" type="hidden" name="player_id_edit" />
        </div>
          <div class="modal-footer">
        <input type="submit" class="btn btn-warning btn-lg update_btn_modal" style="width: 100%;"  value="Update" />
      </div>
        </div>
        </form>
    <!-- /.modal-content --> 
  </div>
      <!-- /.modal-dialog --> 
    </div>
    
<!-- Page Specific Plugins -->
{{ HTML::script('/js/tablesorter/jquery.tablesorter.js') }}
{{ HTML::script('/js/tablesorter/tables.js') }}
{{ HTML::script('/js/main.js') }}
</body>
</html>