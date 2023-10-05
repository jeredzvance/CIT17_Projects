<html>
<head>
<title>Hello World</title>
<body>
 <?php 
    define("MINSIZE", 50);
    echo MINSIZE;
    echo constant("MINSIZE"); // same thing as the previous line
 ?>
</body>
</html