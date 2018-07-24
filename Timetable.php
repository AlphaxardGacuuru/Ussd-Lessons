<?php
$phone = $_POST['phoneNumber'];
$text = $_POST['text'];
$array = explode("*", $text);
$response = "";
if ($text=="") //*386#
{
    $response = "CON Welcome to the school timetable\n1.Monday\n2.Tuesday\n3.Wednesday\n4.Thursday\n5.Friday";
}
elseif ($text=="1") //text=1
{
    $response = "END Monday\n9-10-Eng\n10-11-Math\n11-12-Kis\n12-1-Chem";
}
elseif ($text=="2") //text=2
{
    $response = "END Tuesday\n9-10-Math\n10-11-CRE\n11-12-Geo\n12-1-His";
}
elseif ($text=="3") //text=3
{
    $response = "END Wednesday\n9-10-Math\n10-11-Kis\n11-12-Bus\n12-1-Eng";
}
elseif ($text=="4") //text=4
{
    $response = "END Thursday\n9-10-Bio\n10-11-Phy\n11-12-Mat\n12-1-His";
}
elseif ($text=="5") //text=5
{
    $response = "END Friday\n9-10-Chem\n10-11-Math\n11-12-Eng\n12-1-Bio";
}

header("Content-type:application/text");
echo $response;
