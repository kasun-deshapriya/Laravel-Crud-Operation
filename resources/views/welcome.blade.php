<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>hello laraval</h1>
    
    

    <?php 
echo "<table>";
echo "<tr>";
echo "<th>","Sequence/Number","</th>"; 
echo "<th>","Triangular Number","</th>";
echo "</tr>";
for ($i=1;$i<11;$i++) 
{
$j=$i*($i+1)/2; 
echo "<tr>";
echo "<td>",$i,"</td>"; 
echo "<td>",$j,"</td>"; 
echo "</tr>";
}

echo "</table>";
?>
</body>
</html>