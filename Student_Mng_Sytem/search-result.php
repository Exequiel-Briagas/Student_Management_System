<?php 
// Database connection file
include_once 'database.php';

// Start the session if it hasn't been started
if (!isset($_SESSION)) {
    session_start(); 
}

// Retrieve the search term from the GET request and query the database
$search = $_GET['search'];
$sql = "SELECT * FROM students_list WHERE first_name LIKE '%$search%' || surname LIKE '%$search%' ORDER BY id DESC";
$students = $con->query($sql) or die ($con->error);
$row = $students->fetch_assoc();

// If no results are found, alert the user and redirect back to the index page
if (!$row) {
    echo "<script>
            alert('No user found with the inputted name.');
            window.location.href = 'index.php';
          </script>";
    exit();
}
?>


<html lang="en">
<head>
    <!-- Meta tags and external css stylesheets -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="font/bootstrap-icons.css">
    <link rel="icon" type="image" href="images/favicon.jpg">
    <link rel="stylesheet" href="css/details.css">
    <title>Student Management System</title>
</head>
<body>
    <div class="container">
        <!-- Navigation bar -->
        <nav>
            <ul>
                <li>
                    <a class="logo">
                        <img src="images/profile.png">
                        <span class="nav-item">
                            <?php echo ($_SESSION['Access'] === 'admin') ? 'Admin' : 'Guest'; ?>
                        </span>
                    </a>
                </li>
                <?php if ($_SESSION['Access'] === 'admin') { ?>
                    <li><a href="add.php"><i class="bi bi-person-fill-add"></i><span class="nav-item">Add</span></a></li>
                <?php } ?>
                <li>
                    <a href="logout.php"><i class="bi bi-box-arrow-right"></i><span class="nav-item">Logout</span></a>
                    <a href="index.php"><i class="bi bi-arrow-left-circle-fill"></i><span class="nav-item">Back</span></a>
                </li>
            </ul>
        </nav>

        <!-- Main section -->
        <section class="main">
            <div class="main-top">
                <h1>Student Management System</h1>
                <form action="search-result.php" method="get">
                    <input type="text" id="search" name="search" placeholder="Type here...">
                    <button type="submit">Search</button>
                </form>
            </div>

             <!-- Table displaying students -->
            <table class="table">
                <thead>
                    <tr>
                        <th>First Name</th>
                        <th>Last Name</th>
                        <th>         </th>
                    </tr>
                </thead>
                <tbody>
                    <?php do { ?>
                        <tr>
                            <td><?php echo $row['first_name']; ?></td>
                            <td><?php echo $row['surname']; ?></td>
                            <?php if ($_SESSION['Access'] == 'admin') { ?>
                                <!-- Button for admins to view details -->
                                <td>
                                    <a href="details.php?ID=<?php echo $row['id']; ?>"><button>View</button></a>
                                </td>
                            <?php } else { ?>
                             <!-- Guests are restricted from viewing details -->
                                <td><button onclick="guestWarning()">View</button></td>
                            <?php } ?>
                        </tr>
                    <?php } while ($row = $students->fetch_assoc()); ?>
                </tbody>
            </table>
        </section>
    </div>

    <!-- Warn guests about restricted access -->
    <script>
        function guestWarning() {
            alert("Access denied. Only admins can view user details.");
        }
    </script>
</body>
</html>

