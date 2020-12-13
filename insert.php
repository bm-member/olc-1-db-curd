<?php 

require_once 'db.php';

if($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = $_POST['class_name'] ?? '';
    if($name) {
        $sql = "INSERT INTO classes (name) VALUES ('$name')";
        $result = mysqli_query($conn, $sql);
        if($result) {
            header('location: index.php');
            die();
        } else {
            echo "DB inserting fail";
        }
    } else {
        echo "Class name is required.";
    }
}
?>

<form method="post">
    <label>Class Name</label>
    <input type="text" name="class_name">
    <button type="submit">Create</button>
</form>