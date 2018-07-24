<?php
$phone = $_POST['phoneNumber'];
$text = $_POST['text'];
$array = explode("*", $text);
$response = "";

if (strpos($text, "*00") !== false) {
    $exploded = explode("*00", $text);
    $text = $exploded[1];
    $start = substr($text, 0, 1);
    if ($start == "*")  //*44*7888
    {
        $text = substr($text, 1);
    }
    die($text);
}

if ($text == "") {                //*949#
    $response = "CON Send money to:\nEnter recipient's number.";

} elseif (sizeof($array) == 1) {
    $response = "CON Enter amount";
} elseif (sizeof($array) == 2) {


    if (!validateNumber($array[0])) {
        $response = "Wrong Phone Number format, it must start with a 0 and have 10 characters.";

    }
   // echo "ggggg";
    $con = mysqli_connect("localhost", "root", "", "ussd");
    $sql="SELECT * FROM users WHERE phone = '$phone'";
   // die($sql);
    $wit = mysqli_query($con, $sql);
    $row = mysqli_fetch_assoc($wit) or die(mysqli_error($con));
    extract($row);

    if ($array[1] >= $account) {
        $response = "Insufficient Balance";
    } else {
        $amount = $array[1];
//        $bring = "SELECT * FROM users WHERE phone = $array[0]";
//        $bring2 = mysqli_query($con, $bring);
//        $bring3 = mysqli_fetch_assoc($bring2) or die(mysqli_error($con));
//        extract($bring3);
        $sub = "UPDATE users SET account = account-$amount WHERE phone = '$phone'";
        $subquer = mysqli_query($con, $sub) or die(mysqli_error($con));

        //$amount=$array[1] ;
        $add = "UPDATE users SET account = account+$amount WHERE phone ='$array[0]'";
        $addquer = mysqli_query($con, $add) or die(mysqli_error($con));

        $trans = "INSERT INTO `transactions` (`trans_id`, `recipient`, `sender`, `amount`) VALUES (NULL, '$array[0]', '$phone', '$array[1]')";
        $quer = mysqli_query($con, $trans) or die(mysqli_error($con));
        $response = "END Cash Sent";
    }
}


function validateNumber($number)
{
    $pattern = "/^0[0-9]{9}$/";

    if (preg_match($pattern, $number)) {
        return true;
    } else {
        return false;
    }

}

function validateAmount($amount)
{
    $pattern = "/^[0-9]{1}$/";

    if (preg_match($pattern, $amount)) {
        return true;
    } else {
        return false;
    }
}

header("content-type:application/text");
echo $response;