<!DOCTYPE html>
<html lang="en">
<?php include 'head.html'; ?>
<head>
    <title>Contact Me </title>
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

        .contact-info {
            margin-bottom: 20px;
        }

        .contact-info h2 {
            margin-top: 0;
        }

        .contact-info p {
            margin: 5px 0;
        }

        .map {
            text-align: center;
            margin-top: 20px;
        }

        .map iframe {
            width: 100%;
            height: 400px;
            border: none;
            border-radius: 8px;
        }

       
    </style>
</head>
<body>
    
    <div class="content">
        <div class="contact-info">
            <h2>Contact Information</h2>
            <p><strong>Name:</strong> Greeshma</p>
            <p><strong>Email:</strong> <a href="mailto:Greeshma@example.com">Greeshma@example.com</a></p>
            <p><strong>Phone:</strong> +91-1234567890</p>
        </div>

        <div class="map">
            <h2>My Location</h2>
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3877.3396067490394!2d79.42007567360196!3d13.637094099941924!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3a4d4bd9bab0ec7d%3A0xd83af590893ea566!2sLenskart.com%20at%20VV%20Mahal%20Road%2C%20Tirupati!5e0!3m2!1sen!2sin!4v1718812453570!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe> ">
        </div>
    </div>
    <?php include 'footer.html'; ?>
</body>
</html>