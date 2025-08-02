<style>
	#playlist {
		display:table;
	}
	#playlist li{
		cursor:pointer;
		padding:8px;
	}

	#playlist li:hover{
		color:blue;                        
	}
	#videoarea {
		float:left;
		width:1253px;
		height:480px;
		margin:10px;    
		border:1px solid silver;
	}
</style>
<div class="inner_title">
		<h3>
			<?php echo __('Our Facilities'); ?>
		</h3>
</div>
<div id="mainContainer" style="text-align:center;margin:5px;">
	<video id="videoarea" controls="controls" poster="" src=""></video>
</div>
<div style="background:#DBEAF9;width:10%;float:right;margin-top:15px;height:500px;overflow:auto;border:1px solid;border-radius:15px;">
	<ul id="playlist" height='20' width='40'>
    	<li movieurl="http://html5videoformatconverter.com/data/images/happyfit2.mp4" moviesposter="../img/Speciality/cardiology.jpg">
    	</li>
    	<li movieurl="http://grochtdreis.de/fuer-jsfiddle/video/sintel_trailer-480.mp4">Sintel</li>          
    	<li movieurl="http://html5example.net/static/video/html5_Video_VP8.webm">Resident Evil</li>
    	<li movieurl="http://www.ioncannon.net/examples/vp8-webm/big_buck_bunny_480p.webm">Big Buck Bunny</li>
    	<li movieurl="http://html5videoformatconverter.com/data/images/happyfit2.mp4" moviesposter="../img/Speciality/cardiology.jpg">
    	</li>
    	<li movieurl="http://grochtdreis.de/fuer-jsfiddle/video/sintel_trailer-480.mp4">Sintel</li>          
    	<li movieurl="http://html5example.net/static/video/html5_Video_VP8.webm">Resident Evil</li>
    	<li movieurl="http://www.ioncannon.net/examples/vp8-webm/big_buck_bunny_480p.webm">Big Buck Bunny</li>
    	<li movieurl="http://html5videoformatconverter.com/data/images/happyfit2.mp4" moviesposter="../img/Speciality/cardiology.jpg">
    	</li>
    	<li movieurl="http://grochtdreis.de/fuer-jsfiddle/video/sintel_trailer-480.mp4">Sintel</li>          
    	<li movieurl="http://html5example.net/static/video/html5_Video_VP8.webm">Resident Evil</li>
    	<li movieurl="http://www.ioncannon.net/examples/vp8-webm/big_buck_bunny_480p.webm">Big Buck Bunny</li>
    </ul>  
</div>
<script>
$(function() {
    $("#playlist li").on("click", function() {
        $("#videoarea").attr({
            "src": $(this).attr("movieurl"),
            "poster": "",
            "autoplay": "autoplay"
        })
    })
    $("#videoarea").attr({
        "src": $("#playlist li").eq(0).attr("movieurl"),
        "poster": $("#playlist li").eq(0).attr("moviesposter")
    })
});
</script>

