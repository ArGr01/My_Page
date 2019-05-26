<?php
 
  require 'functions.php' ;

?>



<!Doctype html>
<html>
<head>
  <meta charset="UTF-8">
  <style type="text/css">

    table,td {
      margin-top: 10%;
      margin-left: 10%;
      border: 1px solid #888; 
      border-collapse: collapse;
      padding: 15px;
      background-color: white;
      color: black;  
    }
    table{
      margin-left: 3%;
      margin-top: 7%;
    }
    form{
      margin-top: 3%;
      margin-left: 3%;
    }
    input{
      font-size: 16px;
      padding: 10px;
    }
    p{
      color: white;
      font-size: 20px;
      margin-left: 3%;
    }
  </style>
</head>
<body>
  <p>Enter the name and price to add the data to the SQL database table</p>
  <form action="sell.php" method="POST">
		<input type="text" name="name" placeholder="your name"> 
		<input type="text" name="price" placeholder="your mark(only numbers)">
		<input type="submit" name="submit" value="Sell" style="color:red">
  </form>
  <table border="1">
     <tr>
  		<td>ID</td>
  		<td>your name</td>
  		<td>your mark</td>
     </tr>

     <?php 
    
     echo getInfo();

     ?>
  </table>
</body>
</html>