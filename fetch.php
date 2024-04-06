<?php
include 'connection.php';


// Check if the connection was successful
if ($connect->connect_error) {
    die("Connection failed: " . $connect->connect_error);
}


// Delete record if delete button is clicked
if (isset($_GET['delete'])) {
    $deleteId = $_GET['delete'];
    $deleteQuery = "DELETE FROM user_info WHERE id = $deleteId";
    if ($connect->query($deleteQuery) === TRUE) {
        echo "<script>alert('Record deleted successfully!');</script>";
    } else {
        echo "<script>alert('Error deleting record: " . $connect->error . "');</script>";
    }
}


$query = 'SELECT * FROM user_info';
$results = mysqli_query($connect, $query);


// Check if the query execution was successful
if ($results === false) {
    echo "Error executing the query: " . mysqli_error($connect);
    exit;
}
?>


<!DOCTYPE html>
<html>
<head>
    <title>Fetched Data from the Database 📊</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.0.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <h1>Fetched Data From "<?php echo $dbname; ?>" 🎓</h1>
        <?php if (mysqli_num_rows($results) > 0) : ?>
            <table class="table table-dark table-striped">
                <thead>
                    <tr>
                        <th>NO</th>
                        <th>Firstname</th>
                        <th>Lastname</th>
                        <th>Email</th>
                        <th>Gender</th>
                        <th>Course</th>
                        <th>Description</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php while ($row = mysqli_fetch_assoc($results)) : ?>
                        <tr>
                            <td><?php echo $row['id']; ?></td>
                            <td><?php echo $row['first_name']; ?></td>
                            <td><?php echo $row['last_name']; ?></td>
                            <td><?php echo $row['email']; ?></td>
                            <td><?php echo $row['gender']; ?></td>
                            <td><?php echo $row['course']; ?></td>
                            <td><?php echo $row['description']; ?></td>
                            <td>
                                <a href="fetch.php?delete=<?php echo $row['id']; ?>" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure you want to delete this record?')">Delete 🗑️</a>
                            </td>
                        </tr>
                    <?php endwhile; ?>
                </tbody>
            </table>
        <?php else : ?>
            <p>No data found. 😕</p>
        <?php endif; ?>
        <div class="text-center mt-3">
            <a href="index.php" class="btn btn-primary">Back to Form 🔙</a>
        </div>
    </div>


    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.0.2/js/bootstrap.bundle.min.js"></script>
</body>
</html>