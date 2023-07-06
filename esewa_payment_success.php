<?php
//"<h1> Payment Sucessed";
include 'admin/connectsql.php';
$mid="";
 if (isset($_GET['mid'])) {
    $mid=$_GET['mid'];
   
} 

if(isset($_REQUEST['oid'])&&
   isset($_REQUEST['amt'])&&
   isset($_REQUEST['refId'])
)
{
    $query = " SELECT * FROM addshows where show_ID= $mid";
    
$result = $conn->query($query);
if($result)
{
    if(mysqli_num_rows($result)==1){
        $product=mysqli_fetch_assoc($result);
      
    $url = "https://uat.esewa.com.np/epay/transrec";
$data =[

   'amt'=> $product['ticketcharge'],
   'rid'=> $_REQUEST['refId'],
   'pid'=>$_REQUEST['oid'],
    'scd'=> 'EPAYTEST'

];

    $curl= curl_init($url);
    curl_setopt($curl, CURLOPT_POST, true);
    curl_setopt($curl, CURLOPT_POSTFIELDS, $data);
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
    $response = curl_exec($curl);
    var_dump($response);

 
    }
echo "Payment Success";
}

}
?>
