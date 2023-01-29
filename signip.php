<?php
  $username = $_POST['username'];
  $password = $_POST['password'];
  $email = $_POST['email'];

  // Connect to database
  $conn = new mysqli('localhost', 'my_user', 'my_password', 'my_db');

  // Check connection
  if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }

  // Insert data into table
  $sql = "INSERT INTO users (username, password, email)
          VALUES ('$username', '$password', '$email')";
  if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
  } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
  }

  $conn->close();
?>
