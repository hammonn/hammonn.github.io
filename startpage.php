<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Welcome Home</title>
  <link href="https://fonts.googleapis.com/css?family=Muli" rel="stylesheet">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <style type="text/css">
  	p{
  		font-family: 'Muli', serif;
  		text-shadow: 2px 2px 2px black;
  		color: #E3C984;
  		font-size: 33px;
  		border-bottom: 5px solid #E3C984;
  		display: block;
  		margin-bottom: 10px;
  	}
  	img{
  		height: auto;
  		width: 100%;
  	}
  	.bg{
  		position: relative;
  		z-index: 0;
  		background: url(ethereal-house-inside.jpg) center center no-repeat;
  		background-size: cover;
  		position: fixed;
	    width: 100%;
    	height: 100%;
    	z-index: -2;
    	top: 0;
  		left: 0;
  	}
  	.overlay{
  		background: rgba(0,0,0,.3);
  		position: fixed;
  		top: 0;
  		left: 0;
	    width: 100%;
    	height: 100%;
    	z-index: -1 ;
  	}
	.center {
	    position: absolute;
	    width: 99%;
	    max-width: 1800px;
	}
	.dailies{
		width: 100%;
		text-align: left;
	}
	.dailies .box p{

	}
	.dailies .box a{
		margin: 10px;
		display: inline-block;
	}
	.dailies img{
  		max-width: 250px;
  	}
	.occasional{
		margin-top: 40px;
		width: 100%;
		text-align: left;
	}
	.occasional a{
		margin: 5px;
	}
	.occasional img{
		max-width: 395px;
	}
		.box{
		display: inline-block;		
		width: 100%;
	}
  	.hidden{
  		display: none;
  	}
  	.clear{
  		clear: both;
  	}
  </style>

</head>
<div class="bg"></div>
<div class="overlay"></div>
<body>
<div class="center">
	<div class="dailies">
		<div class="box" id="1" style="display:none;">
			<p>Is it Monday? Then check the following links:</p>
			<p>Nothing here!</p>
		</div>
		<div class="box" id="2" style="display:none;">
			<p>Is it Tuesday? Then check the following links:</p>
			<p>Nothing here!</p>
		</div>
		<div class="box" id="3" style="display:none;">
			<p>Wednesday:</p>
			<!-- <a target="_blank" href="http://horriblesubs.info/shows/yuri-on-ice/"><img src="Yuri.On_.Ice_.full_.2024044.jpg"><span class="hidden">Yuri!!! on Ice</span></a> -->
		</div>
		<div class="box" id="4" style="display:none;">
			<p>Thursday:</p>
			<!-- <a target="_blank" href="http://horriblesubs.info/shows/flip-flappers/"><img src="flip-flappers-kv.jpg"><span class="hidden">Flip Flappers</span></a> -->
		</div>
		<div class="box" id="5" style="display:none;">
			<p>Friday:</p>
			<!-- <a target="_blank" href="http://horriblesubs.info/shows/jojos-bizarre-adventure-diamond-is-unbreakable/"><img src="jojo.jpeg"><span class="hidden">Where are the Jojokes?</span></a> -->
		</div>
		<div class="box" id="6" style="display:none;">
			<p>Saturday:</p>
			<!-- <a target="_blank" href="http://horriblesubs.info/shows/3-gatsu-no-lion"><img src="79185.jpg"><span class="hidden">3-gatsu no Lion</span></a> -->
		</div>
		<div class="box" id="0" style="display:none;">
			<p>Sunday:</p>
			<a target="_blank" href="http://horriblesubs.info/shows/mobile-suit-gundam-iron-blooded-orphans"><img src="movie.jpg"><span class="hidden">Gundam IBO</span></a>
		</div>
	</div>
	<div class="occasional">
		<div class="box">
			<p>When was the last time you checked on these, ya dingus?!</p>
			<a target="_blank" href="http://bato.to/comic/_/comics/helck-r17710/"><img src="helck.jpg"><span class="hidden">Helk</span></a>
			<a target="_blank" href="http://bato.to/comic/_/comics/gakkou-gurashi-r9554"><img src="Gakkou.Gurashi!.full.1902490.jpg"><span class="hidden">Gakkou Gurashi!</span></a>
			<a target="_blank" href="http://www.mangareader.net/relife"><img src="relife.jpg"><span class="hidden">ReLIFE</span></a>
			<a target="_blank" href="https://reader.kireicake.com/series/its_my_life/"><img src="itsmylife2.jpg"><span class="hidden">It's My Life</span></a>
		</div>
	</div>
</div>
<script>
  function showhide() {
    var d = new Date();
    var s = document.getElementById(+d.getDay());
    s.style.display = (s.style.display == 'block') ? 'none' : 'block';
  }
  showhide();
</script>
</body>
</html>