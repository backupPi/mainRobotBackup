$(".menu").mouseenter(function(){
	$("#welcome").fadeOut("slow");
	$(".menu").stop().animate({width:"8vw"}, 600);
	$(this).stop().animate({width:"82vw"}, 600);
});

function ajax() {
 var r = arguments[0];
 if(arguments.length > 1){
	var sswitch = arguments[1];
	var device = arguments[2];
 }else{
 	var sswitch = "x"
	var device = "x"
}
 var text = $("#tb").val();
 var voice = $("#voices").val();
 var request = new XMLHttpRequest();
 request.open( "GET" , "ajax.php?v=" + voice + "&r=" + r +"&t=" + text + "&sswitch=" + sswitch + "&device=" + device + "&x=" + Math.random(), true);
 request.send(null);
 request.onreadystatechange = function () {
         if (request.readyState == 4 && request.status == 200) {
                console.log("ok");
		
         }
}
//$("#stream").attr("src","output.jpg");
}

$("#over").click(function(){
 $("#over").fadeOut();
 $( "#photo" ).hide( "puff", 300);
 $("#photob").fadeOut();
});
setInterval(function(){ $("#photo").attr("src","output.jpg"); }, 200);
$("#snap").click(function(){
 ajax("photo");
 $("#over").fadeIn();
 $("#photob").fadeIn();
 $( "#photo" ).delay(100).show("puff",300);
});



$("#man").click(function(){
 $("#man").fadeOut();
 $("#auto").fadeIn();
 $("#over2").fadeOut();
});

$("#auto").click(function(){
 $("#auto").fadeOut();
 $("#man").fadeIn();
 $("#over2").fadeIn();
});
