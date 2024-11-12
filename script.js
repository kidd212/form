document.getElementById('registrationForm').addEventListener('submit', function(event) {
     
    event.preventDefault();
    let valid ;
    alert("This is the beginning")
    // Clear previous errors
    document.querySelectorAll('.error').forEach(error => error.textContent = '');
    document.getElementById('result').textContent = '';

    // Get form values
    const name = document.getElementById('name').value.trim();
    const email = document.getElementById('email').value.trim();
    const password = document.getElementById('password').value;
    const confirmPassword = document.getElementById('confirmPassword').value;
    const gender = document.getElementById('gender').value;
    const comment = document.getElementById('comment').value.trim();
    const website = document.getElementById('website').value.trim();

    // Validate name
    if (name === '') {
        document.getElementById('nameError').textContent = 'Name is required.';
        valid = false;
    }

    // Validate email
    const emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    if (!emailPattern.test(email)) {
        document.getElementById('emailError').textContent = 'Invalid email address.';
        valid = false;
    }

    // Validate password
    if (password.length < 6) {
        document.getElementById('passwordError').textContent = 'Password must be at least 6 characters.';
        valid = false;
    }

    // Validate confirm password
    if (password !== confirmPassword) {
        document.getElementById('confirmPasswordError').textContent = 'Passwords do not match.';
        valid = false;
    }

    // Validate gender
    if (gender === '') {
        document.getElementById('genderError').textContent = 'Gender is required.';
        valid = false;
    }

    // Additional validation for comment (optional)
    if (comment.length > 500) { // Example validation: limit comment length
        document.getElementById('commentError').textContent = 'Comment must be less than 500 characters.';
        valid = false;
    }

    if(website.length){
        function validateURLWithRegex(website) {
            const regex = /^(https?:\/\/)?([a-zA-Z0-9-]+(\.[a-zA-Z0-9-]+)+.*)$/;
            console.log(regex.test(website))
            return regex.test(website);
        }

        const valdateURLFunction=validateURLWithRegex()

        console.log(validateURLWithRegex())
    if(!valdateURLFunction){
        document.getElementById('websiteError').textContent = 'Invalid website domain.';
        valid = false;
    }
    }
    alert("This is the before valid")
    console.log(valid)
    // Prevent form submission if validation fails
   
  alert("This is the end")

});
