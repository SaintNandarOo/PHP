<?php 
$plates = 5;
$dinner = 'Beef Chow-Fun';
$cost_of_dinner = 8.95;
$cost_of_lunch = $cost_of_dinner;
$မြန်မာ="မြန်မာ";
$page_header = <<<HTML_HEADER
<html>
<head><title>Menu</title></head>
<body bgcolor="#fffed9">
<h1>Dinner</h1>
HTML_HEADER;
$page_footer = <<<HTML_FOOTER
</body>
</html>
HTML_FOOTER;


echo $page_header ." ". $plates . " " . $dinner . " " . $cost_of_dinner . " " . $page_footer;
echo "$မြန်မာ";
 ?>
 