<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Camera</title>
</head>

<body>
<style>
.cam{
	height:300px;
	width:300px;
	box-shadow:0px 0px 5px black;
	background-color:#003;
	border-radius:20px;}
#a{
	text-align:center;
	text-decoration:none;
	display:block;
	padding:10px;
	color:#FFF;
	background-color:#069;
	width:300px;
}
	
</style>
<video id="video" width="640" height="480" autoplay></video>
<button id="snap">Snap Photo</button>
<canvas id="canvas" width="640" height="480"></canvas>
<img src="" height="100" width="100" id="pt" />
<a href="" download id="dn">donwload</a>
<a href="http://www.w3schools.com/html" ping="https://www.w3schools.com/trackpings">aa</a>

<script type="text/javascript">
var video = document.getElementById('video');

// Get access to the camera!
if(navigator.mediaDevices && navigator.mediaDevices.getUserMedia) {
    // Not adding `{ audio: true }` since we only want video now
    navigator.mediaDevices.getUserMedia({ video: true }).then(function(stream) {
        video.src = window.URL.createObjectURL(stream);
        video.play();
    });
}

var canvas = document.getElementById('canvas');
var context = canvas.getContext('2d');
var video = document.getElementById('video');
var photo = document.getElementById('pt');
var dn = document.getElementById('dn');

// Trigger photo take
document.getElementById("snap").addEventListener("click", function() {
	context.drawImage(video, 0, 0, 640, 480);
	pt.setAttribute('src',canvas.toDataURL('image/png'));
	dn.setAttribute('href',canvas.toDataURL('image/png'));
});
	
</script>
</body>
</html>