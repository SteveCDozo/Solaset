<?php

include_once('navbar-links.php');

/*
$notif_to_hide = array_search($_GET['id'], array_column($notifications, 'id'));
$notif_to_hide['status'] = 'hidden';

FOR REFERENCE:
https://www.w3schools.com/php/func_array_search.asp
https://www.w3schools.com/php/func_array_column.asp
*/

array_search($_GET['id'], array_column($notifications, 'id'))['status'] = 'hidden';

?>
