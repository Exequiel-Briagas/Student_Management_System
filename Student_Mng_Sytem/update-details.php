<?php 
//Database connection file
include_once 'database.php';  

// Get the ID from the GET request to fetch the specific student's details
$id = $_GET['ID'];

// SQL query to fetch the student details based on the ID
$sql = "SELECT * FROM students_list WHERE id = '$id'";
$students = $con->query($sql) or die($con->error); 
$row = $students->fetch_assoc(); // Fetch the student record

// Check if the form has been submitted
if (isset($_POST['submit'])) {
    // Retrieve form data from the POST request
    $fname = $_POST['firstname'];
    $mname = $_POST['middlename'];
    $lname = $_POST['lastname'];
    $gender = $_POST['gender'];
    $bday = $_POST['bday'];
    $age = $_POST['age'];
    $address = $_POST['address'];
    $contact = $_POST['contact'];
    $email = $_POST['email'];
    $cstatus = $_POST['cstatus'];
    $nationality = $_POST['nationality']; 
    $religion = $_POST['religion'];
    $course = $_POST['course'];

    // SQL query to update the student's details in the database
    $sql = "UPDATE students_list 
            SET first_name = '$fname', middlename = '$mname', surname = '$lname', sex = '$gender', 
                birthdate = '$bday', age = '$age', address = '$address', contact_no = '$contact', 
                email = '$email', civil_status = '$cstatus', nationality = '$nationality', 
                religion = '$religion', course = '$course' 
            WHERE id = '$id'";

    // Execute the update query or return an error if it fails
    $con->query($sql) or die($con->error);

    // Redirect to the details page after a successful update
    header("Location: details.php?ID=" . $id);
}
?>



<html lang="en">
<head>
     <!-- Meta tags and css external stylesheets -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="font/bootstrap-icons.css">
    <link rel="icon" type="image" href="images/favicon.jpg">
    <link rel="stylesheet" href="css/add-update.css">
    <title>Student Management System</title>
</head>

<body>
<div class="container">
    <header>Update Details
    <a href="index.php" class="back-button"><i class="bi bi-arrow-left-circle"></i></a> 
    </header>

      <!-- Form for updating student details -->
      <form action="" method="post">
        <div class="form first">
            <div class="details personal">
                
                <!-- Input fields -->
                <div class="fields">
                    <div class="input-field">
                        <label>First Name</label>
                        <input type="text" name="firstname" id="firstname" value="<?php echo $row['first_name']; ?>">
                    </div>

                    <div class="input-field">
                        <label>Middlename</label>
                        <input type="text" name="middlename" id="middlename" value="<?php echo $row['middlename']; ?>">
                    </div>

                    <div class="input-field">
                        <label>Last Name</label>
                        <input type="text" name="lastname" id="lastname" value="<?php echo $row['surname']; ?>">
                    </div>

                    <div class="input-field">
                        <label>Age</label>
                        <input type="number" name="age" id="age" value="<?php echo $row['age']; ?>">
                    </div>

                    <div class="input-field">
                        <label>Birth Date</label>
                        <input type="date" name="bday" id="bday" value="<?php echo $row['birthdate']; ?>">
                    </div>

                    <div class="input-field">
                        <label>Address</label>
                        <input type="text" name="address" id="address"  value="<?php echo $row['address']; ?>">
                    </div>

                    <div class="input-field">
                        <label>Contact Number</label>
                        <input type="text" name="contact" id="contact" value="<?php echo $row['contact_no']; ?>">
                    </div>

                    <div class="input-field">
                        <label>Email</label>
                        <input type="email" name="email" id="email" value="<?php echo $row['email']; ?>">
                    </div>

                    <div class="input-field">
                        <label>Civil Status</label>
                        <input type="text" name="cstatus" value="<?php echo $row['civil_status']; ?>">
                    </div>

                    <div class="input-field">
                        <label>Nationality</label>
                        <input type="text" name="nationality" id="nationality" value="<?php echo $row['nationality']; ?>">
                    </div>

                    <div class="input-field">
                        <label>Religion</label>
                        <input type="text" name="religion" id="religion" value="<?php echo $row['religion']; ?>">
                    </div>

                    <div class="input-field">
                        <label>Course</label>
                        <input type="text" name="course" id="course" value="<?php echo $row['course']; ?>">
                    </div>
                    
                    <div class="input-field">
                        <label>Gender</label>
                        <select name="gender" id="gender" required>
                          <option value="Male" <?php echo $row['sex'] == 'Male' ? 'selected' : ''; ?>>Male</option>
                          <option value="Female" <?php echo $row['sex'] == 'Female' ? 'selected' : ''; ?>>Female</option>
                        </select
                    </div>
                      
                </div>
            </div>
                   <!-- Submit button to update the student details -->
                   <button type="submit" name="submit">Update</button>

            </div>
        </div>
</form>


</body>


</html>