<?php
//matches a string that has exactly 8 digits
/*$pattern="/^[0-9]{8,9}$/";
$id="5556665";

if(preg_match($pattern,$id))
{
   echo "Matching"    ;
}
else{
    echo "Not Matching";
}*/

//$pattern="/^\D{2,20}\s\D{2,20}$/";
//$names="John Mark";
//
//if(preg_match($pattern,$names))
//{
//    echo "Matching"    ;
//}
//else{
//    echo "Not Matching";
//}

$pattern="/^0[0-9]{9}$/";
$names="0700123456";

if(preg_match($pattern,$names))
{
    echo "Matching"    ;
}
else{
    echo "Not Matching";
}

//$pattern="/^.{1,}@.{1,}$/";
//$names="aaaa@a";
//
//if(preg_match($pattern,$names))
//{
//    echo "Matching"    ;
//}
//else{
//    echo "Not Matching";
//}

//$pattern="/^[0-9]{5,6}$/";
//$names="10000";
//
//if(preg_match($pattern,$names))
//{
//    echo "Matching"    ;
//}
//else{
//    echo "Not Matching";
//}

//$pattern="/^A[0-9]{7}$/";
//$names="A1234567";
//
//if(preg_match($pattern,$names))
//{
//    echo "Matching"    ;
//}
//else{
//    echo "Not Matching";
//}

//validate phone number, email, amount, passport, county