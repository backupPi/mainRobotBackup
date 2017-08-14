<?php
if(isset($_GET["r"])){
	$r = $_GET["r"];
	$text = $_GET["t"];
	$voice = $_GET["v"];
	$swi = $_GET["sswitch"];
	$device = $_GET["device"];
	switch($r){
		case "u":
			shell_exec("sudo echo 1=+6 > /dev/servoblaster");
		break;
		case "d":
			shell_exec("sudo echo 1=-6 > /dev/servoblaster");
        	break;
        	case "l":
			shell_exec("sudo echo 0=+10 > /dev/servoblaster");
        	break;
        	case "r":
			shell_exec("sudo echo 0=-10 > /dev/servoblaster");
        	break;
		case "s":
			shell_exec("sudo espeak '$text' -v $voice");
        	break;
		case "led":
                        shell_exec("sudo python /home/pi/led.py");
                break;
		case "power":
                        shell_exec("sudo irsend SEND_ONCE tv KEY_POWER");
                break;
		case "a":
			shell_exec("sudo python changemode.py auto");
		break;
		case "m":
			shell_exec("sudo python changemode.py manual");
		break;
		case "photo":
			shell_exec("sudo wget http://192.168.0.29:8080/?action=snapshot -O /var/www/html/output.jpg");
		break;
		case "tp":
			shell_exec("sudo irsend SEND_ONCE tv KEY_VOLUMEUP");
		break;
		case "tm":
			shell_exec("sudo irsend SEND_ONCE tv KEY_VOLUMEDOWN");
		break;
		case "rf":
			shell_exec("sudo python 433.py $swi $device");
			
		break;
	}
	echo $r;
}
	echo "ok";
?>
