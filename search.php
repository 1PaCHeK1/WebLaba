<?php
require_once("server/backend/connect.php");
require_once("server/query/select.php");

$query = mysqli_real_escape_string($connect, $_GET['query']);
$director = SelectDb($connect, 'Director', $where=['last_name' => $query])[0]['id'];

header("Location: films.php?page=1&director=$director");
?>