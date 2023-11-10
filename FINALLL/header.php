<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PUPMSD</title>
    <link rel="stylesheet" href="style.css"> <!-- Add your CSS file here -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />    
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="bootstrap.min.css">
	<link rel="stylesheet" href="AdminLTE.min.css">
    <link rel="stylesheet" href="_all-skins.min.css">
</head>
<body>
    <header>
        <nav>
            <div class="container">
                <div class="logo">
                    <a href="#"><img src="logo.png" alt="logo"></a>
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
                    <li><a href="#">Inventory</a></li>
                    <li>
                        <a href="#">Forms</a>
                        <div class="dropdown-menu">
                        <ul>
                          <li><a href="form-supplies.php">Request for Medicines and Supplies</a></li>
                          <li><a href="form-equipments.php">Medical Equipments Inventory</a></li>
                          <li><a href="#">Matrix for Medical Clearance 2023</a></li>
                          <li><a href="check-up-form.php">Matrix for Medical Clearance 2023 with Findings</a></li>
                          <li><a href="#">Inventory of Medicines and Supplies</a></li>
                          <li><a href="#">Health Information Form for Students</a></li>
                          <li><a href="#">Accomplishment Report Template</a></li>
                        </ul>
                      </div>
                    </li>
                    <li><a href ="logout.php" onclick="return confirm('Are your sure you want to logout?');" class="user" style="text-decoration: none;"><i class="fa-solid fa-right-from-bracket"></i>Logout</a>
                    </li>
                </ul>
            </div>
        </nav>
    </header>
