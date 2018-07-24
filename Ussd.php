<?php
$phone = $_POST['phoneNumber'];
$text = $_POST['text'];

$array = explode("*", $text);
$response="";
if ($text == "")  //*544#
{
	$response="CON Welcome to IEBC\nSelect\n1.Register\n2.Check details\n3.Check Candidates";
} 
elseif ($text == "2") //text=2
{

	$response = "END John Mark\n12342342\nKiambu station";
}
elseif ($text=="1") //text=1
{
	$response = "CON Enter ID Number";
}
elseif ($array[0]=="1" and sizeof($array)==2) //text=1*22222222
{
    $response="CON Enter names";
}
elseif ($array[0]=="1" and sizeof($array)==3) //text=1*22222222*john
{
    $response="CON Enter location";
}
elseif ($array[0]=="1" and sizeof($array)==4) //text=1*22222222*john*kiambu
{
	file_put_contents("votes.txt", "$array[1], $array[2]\n", 8);
    $response="END Thank you for registering with us";
}
elseif ($text=="3") //text=3
{
	$response = "CON Select Candidate\n1.Presidential\n2.Governor\n3.Senator\n4.MP";
}
elseif ($array[0]=="3" and sizeof($array)==2 and $array[1]=="1") {
	$response="END Candidate A\nCandidate B\nCandidate C";
}
elseif ($array[0]=="3" and sizeof($array)==2 and $array[1]=="2") {
	$response="END Governor A\nGovernor B\nGovernor C";
}
//student check classes















header("Content-type:application/text");
echo $response;

 ?>