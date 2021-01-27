<?php
if (isset($_POST["sub"])){
    $num1=(int)$_POST["n1"];
    $num2=(int)$_POST["n2"];
    $op=$_POST["sub"];
    if($op=='+')
        $res=$num1+$num2;
    if($op=='-')
        $res=$num1-$num2;
    if($op=='*')
        $res=$num1*$num2;
    if($op=='/')
        $res=$num1/$num2;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculator</title>
</head>
<body>
    <form method="post" action="">
        <label>Enter number 1: </label>
        <input name="n1" id="n1" value="<?php echo $num1;?>"><br><br>
        <label>Enter number 2: </label>
        <input name="n2" id="n2" value="<?php echo $num2;?>"><br><br>
        <label>Result: </label>
        <input name="res" id="res" value="<?php echo $res;?>"><br><br>
        <input type="submit" name="sub" value="+">
        <input type="submit" name="sub" value="-">
        <input type="submit" name="sub" value="*">
        <input type="submit" name="sub" value="/">
    </form>
</body>
</html>
