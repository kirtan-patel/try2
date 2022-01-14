<?php
require('config.php');
if (isset($_POST['submit_now'])) {
    $name = $_POST['name'];
    $phone = $_POST['phone'];
    $gender = $_POST['gender'];
    $dob = $_POST['dob'];
    $age = $_POST['age'];

    $query = "INSERT INTO `reg`( `Name`, `Number`, `Gender`, `D.O.B`, `Age`) VALUES ('$name','$phone','$gender','$dob','$age')";
    mysqli_query($con, $query);
?>
    <script>
        alert("Submitted");
    </script>
<?php
}
?>