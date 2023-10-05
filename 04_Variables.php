<html>
<head>
 <?php
<title>Variables</title>
<body>
    // Integers
        $int_var = 12345;
        $another_int = -12345 + 12345;

    // Doubles
        $many = 2.2888800;
        $many_2 = 2.2111200;
        $few = $many + $many_2;
        print(.$many + $many_2 = $few<br>.);

    // Boolean
        $many = 2.2888800;
        $many_2 = 2.2111200;
        $few = $many + $many_2;
        print(.$many + $many_2 = $few<br>.);
        $true_num = 3 + 0.14159;
        $true_str = "Tried and true"
        $true_array[49] = "An array element";
        $false_array = array();
        $false_null = NULL;
        $false_num = 999 - 999;
        $false_str = "";

    //Null
        $my_var = NULL;

    //Strings
    $variable = "name";
    $literally = 'My $variable will not print!\\n';
    print($literally);
    $literally = "My $variable will print!\\n";
    print($literally);

    //Local Variables
        $x = 4;
        function assignx () {
        PHP
        33
        $x = 0;
        print "\$x inside function is $x.";
        }
        assignx();
        print "\$x outside of function is $x.";

    //PHP Function Parameters
        // multiply a value by 10 and return it to the caller
            function multiply ($value) {
            $value = $value * 10;
            return $value;
            }
            $retval = multiply (10);
            Print "Return value is $retval\n";
    
    //PHP GLobal Variables
        $somevar = 15;
        function addit() {
        GLOBAL $somevar;
        $somevar++;
        print "Somevar is $somevar";
        }
        addit();
   
    //PHP Static Variables
        function keep_track() {
        STATIC $count = 0;
        $count++;
        print $count;
        print "
        ";
        PHP
        35
        }
        keep_track();
        keep_track();
        keep_track();
       
 ?>
</body>
</html