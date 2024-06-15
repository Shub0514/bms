<?php





?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product Return</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            background-color: #f0f0f0; /* Change background color as needed */
        }

        header {
            background-color: #333;
            color: white;
            text-align: center;
            padding: 1em;
        }

        section {
            max-width: 800px;
            margin: 2em auto;
            padding: 1em;
            background-color: red; /* Change background color as needed */
            border-radius: 30px; /* Set border radius */
        }

        form {
            display: flex;
            flex-direction: column;
        }

        label {
            margin-bottom: 0.5em;
        }

        input, textarea {
            margin-bottom: 1em;
            padding: 0.5em;
            border: 1px solid #ccc; /* Add border as needed */
            border-radius: 5px; /* Set border radius */
        }

        input[type="submit"] {
            background-color: #333;
            color: white;
            cursor: pointer;
        }

        footer {
            background-color: #333;
            color: white;
            text-align: center;
            padding: 1em;
            position: fixed;
            bottom: 0;
            width: 100%;
        }
    </style>
</head>
<body>

    <header>
        <h1>Product Return Page</h1>
    </header>

    <section>
        <form>
            <label for="orderNumber">Order Number:</label>
            <input type="text" id="orderNumber" name="orderNumber" required>

            <label for="returnId">Return ID:</label>
            <input type="text" id="returnId" name="returnId" required>

            <label for="sdnPrice">SDN Price:</label>
            <input type="text" id="sdnPrice" name="sdnPrice" required>

            <label for="reason">Reason for Return:</label>
            <textarea id="reason" name="reason" rows="4" required></textarea>

            <label for="comments">Additional Comments:</label>
            <textarea id="comments" name="comments" rows="4"></textarea>

            <input type="submit" value="Submit Return">
        </form>
    </section>

    <footer>
        &copy; 2023 Your Company Name
    </footer>

</body>
</html>