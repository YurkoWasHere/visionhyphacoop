<html>
<head>
<title>503 Service Temporarily Unavailable</title>
</head>
<body bgcolor="white">
<center>
  <h1>503 Service Temporarily Unavailable</h1>
</center>
<style>
.item {
	overflow:hidden;
	width:500px;
	padding-bottom:10px;
	margin:0 auto;
}
.item img {
	width:500px;
}
/* Mobile Styles */
@media only screen and (max-width: 400px) {
  .item {
	max-width:100%;
	max-height:auto;	
  }
  .item img {
	  width:100%;
	  max-width:100%;
  }
}
</style>
<?php

if ($handle = opendir('files/')) {
    while (false !== ($entry = readdir($handle))) {
        if ($entry != "." && $entry != "..") {
		  $files[]=$entry;
        }
    }
    closedir($handle);
}

rsort ($files); // reverse Sort
foreach ($files as $entry) {
	drawItem($entry);
}
function drawItem($item) {
	?>
	<div class="item"><img src="files/<?=$item?>" /></div>
	<?
}
?>
</body>
</html>
