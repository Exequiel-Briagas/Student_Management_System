<?php 
// Database connection file
include_once 'database.php';

// Check if the form has been submitted
if (isset($_POST['submit'])) {
    
    // Retrieve form inputs and store them in variables
    $fname = $_POST['firstname'];
    $mname = $_POST['middlename'];
    $lname = $_POST['lastname'];
    $gender = $_POST['gender'];
    $bday = $_POST['bday'];
    $age = $_POST['age'];
    $Address = $_POST['address'];
    $contact = $_POST['contact'];
    $email = $_POST['email'];
    $cstatus = $_POST['cstatus'];
    $nationality = $_POST['nationality'];
    $religion = $_POST['religion'];
    $course = $_POST['course'];

    // SQL query to insert the new student record into the database
    $sql = "INSERT INTO `students_list`(`first_name`, `middlename`, `surname`, `age`, `sex`, `birthdate`, `address`, `contact_no`, `email`, `civil_status`, `nationality`, `religion`, `course`) 
            VALUES ('$fname', '$mname', '$lname', '$age', '$gender', '$bday', '$Address', '$contact', '$email', '$cstatus', '$nationality', '$religion', '$course')";

    // Execute the query and check if the insertion was successful
    if ($con->query($sql) === TRUE) {
        // Redirect to the index page upon successful addition
        header("Location: index.php");
    } else {
        // Display an error message if the query execution fails
        die("Error: " . $con->error);
    }
}
?>

<html lang="en">
<head>
    <!-- Meta tags and css external stylesheets -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="font/bootstrap-icons.css">
    <link rel="icon" type="image" href="images/favicon.png">
    <link rel="stylesheet" href="css/add-update.css">
    <title>Student Management System</title>

    <script>
        // JavaScript function to validate the form before submission
        function validateForm() {
            let fname = document.getElementById('firstname').value;
            let mname = document.getElementById('middlename').value;
            let lname = document.getElementById('lastname').value;
            let age = document.getElementById('age').value;
            let bday = document.getElementById('bday').value;
            let address = document.getElementById('address').value;
            let contact = document.getElementById('contact').value;
            let email = document.getElementById('email').value;
            let cstatus = document.getElementById('cstatus').value;
            let nationality = document.getElementById('nationality').value;
            let religion = document.getElementById('religion').value;
            let course = document.getElementById('course').value;

            // Check if any required fields are empty
            if (fname === "" || mname === "" || lname === "" || age === "" || bday === "" || address === "" || contact === "" || email === "" || cstatus === "" || nationality === "" || religion === "" || course === "") {
                alert("All fields must be filled out!");
                return false; // Prevent form submission if any field is empty
            }
            return true; // Allow form submission if all fields are filled
        }
    </script>
</head>

<body>
   <div class="container">
    <header>Add Student
    <a href="index.php" class="back-button"><i class="bi bi-arrow-left-circle"></i></a>
   </header>

  
     <!-- Form for adding a new student -->
      <form action="" method="post" onsubmit="return validateForm()">
        <div class="form first">
            <div class="details personal">
                
                  <!-- Input fields for various student details -->
                <div class="fields">
                    <div class="input-field">
                        <label>First Name</label>
                        <input type="text" name="firstname" id="firstname" placeholder="Enter the first name">
                    </div>

                    <div class="input-field">
                        <label>Middlename</label>
                        <input type="text" name="middlename" id="middlename" placeholder="Enter the middle name">
                    </div>

                    <div class="input-field">
                        <label>Last Name</label>
                        <input type="text" name="lastname" id="lastname" placeholder="Enter the last name">
                    </div>

                    <div class="input-field">
                        <label>Age</label>
                        <input type="number" name="age" id="age" placeholder="Enter the age">
                    </div>

                    <div class="input-field">
                        <label>Birth Date</label>
                        <input type="date" name="bday" id="bday" placeholder="Enter the birth date">
                    </div>

                    <div class="input-field">
                        <label>Address</label>
                        <input type="text" name="address" id="address" placeholder="Enter the address">
                    </div>

                    <div class="input-field">
                        <label>Contact Number</label>
                        <input type="text" name="contact" id="contact" placeholder="Enter the contact no.">
                    </div>

                    <div class="input-field">
                        <label>Email</label>
                        <input type="email" name="email" id="email" placeholder="Enter the email">
                    </div>

                    <div class="input-field">
                        <label>Civil Status</label>
                        <input type="text" name="cstatus" id="cstatus" placeholder="Enter the civil status">
                    </div>

                    <div class="input-field">
                        <label>Nationality</label>
                        <input type="text" name="nationality" id="nationality" placeholder="Enter the nationality">
                    </div>

                    <div class="input-field">
                        <label>Religion</label>
                        <input type="text" name="religion" id="religion" placeholder="Enter the religion">
                    </div>

                    <div class="input-field">
                        <label>Course</label>
                        <input type="text" name="course" id="course" placeholder="Enter the course">
                    </div>
                    
                    <div class="input-field">
                        <label>Gender</label>
                        <select name="gender" id="gender" required>
                          <option value="Male">Male</option>
                          <option value="Female">Female</option>
                        </select>
                    </div>
                      
                
                </div>
            </div> 

                    <!-- Submit button for the form -->
                   <button type="submit" name="submit">Add</button>

            </div>
        </div>
</form>

</body>

</html>
