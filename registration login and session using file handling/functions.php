<?php 

function  req($index){


   if (isset($index) && !empty ($index)){

	   return true ;
   }
       
  return false;

}


function getInfo(){
    
    $con = mysql_connect('localhost','root','usbw') OR die("can't connect to mysql");
       
    mysql_select_db("sell",$con);
    
    $list = '';

   $query = mysql_query("SELECT * FROM selllist");
 
    
  while ($info = mysql_fetch_array($query) ){
    
    $list .= '<tr><td>' .$info['id'].'</td><td>'.$info['name'].'</td><td>'.$info['price'].'</td></tr>';

    }

    return $list ;     


  mysql_close();

}

?>