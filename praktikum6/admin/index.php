<?php
include_once('header.php');
include_once('sidebar.php');

if (isset($_GET['page'])) {
    $page = $_GET['page'];
} else {
    // Default Content Main Page
    $page = 'main1.php';
}
include_once($page);

include_once('footer.php');
?>
