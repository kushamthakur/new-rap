<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" 
           rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" 
           crossorigin="anonymous">
           
 <style>
body {
  font-family: "Lato", sans-serif;
}

.sidenav {
  height: 100%;
  width: 0;
  position: fixed;
  z-index: 1;
  top: 0;
  left: 0;
  background-color: black;
  overflow-x: hidden;
  transition: 0.5s;
  padding-top: 60px;
}

.sidenav a {
  padding: 8px 8px 8px 32px;
  text-decoration: none;
  font-size: 25px;
  color: #818181;
  display: block;
  transition: 0.3s;
  
}

.sidenav a:hover {
  color: #f1f1f1;
}

.sidenav .closebtn {
  position: absolute;
  top: 0;
  right: 25px;
  font-size: 36px;
  margin-left: 50px;
}

@media screen and (max-height: 450px) {
  .sidenav {padding-top: 15px;}
  .sidenav a {font-size: 18px;}
}
.welcome{height:80px; background-color:black;}
.welcome h2{padding-top:25px; color:white; text-align:center;}
</style>
</head>
  <body>
<div class="container-fluid">
<div class="row">
  <div class="col-12-lg">

  
  <!--navbar-->
  <nav class="navbar navbar-expand-lg bg-body-tertiary sticky-top">
 
  <div id="mySidenav" class="sidenav">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
  
          <a  href="#">Home</a>
          <a  href="#">About</a>
          
          <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Dropdown
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="#">Action</a></li>
            <li><a class="dropdown-item" href="#">Another action</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#">Something else here</a></li>
          </ul>
        </li>
      <a href="dashlog.php">log out</a>
</div>
<span style="font-size:30px;cursor:pointer" onclick="openNav()">&#9776;</span>

<a href="https://www.excellencetechnology.in/"><h4 style="font-family: 'Satisfy', cursive; color:blue;">EXCELLENCE TECHNOLOGY</h4></a>
<a href="dashlog.php"><input type="button" class="btn btn-warning" value="LOGIN"></a>
      <a href="sessionsignup.php"><input type="button" class="btn btn-success" value="SIGNUP"></a>
  </nav>

 
  <div class="welcome">
    <h2>Welcome Admin</h2>
  </div><br>
  <h4>Employee Details</h4>      
  <table class="table table-dark table-hover">
  
  <tr>
   <th>ID</th>
   <th>NAME</th>
   <th>EMAIL</th>
   <th>PASSWORD</th>
   <th>CONTACT</th>
   <th>EMP_I'D</th>
   <th>ROLE</th>
   <th>PHOTO</th>
    <th>edit</th>
    <th>delete</th>


</tr>

<?php 
include("connection.php");
$query="SELECT * FROM user_detail ";
$res=mysqli_query($conn,$query);
$total=mysqli_num_rows($res);
if($total==true){
    while($row=mysqli_fetch_array($res)){

?>
<tr>
    <td><?php echo$row['id']; ?></td>
    <td><?php echo$row['name']; ?></td>
    <td><?php echo$row['email']; ?></td>
    <td><?php echo$row['contact_no']; ?></td>
    <td><?php echo$row['emp_id']; ?></td>
    <td><?php echo$row['role']; ?></td>
    <td>
    <img src='../signupLogin/profile/<?php echo$row['photo']; ?>'width="50px ">
    </td>
  <td><a href="update.php?ID=<?php echo$row['id']; ?>&ACTION=UPDATE">  <input type="button" class="btn btn-warning" name="edit" value="EDIT"></a></td>
  <td> <a href="delete.php?ID=<?php echo$row['id']; ?>&ACTION=DELETE">   <input type="submit"  class="btn btn-danger" name="delete" value="DELETE " ></a></td>
   
</tr>
<?php  
    }
}
 ?>
 
</table>

  <div class="footer">
   <footer class="py-5">
    <div class="row">
      <div class="col-6 col-md-2 mb-3">
        <h5>about us</h5>
        <ul class="nav flex-column">
          <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Home</a></li>
          <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Features</a></li>
          <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Pricing</a></li>
          <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">FAQs</a></li>
          <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">About</a></li>
        </ul>
      </div>

      <div class="col-6 col-md-2 mb-3">
        <h5>useful links</h5>
        <ul class="nav flex-column">
          <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Home</a></li>
          <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Features</a></li>
          <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Pricing</a></li>
          <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">FAQs</a></li>
          <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">About</a></li>
        </ul>
      </div>

      <div class="col-6 col-md-2 mb-3">
        <h5>contacts</h5>
        <ul class="nav flex-column">
          <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">708911647</a></li>
          <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">8427269763</a></li>
          
        </ul>
      </div>

      <div class="col-md-5 offset-md-1 mb-3">
        <form>
          <h5>Subscribe to our newsletter</h5>
          <p>Monthly digest of what's new and exciting from us.</p>
          <div class="d-flex flex-column flex-sm-row w-100 gap-2">
            <label for="newsletter1" class="visually-hidden">Email address</label>
            <input id="newsletter1" type="text" class="form-control" placeholder="Email address">
            <button class="btn btn-primary" type="button">Subscribe</button>
          </div>
        </form><br>
        <a href="https://www.google.com/"><img src="https://cdn-icons-png.flaticon.com/128/300/300221.png" width="50px" alt=""><a>
        <a href="https://www.facebook.com/"><img src="https://cdn-icons-png.flaticon.com/128/5968/5968764.png" width="50px" alt=""><a>
        <a href="https://twitter.com/"><img src="https://cdn-icons-png.flaticon.com/128/3670/3670127.png" width="50px" alt=""><a>
        <a href="https://www.instagram.com/"><img src="https://cdn-icons-png.flaticon.com/128/3955/3955024.png" width="50px" alt=""><a>
      </div>
    </div>
    
    <div class="d-flex flex-column flex-sm-row justify-content-between py-4 my-4 border-top">
     <p> &copy; 2022 Company, Inc. All rights reserved.</p>
      <ul class="list-unstyled d-flex">
        <li class="ms-3"><a class="link-dark" href="#"><svg class="bi" width="24" height="24"><use xlink:href="#twitter"/></svg></a></li>
        <li class="ms-3"><a class="link-dark" href="#"><svg class="bi" width="24" height="24"><use xlink:href="#instagram"/></svg></a></li>
        <li class="ms-3"><a class="link-dark" href="#"><svg class="bi" width="24" height="24"><use xlink:href="#facebook"/></svg></a></li>
      </ul>
    </div>
  </footer>
</div>


</div>
</div>
  </div>
  <script>
function openNav() {
  document.getElementById("mySidenav").style.width = "250px";
}

function closeNav() {
  document.getElementById("mySidenav").style.width = "0";

}
</script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
     integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN"
      crossorigin="anonymous"></script>

  </body>
</html>


