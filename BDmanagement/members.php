<head>
    <title>Our Members</title>
    <link rel="icon" type="image/x-icon" href="favicon.ico">
</head>

<?php

$i=0;
require_once 'users/php/DBConnect.php';
$db = new DBConnect();
$users = $db->getUsers();

$title="Members Area";$setMemberActive="active";$bg_background="bg-warning";
// include 'layout/_header.php';

include 'layout/_top_nav.php';
?>

<?php include 'users/layout/_member_layout.php'; ?>

<!-- <?php include 'layout/_footer.php'; ?> -->
