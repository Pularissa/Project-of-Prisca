<?php
$name = $grade = $email = $phone = $gender = $club = $dob = $color = $volume ="";
if($_SERVER["REQUEST_METHOD"]=="POST"){
    $name=$_POST['names'];
    $grade=$_POST['class'];
    $email=$_POST['email'];
    $phone=$_POST['some'];
    $gender=$_POST['gender'];
    $club=$_POST['club'];
    $dob=$_POST['dob'];
    $color=$_POST['colour'];
    $volume=$_POST['volume'];
}
 ?>
 <!doctype html>
<html>
<body>
<b><p> the student's information </p></b>
<table border="1">
    <tr>
    <th>Names</th>
    <th>Grades</th>
    <th>Email</th>
    <th>Phone number</th>
    <th>Gender</th>
    <th>Club</th>
    <th>Date of birth</th>
    <th>fav color</th>
    <th>rate</th>
</tr>
    <tr><td><?php echo $name; ?></td>
    <td><?php echo $grade; ?></td>
    <td><?php echo $email; ?></td>
    <td><?php echo $phone; ?></td>
    <td><?php echo $gender; ?></td>
    <td><?php echo $club; ?></td>
    <td><?php echo $dob; ?></td>
    <td><?php echo $color; ?></td>
    <td><?php echo $volume; ?></td>
</tr>
</table>
</body>
</html>