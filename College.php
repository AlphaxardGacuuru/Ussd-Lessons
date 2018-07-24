<?php
//course,names,id,guardians phone,email
$phone = $_POST['phoneNumber'];
$text = $_POST['text'];

if (strpos($text, "*00") !== false) {
    $exploded = explode("*00", $text);
    $text = $exploded[1];
    $start = substr($text, 0, 1);
    if ($start == "*")  //*44*7888
    {
        $text = substr($text, 1);
    }
    // die($text) ;
}

$array = explode("*", $text);

//var_dump($array);

//die()  ;
$response = "";
if ($text == "") {
    $response = "CON Welcome to eMobilis\nPlease select your course\n1.MIT\n2.USSD\n3.Android\n4.Python";
} elseif (sizeof($array) == 1) //text=1
{
    $response = "CON Enter your 2 names with a space in between them";
} elseif (sizeof($array) == 2)   //1*names
{
    $response = "CON Enter your guardians phone number";
} elseif (sizeof($array) == 3) //1*names*guardians phone
{
    $response = "CON Enter your email";
} elseif (sizeof($array) == 4) //1*names*guardians phone*email
{
    $response = "CON Enter your id";
} elseif (sizeof($array) == 5) //1*names*guardians phone*email*id
{
    //$con = mysqli_connect("localhost","id6529201_01","college","id6529201_ussd");
    if (!validateNames($array[1])) {
        $response = "END Wrong name format\nYou must have 2 names with a space in between them";

    } elseif (!validatePhone($array[2])) {
        $response = "END Wrong number format\nPhone number must start with a 0 and have 10 characters";

    } elseif (!validateEmail($array[3])) {
        $response = "END Wrong email format\nYour email must be of format 'word@word'";

    } elseif (!validateId($array[4])) {
        $response = "END Wrong Id format\nYour Id must have 10 characters";

    } else {
        $con = mysqli_connect("localhost", "root", "", "ussd");
        $insert = "INSERT INTO `students`( `course`, `name`, `phone`, `g_phone`, `email`, `n_id`) VALUES ('$array[0]','$array[1]','$phone','$array[2]','$array[3]','$array[4]')";
        $quer = mysqli_query($con, $insert) or die(mysqli_error($con));
        $response = "END Registration complete\nThank you for registering with us";
    }

}
function validateNames($name)
{
    $pattern = "/^\D{2,20}\s\D{2,20}$/";

    if (preg_match($pattern, $name)) {
        return true;
    } else {
        return false;
    }
}

function validatePhone($phone)
{
    $pattern = "/^0[0-9]{9}$/";

    if (preg_match($pattern, $phone)) {
        return true;
    } else {
        return false;
    }

}

function validateEmail($email)
{
    $pattern = "/^.{1,}@.{1,}$/";

    if (preg_match($pattern, $email)) {
        return true;
    } else {
        return false;
    }
}

function validateid($id){
    $pattern = "/^[0-9]{10}$/";
     if (preg_match($pattern, $id)){
         return true;
     } else {
         return false;
     }
}

header("content-type:application/text");
echo $response;