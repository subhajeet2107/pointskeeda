@extends('layout')

@section('content')
<div class="panel panel-default">
	<div class="panel-body">
	<h2>Oops The Page you are looking for cannot be found<br> while our worker guinea pigs are looking for the page <br> You can play Pacman here :)</h2>
	   <div class="frame holder-404">
		    
		    <div class="flexible-frame">
		        <div id="flash-404">
		            <div align="center">
		                <object type="application/x-shockwave-flash" name="name" data="http://www.bluefountainmedia.com/swf/pacman.swf" width="977" height="500" id="flash-404" style="visibility: visible;"><param name="quality" value="high"><param name="wmode" value="transparent"></object>
		            </div>
		        </div>
		        
		    </div>

		    <div class="page-navigation page-navigation-float">
		        <span class="prev-page prev-link" onclick="javascript:history.go(-1);"><span><a href="">Go Back</a></span></span>
		    </div>
		</div>
	</div>
</div>

@stop
