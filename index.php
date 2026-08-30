<?php
/**
 * AICYBER 2026 - International Conference on AI-Driven Cybersecurity
 * Main Entry Point
 */

// Set timezone for countdown calculations
date_default_timezone_set('Asia/Kolkata');

// Include configuration and helpers
require_once 'includes/config.php';
require_once 'includes/helpers.php';

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>AICYBER 2026 — International Conference on AI-Driven Cybersecurity</title>
  
  <!-- External Fonts & Icons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" referrerpolicy="no-referrer">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link href="https://fonts.googleapis.com/css2?family=Fraunces:opsz,wght@9..144,400;9..144,500;9..144,600;9..144,700&family=Inter:wght@400;500;600;700;800&family=IBM+Plex+Mono:wght@400;500;600&display=swap" rel="stylesheet">
  
  <!-- Custom Stylesheet -->
  <link rel="stylesheet" href="assets/css/styles.css">
</head>
<body>

  <!-- NAV -->
  <?php include 'includes/navigation.php'; ?>

  <!-- HERO -->
  <?php include 'includes/hero.php'; ?>

  <!-- ABOUT -->
  <?php include 'includes/about.php'; ?>

  <!-- TRACKS -->
  <?php include 'includes/tracks.php'; ?>

  <!-- DATES -->
  <?php include 'includes/dates.php'; ?>

  <!-- DETAILS -->
  <?php include 'includes/details.php'; ?>

  <!-- REGISTRATION -->
  <?php include 'includes/registration.php'; ?>

  <!-- VENUE -->
  <?php include 'includes/venue.php'; ?>

  <!-- SPONSORS -->
  <?php include 'includes/sponsors.php'; ?>

  <!-- COMMITTEE -->
  <?php include 'includes/committee.php'; ?>

  <!-- CONTACT -->
  <?php include 'includes/contact.php'; ?>

  <!-- FOOTER -->
  <?php include 'includes/footer.php'; ?>

  <!-- Custom JavaScript File -->
  <script src="assets/js/script.js"></script>
</body>
</html>
