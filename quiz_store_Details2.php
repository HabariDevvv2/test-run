<?php
$token=$_REQUEST['token'];
$Bills_Total=$_REQUEST['Bills_Total'];
//$BillInd=$_REQUEST['selectedValue'];
//$NoBills=$_REQUEST['SelectedValue3'];


//if($key=='Gd243vdfgdfgfdgfd55554GFFDGFDGSGSDsaDSF' && !empty($name) )

//
//{

//$token=getToken(5);
include "../connection.php";

//$qry="INSERT INTO `TrustValue` (`id`, `token`, `Bills_Status`, `Bills_Total`, `Employment_Status`) VALUES (NULL, '$token', '$EmpStatus', '$BillInd', '$NoBills')";

//$qry="INSERT INTO `TrustValue` (`id`, `token`, `Employment_Status`) VALUES (NULL, '$token', '$EmpStatus')";
$qry ="UPDATE `TrustValue` set `Bills_Total` = '$Bills_Total' where `token`= '$token'";

$res=mysqli_query($con,$qry);
if($res)
{



$arr = array('response_code' =>'10');


//$arr = array('id' =>'10','question'=>'Do you like to buy New Clothes or New Phone?','option1'=>'http://cdn.chooseone.co.in/imgs/09/5a54758d47438.jpg','option2'=>'http://cdn.chooseone.co.in/imgs/09/5a54758d4743a.jpg');

echo json_encode($arr);
}

else
{

$arr = array('response_code' =>'20');
//$arr = array('id' =>'10','question'=>'Do you like to buy New Clothes or New Phone?','option1'=>'http://cdn.chooseone.co.in/imgs/09/5a54758d47438.jpg','option2'=>'http://cdn.chooseone.co.in/imgs/09/5a54758d4743a.jpg');

echo json_encode($arr);

}
//}


?>