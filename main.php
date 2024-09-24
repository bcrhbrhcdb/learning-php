<!DOCTYPE html>
<html>
<head>
    <title>My first PHP script</title>
</head>
<body>
    Agent: So who do you think you are, anyhow?<br>
</body>
</html>

<?php
    // example of assigning variable
    
    $name = 'Neo';
    
    $rank = 'Anomaly';
    
    $serialNumber = 1;
    
    echo "Neo: I am <strong>$name</strong>, the <strong>$rank</strong>. You can call me by my serial number, <strong>$serialNumber</strong>.";
    
    // assigning a value to a variable
    
    $dob = 2;
    
    $age = 8;
    
    $age = $dob + 15;
    
    //you can also assign three at the same time!
    
    $angle1 = $angle2 = $angle3 = 60;
    
    //types
    
    //boolean
    $goofyAh = true;
    //integer
    $age = 21;
    //floating-point (frational number)
    $temperature = 21.5;
    //strings
    $identity = 'James Bond';
    
    $car = 'BMW';
    
    // This would contain the string "James Bond drives a BMW"
    $sentence = "$identity drives a $car";
    
    echo $sentence;
    // This would contain, literally, "$identity drives a $car"
    $sentence = '$identity drives a $car';
    echo $sentence;
    //single quotes will print the text itself.
?>
<br>
<?php
//set quanitity

$quantity = 1000;

//set orginial and current unit price

$origPrice = 100;
$currPrice = 25;

//calculate the difference in price

$diffPrice = $currPrice - $origPrice;
//calculate percentage change in price
$diffPricePercent = (($currPrice - $origPrice)*100)/$origPrice
?>
<!-- HTML -->
Quantity: <?php echo $quantity; ?><br>
Cost Price: <?php echo $origPrice; ?><br>
Current Price: <?php echo $currPrice; ?><br>
Absolute change in price: <?php echo $diffPrice; ?><br>
Percent change in price: <?php echo $diffPricePercent; ?><br>







