<?php
$conn = new mysqli("g8r9w9tmspbwmsyo.cbetxkdyhwsb.us-east-1.rds.amazonaws.com:3306","bupdy87dvohbr4iw","gtkjmuz9kqpdnzxg","ovlz54dtty1jll9i");//create connection
extract($_POST);//imports post variables
if(isset($save))//it checks whether we clicked the submit button or not
{
$sql = "SELECT name,roll,branch,dob,email FROM studentdetails WHERE email = '$email'"; //selects the specified columns where emial = entered email
$result = $conn->query($sql);

if ($result->num_rows > 0) { //if the entered email exists.
  // admit card of student.--
echo  "<table border='1'>

<tr>

<th>Id</th>

<th>name</th>

<th>branch</th>

<th>dob</th>

<th>
email
</th>

</tr>";
  while($row = $result->fetch_assoc()) { //fetches all rows in result variable.
  //  echo " Name: " . $row["name"]. "<br> " ."Roll no:". $row["roll"]. "<br>"."Branch:".$row["branch"]."<br />";
        {

        echo "<tr>";

        echo "<td>" . $row['name'] . "</td>";

        echo "<td>" . $row['roll'] . "</td>";

        echo "<td>" . $row['branch'] . "</td>";

        echo "<td>" . $row['dob'] . "</td>";

        echo "<td>".$row['email']."</td>";
        echo "</tr>";

        }

      echo "</table>";
        }
} else {
  echo "0 results"; // if the entered email  doesn't exists.
}
}
$conn->close();
?>

<!DOCTYPE html>
<html>
<body>
</body>
</html>
