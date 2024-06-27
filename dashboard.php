<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard - Home</title>
    <style>
        /* General Reset */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f9;
            color: #333;
            line-height: 1.6;
        }

        .wrapper {
            display: flex;
            flex-direction: column;
            min-height: 100vh;
        }

        nav {
            background-color: #333;
            color: #fff;
            display: flex;
            justify-content: space-between;
            padding: 1rem;
        }

        nav .left, nav .right {
            display: flex;
            align-items: center;
        }

        nav .left ul {
            list-style: none;
            display: flex;
        }

        nav .left ul li, nav .right a {
            margin-left: 1rem;
        }

        nav .left ul a, nav .right a {
            color: #fff;
            text-decoration: none;
            padding: 0.5rem 1rem;
            transition: background-color 0.3s;
        }

        nav .left ul a:hover, nav .right a:hover {
            background-color: #575757;
            border-radius: 5px;
        }

        .hero {
            background-color: #333;
            color: #fff;
            padding: 5rem 1rem;
            text-align: center;
        }

        .hero h1 {
            margin-bottom: 1rem;
            font-size: 3rem;
        }

        .hero p {
            font-size: 1.2rem;
        }

        .features {
            display: flex;
            justify-content: space-around;
            padding: 2rem 1rem;
            background-color: #fff;
        }

        .feature {
            text-align: center;
            max-width: 300px;
        }

        .feature img {
            max-width: 100%;
            height: auto;
        }

        .feature h3 {
            margin: 1rem 0;
        }

        .feature p {
            color: #666;
        }

        footer {
            background-color: #333;
            color: #fff;
            text-align: center;
            padding: 1rem;
            margin-top: auto;
        }
    </style>
</head>
<body>
    <div class="wrapper">
        <nav>
            <div class="left">
                <ul>
                    <li><a href="">Home</a></li>
                    <li><a href="">Add Admin</a></li>
                    <li><a href="">Recipe</a></li>
                    <li><a href="">User</a></li>
                </ul>
            </div>
            <div class="right">
                <a href="">Profile</a>
                <a href="">Logout</a>
            </div>
        </nav>

        <section class="hero">
            <h1>Welcome to the Admin Dashboard</h1>
            <p>Manage your application efficiently with our intuitive admin interface.</p>
        </section>

        <section class="features">
            <div class="feature">
                <img src="https://via.placeholder.com/300" alt="Feature 1">
                <h3>Feature 1</h3>
                <p>Description of feature 1. This section explains what this feature is about.</p>
            </div>
            <div class="feature">
                <img src="https://via.placeholder.com/300" alt="Feature 2">
                <h3>Feature 2</h3>
                <p>Description of feature 2. This section explains what this feature is about.</p>
            </div>
            <div class="feature">
                <img src="https://via.placeholder.com/300" alt="Feature 3">
                <h3>Feature 3</h3>
                <p>Description of feature 3. This section explains what this feature is about.</p>
            </div>
        </section>

        <footer>
            <p>&copy; 2024 Admin Dashboard. All rights reserved.</p>
        </footer>
    </div>
</body>
</html>
