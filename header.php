<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>site</title>

    <style>
         {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: Arial, sans-serif;
            background-color: #f2f2f2;
            color: #333;
        }

        header {
            background-color: #222;
            color: white;
            padding: 20px 40px;

            display: flex;
            align-items: center;
            justify-content: space-between;
        }

        header h1 {
            font-size: 26px;
        }

        nav {
            display: flex;
            gap: 25px;
        }

        nav a {
            color: white;
            text-decoration: none;
            font-weight: bold;
            transition: 0.3s;
        }

        nav a:hover {
            color: #00bcd4;
        }

        main {
            max-width: 900px;
            margin: 50px auto;
            padding: 40px;

            background-color: white;
            border-radius: 10px;
            text-align: center;

            box-shadow: 0 3px 10px rgba(0, 0, 0, 0.1);
        }

        main h2 {
            font-size: 30px;
            color: #222;
        }

        footer {
            background-color: #222;
            color: white;
            text-align: center;
            padding: 20px;
            margin-top: 40px;
        }

        footer p {
            margin: 0;
            font-size: 14px;
        }

        main p {
            margin-top: 15px;
            line-height: 1.6;
            color: #666;
        }

        .card {
            margin-top: 30px;
            padding: 25px;
            background-color: #f8f8f8;
            border-radius: 10px;
        }

        .card h3 {
            margin-bottom: 10px;
            color: #222;
        }
    </style>
</head>

<body>

    <header>
        <h1>Meu site sobre os fatuis</h1>

        <nav>
            <a href="./index.php">DOTTORE</a>
            <a href="./sobre.php">CAPITANO</a>
        </nav>
        
    </header>