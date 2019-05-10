<?php 
$page_title = 'Menu'; $meat = 'pork';
$vegetable = 'bean sprout'; print <<<MENU
<html>
<head><title>$page_title</title></head>
<body>
<ol>
<li> Barbecued $meat
<li> Sliced $meat
<li> Braised $meat with $vegetable
</ol>
</body>
</html>
MENU;
 ?>
 