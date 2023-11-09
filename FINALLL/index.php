<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Your Startup Name</title>
    <link rel="stylesheet" href="style.css"> <!-- Add your CSS file here -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />    
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
</head>
<body>
    <header>
        <nav>
            <div class="container">
                <div id="logo">
                    <a href="#"><img src="pup-logo.png" alt="logo"><h1>PUPMSD</h1></a>
                </div>
                <ul>
                    <li><a href="index.php">Home</a></li>
                    <li>
                      <a href="my-patients.php">My Patients</a>
                      <div class="dropdown-menu">
                        <ul>
                          <li><a href="check-up-form.php">Check Up Form</a></li>
                          <li><a href="#">Patient Medical Chart</a></li>
                          <li><a href="#">Patient History</a></li>
                        </ul>
                      </div>
                    </li>
                    <li><a href="#">Appointments</a></li>
                    <li><a href="#">Inventory</a></li>
                    <li><a href="#">Forms</a></li>
                    <li><a href ="logout.php" onclick="return confirm('Are your sure you want to logout?');" class="user" style="text-decoration: none;"><i class="fa-solid fa-right-from-bracket"></i>Logout</a>
                    </li>
                </ul>
            </div>
        </nav>
    </header>

    <section id="hero">
        <div class="container">
            <h2>Welcome to Your Startup</h2>
            <p>Your compelling value proposition or tagline goes here.</p>
            <a href="#contact" class="cta-button">Get Started</a>
        </div>
    </section>

    <section id="features">
        <div class="container">
            <h2>Our Features</h2>
            <div class="feature">
                <img src="feature1.jpg" alt="Feature 1">
                <h3>Feature 1</h3>
                <p>Description of feature 1.</p>
            </div>
            <div class="feature">
                <img src="feature2.jpg" alt="Feature 2">
                <h3>Feature 2</h3>
                <p>Description of feature 2.</p>
            </div>
            <div class="feature">
                <img src="feature3.jpg" alt="Feature 3">
                <h3>Feature 3</h3>
                <p>Description of feature 3.</p>
            </div>
        </div>
    </section>

    <section id="about">
        <div class="container">
            <h2>About Us</h2>
            <p>A brief description of your startup and its mission or vision.</p>
        </div>
    </section>

    <section id="contact">
        <div class="container">
            <h2>Contact Us</h2>
            <p>Have questions or need more information? Contact us below.</p>
            <form>
                <input type="text" placeholder="Name" required>
                <input type="email" placeholder="Email" required>
                <textarea placeholder="Message" required></textarea>
                <button type="submit">Submit</button>
            </form>
        </div>
    </section>

    <footer>
        <div class="container">
            <p>&copy; 2023 Polytechnic University of the Philippines. All rights reserved.</p>
        </div>
    </footer>
</body>
</html>
