<?php
include 'db.php';
$result = $conn->query("SELECT * FROM users");
?>

<!DOCTYPE html>
<html>
<head>
    <title>Users</title>
</head>
<body>
<h3>User List</h3>
<table border="1">
<tr>
    <th>Name</th>
    <th>Department</th>
    <th>Roll No</th>
    <th>Phone</th>
</tr>

<?php while($row = $result->fetch_assoc()) { ?>
<tr>
    <td><?php echo $row['full_name']; ?></td>
    <td><?php echo $row['department']; ?></td>
    <td><?php echo $row['roll_no']; ?></td>
    <td><?php echo $row['phone']; ?></td>
</tr>
<?php } ?>

</table>
</body>
</html>
