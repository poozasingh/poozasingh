<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>courses</title>
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css">
   <link rel="stylesheet" href="css/style.css">
</head>
<body>
   <header class="header">
      <section class="flex">
         <a href="home.php" class="logo">RSL Solution</a>
         <form action="#" method="post" class="search-form">
            <input type="text" name="search_box" required placeholder="search courses..." maxlength="100">
            <button type="submit" class="fas fa-search"></button>
         </form>
         <div class="icons">
            <div id="notification-btn" class="fa-regular fa-bell"></div>
            <div id="menu-btn" class="fas fa-bars"></div>
            <div id="search-btn" class="fas fa-search"></div>
            <div id="user-btn" class="fas fa-user"></div>
            <div id="toggle-btn" class="fas fa-sun"></div>
         </div>
         <div class="profile">
            <img src="images/pic-5.jpg" class="image" alt="">
            <p class="role">RSL Student</p>
            <a href="profile.php" class="btn">View Profile</a>
            <a href="#" class="btn">Submit Assignment</a> <!-- New button added -->
            <div class="flex-btn">
               <a href="../index.php" class="option-btn">Logout</a>
            </div>
         </div>
      </section>
   </header>
   <section class="courses">
      <h1 class="heading">Our Courses</h1>
      <div class="box-container">

         <div class="box">
            <div class="tutor">
            </div>
            <div class="thumb">
               <img src="images/thumb-1.png" alt="">
               <span>10 videos</span>
            </div>
            <h3 class="title">Complete HTML Tutorial</h3>
            <a href="course_details.php" class="inline-btn">View Course</a>
         </div>

         <div class="box">
            <div class="tutor">
            </div>
            <div class="thumb">
               <img src="images/thumb-2.png" alt="">
               <span>10 videos</span>
            </div>
            <h3 class="title">Complete CSS Tutorial</h3>
            <a href="course_details.php" class="inline-btn">View Course</a>
         </div>

         <div class="box">
            <div class="tutor">

            </div>
            <div class="thumb">
               <img src="images/thumb-3.png" alt="">
               <span>10 videos</span>
            </div>
            <h3 class="title">Complete JS Tutorial</h3>
            <a href="course_details.php" class="inline-btn">View Course</a>
         </div>

         <div class="box">
            <div class="tutor">
            </div>
            <div class="thumb">
               <img src="images/thumb-4.png" alt="">
               <span>10 videos</span>
            </div>
            <h3 class="title">Complete Bootstrap Tutorial</h3>
            <a href="course_details.php" class="inline-btn">View Course</a>
         </div>

         <div class="box">
            <div class="tutor">

            </div>
            <div class="thumb">
               <img src="images/thumb-5.png" alt="">
               <span>10 videos</span>
            </div>
            <h3 class="title">Complete jQuery Tutorial</h3>
            <a href="course_details.php" class="inline-btn">View Course</a>
         </div>

         <div class="box">
            <div class="tutor">

            </div>
            <div class="thumb">
               <img src="images/thumb-6.png" alt="">
               <span>10 videos</span>
            </div>
            <h3 class="title">Complete SASS Tutorial</h3>
            <a href="course_details.php" class="inline-btn">View Course</a>
         </div>

      </div>

   </section>
   <!-- custom js file link  -->
   <script src="js/script.js"></script>
   <?php include 'sidebar.php'; ?>
</body>

</html>
