<?php
include("Db.php");
if(isset($_POST['payment_id']) && isset($_POST['amt']) && isset($_POST['name']) && isset($_POST['phone']) && isset($_POST['email']) )
{
    echo 'inside';
    $payment_id = $_POST['payment_id'];
    $amount= $_POST['amt'];
    $name  = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $created_at = date('Y-m-d h:i:s');
    mysqli_query($conn,"insert into payment_details(Razorpay_Id,Email,Phone,User_Name,Amount,Status,Created_at) values('$payment_id','$email','$phone','$name','$amount','','$created_at')");

}
?>