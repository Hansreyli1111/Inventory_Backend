<?php
$stmt=$connection
->prepare('CALL PRO_UPDATEPRODUCT(?,?,?,?,?,?)');

$stmt->bind_param('isidss',$pro_id,$pro_name,$pro_qty,$pro_price,$pro_description,$pro_created_date);
$pro_id=5;
$pro_name='Iphone 14 Pro Max';
$pro_qty=100;
$pro_price=12000;
$pro_description='Latest model with advanced features';
$pro_created_date=date('Y-m-d H:i:s');
if($stmt->execute()){
    echo "Product Updated Successfully";
}else{
    echo "Error: ".$stmt->error;
}
?>

