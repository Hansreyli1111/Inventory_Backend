<?php
include './BUILD/config/connectdb.php';
$sql="SELECT * FROM roles";
$result=$connection->query($sql);
echo "============Roles List============<br>";
if($result->num_rows){
    while($row=$result->fetch_assoc()){
        echo "Role ID: ".$row['role_id']."<br>";
        echo "Role Name: ".$row['role_name']."<br>";
        echo "Created_date: ".$row['created_at']."<br>";
        echo "Updated_date: ".$row['updated_at']."<br>";
        echo "==============================<br>";
    }
}else{
    echo "No data found";
}
?>  