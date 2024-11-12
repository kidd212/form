<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Validation Form</title>
    <link rel="stylesheet" href="styles.css">

    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
        }

        *   {
                box-sizing: boder-box;
            }

        h1{
            text-align:center;
        }

        form {
            width: 400px;
            margin: auto;
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        label {
            display: block;
            margin: 10px 0 5px;
        }

        input {
            width: 100%;
        height:40px;
            margin-bottom: 10px;
            display:block;

        }

        .input_container{
            /* width: 100%; */
        }

        input[type="submit"] {
            background-color: #4CAF50;
            color: white;
            border: none;
            height:40px;
            /* padding: 10px 20px;
            border-radius: 4px; */
            cursor: pointer;
            width:100%;
        }

        button[type="submit"]:hover {
            background-color: #45a049;

        }

        .error {
            color: red;
            font-size: 0.875em;
            display: block;
            margin: 5px 0;
        }

                /* Add this to styles.css if needed */
        textarea {
            width: 100%;
            padding: 8px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }
            span{
                color:red;
            }

    </style>

    <script>
        function validateUrl() {
            const urlInput = document.getElementById('website');
            const urlValue = urlInput.value.trim();

            // Regular expression to validate domain name and ensure it ends with .com
            const domainPattern = /^(https?:\/\/)?([a-zA-Z0-9-]+\.)+[a-zA-Z]{2,}\.com$/;

            // Check if the URL matches the pattern
            if (!domainPattern.test(urlValue)) {
                alert('Please enter a valid URL that ends with .com (e.g., https://example.com)');
                return false; // Prevent form submission
            }
            return true; // Allow form submission
        }
    </script>
</head>

<body>
    
    <h1>validation Form</h1>
    <form id="registrationForm" method="post" action="process.php">
        
        <label for="name">Name<span>*</span>:</label>
        <input type="text" id="name" name="name" required />
        <span class="error" id="nameError"></span>

        <div class='input_container'>
        <label for="email">Email<span>*</span>:</label>
        <input type="email" id="email" name="email" required />
        <span class="error" id="emailError"></span>     
        </div>
       

        <label for="password">Password<span>*</span>:</label>
        <input type="password" id="password" name="password" required>
        <span class="error" id="passwordError"></span>

        <label for="confirmPassword">Confirm Password<span>*</span>:</label>
        <input type="password" id="confirmPassword" name="confirmPassword" required>
        <span class="error" id="confirmPasswordError"></span>

        <label for="gender">Gender<span>*</span>:</label>
        <select id="gender" name="gender" required>
            <option value="">Select Gender</option>
            <option value="male">Male</option>
            <option value="female">Female</option>
            <option value="other">Other</option>
        </select>
        <span class="error" id="genderError"></span>

        <label for="comment">Comments<span>*</span>:</label>
        <textarea id="comment" name="comment" rows="4" required></textarea>
        <span class="error" id="commentError"></span>

        <label for="website">Website URL:</label>
        <input type="url" id="website" name="website" placeholder="https://example.com" required>
            <span class="error" id="websiteError"></span>  
        <input type="submit" value="Submit">
    </form>

    <div id="result"></div>
    <script src="script.js"></script>
</body>
</html>
