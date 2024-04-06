<?php
session_start();
include 'server.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Form 📝</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.0.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php
    if (isset($_SESSION['message'])) {
        $message = $_SESSION['message'];
        $message_type = $_SESSION['message_type'];
        unset($_SESSION['message']);
        unset($_SESSION['message_type']);
        echo "<script>alert('$message');</script>";
    }
    ?>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">
                        <h4>Student Form 🎓</h4>
                    </div>
                    <div class="card-body">
                        <form id="contact-form" method="post" action="index.php" role="form">
                            <div class="mb-3">
                                <label for="form_name" class="form-label">Firstname</label>
                                <input type="text" class="form-control" id="form_name" name="name" placeholder="Enter your firstname" required>
                            </div>
                            <div class="mb-3">
                                <label for="form_lastname" class="form-label">Lastname</label>
                                <input type="text" class="form-control" id="form_lastname" name="secondname" placeholder="Enter your lastname" required>
                            </div>
                            <div class="mb-3">
                                <label for="form_email" class="form-label">Email 📧</label>
                                <input type="email" class="form-control" id="form_email" name="email" placeholder="Enter your email" required>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Gender 🚻</label>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="gender" id="male" value="Male" checked>
                                    <label class="form-check-label" for="male">Male</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="gender" id="female" value="Female">
                                    <label class="form-check-label" for="female">Female</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="gender" id="other" value="Prefer not to say">
                                    <label class="form-check-label" for="other">Prefer not to say</label>
                                </div>
                            </div>
                            <div class="mb-3">
                                <label for="form_course" class="form-label">Course Code & Description 📚</label>
                                <input type="text" class="form-control" id="form_course" name="course" placeholder="Enter course code" required>
                            </div>
                            <div class="mb-3">
                                <label for="form_description" class="form-label">Description 📝</label>
                                <textarea class="form-control" id="form_description" name="description" rows="3" placeholder="Enter description" required></textarea>
                            </div>
                            <div class="d-grid gap-2">
                                <button type="submit" class="btn btn-primary" name="submit">Submit 📨</button>
                                <button type="reset" class="btn btn-secondary">Clear 🗑️</button>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="text-center mt-3">
                    <a href="fetch.php" class="btn btn-info">View Table 📊</a>
                </div>
            </div>
        </div>
    </div>


    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.0.2/js/bootstrap.bundle.min.js"></script>
</body>
</html>