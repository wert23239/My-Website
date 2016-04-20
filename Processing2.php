<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<link rel="stylesheet" type="text/css" href="node_modules/video.js/dist/video-js.css" >
<script src="node_modules/video.js/dist/video.min.js"></script>
<div style="width:700px;margin:0px auto;">
    <video id="example_video_1" class="video-js vjs-default-skin"
           controls preload="auto" width="640" height="264" autoplay="true"
           poster="images/VirtualAlpha.png"
           data-setup='{"controls":true}'>
        <source src="ExampleMovie.m4v" type="video/mp4" />
        <source src="ExampleMovie.webm" type="video/webm" />
    </video>
</div>
</body>
</html>