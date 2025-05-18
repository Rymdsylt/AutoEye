<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AutoEye - Mathematical Algorithms</title>
    <link href="/autoeye/css/style.css" rel="stylesheet">
    <link href="/autoeye/css/bootstrap.min.css" rel="stylesheet">    <style>
        :root {
            --primary-dark: #121212;
            --primary-black: #1E1E1E;
            --secondary-black: #262626;
            --accent-yellow: #FFD700;
            --bright-yellow: #FFFF00;
            --dark-yellow: #B8860B;
            --neon-yellow: #DFFF00;
        }
        
        body {
            background-color: var(--primary-dark);
            color: white;
        }
        
        .navbar {
            background: linear-gradient(135deg, var(--primary-dark), var(--secondary-black));
            border-bottom: 2px solid var(--accent-yellow);
        }

        .navbar-brand, .nav-link {
            color: var(--accent-yellow) !important;
        }

        .nav-link:hover {
            color: var(--bright-yellow) !important;
        }
        
        .container {
            margin-top: 2rem;
        }
        
        .card {
            background: linear-gradient(135deg, var(--primary-black), var(--secondary-black));
            margin-bottom: 1.5rem;
            box-shadow: 0 0 15px rgba(255, 215, 0, 0.1);
            border: 1px solid var(--dark-yellow);
            transition: all 0.3s ease;
        }
          .card:hover {
            transform: translateY(-5px);
            box-shadow: 0 5px 20px rgba(255, 215, 0, 0.2);
        }

        .card-body {
            color: white;
            position: relative;
            overflow: hidden;
        }
        
        /* Ripple effect */
        .ripple {
            position: absolute;
            background: rgba(255, 215, 0, 0.3);
            transform: translate(-50%, -50%);
            pointer-events: none;
            border-radius: 50%;
            animation: ripple-animation 1s linear;
        }

        @keyframes ripple-animation {
            0% {
                width: 0;
                height: 0;
                opacity: 0.5;
            }
            100% {
                width: 500px;
                height: 500px;
                opacity: 0;
            }
        }

        /* Form focus effects */
        .form-control:focus {
            animation: input-focus 0.3s ease-out;
        }

        @keyframes input-focus {
            0% { transform: scale(1); }
            50% { transform: scale(1.02); }
            100% { transform: scale(1); }
        }

        /* Card loading shimmer effect */
        .card::before {
            content: '';
            position: absolute;
            top: 0;
            right: 0;
            bottom: 0;
            left: 0;
            background: linear-gradient(
                to right,
                transparent 0%,
                rgba(255, 215, 0, 0.1) 50%,
                transparent 100%
            );
            animation: shimmer 1.5s infinite;
            transform: skewX(-20deg);
        }

        .card-title {
            color: var(--accent-yellow);
        }

        .btn-primary {
            background: linear-gradient(135deg, var(--accent-yellow), var(--dark-yellow));
            border: none;
            color: var(--primary-dark);
            font-weight: bold;
            transition: all 0.3s ease;
        }
        
        .btn-primary:hover {
            background: linear-gradient(135deg, var(--bright-yellow), var(--accent-yellow));
            transform: translateY(-2px);
        }

        .form-control {
            background-color: var(--primary-black);
            border: 1px solid var(--dark-yellow);
            color: white;
        }

        .form-control:focus {
            background-color: var(--primary-black);
            border-color: var(--accent-yellow);
            color: white;
            box-shadow: 0 0 0 0.25rem rgba(255, 215, 0, 0.25);
        }

        .result-box {
            background-color: var(--primary-black) !important;
            border: 1px solid var(--dark-yellow);
            color: white;
        }

        .table {
            color: white;
        }

        .alert-danger {
            background-color: var(--primary-black);
            color: #ff6b6b;
            border-color: #ff6b6b;
        }

        /* Animation for cards */
        @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translateY(20px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .card {
            animation: fadeInUp 0.6s ease-out forwards;
        }

        .row > div:nth-child(2) .card {
            animation-delay: 0.2s;
        }

        .row > div:nth-child(3) .card {
            animation-delay: 0.4s;
        }
    </style>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark mb-4">
        <div class="container-fluid">
            <a class="navbar-brand" href="/autoeye">AutoEye</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="/autoeye">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/autoeye/collatz.php">Collatz</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/autoeye/fibonacci.php">Fibonacci</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/autoeye/euclidean.php">Euclidean</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/autoeye/tribonacci.php">Tribonacci</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/autoeye/lucas.php">Lucas</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/autoeye/pascal.php">Pascal</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="container">
