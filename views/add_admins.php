<!DOCTYPE html>
<html lang="en">

<head>
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Add admins</title>
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
     <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
     <link rel="stylesheet" href="../public/css/header.css">
     <link rel="stylesheet" href="../public/css/vacancy.css">
     <link rel="stylesheet" href="../public/css/footer.css">
     <link rel="stylesheet" href="../public/css/admin_header.css">
     <link rel="stylesheet" href="../public/css/admin.css">
</head>

<body>
     <?php
     include('header.php');
     ?>
     <?php
     include('admin_header.php');
     ?>

     <div style="margin-left:250px; margin-top:90px">

          <form action="../includes/add_admins_inc.php" method="post">

               <label for="job_title">Username:</label>
               <br>
               <br>
               <input type="text" name="username" class="text">
               <br>
               <br>
               <label for="position">Password:</label>
               <br>
               <br>
               <input type="text" name="password" class="text">
               <br>
               <br>
               <input type="submit" value="submit" name="submit" class="submit-btn">
          </form>
     </div>
     <?php
     //include('footer.php');
     ?>
     <script src="../public/js/vacancy.js"></script>
</body>

</html>