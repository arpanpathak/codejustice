<!DOCTYPE html>
<head>
	<meta name="viewport" content="width=device-width,initial-scale=1.0">
	<script type="text/javascript" src="script/jquery.js"></script>
	<script src="css/bootstrap/js/bootstrap.min.js"></script>
	<link rel="stylesheet" type="text/css" href="css/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" type="text/css" href="css/popup.css">
	<link rel="stylesheet" href="css/style.css">
      <link rel="stylesheet" href="css/fontawesome/css/font-awesome.min.css">  
      <link rel="stylesheet" type="text/css" href="codemirror/lib/codemirror.css">
      <script type="text/javascript" src="codemirror/lib/codemirror.js"></script>
      <script type="text/javascript" src="script/script.js"></script>
      <script type="text/javascript" src="codemirror/mode/javascript/javascript.js"></script>

	  <!-- including codemirror files !-->
	<script src="codemirror/mode/javascript/javascript.js"></script>
	<link rel="stylesheet" type="text/css" href="codemirror/theme/blackboard.css">
	<link rel="stylesheet" href="codemirror/theme/3024-day.css">
	<link rel="stylesheet" href="codemirror/theme/3024-night.css">
	<link rel="stylesheet" href="codemirror/theme/abcdef.css">
	<link rel="stylesheet" href="codemirror/theme/ambiance.css">
	<link rel="stylesheet" href="codemirror/theme/base16-dark.css">
	<link rel="stylesheet" href="codemirror/theme/bespin.css">
	<link rel="stylesheet" href="codemirror/theme/base16-light.css">
	<link rel="stylesheet" href="codemirror/theme/blackboard.css">
	<link rel="stylesheet" href="codemirror/theme/cobalt.css">
	<link rel="stylesheet" href="codemirror/theme/colorforth.css">
	<link rel="stylesheet" href="codemirror/theme/dracula.css">
	<link rel="stylesheet" href="codemirror/theme/eclipse.css">
	<link rel="stylesheet" href="codemirror/theme/elegant.css">
	<link rel="stylesheet" href="codemirror/theme/erlang-dark.css">
	<link rel="stylesheet" href="codemirror/theme/hopscotch.css">
	<link rel="stylesheet" href="codemirror/theme/icecoder.css">
	<link rel="stylesheet" href="codemirror/theme/isotope.css">
	<link rel="stylesheet" href="codemirror/theme/lesser-dark.css">
	<link rel="stylesheet" href="codemirror/theme/liquibyte.css">
	<link rel="stylesheet" href="codemirror/theme/material.css">
	<link rel="stylesheet" href="codemirror/theme/mbo.css">
	<link rel="stylesheet" href="codemirror/theme/mdn-like.css">
	<link rel="stylesheet" href="codemirror/theme/midnight.css">
	<link rel="stylesheet" href="codemirror/theme/monokai.css">
	<link rel="stylesheet" href="codemirror/theme/neat.css">
	<link rel="stylesheet" href="codemirror/theme/neo.css">
	<link rel="stylesheet" href="codemirror/theme/night.css">
	<link rel="stylesheet" href="codemirror/theme/panda-syntax.css">
	<link rel="stylesheet" href="codemirror/theme/paraiso-dark.css">
	<link rel="stylesheet" href="codemirror/theme/paraiso-light.css">
	<link rel="stylesheet" href="codemirror/theme/pastel-on-dark.css">
	<link rel="stylesheet" href="codemirror/theme/railscasts.css">
	<link rel="stylesheet" href="codemirror/theme/rubyblue.css">
	<link rel="stylesheet" href="codemirror/theme/seti.css">
	<link rel="stylesheet" href="codemirror/theme/solarized.css">
	<link rel="stylesheet" href="codemirror/theme/the-matrix.css">
	<link rel="stylesheet" href="codemirror/theme/tomorrow-night-bright.css">
	<link rel="stylesheet" href="codemirror/theme/tomorrow-night-eighties.css">
	<link rel="stylesheet" href="codemirror/theme/ttcn.css">
	<link rel="stylesheet" href="codemirror/theme/twilight.css">
	<link rel="stylesheet" href="codemirror/theme/vibrant-ink.css">
	<link rel="stylesheet" href="codemirror/theme/xq-dark.css">
	<link rel="stylesheet" href="codemirror/theme/xq-light.css">
	<link rel="stylesheet" href="codemirror/theme/yeti.css">
	<link rel="stylesheet" href="codemirror/theme/zenburn.css">
	<script src="codemirror/addon/edit/closebrackets.js"></script>
	<!-- codemioor adons files -->
	<script src="codemirror/addon/edit/matchbrackets.js"></script>
	<link rel="stylesheet" href="codemirror/addon/hint/show-hint.css">
	<script src="codemirror/addon/hint/show-hint.js"></script>
	<script src="codemirror/mode/clike/clike.js" type="text/javascript"></script>
	<script src="codemirror/mode/python/python.js"></script>
	<!--end of codemirror files -->
<?php
require_once("codejudge.php");
?>
<head>
<body>
<header><h2><i class="fa fa-file-code-o" aria-hidden="true"></i>
 Test CodeJudge Codejustice! </h2></header>
