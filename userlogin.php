
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>

    <!-- Font Awesome -->
    <script src="https://kit.fontawesome.com/36a236c794.js" crossorigin="anonymous"></script>

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@400;600&family=Source+Sans+Pro:wght@300;600&display=swap" rel="stylesheet">

    <!-- Custom CSS -->
    <style>
        body {
            background: url('bgs/bg10.jpg') no-repeat center center fixed;
            background-size: cover;
            font-family: 'Source Sans Pro', sans-serif;
        }

        .cont_card {
            background-color: #ffffffdd;
            border-radius: 15px;
            padding: 30px;
            box-shadow: 0 0 15px rgba(0, 0, 0, 0.4);
        }

        .lbl {
            font-weight: 600;
            color: #003366;
            font-size: 16px;
        }

        .cont_input {
            width: 100%;
            padding: 10px;
            border: 2px solid #003366;
            border-radius: 8px;
            font-size: 16px;
            margin-top: 5px;
            margin-bottom: 15px;
        }

        .cont_btn {
            background-color: #003366;
            color: yellow;
            padding: 12px;
            font-size: 18px;
            border: none;
            border-radius: 8px;
            transition: background-color 0.3s ease;
        }

        .cont_btn:hover {
            background-color: #0055aa;
        }

        .text-center img {
            width: 25%;
            margin-bottom: 20px;
        }

        .bold5 {
            font-weight: 600;
        }

        .txtc {
            text-align: center;
        }
    </style>
</head>

<body>

    <section class="lgn_section w-100">
        <div class="container h-100">
            <div class="row justify-content-center" style="margin-top: 6rem;">
                <!-- Form Section -->
                <div class="col-md-4 cont_card">
                    <!-- Logo -->
                    <div class="text-center">
                        <img src="prject_img/BE-logo.png" alt="Logo">
                    </div>

                    <!-- Login Form -->
<form id="loginForm" action="checkuserlogin.php" method="post">
    <div class="mb-3">
        <label for="user" class="lbl">Student Email:</label>
        <input type="email" id="email" class="cont_input" name="n" placeholder="Enter email" required>
    </div>
    <div class="mb-3">
        <label for="pass" class="lbl">Password:</label>
        <input type="password" class="cont_input" name="p" placeholder="Enter password" required>
    </div>
    <div class="text-center">
        <button type="submit" class="cont_btn w-100">Login</button>
    </div>
</form>

<script>
document.getElementById('loginForm').addEventListener('submit', function(event) {
    const emailInput = document.getElementById('email').value.trim();
    const domain = "@novaliches.sti.edu.ph";

    if (!emailInput.endsWith(domain)) {
        alert("Please use an email address ending with " + domain);
        event.preventDefault();  // stop form submission
    }
});
</script>
                    <!-- End Login Form -->
                </div>
            </div>
        </div>
    </section>

</body>

</html>
