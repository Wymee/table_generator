<html>
<head>
    <title>Table d'intervention</title>
    <meta name="Content-Type" content="UTF-8">
    <meta name="Content-Language" content="fr">
    <meta name="Author" content="Mohammad">
    <link rel="stylesheet" href="style.css">
</head>
<body>
<?php
include 'config.php';
require 'generateur_tableau.php';
?>
<input type="search" class="light-table-filter" data-table="order-table" placeholder="Filtrer" />
	<section class="table-box">
    <?php       
generateur_tableau("article", $db);

?>
	<!-- jQuery via Google's CDN -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
	<script src="https://code.jquery.com/ui/1.10.3/jquery-ui.js"></script>
	<script src="filterTable.js"></script>
</body>
</html>