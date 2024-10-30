<?php include('registerController.php');
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
    <title>Register</title>
</head>

<body>
    <section class="vh-100" style="background-color: #eee;">
        <div class="container h-100">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col-lg-12 col-xl-11">
                    <div class="card text-black" style="border-radius: 25px;">
                        <div class="card-body p-md-5">
                            <div class="row justify-content-center">
                                <div class="col-md-10 col-lg-6 col-xl-5 order-2 order-lg-1">
                                    <p class="text-center h1 fw-bold mb-5 mx-1 mx-md-4 mt-4">Sign up</p>
                                    <form method="post" class="mx-1 mx-md-4">
                                        <div class="d-flex flex-row align-items-center mb-4">
                                            <i class="fas fa-user fa-lg me-3 fa-fw"></i>
                                            <div class="form-outline flex-fill mb-0">
                                                <input type="text" placeholder="Input username" name="username" class="form-control" id="form3Example1c" value="<?php echo htmlspecialchars($username ?? '', ENT_QUOTES); ?>">
                                                <?php if (!empty($errors['username'])) { ?>
                                                    <div class="error text-danger"><?php echo $errors['username']; ?></div>
                                                <?php } ?>
                                                <?php if (!empty($errors['username3'])) { ?>
                                                    <div class="error text-danger"><?php echo $errors['username3']; ?></div>
                                                <?php } ?>
                                                <label class="form-label" for="form3Example1c">Username</label>
                                            </div>
                                        </div>
                                        <div class="d-flex flex-row align-items-center mb-4">
                                            <i class="fas fa-envelope fa-lg me-3 fa-fw"></i>
                                            <div class="form-outline flex-fill mb-0">
                                                <input type="email" placeholder="Enter Email" name="email" id="form3Example3c" class="form-control" value="<?php echo htmlspecialchars($email ?? '', ENT_QUOTES); ?>">
                                                <?php if (!empty($errors['email'])) { ?>
                                                    <div class="error text-danger"><?php echo $errors['email']; ?></div>
                                                <?php } ?>
                                                <label class="form-label" for="form3Example3c">Your Email</label>
                                            </div>
                                        </div>
                                        <div class="d-flex flex-row align-items-center mb-4">
                                            <i class="fas fa-phone fa-lg me-3 fa-fw"></i>
                                            <div class="form-outline flex-fill mb-0">
                                                <input type="text" placeholder="Phone" name="phone" id="form3Example4cd" class="form-control" required value="<?php echo htmlspecialchars($phone ?? '', ENT_QUOTES); ?>">
                                                <?php if (!empty($errors['phone'])) { ?>
                                                    <div class="error text-danger"><?php echo $errors['phone']; ?></div>
                                                <?php } ?>
                                                <label class="form-label" for="form3Example4cd">Your phone</label>
                                            </div>
                                        </div>
                                        <div class="d-flex flex-row align-items-center mb-4">
                                            <i class="fas fa-lock fa-lg me-3 fa-fw"></i>
                                            <div class="form-outline flex-fill mb-0">
                                                <input type="password" placeholder="Enter password" name="password" id="form3Example4c" class="form-control" required>
                                                <?php if (!empty($errors['password'])) { ?>
                                                    <div class="error text-danger"><?php echo $errors['password']; ?></div>
                                                <?php } ?>
                                                <label class="form-label" for="form3Example4c">Password</label>
                                            </div>
                                        </div>
                                        <div class="d-flex flex-row align-items-center mb-4">
                                            <i class="fas fa-key fa-lg me-3 fa-fw"></i>
                                            <div class="form-outline flex-fill mb-0">
                                                <input type="password" placeholder="Confirm password" id="form3Example4cd" class="form-control" name="confirm_password" required>
                                                <?php if (!empty($errors['password2'])) { ?>
                                                    <div class="error text-danger"><?php echo $errors['password2']; ?></div>
                                                <?php } ?>
                                                <label class="form-label" for="form3Example4cd">Repeat your password</label>
                                            </div>
                                        </div>
                                        <div class="form-check d-flex justify-content-center mb-4">
                                            <input class="form-check-input me-2" type="checkbox" name="agree" id="form2Example3c">
                                            <label class="form-check-label" for="form2Example3c">
                                                I agree to the <a href="#!">terms and conditions</a>
                                            </label>
                                            <?php if (!empty($errors['agree'])) { ?>
                                                <div class="error text-danger"><?php echo $errors['agree']; ?></div>
                                            <?php } ?>
                                        </div>
                                        <div class="d-flex justify-content-center mx-4 mb-3 mb-lg-4">
                                            <button type="submit" name="submit" class="btn btn-primary btn-lg">Register</button>
                                        </div>
                                    </form>
                                </div>
                                <div class="col-md-10 col-lg-6 col-xl-7 d-flex align-items-center order-1 order-lg-2">
                                    <img src="https://mdbootstrap.com/img/Photos/new-templates/bootstrap-registration/draw1.png" class="img-fluid" alt="Sample image">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- MDB -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/8.0.0/mdb.min.js"></script>
</body>

</html>
