<html>
    <head>
        <title>LOGIN</title>
         <style>
            .img{background-image:url('https://wallpaperaccess.com/full/3513734.jpg');
	          height:100vh; background-repeat:no-repeat;background-size:100% 100%;}
            .img h1{padding-top:35px; color: white;}
        </style>
    </head>
        <body>
           <div class="img">
              <center> <h1>LOG IN</h1>
               <form method="post"action="login.php">
                   <input type="email" placeholder="enter username" name="email" required><br><br>
                   <input type="password" placeholder="enter password" name="password" required><br><br>
                   <input type="submit" name="login">
                  <!--<button type="submit" name="submit" class="signupbtn">Log In</button> -->
               </center>
               </form>
            </div>
        </body>    
</html>