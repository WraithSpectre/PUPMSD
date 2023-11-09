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
                    <a href="#"><img src="images/pup-logo.png" alt="logo"><h1>PUPMSD</h1></a>
                </div>
                <ul>
                    <li><a href="#">Home</a></li>
                    <li>
                      <a href="my-patients.php">My Patients</a>
                      <div class="dropdown-menu">
                        <ul>
                          <li><a href="check-up-form.html">Check Up Form</a></li>
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
