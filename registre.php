<?php
include 'connect.php';
include 'heder.php';


if (isset($_POST["submit"])) {
    $fname = $_POST["name"];
    $email = $_POST["email"];
    $pass = $_POST["password"];
    $confirmPass = $_POST["con-password"];

    $result = mysqli_query($conn, "SELECT * FROM users WHERE email = '$email'");    
    if (mysqli_fetch_assoc($result)>0){

        echo "<script>alert('email is exist');</script>";
        
    }else{
        if ($pass !== $confirmPass) {
            echo "<script>alert('Passwords do not match');</script>";
            exit();
        }
        
            $query = "INSERT INTO users (username, email, password_user, date_inscr) VALUES ('$fname', '$email', '$pass', '1/12/123')";
        
            if (mysqli_query($conn, $query)) {
                echo "<script>alert('Insert successfully');</script>";
            } else {
                echo "Error: " . $query . "<br>" . mysqli_error($conn);
            }
            header("Location: login.php");
            exit();
    }


}
?>

<nav class="navbar navbar-expand-sm  bg-light border">
    <div class="container">
        <a class="navbar-brand" href="" >
         You<span>Contact</span>
        </a>
        <form class="form-inline" action="registre.php">
        <button class="btn btn-success" type="submit">sing-in</button>
    </form>
    </div>
</nav>

            <section class="py-5">
                <div class="container px-5">
                    <div class="bg-light rounded-4 py-5 px-4 px-md-5">
                        <div class="text-center mb-5">
                            <div class="feature bg-primary bg-gradient-primary-to-secondary text-white rounded-3 mb-3"><i class="bi bi-envelope"></i></div>
                            <h1 class="fw-bolder">Get in touch</h1>
                            <p class="lead fw-normal text-muted mb-0">Let's work together!</p>
                        </div>
                        <div class="row gx-5 justify-content-center">
                            <div class="col-lg-8 col-xl-6">
                                <form id="contactForm" data-sb-form-api-token="API_TOKEN" method="POST">
                                    <div class="form-floating mb-3">
                                        <input class="form-control" id="name" name="name" type="text" placeholder="Enter your name..." data-sb-validations="required" />
                                        <label for="name">Username</label>
                                        <div class="invalid-feedback" data-sb-feedback="name:required">A name is required.</div>
                                    </div>
                                    <div class="form-floating mb-3">
                                        <input class="form-control" id="email" type="email" name="email" placeholder="name@example.com" data-sb-validations="required,email" />
                                        <label for="email">Email address</label>
                                        <div class="invalid-feedback" data-sb-feedback="email:required">An email is required.</div>
                                        <div class="invalid-feedback" data-sb-feedback="email:email">Email is not valid.</div>
                                    </div>
                                    <div class="form-floating mb-3">
                                        <input type="password" name="password" class="form-control" id="inputPassword4" placeholder="Password">
                                        <label for="password">Password</label>
                                        <div class="invalid-feedback" data-sb-feedback="password:required">An assword is required.</div>
                                        <div class="invalid-feedback" data-sb-feedback="password:password">Password is not valid.</div>
                                    </div>
                                    <div class="form-floating mb-3">
                                        <input type="password" name="con-password" class="form-control" id="inputPassword4" placeholder="Password">
                                        <label for="con-password">Confirm password</label>
                                        <div class="invalid-feedback" data-sb-feedback="password:required">A confirm password is required.</div>
                                    </div>
                                    <button type="submit" name="submit" class="btn btn-primary">sing-up</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </main>
        <?php include 'footer.php'; ?>