<?php
$phone = $_POST['phoneNumber'];
$text = $_POST['text'];
$array = explode("*", $text);
$response = "";
if ($text=="") //*386#
{
    $response = "CON Welcome to the school timetable.\nChoose Your Form\n1.FORM 1\n2.FORM 2\n3.FORM 3\n4.FORM 4";
}
elseif ($text=="1") //text=1
{
    $response = "CON Choose day\n1.Monday\n2.Tuesday\n3.Wednesday\n4.Thursday\n5.Friday";
}
elseif ($array[0]=="1" and sizeof($array)==2 and $array[1]=="1") //text=1*1
{
    $response = "END FORM 1\nMonday\n9-10-Eng\n10-11-Math\n11-12-Kis\n12-1-Chem";
}
elseif ($array[0]=="1" and sizeof($array)==2 and $array[1]=="2") //text=1*2
{
    $response = "END FORM 1\nTuesday\n9-10-Math\n10-11-CRE\n11-12-Geo\n12-1-His";
}
elseif ($array[0]=="1" and sizeof($array)==2 and $array[1]=="3") //text=1*3
{
    $response = "END FORM 1\nWednesday\n9-10-Math\n10-11-Kis\n11-12-Bus\n12-1-Eng";
}
elseif ($array[0]=="1" and sizeof($array)==2 and $array[1]=="4") //text=1*4
{
    $response = "END FORM 1\nThursday\n9-10-Bio\n10-11-Phy\n11-12-Mat\n12-1-His";
}
elseif ($array[0]=="1" and sizeof($array)==2 and $array[1]=="5") //text=1*5
{
    $response = "END FORM 1\nFriday\n9-10-Chem\n10-11-Math\n11-12-Eng\n12-1-Bio";
}

elseif ($text=="2") //text=2
{
    $response = "CON Choose day\n1.Monday\n2.Tuesday\n3.Wednesday\n4.Thursday\n5.Friday";
}
elseif ($array[0]=="2" and sizeof($array)==2 and $array[1]=="1") //text=2*1
{
    $response = "END FORM 2\nMonday\n9-10-Eng\n10-11-Math\n11-12-Kis\n12-1-Chem";
}
elseif ($array[0]=="2" and sizeof($array)==2 and $array[1]=="2") //text=2*2
{
    $response = "END FORM 2\nTuesday\n9-10-Math\n10-11-CRE\n11-12-Geo\n12-1-His";
}
elseif ($array[0]=="2" and sizeof($array)==2 and $array[1]=="3") //text=2*3
{
    $response = "END FORM 2\nWednesday\n9-10-Math\n10-11-Kis\n11-12-Bus\n12-1-Eng";
}
elseif ($array[0]=="2" and sizeof($array)==2 and $array[1]=="4") //text=2*4
{
    $response = "END FORM 2\nThursday\n9-10-Bio\n10-11-Phy\n11-12-Mat\n12-1-His";
}
elseif ($array[0]=="2" and sizeof($array)==2 and $array[1]=="5") //text=2*5
{
    $response = "END FORM 2\nFriday\n9-10-Chem\n10-11-Math\n11-12-Eng\n12-1-Bio";
}


elseif ($text=="3") //text=3
{
    $response = "CON Choose day\n1.Monday\n2.Tuesday\n3.Wednesday\n4.Thursday\n5.Friday";
}
elseif ($array[0]=="3" and sizeof($array)==2 and $array[1]=="1") //text=3*1
{
    $response = "END FORM 3\nMonday\n9-10-Eng\n10-11-Math\n11-12-Kis\n12-1-Chem";
}
elseif ($array[0]=="3" and sizeof($array)==2 and $array[1]=="2") //text=3*2
{
    $response = "END FORM 3\nTuesday\n9-10-Math\n10-11-CRE\n11-12-Geo\n12-1-His";
}
elseif ($array[0]=="3" and sizeof($array)==2 and $array[1]=="3") //text=3*3
{
    $response = "END FORM 3\nWednesday\n9-10-Math\n10-11-Kis\n11-12-Bus\n12-1-Eng";
}
elseif ($array[0]=="3" and sizeof($array)==2 and $array[1]=="4") //text=3*4
{
    $response = "END FORM 3\nThursday\n9-10-Bio\n10-11-Phy\n11-12-Mat\n12-1-His";
}
elseif ($array[0]=="3" and sizeof($array)==2 and $array[1]=="5") //text=3*5
{
    $response = "END FORM 3\nFriday\n9-10-Chem\n10-11-Math\n11-12-Eng\n12-1-Bio";
}

elseif ($text=="4") //text=4
{
    $response = "CON Choose day\n1.Monday\n2.Tuesday\n3.Wednesday\n4.Thursday\n5.Friday";
}
elseif ($array[0]=="4" and sizeof($array)==2 and $array[1]=="1") //text=4*1
{
    $response = "END FORM 4\nMonday\n9-10-Eng\n10-11-Math\n11-12-Kis\n12-1-Chem";
}
elseif ($array[0]=="4" and sizeof($array)==2 and $array[1]=="2") //text=4*2
{
    $response = "END FORM 4\nTuesday\n9-10-Math\n10-11-CRE\n11-12-Geo\n12-1-His";
}
elseif ($array[0]=="4" and sizeof($array)==2 and $array[1]=="3") //text=4*3
{
    $response = "END FORM 4\nWednesday\n9-10-Math\n10-11-Kis\n11-12-Bus\n12-1-Eng";
}
elseif ($array[0]=="4" and sizeof($array)==2 and $array[1]=="4") //text=4*4
{
    $response = "END FORM 4\nThursday\n9-10-Bio\n10-11-Phy\n11-12-Mat\n12-1-His";
}
elseif ($array[0]=="4" and sizeof($array)==2 and $array[1]=="5") //text=4*5
{
    $response = "END FORM 4\nFriday\n9-10-Chem\n10-11-Math\n11-12-Eng\n12-1-Bio";
}


header("Content-type:application/text");
echo $response;
