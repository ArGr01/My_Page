<?php

if (ob_get_level() == 0) ob_start();

for ($i = 1; $i<4; $i++){

        echo "<br> $i";
        echo str_pad('',4096)."\n";    

        ob_flush();
        flush();
        sleep(2);
}

echo "<br>Done hajoxutyamb grancveciq .";

ob_end_flush(); 
?>

<html lang="en">
<head>

<title></title>

<style type="text/css">

</style>

</head>

<body>

</body>
</html>

