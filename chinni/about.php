<!DOCTYPE html>
<html lang="en">
<?php include 'head.html'; ?>
<head>
    <title>About Me </title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f0f0f0;
        }

      

        nav {
            display: flex;
            justify-content: center;
            background-color: #444;
            padding: 10px 0;
        }

        nav a {
            color: white;
            padding: 14px 20px;
            text-decoration: none;
            text-align: center;
        }

        nav a:hover {
            background-color: #ddd;
            color: black;
        }

        .content {
            padding: 20px;
            max-width: 800px;
            margin: auto;
            background-color: white;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        footer {
            background-color: #333;
            color: white;
            text-align: center;
            padding: 10px 0;
            position: fixed;
            bottom: 0;
            width: 100%;
        }

        .catch-up {
            text-align: center;
            margin-top: 20px;
        }

        .catch-up a {
            background-color: #444;
            color: white;
            padding: 10px 20px;
            text-decoration: none;
            border-radius: 4px;
        }

        .catch-up a:hover {
            background-color: #ddd;
            color: black;
        }
    </style>
</head>
<body>
   

    <div class="content">
        <h2>About Me</h2>
        <p>Hi, I'm Greeshma, currently pursuing my engineering degree at RMK Engineering College, Chennai. I am passionate about technology, coding, and engineering solutions that can impact the world positively.</p>
        <p>At RMK Engineering College, I am involved in various projects that span different domains of engineering. My interests include software development, data science, and embedded systems. I enjoy learning new skills and applying them to real-world problems.</p>
        <p>If you would like to know more about my projects or discuss potential collaborations, feel free to reach out to me!</p>

        <div class="catch-up">
            <a href="contact.php">Catch Up With Me</a>
        </div>
        <p>If you have any quries please ping me up!</p>
        <div class="catch-up">
            <a href="register.php">Update</a>
        </div>
    </div>

    <?php include 'footer.html'; ?>
</body>
</html>