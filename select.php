<?php 

$sql = "SELECT * FROM classes";
$result = mysqli_query($conn, $sql);

?>

<h1>All Classes</h1>

<ul>
<?php while($class = mysqli_fetch_assoc($result)): ?>
<li>
    <?php echo $class['name']; ?>
    <a href="edit.php">Edit</a> |
    <a href="delete.php">Delete</a>
</li>
<?php endwhile; ?>
</ul>