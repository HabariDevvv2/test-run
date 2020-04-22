<?php

$Email=$_REQUEST['Email'];
$token=$_REQUEST['token'];



//$token=getToken(5);
include "../connection.php";
$qry="Update  `users_1231` set `email`= '$Email' where `token` ='$token'";

$res=mysqli_query($con,$qry);
if($res)
{
 //setconversion($file2,$purl);

//$s=getprocessid();
$arr = array('name' =>$Email,'token'=>$token);

echo json_encode($arr);


//header('Location: '.'word-to-pdf-download.php?re=.'$purl);

}
else
{
	echo "sorry Try Again";
}










function getToken($length) {
    $key = '';
    $keys = array_merge(range(0, 9), range('a', 'z'));

    for ($i = 0; $i < $length; $i++) {
        $key .= $keys[array_rand($keys)];
    }

    return $key;
}



?>