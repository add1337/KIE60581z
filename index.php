<?php
require('dbconnect.php');


$result = $conn->query("SELECT tool.category as 'id', tool.name as itn, category.name as cn FROM tool, category WHERE category.id=tool.category");
while ($row = $result->fetch()) {
    echo('<p>'.$row['id'].' '.$row['itn'].' '.$row['cn'].'</p>');

}
