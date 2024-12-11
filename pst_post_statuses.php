<?php
$host="localhost";
$database="2685_php_posts";
$user="root";
$password="nourmostafa2003";

function dd($cell){
    echo '<pre>';
    var_dump($cell);
    echo '</pre>';

}
$sql=new mysqli($host , $user , $password , $database);
$qry= 'SELECT * FROM `pst_post_statuses`;';
$res=$sql->query($qry);
$data = mysqli_fetch_all($res ,MYSQLI_ASSOC );

dd($data);