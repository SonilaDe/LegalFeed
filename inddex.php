<?php
session_start();

// Error handling for login and registration
$errors = [
    'login' => $_SESSION['login_error'] ?? '',
    'register' => $_SESSION['register_error'] ?? ''
];

// Determine the active form (login or register)
$activeForm = $_SESSION['active-form'] ?? 'login';

// Helper functions to display errors and active form states
function showError($error) {
    return !empty($error) ? "<p class='error-message'> $error </p>" : '';
}

function isActiveForm($formName, $activeForm) {
    return $formName === $activeForm ? 'active' : '';
}

// Don't unset session too early; only unset after displaying errors
// session_unset();
?>




















<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Login and Register</title>
</head>
<body>

<div class="container">
   <!-- Login Form -->
<div class="form-box <?= isActiveForm('login', $activeForm); ?>" id="login-form">
    <form action="login_register.php" method="post">
        <h2>Login</h2>
        <?= showError($errors['login']); ?>
        <input type="email" name="email" placeholder="Email" required> <!-- No pre-filled value -->
        <input type="password" name="password" placeholder="Password" required>
        <button type="submit" name="login">Login</button>
        <p>Don't have an account? <a href="#" onclick="showForm('register-form')">Register</a></p>
    </form>
</div>


    <!-- Register Form -->
   <!-- Register Form -->
<div class="form-box <?= isActiveForm('register', $activeForm); ?>" id="register-form">
    <form action="login_register.php" method="post">
        <h2>Register</h2>
        <?= showError($errors['register']); ?>
        <input type="text" name="name" placeholder="Name" required>
        <input type="email" name="email" placeholder="Email" required> <!-- No pre-filled value -->
        <input type="password" name="password" placeholder="Password" required>
        <select name="role" required>
            <option value="#">Select option</option>
            <option value="user">User</option>
            <option value="admin">Admin</option>
        </select>
        <button type="submit" name="register">Register</button>
        <p>Already have an account? <a href="#" onclick="showForm('login-form')">Login</a></p>
    </form>
</div>


<!-- JavaScript to switch between login and register forms -->
<script>
    function showForm(formId) {
        // Remove the active class from all forms
        document.querySelectorAll(".form-box").forEach(form => form.classList.remove("active"));
        
        // Add the active class to the selected form
        document.getElementById(formId).classList.add("active");
    }
</script>

</body>
</html>
