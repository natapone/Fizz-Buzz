<?php
    
    if(!empty($_GET["input"])) {
        # init
        $fizz_int = 3;
        $buzz_int = 5;
        
        # find Greatest common divisor
        $gcd = $fizz_int * $buzz_int;
        
        # set of operations
        $operations = array(
                $gcd        => 'Fizz-Buzz',
                $buzz_int   => 'Buzz',
                $fizz_int   => 'Fizz',
        );
        
        #get input
        $input = $_GET["input"];
        
        # calculate
        foreach ($operations as $operation => $ans_str) {
            if($input%$operation == 0) {
                $ans = $ans_str;
                break;
            }
        }
    }
?>
<html>
<head>
    <title>Fizz Buzz</title>
</head>
<body>
    <?php if(!empty($ans)) : ?>
    The answer of <?php echo $input; ?> is '<?php echo $ans; ?>'<br />
    <?php elseif (!empty($input)): ?>
    Can't devide <?php echo $input; ?>
    <?php endif; ?>
    <form action="fizz_buzz.php" method="get">
        input: <input type="text" name="input" />
        <input type="submit" value="calculate" />
    </form>
</body>
</html>
