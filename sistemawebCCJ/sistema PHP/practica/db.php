<?php
session_start();

$conn = mysqli_connect(
  'localhost',
  'root',
  '',
  'consejos'
) or die(mysqli_erro($mysqli));

?>
