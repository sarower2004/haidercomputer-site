<?php
session_start();
include("includes/db.php");

if (isset($_POST['login'])) {
    $email    = $_POST['email'];
    $password = $_POST['password'];

    // Check student login
    $student = $conn->query("SELECT * FROM students WHERE email='$email'");
    if ($student->num_rows > 0) {
        $row = $student->fetch_assoc();
        if (password_verify($password, $row['password'])) {
            $_SESSION['student'] = $email;
            header("Location: user/dashboard.php");
            exit();
        } else {
            $error = "Invalid password!";
        }
    }

    // Check admin login
    $admin = $conn->query("SELECT * FROM admins WHERE email='$email'");
    if ($admin->num_rows > 0) {
        $row = $admin->fetch_assoc();
        if (password_verify($password, $row['password'])) {
            $_SESSION['admin'] = $email;
            header("Location: admin/dashboard.php");
            exit();
        } else {
            $error = "Invalid password!";
        }
    }

    if (!isset($error)) {
        $error = "Email not found!";
    }
}
?>

<div class="container mt-3">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card" style="overflow:hidden;">
                <div class="card-heade login-title">Login</div>
                <div class="card-body">
                    <?php if(isset($error)) echo "<div class='alert alert-danger'>$error</div>"; ?>
                    <form method="POST">
                        <div class="mb-3">
                            <label>Email</label>
                            <input type="email" name="email" class="form-control" required>
                        </div>
                        <div class="mb-3">
                            <label>Password</label>
                            <input type="password" name="password" class="form-control" required>
                        </div>
                        <button type="submit" name="login" class="btn btn-primary">Login</button>
                        <a href="?id=register" class="btn btn-link">Register as Student</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
