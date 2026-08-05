<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up - EVENTURE CEYLON</title>
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
            padding: 20px 0;
        }

        .register-container {
            background: white;
            border-radius: 10px;
            box-shadow: 0 10px 40px rgba(0,0,0,0.3);
            overflow: hidden;
            max-width: 900px;
            width: 100%;
        }

        .register-left {
            background: linear-gradient(135deg, var(--gold) 0%, #c9a227 100%);
            color: white;
            padding: 60px 40px;
            display: flex;
            flex-direction: column;
            justify-content: center;
            min-height: 100%;
        }

        .register-left h1 {
            font-size: 2.5rem;
            font-weight: bold;
            margin-bottom: 20px;
        }

        .register-left p {
            font-size: 1.1rem;
            line-height: 1.8;
            margin-bottom: 20px;
        }

        .register-left ul {
            list-style: none;
            padding: 0;
            margin-top: 30px;
        }

        .register-left ul li {
            margin-bottom: 15px;
            font-size: 1rem;
        }

        .register-left ul li:before {
            content: "✓ ";
            margin-right: 10px;
            font-weight: bold;
        }

        .register-right {
            padding: 60px 40px;
        }

        .register-right h2 {
            font-size: 1.8rem;
            color: var(--dark);
            margin-bottom: 10px;
        }

        .register-right p {
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

        .btn-register {
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
            width: 100%;
        }

        .btn-register:hover {
            background: #c9a227;
        }

        .terms-group {
            display: flex;
            align-items: flex-start;
            margin-bottom: 15px;
        }

        .terms-group input {
            margin-right: 8px;
            margin-top: 5px;
        }

        .terms-group label {
            color: #666;
            font-size: 0.95rem;
        }

        .terms-group a {
            color: var(--gold);
            text-decoration: none;
        }

        .login-link {
            text-align: center;
            margin-top: 20px;
            color: #666;
        }

        .login-link a {
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

        @media (max-width: 768px) {
            .register-container {
                margin: 20px;
            }

            .register-left {
                display: none;
            }

            .register-right {
                padding: 40px 20px;
            }
        }
    </style>
</head>
<body>

    <div class="back-home">
        <a href="/">← Back to Home</a>
    </div>

    <div class="register-container">
        <div class="row g-0">
            <!-- LEFT SIDE -->
            <div class="col-lg-5">
                <div class="register-left">
                    <h1>Join Us Today!</h1>
                    <p>Sign up for your EVENTURE CEYLON account to unlock amazing tour packages and seamless booking experience.</p>

                    <ul>
                        <li>Browse all tour packages</li>
                        <li>Easy online booking</li>
                        <li>Secure payment processing</li>
                        <li>Instant confirmation emails</li>
                        <li>Track your bookings</li>
                        <li>Write reviews & ratings</li>
                    </ul>
                </div>
            </div>

            <!-- RIGHT SIDE -->
            <div class="col-lg-7">
                <div class="register-right">
                    <h2>Create Account</h2>
                    <p>Fill in the form below to get started</p>

                    <form method="POST" action="/api/auth/register">
                        <div class="row">
                            <div class="col-md-6">
                                <label for="first_name" class="form-label">First Name</label>
                                <input type="text" id="first_name" name="first_name" class="form-control" placeholder="John" required>
                            </div>
                            <div class="col-md-6">
                                <label for="last_name" class="form-label">Last Name</label>
                                <input type="text" id="last_name" name="last_name" class="form-control" placeholder="Doe" required>
                            </div>
                        </div>

                        <label for="email" class="form-label">Email Address</label>
                        <input type="email" id="email" name="email" class="form-control" placeholder="your@email.com" required>

                        <label for="phone" class="form-label">Phone Number (Optional)</label>
                        <input type="tel" id="phone" name="phone" class="form-control" placeholder="+94 77 123 4567">

                        <label for="password" class="form-label">Password</label>
                        <input type="password" id="password" name="password" class="form-control" placeholder="Create a strong password" required>

                        <label for="password_confirmation" class="form-label">Confirm Password</label>
                        <input type="password" id="password_confirmation" name="password_confirmation" class="form-control" placeholder="Confirm your password" required>

                        <div class="terms-group">
                            <input type="checkbox" id="terms" name="terms" required>
                            <label for="terms">
                                I agree to the <a href="#">Terms and Conditions</a> and <a href="#">Privacy Policy</a>
                            </label>
                        </div>

                        <button type="submit" class="btn-register">Create Account</button>

                        <div class="login-link">
                            Already have an account? <a href="/login">Login Here</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
