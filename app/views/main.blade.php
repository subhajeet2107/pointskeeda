@extends('layout')

@section('content')
<div class="jumbotron">
		<div class="container">
			<h1>Welcome to PointsKeeda</h1>
			<p>Simple app to show all players</p>
			@if (empty($player_data))
				<p>
					No Players Found <a class="btn btn-primary btn-lg" href="{{ URL::to('login') }}">Login to add players</a>
				</p>
			@endif
			
		</div>
	</div>
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
            <p>
                    No Players Found <a class="btn btn-primary btn-lg" href="{{ URL::to('login') }}">Login to add players</a>
                </p>
            </div>
    </div>
    @endif
@stop