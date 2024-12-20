<!DOCTYPE html>
<html lang="en">
<link rel="icon" type="image/png" href="static/favicon.ico">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FixHub - Contact Us</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <?php include 'header.php'; ?>

    <section class="contact-section">
        <h1>Contact Us</h1>
        <form action="mailto:contact@fixhub.com" method="post" enctype="text/plain">
            <div class="form-group">
                <label for="name">Your Name</label>
                <input type="text" id="name" name="name" required>
            </div>
            <div class="form-group">
                <label for="email">Your Email</label>
                <input type="email" id="email" name="email" required>
            </div>
            <div class="form-group">
                <label for="message">Your Message</label>
                <textarea id="message" name="message" rows="5" required></textarea>
            </div>
            <button type="submit" class="btn">Send Message</button>
        </form>
    </section>

    <footer>
        &copy; <?php echo date("Y"); ?> FixHub. All rights reserved.
    </footer>

</body>
</html>
