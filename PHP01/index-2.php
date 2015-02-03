<!DOCTYPE HTML>
<html>
<head>
	<meta http-equiv="content-type" content="text/html" />
	

	<title>Input Example</title>
</head>

<body>
    <form action="index-2.php" method="post">   
        x:<input type="text" name="x" /> <br />
        y:<input type="text" name="y" /> <br />
        z:<input type="text" name="z" /> <br />
        <input type="submit" />
    </form> 
<?php
    //echo "</br><pre>" ;print_r( $_POST ) ;echo "</pre></br>" ; die();
    if($_POST != null){
        $x = $_POST["x"];
        $y = $_POST["y"];
        $z = $_POST["z"];
        
                
        echo "x:" . $x . "<br>"; 
        echo "y:" . $y . "<br>";
        echo "z:" . $z . "<br>";
        
        
                
        if($x >= $y && $x >= $z){
            echo "x is bigger.". "<br>";
        } else if($y >= $x && $y >= $z) {
            echo "y is bigger.". "<br>";
        } else {
            echo "z is bigger.";
        }
    }
?>


</body>
</html>

