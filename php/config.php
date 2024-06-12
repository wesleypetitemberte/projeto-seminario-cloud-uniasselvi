<?php 
  define("HOST", "localhost");
  define("USER", "root");
  /* define("PASS", ""); usem esse aqui */
  define("PASS", "");
  define("DB", "locadora-games");

  $conn = new mysqli(HOST, USER, PASS, DB);