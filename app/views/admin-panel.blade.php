@extends('layout')

@section('content-admin')
	<div class="panel panel-default">
		<div class="panel-body">
		   <table class="table table-bordered table-hover tablesorter">
                <thead>
                  <tr>
                  
                    <th>Id<i class="fa fa-sort"></i></th>
                    <th>Player Name<i class="fa fa-sort"></i></th>
                    <th>Player Points<i class="fa fa-sort"></i></th>
                    <th>Modify</th>
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