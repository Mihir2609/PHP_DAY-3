<html>
<body>
<form action="" method="post">
   <center>
      <table border=0>
      <tr>
          <td>
                Student Name
          </td>
          <td>
                <input type=text name="t1">
           </td>
       </tr>

       <tr>
           <td>
                Marks for PYTHON
           </td>
            <td>
                <input type=text name="t2">
           </td>
                
       </tr>

       <tr>
           <td>
                Marks for JAVA
           </td>
            <td>
                <input type=text name="t3">
           </td>
       </tr>

       <tr>
           <td>
                Marks for PHP
           </td>
            <td>
                <input type=text name="t4">
           </td>
       </tr>

       <tr>
           <td>
                Marks for CYBER SECURITY
           </td>
            <td>
                <input type=text name="t5">
           </td>
       </tr>
</table>
<br>
<br>
<input type=submit name="S" value="Result">
     </center>

<?php
     
    if(isset($_POST['S']))
{ 
   $a=$_POST['t1'];

    $a=$_POST['t2'];

     $a=$_POST['t3'];

      $a=$_POST['t4'];
   
      $a=$_POST['t5'];

$sum=$a1+$a2+$a3+$a4

$avg=$sum/3;
if($avg>=0&&$avg<=50)
    $grade="fail";
if($avg>50&&$avg<=70)
    $grade="C";
if($avg>70&&$avg<=80)
    $grade="B";
if($avg>80&&$avg<=90)
    $grade="A";
if($avg>90)
    $grade="E";
echo "<br>";
echo "<font size=4><center>Student is:-".$a."</center><br>";
echo "<font size=4><center>total marks is:-".$sum."</center><br>";
echo "<font size=4><center>grade is:-".$grade."</center>";

}
  ?>
</form>
</body>
</html>