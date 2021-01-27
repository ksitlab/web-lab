<html>
  <head>
    <title>KSIT Student Database</title>
  </head>
  <style>
body{
  background-color: black;
  font-family: monospace;
  font-size: 10px;
  font-weight: 10px;
}
table{
  width:100%;
  border: 3px solid black;
  text-align: center;
  padding: 15px;
  margin:5px;
  color: white;
  font-size: 15px;
}
caption{
 color:white;
}
th{
  background-color: #4CAF50;
  padding: 15px;
}
td{
  padding: 15px;
}
button{
  padding: 5px;
  border: 3px solid white;
  background-color: palevioletred;
}
</style>
  <body>
  <a href="student.html"><button>Back</button></a>
<?php
require 'pdo.php';
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
      $name = $_POST["name"];
      $usn = $_POST["usn"];
      $cgpa =$_POST["cgpa"];
      try {
        $sql = "INSERT INTO student(usn,name,cgpa) VALUES ('$usn','$name','$cgpa')";
        $conn->exec($sql);
        print"<script>alert('New Record Inserted')</script>";
        $result=$conn->prepare("select * from student");
        $result->execute();
        }
        catch(PDOException $e) {
          echo $e->getMessage();
        }
      }
      $conn=null;
      function display($x)
      {
        print "<table><h1>KSIT Student Database</h1><tr><th>USN</th><th>NAME</th><th>CGPA</th></tr>";
      foreach($x as $s)
      {
        print"<tr>";
        foreach($s as $k=>$v)
        {
          print "<td>".$v."</td>";
        }
        print"</tr>";
      }
      print"</table>";
      }
      function swap($y,$m,$n)
      {
        $temp=$y[$m];
        $y[$m]=$y[$n];
        $y[$n]=$temp;
      return $y;
      }
      function selectionsort($x,$y)
      {
        for($i=0;$i<count($x)-1;$i++)
        {
          $minj=$i;
          for($j=($i+1);$j<count($x);$j++)
          {
              if(($x[$j][$y]<$x[$minj][$y])){
                  $minj=$j;
              }
          }
          if($minj!=$i)
          {
            $x=swap($x,$i,$minj);
          }
        }
          return $x;
      }
      $students=$result->fetchAll(PDO::FETCH_ASSOC);
      print "<table><caption><h1>Student Records:</h1><caption><tr><td>";
      display($students," Original");
      print"</td>";
      $students=selectionsort($students,'cgpa');
      print"<td>";
      display($students);
      print"</td>";
      print"</td></tr></table>";  
?>
  </body>
</html>