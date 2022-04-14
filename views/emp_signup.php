

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Sign up | Hireme</title>
  <link rel="stylesheet" href="../public/css/signup.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
</head>

<body>
  <div class="wrapper">
    <h1>Sign up</h1>
    <div class="signup-opt">
      <a href="regular_signup.php"><button class="signup-opt-btn active" value="applicant">For Applicants</button></a>
      <a href="emp_signup.php"><button class="signup-opt-btn" value="employer">For Employers</button></a>
    </div>
    <form action="../includes/employer_signup_inc.php" method="post">
    <?php
        if(isset($_GET['fname'])){
          echo '<input type="text" placeholder="First name" class="form-input" name="f-name" id="f-name" value='.$_GET['fname'].'>';
        }
        else{
          echo '<input type="text" placeholder="First name" class="form-input" name="f-name" id="f-name">';
        }
      ?>
      <?php
        if(isset($_GET['lname'])){
          echo '<input type="text" placeholder="Last name" class="form-input" name="l-name" id="l-name" value='.$_GET['lname'].'>';
        }
        else{
          echo '<input type="text" placeholder="Last name" class="form-input" name="l-name" id="l-name">';
        }
      ?>
      <?php
        if(isset($_GET['email'])){
          echo '<input type="email" placeholder="E-mail" class="form-input" name="e-mail" id="e-mail" value='.$_GET['email'].'>';
        }
        else{
          echo '<input type="email" placeholder="E-mail" class="form-input" name="e-mail" id="e-mail">';
        }
      ?>
      <?php
        if(isset($_GET['error'])){
          if($_GET['error']=="email"){
            echo '<p style="color: red; font-size:15px">invalid email</p>';
          }
          if($_GET['error']=="emailexist"){
            echo '<p style="color: red; font-size:15px">this email is already taken</p>';
          }
        }
      ?>
      <?php
        if(isset($_GET['phone'])){
          echo '<input type="text" placeholder="Phone no" class="form-input" name="phone" id="phone" value='.$_GET['phone'].'>';
        }
        else{
          echo '<input type="text" placeholder="Phone no" class="form-input" name="phone" id="phone">';
        }
      ?>
      <?php
        if(isset($_GET['error'])){
          if($_GET['error']=="phone"){
            echo '<p style="color: red; font-size:15px">invalid phone no</p>';
          }  
        }
      ?>
      <input type="text" placeholder="Company" class="form-input" name="company" id="company">
      <?php
        if(isset($_GET['uid'])){
          echo '<input type="text" placeholder="Username" class="form-input" name="username" id="username" value='.$_GET['uid'].'>';
        }
        else{
          echo '<input type="text" placeholder="Username" class="form-input" name="username" id="username">';
        }
      ?>
      <?php
        if(isset($_GET['error'])){
          if($_GET['error']=="uid"){
            echo '<p style="color: red; font-size:15px">username must include at least one uppercase letter, one lowercase letter, one digit and between 5-32 characters</p>';
          }
          if($_GET['error']=="uidexist"){
            echo '<p style="color: red; font-size:15px">this username is already taken</p>';
          }
        }
      ?>
      <input type="password" placeholder="Password" class="form-input" name="password" id="password">
      <?php
        if(isset($_GET['error'])){
          if($_GET['error']=="pwd"){
            echo '<p style="color: red; font-size:15px">password must contain at least one uppercaseletter, one lowercase letter,one digit,one special character and between 8-32 characters</p>';
          }  
        }
      ?>
      <?php
        if(isset($_GET['error'])){
          if($_GET['error']=="empty"){
            echo '<p style="color: red; font-size:15px">all fields are required</p>';
          }  
        }
      ?>
      <input type="submit" value="Sign up" class="button" name="signup">
    </form>
    <div class="not-member">
      Already a member? <a href="login.php">Log in</a>
    </div>
  </div>
</body>
</html>