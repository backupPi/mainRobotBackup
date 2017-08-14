<!DOCTYPE html>
 <head>
  <title>BOB the Robot</title>
  <link rel= "stylesheet" href= "style.css" type= "text/css" />
  <link href='http://fonts.googleapis.com/css?family=Aldrich' rel='stylesheet' type='text/css'>
 </head>
 <body>
  <div id="welcome">
   <h1>Welcome.</h1>
   <p>My name is Bob and I am your personal assistant. I can do a lot of things - hover over the tabs to find out!</p>
  </div>
<img src="overlay.jpg" id="over"/>
  <div id="photob">
   <img src='output.jpg' id='photo' style='z-index:999999999'/>
  </div>
  <div id="men">
   <div class="m" id="control">
    <div class="menu" id="controlh" style="background-color:#ff1a1a;">
     <p class="head" style="margin-left:-1.5%;">Control</p>
     <div id="sbg">
	<div id="stream">
     <img src="http://192.168.0.29:8080/?action=stream" onerror="this.style.display= 'none' "/>
	</div>
      <div  id="snap">
       <img src="cami.png"/>
       </div>
		<?php
			$m = strlen(shell_exec("sudo python changemode.py"));
			if($m == 5){
				echo "<div id=\"man\" onclick=\"ajax('m')\"><p style=\"font-family:Aldrich;text-align:center;font-size:250%;position:absolute;line-height:1vh;margin-left:1.6vw;\">M</p></div><img src=\"overlay.jpg\" id=\"over2\"/><div id=\"auto\" onclick=\"ajax('a')\" style=\"display:none;\"><p style=\"font-family:Aldrich;text-align:center;font-size:250%;position:absolute;line-height:1vh;margin-left:2vw;\">A</p></div>";
			}else{
				echo "<div id=\"man\" onclick=\"ajax('m')\" style=\"display:none;\"><p style=\"font-family:Aldrich;text-align:center;font-size:250%;position:absolute;line-height:1vh;margin-left:1.6vw;\">M</p></div><img src=\"overlay.jpg\" id=\"over2\" style=\"display:none;\"/><div id=\"auto\" onclick=\"ajax('a')\"><p style=\"font-family:Aldrich;text-align:center;font-size:250%;position:absolute;line-height:1vh;margin-left:2vw;\">A</p></div>";
			}
		?>
       <table>
        <tr>
         <td><button class="sb" onclick="ajax('u')">Up</button></td>
         <td><button class="sb" onclick="ajax('d')">Down</button></td>
        </tr>
        <tr>
         <td></br><button class="sb" onclick="ajax('l')">Left</button></td>
         <td></br><button class="sb" onclick="ajax('r')">Right</button></td>
        </tr>
       </table>
     </div>
    </div>
   </div>
   <div class="m" id="home">
    <div class="menu" id="homeh" style="background-color:#009933;">
     <p class="head">Home</p>
     <div id="hb">
      <div id="homebutts">
	<table>
	<td>
      <button class="h" onclick="ajax('rf', 'on', 'tv')">ON TV</button>
      <button class="h" onclick="ajax('rf', 'on', 'piano')">ON Piano</button>
      <button class="h" onclick="ajax('rf', 'on', 'mandir')">ON Mandir</button>
      <button class="h" onclick="ajax('rf', 'on', 'xbox')">ON XBOX</button>
	</td>
	<td>
      <button class="h" onclick="ajax('rf', 'off', 'tv')">OFF TV</button>
      <button class="h" onclick="ajax('rf', 'off', 'piano')">OFF Piano</button>
      <button class="h" onclick="ajax('rf', 'off', 'mandir')">OFF Mandir</button>
      <button class="h" onclick="ajax('rf', 'off', 'xbox')">OFF XBOX</button>
	</td>
	</table>
      </div>
     <div id="remote">
	<button class="rb" id="power" onclick="ajax('power')"><img src="power.png"/></button>
	<div id="v">
		<button class="rb" id="vu" onclick="ajax('tp')">+</button>
		<button class="rb" id="vd" onclick="ajax('tm')">-</button>
	</div>
						</div>
     </div>
    </div>
   </div>
   <div class="m" id="voice">
    <div class="menu" id="voiceh" style="background-color:#0066cc;">
     <p class="head">Voice</p>
     <input placeholder="eg. hello" id="tb"></input>
    <div id="voicebox"><select id="voices">
      <option selected>Default</option>
      <option value="en-sc">Scottish</option>
      <option value="en-us">American</option>
      <option value="de">German</option>
      <option value="zh-yue">Cantonese</option>
      <option value="af">Afrikaan</option>
      <option value="it">Italian</option>
      <option value="is">Icelandic</option>
     </select></div>
     <button id="speak" onclick="ajax('s')">Speak!</button>
    </div>
   </div>
  </div>
  <script src="jquery.js"></script>
  <script src="jquery-ui.js"></script>
  <script src="script.js"></script>
 </body>
</html>
