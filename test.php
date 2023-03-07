<?php 
require_once('./connection.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Insert</title>
</head>
<body>

<form method="post">

<table>

<tr>
    <td>Name</td>
    <td> <input type="text" name='u_name' > </td>
</tr>

<tr>
    <td>Age</td>
    <td> <input type="text" name='u_age' > </td>
</tr>

<tr>
    <td>Mobile Number</td>
    <td> <input type="text" name='u_mobile' > </td>
</tr>

<tr>
    <td></td>
    <td  >
        <input type="reset" value="Cancel" />
        <input type="submit" name="submit_btn" value="Submit" />
    </td>
</tr>

</table>

</form>

<?php
if(isset($_POST['submit_btn'])) {
    // get form data 
    $name = $_POST['u_name'];
    $age = $_POST['u_age'];
    $mobile = $_POST['u_mobile'];

    $sql = "insert into user(name, age, mobile) values ('$name', '$age', '$mobile')";

    if(mysqli_query($conn, $sql)) {
        echo 'Data Inserted!';
    }
    else {
        echo 'Unable insert data. Error: ' + mysqli_error($conn);
    }
    mysqli_close($conn);
}
?>
    
</body>
</html>