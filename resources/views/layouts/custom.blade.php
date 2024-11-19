<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inventory System Dashboard</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <style>
        body {
            font-family: 'Arial', sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f5e4d7; /* Nude background */
            color: #333;
        }

        /* Header */
        header {
            background-color: #8b5e3c; /* Brownish header */
            color: white;
            padding: 1rem 2rem;
            display: flex;
            justify-content: space-between;
            align-items: center;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }
        header h1 {
            font-size: 1.8rem;
            margin: 0;
            font-weight: bold;
        }

        /* Dropdown Menu */
        .dropdown {
            position: relative;
            display: inline-block;
        }

        .dropdown-content {
            display: none;
            position: absolute;
            background-color: #fff;
            min-width: 160px;
            box-shadow: 0 6px 12px rgba(0, 0, 0, 0.1);
            z-index: 1;
            right: 0;
            border-radius: 5px;
        }

        .dropdown:hover .dropdown-content {
            display: block;
        }

        .dropdown-content a {
            color: black;
            padding: 12px 16px;
            text-decoration: none;
            display: block;
            border-bottom: 1px solid #f1f1f1;
        }

        .dropdown-content a:hover {
            background-color: #f1f1f1;
        }

        /* Main Section */
        main {
            text-align: center;
            padding: 5rem 2rem;
        }
        main h2 {
            font-size: 2.5rem;
            margin-bottom: 1rem;
            color: #5a3c2d; /* Dark brown for heading */
        }
        main p {
            font-size: 1.2rem;
            margin-bottom: 2rem;
            color: #7c6a61; /* Muted brownish text */
        }
        .btn {
            display: inline-block;
            padding: 0.8rem 2rem;
            font-size: 1.1rem;
            font-weight: bold;
            color: white;
            text-decoration: none;
            border-radius: 50px;
            background: linear-gradient(90deg, #4CAF50, #087f23); /* Button with green gradient */
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            transition: all 0.3s ease;
        }
        .btn:hover {
            background: linear-gradient(90deg, #087f23, #4CAF50);
            box-shadow: 0 6px 8px rgba(0, 0, 0, 0.15);
        }

        /* Footer */
        footer {
            background-color: #5a3c2d; /* Dark brown footer */
            color: white;
            padding: 1rem 2rem;
            text-align: center;
            font-size: 0.9rem;
            position: fixed;
            bottom: 0;
            width: 100%;
        }

        /* Responsive Design */
        @media (max-width: 768px) {
            header {
                flex-direction: column;
                text-align: center;
                gap: 1rem;
            }
            main h2 {
                font-size: 2rem;
            }
            main p {
                font-size: 1rem;
            }
        }
    </style>
</head>
<body>
    <!-- Header -->
    <header>
        <h1> Smart  Inventory System</h1>
        <nav>
            @auth
                <div class="dropdown">
                    <button>{{ Auth::user()->name }}</button> <!-- User's name -->
                    <div class="dropdown-content">
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf
                            <button type="submit" style="background: none; border: none; width: 100%; padding: 12px 16px; text-align: left; color: black; cursor: pointer;">
                                Logout
                            </button>
                        </form>
                    </div>
                </div>
            @else
                <a href="{{ route('login') }}">Login</a>
                <a href="{{ route('register') }}">Register</a>
            @endauth
        </nav>
    </header>

    <!-- Main Section -->
    <main>
        <h2>Smart Inventory Management</h2>
        <p>Streamline your inventory tracking with our modern and efficient system.</p>
        @auth
            <a href="{{ route('dashboard') }}" class="btn">Go to Dashboard</a>
        @else
            <a href="{{ route('login') }}" class="btn">Get Started</a>
        @endauth
    </main>

    <!-- Footer -->
    <footer>
        <p>&copy; {{ date('Y') }} Inventory System. All rights reserved.</p>
    </footer>
</body>
</html>
