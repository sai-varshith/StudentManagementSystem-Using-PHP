<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <link rel="stylesheet" href="styles.css">
        <link href='https://cdn.jsdelivr.net/npm/boxicons@2.0.5/css/boxicons.min.css' rel='stylesheet'>

        <title>Admin Login</title>  
    </head>
    <body>
        <div class="brs">
            <div class="l-form">
            <div class="shape1"></div>
            <div class="shape2"></div>
            <div class="form">
                <img src="https://image.freepik.com/free-vector/sign-concept-illustration_114360-5267.jpg" alt="" class="form__img" style="width:500px;height: 500px;">

                <form class="form__content" action="admin_login.php" method="post">
                    <h1 class="form__title" style="margin-top: 0px;">Login<span style="font-size: 25px;margin: 12px;">Teacher | Admin</span></h1>
                                        <a href="index.php" class="form__forgot">Click here for student login</a>



                 <?php if (isset($_GET['error'])) { ?>
                    <p class="error" style="color: white;text-align: center;background: #ff8080;padding: 10px;border-radius: 5px;"><?php echo $_GET['error']; ?></p>
                   <?php } ?>

                    <div class="form__div form__div-one" style="margin-top: 45px;">
                        <div class="form__icon">
                            <i class='bx bx-user'></i>
                        </div>

                        <div class="form__div-input">
                            <label for="" class="form__label">Username</label>
                            <input type="text" class="form__input" required name="uname">
                        </div>
                    </div>

                    <div class="form__div">
                        <div class="form__icon">
                            <i class='bx bx-lock' ></i>
                        </div>

                        <div class="form__div-input">
                            <label for="" class="form__label">Password</label>
                            <input type="password" class="form__input" required  name="password">
                        </div>
                    </div>
                    <a href="#" class="form__forgot">Forgot Password?</a>

                    <input type="submit" class="form__button" value="Login">

                   
                </form>
            </div>

        </div>
            
        </div>
        <script src="main.js"></script>
        <script type="text/javascript">
            setTimeout(function(){
        document.querySelector('.error').style.display = 'none';
      },3000);
        </script>
    </body>
</html>