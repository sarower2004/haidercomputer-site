<?php
session_start();
include("includes/db.php");

if (isset($_POST['register'])) {
    $name     = $_POST['name'];
    $email    = $_POST['email'];
    $phone    = $_POST['phone'];
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);

    $check = $conn->query("SELECT * FROM students WHERE email='$email'");
    if ($check->num_rows > 0) {
        $error = "Email already registered!";
    } else {
        $sql = "INSERT INTO students (name, email, phone, password) 
                VALUES ('$name', '$email', '$phone', '$password')";
        if ($conn->query($sql)) {
            $_SESSION['student'] = $email;
            header("Location: user/dashboard.php");
            exit();
        } else {
            $error = "Registration failed!";
        }
    }
}
?>
<section class="register-section">
    <div class="container mt-3">
        <div class="row justify-content-center">
            <div class="col-md-5">
                <div class="register-wrapper" style="overflow: hidden;">
                    <div class="register-title">Student Registration</div>
                    <div class="">
                        <?php if(isset($error)) echo "<div class='alert alert-danger'>$error</div>"; ?>
                        <form method="POST" class="register-items">
                            <div class="register-input">
                                <label>Name</label>
                                <input type="text" name="name" class="form-control" required>
                            </div>
                            <div class="register-input">
                                <label>Email</label>
                                <input type="email" name="email" class="form-control" required>
                            </div>
                            <div class="register-input">
                                <label>Phone</label>
                                <input type="text" name="phone" class="form-control">
                            </div>
                            <div class="register-input">
                                <label>Password</label>
                                <input type="password" name="password" class="form-control" required>
                            </div>
                            <button type="submit" name="register" class="btn btn-success register-btn">Register</button>
                            <a href="?id=login" class="btn btn-link">Already registered? Login</a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
