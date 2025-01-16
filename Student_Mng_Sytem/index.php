<?php
// Start the session if it hasn't been started
session_start();

// Redirect to login page if the user is not logged in
if (!isset($_SESSION['UserLogin'])) {
    header("Location: login.php");
    exit;
}

// Database connection file
include_once 'database.php';

// Retrieve the search term from the GET request (if it exists)
$search = isset($_GET['search']) ? $_GET['search'] : '';

// Define the SQL query
if ($search) {
    // Perform search in both 'first_name' and 'surname' columns
    $sql = "SELECT * FROM students_list WHERE first_name LIKE '%$search%' OR surname LIKE '%$search%' ORDER BY id DESC";
} else {
    // Default query when no search term is entered
    $sql = "SELECT * FROM students_list ORDER BY id DESC";
}

$students = $con->query($sql) or die($con->error);
$row = $students->fetch_assoc();
?>

<html lang="en">
<head>
    <!-- Meta tags and css external stylesheets -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="font/bootstrap-icons.css">
    <link rel="icon" type="image" href="images/favicon.png">
    <link rel="stylesheet" href="css/design.css">
    <title>Student Management System</title>
</head>
<body>
<div class="container">
    <!-- Sidebar Navigation -->
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
            <?php if ($_SESSION['Access'] == 'admin') { ?>
                <li><a href="add-student.php"><i class="bi bi-person-fill-add"></i><span class="nav-item">Add</span></a></li>
            <?php } ?>
            <li><a href="logout.php"><i class="bi bi-box-arrow-right"></i><span class="nav-item">Logout</span></a></li>
        </ul>
    </nav>

    <!-- Main Section -->
    <main class="table" id="student_table">
      <section class="table__header">
            <h1>Student Management System</h1>
                <div class="search-container">
        <!-- Search form -->
        <form action="index.php" method="get">
            <div class="search-bar">
                <input type="text" id="search" name="search" placeholder="Search..." value="<?php echo htmlspecialchars($search); ?>">
                <button type="submit" class="search-btn">
                    <img src="images/search.png" alt="Search" class="search-icon">
                </button>
            </div>
        </form>
    </div>
</section>

        <!-- Table displaying students -->
        <section class="table__body">
            <table>
                <thead>
                    <tr>
                        <th>First Name</th>
                        <th>Last Name</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php if ($students->num_rows > 0) { ?>
                        <?php do { ?>
                            <tr>
                                <td><?php echo $row['first_name']; ?></td>
                                <td><?php echo $row['surname']; ?></td>
                                <?php if ($_SESSION['Access'] == 'admin') { ?>
                                    <td><a href="details.php?ID=<?php echo $row['id']; ?>"><button>View</button></a></td>
                                <?php } else { ?>
                                    <td><button onclick="guestWarning()">View</button></td>
                                <?php } ?>
                            </tr>
                        <?php } while ($row = $students->fetch_assoc()); ?>
                    <?php } else { ?>
                        <tr>
                            <td colspan="3">No results found.</td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </section>
    </main>
</div>

<script>
    // Warn guests about restricted access
    function guestWarning() {
        alert("Access denied. Only admins can view user details.");
    }
</script>
</body>
</html>
