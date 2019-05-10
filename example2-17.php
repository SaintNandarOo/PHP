<?php 
$price = 3.95;
$tax_rate = 0.08;
$tax_amount = $price * $tax_rate;
$total_cost = $price + $tax_amount;
$username = 'james';
$domain = '@example.com';
$email_address = $username . $domain;
print 'The tax is ' . $tax_amount; 
print "<br>"; // this prints a line break 
print 'The total cost is ' .$total_cost; 
print "<br>"; // this prints a line break 
print $email_address;
 ?>
 