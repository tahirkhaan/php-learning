<!DOCTYPE html>
<html>
<head>
    <title></title>
</head>
<body>
    <form action="insert.php" method="post">
        <table width="500px" border="5" align="center">
            <tr>
                <td bgcolor="yellow" colspan="3" align="center">
                   <h1>Students Registration</h1></td>
               </tr>

               <tr>
                   <td>Student Name</td>
                   <td>
                       <input type="text" name="name">
                   </td>
               </tr>

               <tr>
                   <td>Father name</td>
                   <td>
                     <input type="text" name="fname">
                 </td>
             </tr>

             <tr>
                <td>School Name</td>
                <td>
                    <input type="text" name="school">
                </td>
            </tr>

            <tr>
                <td>Roll No</td>
                <td>
                    <input type="text" name="roll">
                </td>
            </tr>

            <tr>
                <td>Result</td>
                <td>
                    <input type="text" name="result">
                </td>
            </tr>

            <tr>
                <td colspan="3" align="center">
                    <input type="submit" name="submit" value="Submit Now">
                </td>
            </tr>
        </table>
    </body>
    </html>
</form>
</table>
<?php
$host='localhost';
$user='root';
$pass='';
$db='school';

$con= new mysqli($host,$user,$pass,$db);

if(!$con){
  die("connection failed:" .mysqli_connect_error());
}

if(isset($_POST['submit'])) {
   $name = $_POST['name'];
   $fname = $_POST['fname'];
   $school = $_POST['school'];
   $rollnumber = $_POST['roll'];
   $result = $_POST['result'];

   $query = "insert into students(student_name,father_name,school_name,roll_num,result) values('$name','$fname',
   '$school','$rollnumber','$result')";

   if(mysqli_query($con,$query)){
      echo "Data successfully inserted";
  }
  else
  {
   echo "Error: " . $query . "<br>" . mysqli_error($con);
}
}
mysqli_close($con);
?>
