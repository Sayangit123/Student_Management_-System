<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>404 Page Not Found</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap 4 CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body {
            background-color: #f8f9fa;
        }
        .error-container {
            height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            flex-direction: column;
            text-align: center;
        }
        .error-code {
            font-size: 120px;
            font-weight: 700;
            color: #dc3545;
        }
        .error-message {
            font-size: 24px;
            margin-bottom: 20px;
        }
        .btn-home {
            padding: 10px 20px;
        }
    </style>
</head>
<body>

<div class="error-container">
    <div class="error-code">404</div>
    <div class="error-message">Oops! Page Not Found</div>
    <a href="{{url('/home')}}" class="btn btn-danger btn-home">Go to Homepage</a>
</div>

</body>
</html>