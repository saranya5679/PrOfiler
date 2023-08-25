<?php 

session_start();
$USERID = $_SESSION["USERID"];

if($USERID == '')
{
    session_destroy();

    header('location:index.php');
}

include('config.php');

$query = "SELECT USERNAME,EMAIL,PASSWORD,AGE,GENDER,DOB,CONTACT FROM users WHERE USER_ID = '$USERID'";

$result = mysqli_query($conn,$query);

if($result)
{

   $row = mysqli_fetch_array($result,MYSQLI_ASSOC);

   $USERNAME = $row["USERNAME"];
   $EMAIL = $row["EMAIL"];
   $PASSWORD = $row["PASSWORD"];
   $AGE = $row["AGE"];
   $GENDER = $row["GENDER"];
   $DOB = $row["DOB"];
   $CONTACT = $row["CONTACT"];
}
else
{
    echo "<script> alert('Unexpected Error'); </script>";
}
?>
 
    <!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/ae360af17e.js" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="css/stylee.css">
    
    <title>title</title>
</head>
<style>
body {
  background-image: url("userimage.jpg");
}
</style>
<body>
    <div class="wrapper">
        <!-- Sidebar -->
        <aside id="sidebar">
            <div class="h-100">
                <div class="sidebar-logo">
                    <a href="#">DASHBOARD</a>
                </div>
                <!-- Sidebar Navigation -->
                <ul class="sidebar-nav my-1 ">

                    <li class="sidebar-item">
                        <a href="Home.php" class="sidebar-link">
                            <i class="fa-solid fa-file pe-2"></i>
                            HOME
                        </a>
                    </li>

                    <li class="sidebar-item">
                        <a href="profile2.php" class="sidebar-link">
                            <i class="fa-solid fa-home pe-2"></i>
                            EDIT PROFILE
                        </a>
                    </li>

                    <li class="sidebar-item">
                        <a href="logout.php" class="sidebar-link">
                            <i class="fa-solid fa-sign-out-alt pe-2"></i>
                            LOGOUT
                        </a>
                    </li>

                </ul>

            </div>
        </aside>
        <!-- Main Component -->
        <div class="main ms-5 offset-md-5">
            


            <!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta
      name="viewport"
      content="width=
    , initial-scale=1.0"
    />
    <script
      src="https://kit.fontawesome.com/ae360af17e.js"
      crossorigin="anonymous"
    ></script>
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ"
      crossorigin="anonymous"
    />
    <title>Document</title>

    <style>
      .profile-card {
        border: solid 50px white; 
         border-radius: 0px;
         margin:right;
      }
      .center-align {
        justify-content: center;
        align-items: center; /* Set a specific height for the container */
      }
    </style>
  </head>

  <body>
    <div class="profile-card container mt-5 p-5 flex-row d-flex me-5">
      <div class="container col-4 center-align">
        
        <div>
          <img
            src="https://th.bing.com/th/id/OIP.audMX4ZGbvT2_GJTx2c4GgHaHw?pid=ImgDet&rs=1"
            class="img-thumbnail rounded"
            alt=""
          />
        </div>
      </div>
      <div class="col-8 my-auto d-flex">
        <div class="col-2 p-3">
          <div class="text-end fs-5 fw-bold mt-3">NAME:</div>
          <div class="text-end fs-5 fw-bold mt-3">EMAIL:</div>
          <div class="text-end fs-5 fw-bold mt-3">DOB:</div>
          <div class="text-end fs-5 fw-bold mt-3">GENDER:</div>
          <div class="text-end fs-5 fw-bold mt-3">CONTACT:</div>
        </div>
        <div class="col-8 py-3">
          <div class="mt-3 fs-5"><?php echo $USERNAME ?></div>
          <div class="mt-3 fs-5"><?php echo $EMAIL ?></div>
          <div class="mt-3 fs-5"><?php echo $DOB ?></div>
          <div class="mt-3 fs-5"><?php echo $GENDER ?></div>
          <div class="mt-3 fs-5"><?php echo $CONTACT ?></div>
          <div class="mt-3 fs-5"></div>
        </div>
      </div>
    </div>
  </body>
</html>



        </div>




    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe"
        crossorigin="anonymous"></script>
    <script src="script.js"></script>
</body>

</html>
</script>
    
</body>
</html>