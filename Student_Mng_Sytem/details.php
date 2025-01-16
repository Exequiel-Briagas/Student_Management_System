<?php 
// Include the database connection file
include_once 'database.php';

if (!isset($_SESSION)) {
    session_start(); 
}

// Get the ID from the GET request to fetch the specific student's details
$id = $_GET['ID'];

// SQL query to fetch the student's details based on the ID
$sql = "SELECT * FROM students_list WHERE id = '$id'";
$students = $con->query($sql) or die ($con->error); // Execute query or display error if it fails
$row = $students->fetch_assoc(); // Fetch the student record
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="font/bootstrap-icons.css">
    <link rel="icon" type="image" href="images/favicon.png">
    <link rel="stylesheet" href="css/details.css">
    <title>Student Management System</title>
</head>
<body>
    <div class="container">
        <!-- Navigation menu -->
        <nav>
            <ul>
                <li>
                    <a class="logo">
                        <img src="<?php echo ($_SESSION['Access'] == 'admin') ? 'images/admin.png' : 'images/guest.png'; ?>" alt="Profile Image">
                        <span class="nav-item">
                            <?php echo ($_SESSION['Access'] == 'admin') ? 'Admin' : 'Guest'; ?>
                        </span>
                    </a>
                </li>

                <!-- Show the update option only for admin users -->
                <?php if ($_SESSION['Access'] === 'admin') { ?>
                    <li>
                        <a href="update-details.php?ID=<?php echo $row['id']; ?>">
                            <i class="bi bi-person-fill-add"></i><span class="nav-item">Update</span>
                        </a>
                    </li>
                <?php } ?>

                <!-- Logout and Back buttons -->
                <li>
                    <a href="logout.php">
                        <i class="bi bi-box-arrow-right"></i><span class="nav-item">Logout</span>
                    </a>
                    <a href="index.php">
                        <i class="bi bi-arrow-left-circle-fill"></i><span class="nav-item">Back</span>
                    </a>
                </li>
            </ul>
        </nav>
        
        <!-- Main section for student details -->
        <main class="table" id="student_table">
            <!-- Table Header -->
            <section class="table__header">
                <h2><?php echo $row['first_name']; ?> <?php echo $row['surname']; ?></h2> 

                <!-- Form for deleting the student record -->
                <form action="delete-student.php" method="post" class="nav-delete-form">
                    <input type="hidden" name="ID" value="<?php echo $row['id']; ?>">
                    <button type="submit" class="delete" onclick="return confirmDelete();">Delete</button>
                </form>
                <script>
                function confirmDelete() {
                    // Show a confirmation dialog before submitting the form
                    const confirmation = confirm("Are you sure you want to delete this record? This action cannot be undone.");
                    if (confirmation) {
                        alert("The record has been deleted successfully.");
                        return true;  // Proceed with the form submission
                    } else {
                        alert("The record was not deleted.");
                        return false; // Prevent form submission
                    }
                }
            </script>
                            
            </section>

            <!-- Table Body -->
            <section class="table__body">
                <table>
                    <thead>
                        <tr>
                            <th>First Name</th>
                            <th>Middle Name</th>
                            <th>Last Name</th>
                            <th>Birthday</th>
                            <th>Age</th>
                            <th>Gender</th>
                            <th>Address</th>
                            <th>Contact No.</th>
                            <th>Email</th>
                            <th>Civil Status</th>
                            <th>Nationality</th>
                            <th>Religion</th>
                            <th>Course</th>
                            <th>Date Added</th>
                        </tr>
                    </thead>
                    <tbody>
                        <!-- Loop through the records and display each student's details -->
                        <?php do { ?>
                            <tr>
                                <td><?php echo $row['first_name']; ?></td>
                                <td><?php echo $row['middlename']; ?></td>
                                <td><?php echo $row['surname']; ?></td>
                                <td><?php echo $row['birthdate']; ?></td>
                                <td><?php echo $row['age']; ?></td>
                                <td><?php echo $row['sex']; ?></td>
                                <td><?php echo $row['address']; ?></td>
                                <td><?php echo $row['contact_no']; ?></td>
                                <td><?php echo $row['email']; ?></td>
                                <td><?php echo $row['civil_status']; ?></td>
                                <td><?php echo $row['nationality']; ?></td>
                                <td><?php echo $row['religion']; ?></td>
                                <td><?php echo $row['course']; ?></td>
                                <td><?php echo $row['date_added']; ?></td>
                            </tr>
                        <?php } while ($row = $students->fetch_assoc()); ?>
                    </tbody>
                </table>
            </section>
        </main>
    </div>
</body>
</html>
