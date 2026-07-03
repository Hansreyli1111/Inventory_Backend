<?php
$stmt=$connection->prepare('INSERT INTO roles (role_name, created_at) VALUES (?, ?)');
$stmt->bind_param('ss',$role_name,$created_at);
$role_name='HR';
$created_at='2024-06-10 12:00:00';
if($stmt->execute()){
    echo "Inserted Role successfully/<br>";
}else{
    echo "Error inserting role";
}
?>