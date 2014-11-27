@extends('layout')

@section('content')
<div class="jumbotron">
		<div class="container">
			<h1>Welcome to PointsKeeda</h1>
			<p>Simple app to show all players</p>
			@if (empty($player_count))
				<p>
					No Players Found <a class="btn btn-primary btn-lg" href="{{ URL::to('login') }}">Login to add players</a>
				</p>
			@endif
			
		</div>
	</div>

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
                    <tr>
                    <td>1</td>
                    <td>Shubhajeet</td>
                    <td>20</td>
                    </tr>
                    <tr>
                    <td>2</td>
                    <td>Pankaj</td>
                    <td>35</td>
                    </tr>
                    <tr>
                    <td>3</td>
                    <td>Shubham</td>
                    <td>10</td>
                    </tr>
                    <tr>
                    <td>4</td>
                    <td>Ashoke</td>
                    <td>42</td>
                    </tr>
                    <tr>
                    <td>5</td>
                    <td>Krishan</td>
                    <td>65</td>
                    </tr>
                </tbody>
                
              </table>
		</div>
	</div>
@stop