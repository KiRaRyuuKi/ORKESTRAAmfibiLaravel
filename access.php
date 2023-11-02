<?php

session_start();
if (isset($_SESSION["user"])) {
  header("Location: home.php");
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>PayCars | Sign In & Sign Up</title>

     <!-- CSS -->
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
     <link rel="stylesheet" href="style.css" />
</head>

<body>
     <main>
          <div class="box">
               <div class="inner-box">

                    <!-- Content -->
                    <div class="forms-wrap">

                         <!-- Login -->

                         <?php
          if (isset($_POST["login"])) {
            $usernameOrEmailLogin = $_POST["usernameOrEmailLogin"];
            $passwordLogin = $_POST["passwordLogin"];

            require_once "database-connection.php";

            $sqlLogin = "SELECT * FROM data_pengguna WHERE username_pengguna = ? OR email_pengguna = ?";
            $statementLogin = mysqli_prepare($connection, $sqlLogin);
            mysqli_stmt_bind_param($statementLogin, "ss", $usernameOrEmailLogin, $passwordLogin);
            mysqli_stmt_execute($statementLogin);
            $resultLogin = mysqli_stmt_get_result($statementLogin);
            $user = mysqli_fetch_array($resultLogin, MYSQLI_ASSOC);

            if ($user) {
              if (password_verify($passwordLogin, $user["password_pengguna"])) {
                session_start();
                $_SESSION["user"] = "yes";
                header("Location: home.php");
                die();
              } else {
                echo "<div class='alert alert-danger'>Password does not match</div>";
              }
            } else {
              echo "<div class='alert alert-danger'>Email/Username not found</div>";
            }
          }
          ?>

                         <form action="login.php" method="post" autocomplete="off" class="sign-in-form">
                              <div class="logo">
                                   <img src="./img/logo.png" alt="easyclass" />
                                   <h4>PayCars</h4>
                              </div>

                              <div class="heading">
                                   <h2>Welcome Back</h2>
                                   <h6>Not registred yet?</h6>
                                   <a href="#" class="toggle">Sign Up</a>
                              </div>

                              <div class="actual-form">
                                   <div class="input-wrap">
                                        <div class="input-group mb-3">
                                             <input type="text" class="form-control form-control-lg bg-light fs-6"
                                                  placeholder="Masukkan Email/Username" name="usernameOrEmailLogin">
                                        </div>
                                   </div>

                                   <div class="input-wrap">
                                        <div class="input-group mb-1">
                                             <input type="password" class="form-control form-control-lg bg-light fs-6"
                                                  placeholder="Masukkan Password" name="passwordLogin">
                                        </div>
                                   </div>

                                   <div class="input-group mb-1 d-flex justify-content-between">
                                        <div class="form-check">
                                             <input type="checkbox" class="form-check-input" id="formCheck">
                                             <p for="formCheck" class="form-check-label text-secondary"><small>Remember
                                                       Me</small></p>
                                        </div>

                                        <div class="forgot">
                                             <small>
                                                  <a href="#">Forgot Password?</a>
                                             </small>
                                        </div>
                                   </div>

                                   <input type="submit" name="login" value="Sign In" class="sign-btn" />

                                   <button class="btn btn-lg btn-light w-100 fs-6">
                                        <img src="img/google.png" style="width:25px" class="me-2">
                                        <small>Sign In with Google</small>
                                   </button>

                                   <p class="text">
                                        Forgotten your password or you login datails?
                                        <a href="#">Get help</a> signing in
                                   </p>
                              </div>
                         </form>

                         <!-- Register -->

                         <?php
          if (isset($_POST["register"])) {
          $usernameRegister = $_POST["usernameRegister"];
          $emailRegister = $_POST["emailRegister"];
          $passwordRegister = $_POST["passwordRegister"];

          $errors = array();

          if (empty($usernameRegister) || empty($emailRegister) || empty($passwordRegister)) {
            array_push($errors, "All fields are required");
          }
          if (!filter_var($emailRegister, FILTER_VALIDATE_EMAIL)) {
            array_push($errors, "Email is not valid");
          }
          if (strlen($passwordRegister) < 8) {
            array_push($errors, "Password must be at least 8 characters long");
          }

          require_once "database-connection.php";

          $sqlCheckUsername = "SELECT * FROM data_pengguna WHERE username_pengguna = ?";
          $statementCheckUsername = mysqli_stmt_init($connection);
          mysqli_stmt_prepare($statementCheckUsername, $sqlCheckUsername);
          mysqli_stmt_bind_param($statementCheckUsername, "s", $usernameRegister);
          mysqli_stmt_execute($statementCheckUsername);
          $resultCheckUsername = mysqli_stmt_get_result($statementCheckUsername);

          if (mysqli_num_rows($resultCheckUsername) > 0) {
            array_push($errors, "Username already exists");
          }

            if (count($errors) > 0) {
              foreach ($errors as $error) {
                echo "<div class='alert alert-danger'>$error</div>";
              }
            } else {
              $sqlGetCurrenIdPengguna = "SELECT MAX(id_pengguna) AS max_id FROM data_pengguna";
              $resultCurrenIdPengguna = mysqli_query($connection, $sqlGetCurrenIdPengguna);

              if ($resultCurrenIdPengguna) {
                $rowNumber = mysqli_fetch_assoc($resultCurrenIdPengguna);
                $currentNumber = (int)$rowNumber['max_id'] + 1;
              } else {
                die("Pengeksekusian kueri gagal: " . mysqli_error($connection));
              }

              $nummberIdPengguna = "IDPGN" . str_pad($currentNumber, 7, '0', STR_PAD_LEFT);

              // if ($resultCurrenIdPengguna) {
              //   $rowNumber = mysqli_fetch_assoc($resultCurrenIdPengguna);
              //   if ($rowNumber !== false) {
              //     $currentNumber = (int)$rowNumber['max_id'] + 1;
              //     $setNumber = strval($currentNumber);
              //     $idPengguna = strlen($setNumber);

              //     for ($number = 0; $number < 7 - $idPengguna; $number++) {
              //       $setNumber = "0" . $setNumber;
              //     }

              //     $nummberIdPengguna = "IDPGN" . $setNumber;
              //   } else {
              //     die("Gagal mengambil ID maksimal dari database: " . mysqli_error($connection));
              //   }
              // } else {
              //   die("Pengeksekusian kueri gagal: " . mysqli_error($connection));
              // }

              $sqlRegister = "INSERT INTO data_pengguna (id_pengguna, username_pengguna, email_pengguna, password_pengguna) VALUES (?, ?, ?, ?)";
              $statementRegister = mysqli_stmt_init($connection);
              if (mysqli_stmt_prepare($statementRegister, $sqlRegister)) {
                $hashedPassword = password_hash($passwordRegister, PASSWORD_DEFAULT);
                mysqli_stmt_bind_param($statementRegister, "ssss", $nummberIdPengguna, $usernameRegister, $emailRegister, $hashedPassword);
                mysqli_stmt_execute($statementRegister);
              } else {
                die("Something went wrong");
              }
            }
          }
          ?>

                         <form action="login.php" method="post" autocomplete="off" class="sign-up-form">
                              <div class="logo">
                                   <img src="./img/logo.png" alt="easyclass" />
                                   <h4>PayCars</h4>
                              </div>

                              <div class="heading">
                                   <h2>Get Started</h2>
                                   <h6>Already have an account?</h6>
                                   <a href="#" class="toggle">Sign In</a>
                              </div>

                              <div class="actual-form">
                                   <div class="input-wrap">
                                        <div class="input-group mb-3">
                                             <input type="text" class="form-control form-control-lg bg-light fs-6"
                                                  placeholder="Masukkan Username" name="usernameRegister">
                                        </div>
                                   </div>

                                   <div class="input-wrap">
                                        <div class="input-group mb-3">
                                             <input type="text" class="form-control form-control-lg bg-light fs-6"
                                                  placeholder="Masukkan Email" name="emailRegister">
                                        </div>
                                   </div>

                                   <div class="input-wrap">
                                        <div class="input-group mb-1">
                                             <input type="password" class="form-control form-control-lg bg-light fs-6"
                                                  placeholder="Masukkan Password" name="passwordRegister">
                                        </div>
                                   </div>

                                   <input type="submit" name="register" value="Sign Up" class="sign-btn" />

                                   <button class="btn btn-lg btn-light w-100 fs-6">
                                        <img src="img/google.png" style="width:25px" class="me-2">
                                        <small>Sign In with Google</small>
                                   </button>

                                   <p class="text">
                                        By signing up, I agree to the
                                        <a href="#">Terms of Services</a> and
                                        <a href="#">Privacy Policy</a>
                                   </p>
                              </div>
                         </form>
                    </div>

                    <!--  -->

                    <div class="carousel">
                         <div class="images-wrapper">
                              <img src="./img/logo.png" class="image img-1 show" alt="" />
                              <img src="./img/image2.png" class="image img-2" alt="" />
                              <img src="./img/image3.png" class="image img-3" alt="" />
                         </div>

                         <div class="text-slider">
                              <div class="text-wrap">
                                   <div class="text-group">
                                        <h2>Create your own courses</h2>
                                        <h2>Customize as you like</h2>
                                        <h2>Invite students to your class</h2>
                                   </div>
                              </div>

                              <div class="bullets">
                                   <span class="active" data-value="1"></span>
                                   <span data-value="2"></span>
                                   <span data-value="3"></span>
                              </div>
                         </div>
                    </div>



               </div>
          </div>
     </main>

     <!-- Javascript -->
     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
          integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
          crossorigin="anonymous"></script>
     <script src="app.js"></script>

</body>

</html>