<?php
// Initialize error array
$errors = [];

// Check if the form was submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") 
    // Validate Name
    if (empty(trim($_POST["name"]))) {
        $errors['name'] = "Name is required.";
    } else {
        $name = trim($_POST["name"]);
    }

    // Validate Email
    if (empty(trim($_POST["email"]))) {
        $errors['email'] = "Email is required.";
    } elseif (!filter_var(trim($_POST["email"]), FILTER_VALIDATE_EMAIL)) {
        $errors['email'] = "Invalid email format.";
    } else {
        $email = trim($_POST["email"]);
    }

    // Validate Password
    if (empty(trim($_POST["password"]))) {
        $errors['password'] = "Password is required.";
    } elseif (strlen(trim($_POST["password"])) < 6) {
        $errors['password'] = "Password must be at least 6 characters.";
    } else {
        $password = trim($_POST["password"]);
    }

    // Validate Confirm Password
    if (empty(trim($_POST["confirmPassword"]))) {
        $errors['confirmPassword'] = "Please confirm your password.";
    } elseif ($password !== trim($_POST["confirmPassword"])) {
        $errors['confirmPassword'] = "Passwords do not match.";
    }

    // Validate Gender
    if (empty(trim($_POST["gender"]))) {
        $errors['gender'] = "Gender is required.";
    } else {
        $gender = trim($_POST["gender"]);
    }

    // Validate Comment
    if (empty(trim($_POST["comment"]))) {
        $errors['comment'] = "Comment is required.";
    } else {
        $comment = trim($_POST["comment"]);
    }

    if (empty(trim($_POST["website"]))) {
        $errors['website'] = "Website link is required.";
    } else{
        $website = trim($_POST["website"]);
    } 

    // // Check for errors and display result
    if (empty($errors)) {
         echo "<h1>Success!</h1>";
     echo "<p>You have successfully logged in!</p>";
   
    }
    ?>