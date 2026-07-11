<?php
$stmt=$connection
    ->prepare('CALL Pro_Delete_Role(?)');

$stmt->bind_param('i',$role_id);
$role_id=1;
if($stmt->execute()){
    echo "deleted Role successfully";
}else
{
    echo "Error: ".$stmt->error;
}
?>