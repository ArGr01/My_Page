<?php


 require 'functions.php';

   if(isset($_POST['submit'])){

       if(req($_POST['name'])){

       $con = mysql_connect('localhost','root','usbw') OR die("can't connect to mysql");
       
       mysql_select_db("sell",$con);
       
       $name=$_POST['name'] ;  //

       $price=$_POST['price']; //
      	
       if(is_numeric($price) && intval($price) > 0) {

       	   $query =mysql_query("INSERT INTO selllist (name,price) VALUES ('$name','$price')");

           header("Location: account.php?chk=3");

        }
       }
   }
?>