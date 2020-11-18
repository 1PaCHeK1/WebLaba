<?php
require_once 'list_models.php';
require_once '../backend/connect.php';

function UpdateDb($model_name, $fields=[], $isPost=false)
{
    $table_name = $model_fields[$model_name][0];

    $field_update = [];

    foreach($model_fields[$model_name][1] as $field)
    {
        if(isset($_POST[$field]) && $field != 'id')
            $field_update[$field] = $isPost ? $_POST[$field] : $fields[$field];
    }

    mysqli_query($connect, "UPDATE `$table_name` SET"
        .join(', ', array_map(function($a, $b) { return "`$a` = '$b'"; }, 
            array_keys($field_update), 
            array_values($field_update)))
        ."WHERE id=".strval($_POST['id'])
    );
}
?>  