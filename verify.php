<?php

session_start();
require('config.php');
 //db connection
$conn = mysqli_connect($host,$username,$password,$dbname);


require('razorpay-php/Razorpay.php');
use Razorpay\Api\Api;
use Razorpay\Api\Errors\SignatureVerificationError;

$success = true;

$error = "Payment Failed";

if (empty($_POST['razorpay_payment_id']) === false)
{
    $api = new Api($keyId, $keySecret);

    try
    {
        // Please note that the razorpay order ID must
        // come from a trusted source (session here, but
        // could be database or something else)
        $attributes = array(
            'razorpay_order_id' => $_SESSION['razorpay_order_id'],
            'razorpay_payment_id' => $_POST['razorpay_payment_id'],
            'razorpay_signature' => $_POST['razorpay_signature']
        );

        $api->utility->verifyPaymentSignature($attributes);
    }
    catch(SignatureVerificationError $e)
    {
        $success = false;
        $error = 'Razorpay Error : ' . $e->getMessage();
    }
}

if ($success === true)
{
    // $razorpay_order_id = $_SESSION['razorpay_order_id'];
    $name = $_SESSION['name'];
    $phone = $_SESSION['phone'];
    $email = $_SESSION['email'];
    $amount = $_SESSION['amount'];

    $sql = "INSERT INTO `donardata` (`name`, `phone`, `email`, `amount`, `status`) VALUES ('$name', '$phone', '$email', '$amount', 'success');";
    if(mysqli_query($conn,$sql)){
        // echo "payment details inserted to db";
    }
    $html = "<p>Your payment was successful</p>";

}
else
{
    $html = "<p>Your payment failed</p>
             <p>{$error}</p>";
}

echo $html;
