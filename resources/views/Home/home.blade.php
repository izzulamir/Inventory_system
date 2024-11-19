<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inventory System Homepage</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f5e4d7; /* Nude background */
            margin: 0;
            padding: 0;
        }
        header {
            background-color: #8b5e3c; /* Brownish header */
            color: white;
            display: flex;
            justify-content: space-between; /* Aligns logo and buttons to the sides */
            align-items: center;
            padding: 1.5em 2em;
        }
        header h1 {
            margin: 0;
        }
        main {
            text-align: center;
            padding: 2em;
        }
        main h2 {
            color: #5a3c2d; /* Dark brown for headings */
            margin-bottom: 1em;
        }
        main p {
            color: #7c6a61; /* Muted brownish text */
            font-size: 1.1em;
            margin-bottom: 2em;
        }
        .auth-btn {
            background-color: #d6b8a5; /* Soft nude button */
            color: #5a3c2d; /* Dark brown text */
            padding: 10px 20px;
            font-size: 16px;
            border: none;
            cursor: pointer;
            border-radius: 5px;
            margin-left: 10px; /* Add space between buttons */
            transition: all 0.3s ease;
        }
        .auth-btn:hover {
            background-color: #caa590; /* Slightly darker nude on hover */
        }
    </style>
</head>
<body>
    <header>
        <h1>Smart Inventory System</h1>
        <div>
            <a href="{{ route('login') }}">
                <button class="auth-btn">Login</button>
            </a>
            <a href="{{ route('register') }}">
                <button class="auth-btn">Register</button>
            </a>
        </div>
    </header>

    <main>
        <h2>Your inventory management made easy</h2>
        <p>Track your inventory and make data-driven decisions with our smart inventory system.</p>
    </main>
</body>
</html>
