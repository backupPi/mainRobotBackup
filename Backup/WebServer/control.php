<!DOCTYPE html>
 <head>
  <title>Control</title>
 </head>
	<style>
		.h{
			width:46vw;
			height:22vh;
			padding:0;
			display:block-inline;
			border:none;
			color:white;
			font-size:60px;
			
			
		}
		table, td{
			margin-left:0.6vw;
			margin-top:1.5vh;
			padding:0;
			border:none;
		}
		body{
			overflow:hidden;
		}
		.on{
			background-color:#00cc66;
			border-radius:60px 0px 0px 60px;
			float:right;
			margin:1vh 0vw 1vh 1vw;
		}
		.off{
			background-color:#ff4d4d;
			border-radius:0px 60px 60px 0px;
			float:left;
			margin:1vh 1vw 1vh 0vw;
		}
	</style>
 <body>
	<table>
	<td>
      <button class="h on" onclick="ajax('rf', 'on', 'tv')">TV</button>
      <button class="h on" onclick="ajax('rf', 'on', 'piano')">Piano</button>
      <button class="h on" onclick="ajax('rf', 'on', 'mandir')">Mandir</button>
      <button class="h on" onclick="ajax('rf', 'on', 'xbox')">XBOX</button>
	</td>
	<td>
      <button class="h off" onclick="ajax('rf', 'off', 'tv')">TV</button>
      <button class="h off" onclick="ajax('rf', 'off', 'piano')">Piano</button>
      <button class="h off" onclick="ajax('rf', 'off', 'mandir')">Mandir</button>
      <button class="h off" onclick="ajax('rf', 'off', 'xbox')">XBOX</button>
	</td>
	</table>
  <script src="jquery.js"></script>
  <script src="jquery-ui.js"></script>
  <script src="script.js"></script>
 </body>
</html>
