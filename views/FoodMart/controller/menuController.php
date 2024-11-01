<?php
require '../../db/db.php';

$sql_categories2 = "SELECT * FROM Categories WHERE is_host = 1 LIMIT 5";
$result_categories2 = $conn->query($sql_categories2);
?>
