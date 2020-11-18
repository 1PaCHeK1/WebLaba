<?php
require_once 'list_models.php';
require_once '../backend/connect.php';

function DeleteIdDb($model_name, $id=null, $isPost=false)
{
    $table_name = $model_fields[$model_name][0];
    mysqli_query($connect, "DELETE FROM `$table_name` WHERE id=".strval($isPost ? $_POST['id'] : $id));
}
?>