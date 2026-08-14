<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - EVENTURE CEYLON</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        :root {
            --gold: #D4AF37;
            --dark: #1a1a1a;
        }

        body {
            background: linear-gradient(135deg, #1a1a1a 0%, #2d2d2d 100%);
            min-height: 100vh;
            display: flex;
            align-items: center;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }

        .login-container {
            background: white;
            border-radius: 10px;
            box-shadow: 0 10px 40px rgba(0,0,0,0.3);
            overflow: hidden;
            max-width: 900px;
            width: 100%;
        }

        .login-left {
            background: linear-gradient(135deg, var(--gold) 0%, #c9a227 100%);
            color: white;
            padding: 60px 40px;
            display: flex;
            flex-direction: column;
            justify-content: center;
            min-height: 500px;
        }

        .login-left h1 {
            font-size: 2.5rem;
            font-weight: bold;
            margin-bottom: 20px;
        }

        .login-left p {
            font-size: 1.1rem;
            line-height: 1.8;
            margin-bottom: 20px;
        }

        .login-right {
            padding: 60px 40px;
            display: flex;
            flex-direction: column;
            justify-content: center;
        }

        .login-right h2 {
            font-size: 1.8rem;
            color: var(--dark);
            margin-bottom: 10px;
        }

        .login-right p {
            color: #666;
            margin-bottom: 30px;
        }

        .form-control {
            padding: 12px 15px;
            border: 1px solid #ddd;
            border-radius: 5px;
            margin-bottom: 15px;
            font-size: 1rem;
        }

        .form-control:focus {
            border-color: var(--gold);
            box-shadow: 0 0 0 0.2rem rgba(212, 175, 55, 0.25);
        }

        .btn-login {
            background: var(--gold);
            color: white;
            padding: 12px;
            border: none;
            border-radius: 5px;
            font-size: 1.1rem;
            font-weight: bold;
            cursor: pointer;
            transition: background 0.3s;
            margin-top: 10px;
        }

        .btn-login:hover {
            background: #c9a227;
        }

        .forgot-password {
            text-align: right;
            margin-bottom: 15px;
        }

        .forgot-password a {
            color: var(--gold);
            text-decoration: none;
            font-size: 0.95rem;
        }

        .forgot-password a:hover {
            text-decoration: underline;
        }

        .signup-link {
            text-align: center;
            margin-top: 20px;
            color: #666;
        }

        .signup-link a {
            color: var(--gold);
            text-decoration: none;
            font-weight: bold;
        }

        .back-home {
            position: absolute;
            top: 20px;
            left: 20px;
        }

        .back-home a {
            color: var(--gold);
            text-decoration: none;
            font-size: 1rem;
        }

        .checkbox-group {
            display: flex;
            align-items: center;
            margin-bottom: 15px;
        }

        .checkbox-group input {
            margin-right: 8px;
        }

        @media (max-width: 768px) {
            .login-container {
                margin: 20px;
            }

            .login-left {
                display: none;
            }

            .login-right {
                padding: 40px 20px;
            }
        }
    </style>
</head>
<body>

    <div class="back-home">
        <a href="/">← Back to Home</a>
    </div>

    <div class="login-container">
        <div class="row g-0">
            <!-- LEFT SIDE -->
            <div class="col-lg-6">
                <div class="login-left">
                    <h1>Welcome Back!</h1>
                    <p>Login to your EVENTURE CEYLON account to manage your bookings, track your reservations, and plan your next adventure in Sri Lanka.</p>

                    <div style="margin-top: 40px;">
                        <h5 style="margin-bottom: 15px;">Don't have an account?</h5>
                        <a href="/register" class="btn btn-outline-light btn-lg">Sign Up Now</a>
                    </div>
                </div>
            </div>

            <!-- RIGHT SIDE -->
            <div class="col-lg-6">
                <div class="login-right">
                    <h2>Login</h2>
                    <p>Enter your credentials below</p>

                    <form method="POST" action="/api/auth/login">
                        <label for="email" class="form-label">Email Address</label>
                        <input type="email" id="email" name="email" class="form-control" placeholder="your@email.com" required>

                        <label for="password" class="form-label mt-3">Password</label>
                        <input type="password" id="password" name="password" class="form-control" placeholder="Enter your password" required>

                        <div class="checkbox-group">
                            <input type="checkbox" id="remember" name="remember">
                            <label for="remember">Remember me</label>
                        </div>

                        <div class="forgot-password">
                            <a href="/forgot-password">Forgot Password?</a>
                        </div>

                        <button type="submit" class="btn-login w-100">Login</button>

                        <div class="signup-link">
                            Don't have an account? <a href="/register">Sign Up Here</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