<hr />
<div class="container">
        <div class="row centered-form">
        <div class="col-xs-12">
        	<div class="panel panel-default" style="box-shadow: 1px 1px 6px black;">
        		<div class="panel-heading" style="background-color: #4a148c; color: #fff;">
			    		<h3 class="panel-title">Write Code Below <small>created by Arpan Pathak</small></h3>
			 			</div>
			 			<div class="panel-body">
			    		<form role="form">
			    			<div class="row">
			    				<div class="col-xs-12 col-sm-6 col-md-6">
			    					<div class="form-group">
			                <input type="text" id="teamname" class="form-control input-sm" placeholder="Team Name" required><small>This Submission is available to server's submission/team-name/ directory
			                	<input type="text" id="codefile" class="form-control input-sm" placeholder="File Name" required>
			    					</div>
			    				</div>
			    			</div>

			    			<div class="form-group">
			    				<input type="text" id="ipfile" class="form-control input-sm" placeholder="Test Case Input File Name" required>
			    			</div>

			    			<div class="row">
			    				<div class="col-xs-6 col-sm-6 col-md-6">
			    					<div class="form-group">
			    						<input type="text" id="opfile" class="form-control input-sm" placeholder="Expected Output File Name" required>
			    					</div>
			    				</div>
			    				<div class="col-xs-6 col-sm-6 col-md-6">
			    					<div class="form-group">
			    						<input type="text" id="tle" class="form-control input-xs" placeholder="Time Limit in ms">
			    					</div>
			    					
			    				</div>
			    				
			    					
			    				
			    				
			    			</div>
			    			<div class="row">
			    				<div class="col-md-12">
			    					<div class="form-group">
			    						<textarea id="code" class="form-control input-sm code" placeholder="Write your code snippet here......" required></textarea>
			    					</div>
			    				</div>
			    			</div>
			    			<b>Select Language </b>
			    			<select id="language" class="plang-theme">
			    							<option value="cpp">C/C++ 14</option>
			    							<option value="java">Java 8</option>
			    							<option value="python2">Python 2+</option>
			    							<option value="python3">Python 3+</option>
			    			</select>
			    			<b>Editor theme:</b> <select id=select>
							    <option selected>default</option>
							    <option>3024-day</option>
							    <option>3024-night</option>
							    <option>abcdef</option>
							    <option>ambiance</option>
							    <option>base16-dark</option>
							    <option>base16-light</option>
							    <option>bespin</option>
							    <option>blackboard</option>
							    <option>cobalt</option>
							    <option>colorforth</option>
							    <option>dracula</option>
							    <option>eclipse</option>
							    <option>elegant</option>
							    <option>erlang-dark</option>
							    <option>hopscotch</option>
							    <option>icecoder</option>
							    <option>isotope</option>
							    <option>lesser-dark</option>
							    <option>liquibyte</option>
							    <option>material</option>
							    <option>mbo</option>
							    <option>mdn-like</option>
							    <option>midnight</option>
							    <option>monokai</option>
							    <option>neat</option>
							    <option>neo</option>
							    <option>night</option>
							    <option>panda-syntax</option>
							    <option>paraiso-dark</option>
							    <option>paraiso-light</option>
							    <option>pastel-on-dark</option>
							    <option>railscasts</option>
							    <option>rubyblue</option>
							    <option>seti</option>
							    <option>solarized dark</option>
							    <option>solarized light</option>
							    <option>the-matrix</option>
							    <option>tomorrow-night-bright</option>
							    <option>tomorrow-night-eighties</option>
							    <option>ttcn</option>
							    <option>twilight</option>
							    <option>vibrant-ink</option>
							    <option>xq-dark</option>
							    <option>xq-light</option>
							    <option>yeti</option>
							    <option>zenburn</option>
							</select>
			    			<button type="button" id="check" class="btn-green">
			    				<i class="fa fa-play" aria-hidden="true"></i>
			    				EXECUTE
			    			</button>
			    			<button type="button" id="info" class="btn-flat-blue" data-show="#inst">
			    				<i class="fa fa-play" aria-hidden="true"></i>
			    				Info
			    			</button>
			    		
			    		</form>
			    	</div>
	    		</div> 

    			<div style="text-align: left; border-radius: 3px; border: 1px solid #16a085; box-shadow: 0px 0px 2px #16a085; background: #fff; ">
    			Output : <br />
    			<span id="load"> </span>
    			<div id="output"></div>	
				</div>
    		</div>
    		
    	</div>
    </div>
    <div class="popup medium" id="inst">
    	<div class="popup-head">
    		Instructions
    	</div>
    	<div class="popup-content" style="text-align: left;">
    		<ul style="font-size: 20px;">
    			<li>You can get this submission in the server's submission/team-name/ directory </li>
    			<li>Please don't give any extension to File Name Field(the name of the submission file)</li>
    			<li>All the test case input file must be kept inside server's codes/input/ directory.
    				You just need to give the input file name followed by extension </li>
    			<li>All the Expected file must be kept inside server's codes/output/ directory.
    				You just need to give the input file name followed by extension </li>
    			<li>Please provide execution time limit in milliseconds</li>
    			<li>You can chose any language among C,C++,Java,Python2, and Python3 </li>
    		</ul>
    	</div>
    	<div class="popup-footer">
    		<button type="button" class="btn-flat-orange" onclick="$('.popup').fadeOut('slow');">CLOSE</button>
    	</div>
    </div>
    </body>