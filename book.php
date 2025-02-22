<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
body {
      margin: 0;
      height: 100vh;
      position: relative;
      font-family: Arial, sans-serif;
    }
    .content {
      position: relative;
      z-index: 1; /* Content stays on top of the background */
      padding: 20px;
      color: #000; /* Ensure text is readable */
    }
    body::before {
      content: '';
      position: absolute;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      background-image: url('bg.jpg'); /* Replace with your image */
      background-size: cover;
      background-repeat: no-repeat;
      background-position: center;
      opacity: 0.5; /* Adjust transparency here */
      z-index: -1; /* Ensures it stays behind the content */
    }


    .booking-form {
  background: #fff;
  padding: 20px 30px;
  border-radius: 10px;
  box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
  width: 100%;
  max-width: 400px;
 position:relative;
 top:10%;
 left:35%;
}

.booking-form input {
  width:350px;
  padding: 10px 15px;
  margin: 10px 0;
  border: 1px solid #ddd;
  border-radius: 5px;
  font-size: 16px;
  align-items:center;
}

.booking-form input:focus {
  border-color: #007bff;
  outline: none;
  box-shadow: 0 0 4px rgba(0, 123, 255, 0.4);
}

.booking-form button {
  width: 100%;
  padding: 12px 15px;
  background:rgb(212, 214, 216);
  border: none;
  border-radius: 5px;
  color: #fff;
  font-size: 16px;
  cursor: pointer;
  margin-top: 10px;
}

.booking-form button:hover {
  background: #0056b3;
}
        </style>
</head>
<body>
   
<div class="content">
    
<form action="reserve.php" class="booking-form">
<input type="text" placeholder="Enter name" name="name">
<input type="number" placeholder="Enter phone number" name="phone">
<input type="email" placeholder="Enter your email" name="email">
<input type="text" placeholder="Room type" name="room">
<input type="text" placeholder="Check in" name="checkin">

<input type="text" placeholder="Check out" name="checkout">
<input type="submit" value="Book Now">
















</form>








  </div>
</body>
</html>