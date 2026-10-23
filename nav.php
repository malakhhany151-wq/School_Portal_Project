<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>weschool</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <style>
        * {
            box-sizing: border-box;
        }

        body {
            margin: 0;
            min-height: 100vh;
            font-family: Arial, sans-serif;
            background: linear-gradient(135deg, #f0f7ff, #ffffff);
        }

        /* Navbar */
        .navbar {
            background-color: #ffffff !important;
            padding: 16px 5%;
            box-shadow: 0 4px 15px rgba(0, 50, 100, 0.08);
            border-bottom: 3px solid #0d6efd;
        }

        .navbar-brand {
            font-size: 27px;
            font-weight: bold;
            color: #0755b8 !important;
            letter-spacing: 1px;
            transition: 0.3s;
            font-family: Georgia, 'Times New Roman', Times, serif;
        }

        .navbar-brand:hover {
            color: #135198 !important;
        }

        /* Buttons */
        .navbar .btn {
            padding: 10px 22px;
            border-radius: 8px;
            font-weight: 600;
            transition: 0.3s ease;
        }

        .btn-primary {
            background-color: #0d6efd;
            border-color: #0d6efd;
        }

        .btn-primary:hover {
            background-color: #084298;
            transform: translateY(-2px);
            box-shadow: 0 5px 12px rgba(13, 110, 253, 0.25);
        }

        .btn-success {
            background-color: #198754;
            border-color: #198754;
        }

        .btn-success:hover {
            background-color: #146c43;
            transform: translateY(-2px);
            box-shadow: 0 5px 12px rgba(25, 135, 84, 0.25);
        }

        /* Responsive */
        @media (max-width: 480px) {
            .navbar {
                padding: 14px 4%;
            }

            .navbar-brand {
                font-size: 21px;
            }

            .navbar .btn {
                padding: 8px 10px;
                font-size: 13px;
            }
        }
    </style>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">

            <a class="navbar-brand" href="#">We School</a>

            <div class="d-flex">
                <a class="btn btn-primary me-2" href="student.php">Student</a>
                <a class="btn btn-success" href="index1.php">Admin Dashboard</a>
            </div>
        </div>
    </nav>
</body>

</html>
