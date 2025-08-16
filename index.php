<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>My First PHP Page</title>
    <style>
        body {
            /* Styles for the page background and layout */
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            margin: 0;
            background-color: #E8F5E9; /* Light green background */
            color: #333333; /* Dark gray text */
            font-family: 'Georgia', serif; /* A new, classic font */
        }

        .container {
            /* Styles for the rectangular box */
            background-color: #FFFFFF; /* White background */
            border: 2px solid #A5D6A7; /* A green border */
            border-radius: 12px;
            box-shadow: 0 6px 12px rgba(0, 0, 0, 0.15); /* A softer shadow */
            padding: 40px 60px;
            text-align: center;
            max-width: 650px;
            width: 90%;
            transition: transform 0.3s ease-in-out;
        }

        .container:hover {
            transform: translateY(-5px); /* Moves the box up slightly on hover */
        }

        h1 {
            color: #4CAF50; /* A vibrant green for the heading */
            font-family: 'Times New Roman', serif;
            font-weight: 700;
            font-style: normal;
            font-size: 3.5em; /* Larger heading size */
            letter-spacing: 1px; /* Adds space between letters */
            margin-bottom: 20px;
        }

        p {
            color: #66BB6A; /* A lighter green for the paragraph */
            font-size: 1.3em;
            line-height: 1.7;
            margin: 15px 0;
        }

        .info {
            font-size: 0.9em;
            color: #9e9e9eff; /* Light gray for additional info */
            margin-top: 30px;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>
            <?php echo "Hello, World!"; ?>
        </h1>
        <p>This page was dynamically generated using a PHP .</p>
        <p class="info">
            This is a simple example to show how a web server processes PHP code and sends the result to your browser.
        </p>
    </div>
</body>
</html>