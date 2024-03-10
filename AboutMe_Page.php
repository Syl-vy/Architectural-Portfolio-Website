<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <title> Contact Us</title>
    <link rel="stylesheet" href="contact.css">
    <!-- Fontawesome CDN Link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css"/>
    <link href="https://cdn.jsdelivr.net/npm/remixicon@3.2.0/fonts/remixicon.css" rel="stylesheet">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
   </head>
<body>
    <a href="index.html" target="blank">
        <div class="bottomleft">S<i class="ri-home-smile-fill"></i>K
        </div>
    </a>
  <div class="container">
    <div class="content">
      <div class="left-side">
        <div class="address details">
          <i class="fas fa-map-marker-alt"></i>
          <div class="topic">Address</div>
          <div class="text-one">SHK Associates, North Guwahati</div>
          <div class="text-two">Guwahati, Assam 06</div>
        </div>
        <div class="phone details">
          <i class="fas fa-phone-alt"></i>
          <div class="topic">Phone</div>
          <div class="text-one">+91 9435746736</div>
          <div class="text-two">7002886387</div>
        </div>
        <div class="email details">
          <i class="fas fa-envelope"></i>
          <div class="topic">Email</div>
          <div class="text-one">snehalhk@gmail.com</div>
          <div class="text-two">snehal_ce@gcuniversity.ac.in</div>
        </div>
      </div>
      <div class="right-side">
        <div class="topic-text">Give us a Call or a message!!</div>
        <p>Feel free to contact us regarding your project, we would love to hear from you.</p>
      <form action="result.php" method="POST">
        <div class="input-box">
          <input type="text" placeholder="Enter your name" name="name" >
          <br>
                <?php if(isset($name_error)){?>
                    <p style="color: red;" ><?php echo $name_error ?></p>
                <?php } ?>
        </div>
        <div class="input-box"><br>
          <input type="text" placeholder="Enter your email" name="email" >
          <br>
                <?php if(isset($email_error)){?>
                    <p style="color: red;" ><?php echo $email_error ?></p>
                <?php } ?>
        </div>
        <div class="input-box message-box">
          
        </div>
        <div class="button">
          <input class="sub" type="submit" value="Send Now" >
        </div>
      </form>
    </div>
    </div>
  </div>
</body>
</html>

