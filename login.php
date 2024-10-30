<?php include('loginController.php');
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet" />
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet" />
    <!-- MDB -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/8.0.0/mdb.min.css" rel="stylesheet" />
    <style>
        .divider:after,
        .divider:before {
            content: "";
            flex: 1;
            height: 1px;
            background: #eee;
        }

        .h-custom {
            height: calc(100% - 73px);
        }

        @media (max-width: 450px) {
            .h-custom {
                height: 100%;
            }
        }
    </style>
    <title>Login</title>
</head>

<body>

    <section class="vh-100">
        <div class="container-fluid h-custom">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col-md-9 col-lg-6 col-xl-5">
                    <img src="views/FoodMart/images/Login-PNG-Free-Commercial-Use-Image.png" class="img-fluid" alt="Sample image">
                </div>
                <div class="col-md-8 col-lg-6 col-xl-4 offset-xl-1">
                    <form action="" method="post">

                        <div class="divider d-flex align-items-center my-4">
                            <h2>
                                <p class="text-center fw-bold mx-3 mb-0">Login</p>
                            </h2>
                        </div>

                         <div data-mdb-input-init class="form-outline mb-4">
                            <input type="text" placeholder="Enter Username" name="username" class="form-control form-control-lg" id="form3Example3" >
                            <?php if (!empty($errors['username'])) { ?>
                                <div class="error text-danger"><?php echo $errors['username']; ?></div>
                            <?php } ?>
                            <?php if (!empty($errors['username2'])) { ?>
                                <div class="error text-danger"><?php echo $errors['username2']; ?></div>
                            <?php } ?>
                            <label class="form-label" for="form3Example3">Username</label>
                        </div>

                         <div data-mdb-input-init class="form-outline mb-3">
                            <input type="password" placeholder="Enter Password" name="password" id="form3Example4" class="form-control form-control-lg">
                            <?php if (!empty($errors['password'])) { ?>
                                <div class="error text-danger"><?php echo $errors['password']; ?></div>
                            <?php } ?>
                            <?php if (!empty($errors['password2'])) { ?>
                                <div class="error text-danger"><?php echo $errors['password2']; ?></div>
                            <?php } ?>
                            <label class="form-label" for="form3Example4">Password</label>
                        </div>

                        <div class="text-center text-lg-start mt-4 pt-2">
                            <button type="submit" name="submit" data-mdb-button-init data-mdb-ripple-init class="btn btn-primary btn-lg" style="padding-left: 2.5rem; padding-right: 2.5rem;">Login</button>
                            <p class="small fw-bold mt-2 pt-1 mb-0">Don't have an account? <a href="register.php" class="link-danger">Register</a></p>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </section>

</body>

</html>
