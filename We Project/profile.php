<?php
include('session.php'); 
if(!isset($_SESSION['login_user']))
{ 
  header("location: loginIndex.php");  // Redirecting To login page 
}
?>
<!--We check, did ‘login user’ session exist or not? If ‘login user’ did not exist then that means, a user did not login we redirect the user to the login page which is loginIndex.php.
We use <?php echo $login_session; ?> to display username in a profile page.
If a user clicks the logout link then they will redirect to the logout page.-->

<!DOCTYPE html>
<html>
<head>
 <title>Student Profile</title>
 <link href="css/login.css" rel="stylesheet" type="text/css">
</head>
<body>
 <div id="profile">
 <b id="welcome">Welcome : <i><?php echo $login_session; ?></i></b>
 <b id="logout"><a href="logout.php">Log Out</a></b>
     <!-----------submenu-------------->
<section id="submenu">
   <nav class="navbar navbar-expand-lg navbar-light">
 
  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav ">
      <li class="nav-item active">
        <a class="nav-link" href="attendence.html">Attendence </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="marks.html">Marks</a>
      </li>
     
      <li class="nav-item">
        <a class="nav-link" href="subjects.html" >Subjects</a>
      </li>
    </ul>
  </div>
</nav>  
    </section>
 </div>
</body>
</html>