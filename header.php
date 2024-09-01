<?php
    require_once 'backend/db.php';
    require_once 'backend/display_business_contact_info.php';
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="css/style.css" />
    <!-- boxicons -->
    <link
      href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css"
      rel="stylesheet"
    />
    <!-- favicon cross-browser -->
    <link rel="shortcut icon" href="images/color_running_logo.png" />

    <!-- favicon IOS devices -->
    <link rel="apple-touch-icon" href="images/color_running_logo.png" />
    <title>Hair Salon</title>
  </head>
  <body>
  <section id="home">
      <nav>
        <a class="nav-logo" href="/">Logo</a>
        <div>
          <ul>
            <li>
              <a href="/">Home</a>
            </li>
            <li>
              <a href="about">About</a>
            </li>
            <li>
              <a href="services">Services</a>
            </li>
            <li>
              <a href="contact">Contact</a>
            </li>
            <li>
              <a href="/">Login</a>
            </li>
          </ul>
        </div>
        <div>
          <a class="book-appointment-btn" href="#">Book Appointment</a>
        </div>
      </nav>
    </section>