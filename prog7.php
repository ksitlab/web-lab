<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Server Time and Local Time</title>
    <script>
    function startTime(){
    var d=new Date();
    var h=d.getHours();
    var m=d.getMinutes();
    var s=d.getSeconds();
    document.getElementById("txt").innerHTML=h+" : "+m+" : "+s;
    setTimeout('startTime()',1000);
    }
</script>
<style>
h1, #txt{
    font-size: 70px;
}
</style>
</head>
<body style="background-color: black;color:white" onload="startTime()">
    <h1>The time from the system is</h1>
    <span id="txt"></span>
</body>
</html>
<br>
<br>
<br>

<?php
$today=date("H:i:s");
?>

<!DOCTYPE html>
<html>
<body>
    <h1>
    <?php echo 'Server Time is: '.date("h:i:sa");?>
    </h1>
</body>
</html>