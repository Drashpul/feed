<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 04.03.17
 * Time: 12:35
 */

function select_records($table_name, $field_name = false, $params = false, $first_record_force = false){
    require_once 'db_connect.php';
    $records =[];

    $query_string = "SELECT * FROM $table_name";

    if(!$field_name && !$params) {
        $query_string .= " WHERE $field_name=$params";
    }
    $query = mysqli_query($connect, $query_string);
    if($field_name && $params){
        $record = mysqli_fetch_object($query);
            }
    }else {
    while ($result = mysqli_fetch_object($query)) ;
    {
        $records[] = $result;

    }
}
mysqli_close($connect);
    return $records;
}
function delete_record($table_name, $field, $params){
    require_once 'db_connect.php';
    $query_string = "DELETE FROM $table_name WHERE $field = $params";
    mysqli_close($connect);
    return mysqli_query($connect, $query_string);
}
