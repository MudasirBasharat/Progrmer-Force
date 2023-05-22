<?php
//this is for checking the divisible number on 3.
$lis=array(0,3,6,9,12);
$count=0;
foreach($lis as $la){
if($la%3==0){
$count++;}

}

//This is for calculating that how many number can divide on the  3.
$lis=array(6,5,10,9,2,300);
$count=0;
  foreach($lis as $la){
    if($la%3==0){
      $count++;
    }
 }
    echo "Total elements who'S divisable on 3 :$count";
    //This is the for checking the value of 300 is exist or not.
    if($la>=300){
        echo ("<br>"."Total elements who'S equal or greater than 300 : 0");
    }

?>