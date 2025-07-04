<!DOCTYPE html>
<html>
<head>
    <title>Day 22 - Student Registration</title>
    <style>
        body { font-family: Arial, sans-serif; margin: 20px; }
        form { max-width: 400px; }
        input[type="text"], input[type="email"] {
            width: 100%; padding: 8px; margin: 8px 0;
        }
        input[type="submit"] {
            padding: 10px 20px;
            background: green;
            color: white;
            border: none;
            cursor: pointer;
        }
    </style>
</head>
<body>
    <h2>Student Registration Form</h2>
    <form method="POST" action="">
        <label>Name:</label><br>
        <input type="text" name="name" required><br><br>
        
        <label>Email:</label><br>
        <input type="email" name="email" required><br><br>
        
        <label>Course:</label><br>
        <input type="text" name="course" required><br><br>
        
        <input type="submit" name="submit" value="Register">
    </form>

<?php
// PHP to handle form
if(isset($_POST['submit'])){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $course = $_POST['course'];

    // connect to database
    $conn = new mysqli("localhost", "root", "", "webteam_intern");
    if($conn->connect_error){
        die("Connection failed: " . $conn->connect_error);
    }

    // prepared statement
    $stmt = $conn->prepare("INSERT INTO students (name, email, course) VALUES (?, ?, ?)");
    $stmt->bind_param("sss", $name, $email, $course);

    if($stmt->execute()){
        echo "<p style='color:green;'>Registration successful!</p>";
    } else {
        echo "<p style='color:red;'>Error: " . $stmt->error . "</p>";
    }

    $stmt->close();
    $conn->close();
}
?>
</body>
</html>