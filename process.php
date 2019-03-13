<?php

$action = $_POST['action'];
$url = $_POST['url'];
$url =(string)$url;
$fecha = date('Ymdhis');

	if($action=="video_download"){

		$out = "videos/".$fecha."download.mp4";
		$out=(string)$out;

			exec("youtube-dl $url -o $out");

			echo $out;


   }else if($action=="mp3_download"){

   		$out = "sounds/".$fecha."audio.mp3";
   		$out =(string)$out;

   		exec("youtube-dl --extract-audio --audio-format mp3 $url -o $out");

   		echo $out;
   	

   }






?>