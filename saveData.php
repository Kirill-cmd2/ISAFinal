<?php

include "connection.php";

$city=$_GET["city"];
$temp=$_GET["temp"];
$weatherType=$_GET["weather-icon"];

$fetch_query="SELECT * FROM weather WHERE city='{$city}'";
$result=mysqli_query($con. $fetch_query);

if(mysqli_num_rows($result)==0)
{
    $insert_query="INSERT INTO weather(`city`, `temp`, `weatherType`) VALUES('{$city}', '{$temp}', '$weatherType')";
}
else
{
    $update_query="UPDATE weather SET
                    temp='{$temp}'
                    weatherType='{$weatherType}'
                    WHERE
                    city='{$city}'";

    mysqli_query($con, $update_query);
}

function display($city)
{
    include "connection.php";
    
    $fetch_query="SELECT * FROM weather WHERE city='{$city}'";
    $res=mysqli_query($con, $fetch_query);
    $row=mysqli_fetch_array($res);
}

display($_GET["city"])

?>