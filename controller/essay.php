<<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
</head>
<body>
    <table>
    <tr>
    <th>number</th><th>documents</th><th>action</th>
    </tr>
    <?php
mysql_connect("localhost","root","") or die(mysql_error());
mysql_select_db("kwiyandikisha") or die(mysql_error());
$sqr=mysql_query("select * from registration");
$id=1;
while($row = mysql_fetch_array($sqr)){
    $studentsFile=$row['studentsFiles'];
    echo "<tr>";
    echo "<td>".$id++."</td>";
    echo "<td>".$row['studentsFiles']."</td>";
    echo "<td> "."<a href ='download.php?filename=".$studentsFile."'>download</a>"."</td>";
    echo "</tr>";


}


?>
    
    </table>
</body>
</html>

