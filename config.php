<?php
ob_start();
session_start();

$servername = "localhost";
$username = "";
$password = "";

// Create connection
$conn = new mysqli("localhost", "root", "","magic_marvels");

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}












?>