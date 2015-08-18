<?php

require 'class.address.php';

echo '<h2> instantiate</h2>';
$address = new Address;

echo '<tt><pre>' . var_export($address, TRUE) . '</pre></tt>';


$address->street_address_1 = '555 hellow';
$address->city_name = 'penis town';
$address->postal_code = 696969;
$address->country = 'USA';

echo '<tt><pre>' . var_export($address, TRUE) . '</pre></tt>';

echo $address->display();

?>
