<?php
session_start(); 
require_once 'config.php';
include 'db.php';  

define("ADMIN_EMAIL", "demirisonila6@gmail.com"); 


if (isset($_POST["register"])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
    $role = $_POST['role'];

  
    if ($role === "admin" && $email !== ADMIN_EMAIL) {
        $_SESSION['register_error'] = "Only '" . ADMIN_EMAIL . "' can be an admin. Please change the role.";
        $_SESSION['active_form'] = 'register';
        header("Location: inddex.php");
        exit();
      
    } else {
  
        $stmt = $conn->prepare("SELECT email FROM users WHERE email = ?");
        if ($stmt === false) {
            die("Failed to prepare statement.");
        }

        $stmt->bind_param("s", $email);
        $stmt->execute();
        $stmt->store_result();

        if ($stmt->num_rows > 0) {
         
            $_SESSION['register_error'] = "Email is already registered.";
            $_SESSION['active_form'] = 'register';
        } else {
          
            $stmt = $conn->prepare("INSERT INTO users (name, email, password, role) VALUES (?, ?, ?, ?)");
            if ($stmt === false) {
                die("Failed to prepare insert statement.");
            }

            $stmt->bind_param("ssss", $name, $email, $password, $role);
            $stmt->execute();
            $_SESSION['register_success'] = "Registration successful. Please log in.";

          
            if ($role === "admin") {
 
                header("Location: admin_page.php");
            } else {
            
                header("Location: user_page.php");
            }
            exit();
        }


        $stmt->close();
    }
}


if (isset($_POST['login'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];

    
    $stmt = $conn->prepare("SELECT * FROM users WHERE email = ?");
    if ($stmt === false) {
        die("Failed to prepare login statement.");
    }

    $stmt->bind_param("s", $email);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        $user = $result->fetch_assoc();

        if (password_verify($password, $user['password'])) {
            $_SESSION['user_id'] = $user['id'];  
            $_SESSION['name'] = $user['name'];   
            $_SESSION['role'] = $user['role'];   

            if ($user['role'] === 'admin') {
              
                header("Location: admin_page.php");
            } else {
               
                header("Location: user_page.php");
            }
            exit();
        }
    }

    $_SESSION['login_error'] = "Incorrect email or password";
    header("Location: indexx.php");
    exit();
}
?>
