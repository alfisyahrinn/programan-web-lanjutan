<?php
$UserBetul = "adminadmin";
$PassBetul = "12345678";

$UserUser = $_POST["username"];
$PassUser = $_POST["password"];

$panjangUser = strlen($UserUser);
$panjangPass = strlen($PassUser);
if ($UserUser == "") {
  echo "
  <script>
  alert('Isilah Bang Username jangan kosong');
  document.location='index.php';
  </script>
  ";
} else if ($PassUser == "") {
  echo "
  <script>
  alert('Isilah Bang Password jangan kosong');
  document.location='index.php';
  </script>
  ";
} else if ($panjangUser < 8) {
  echo "
  <script>
  alert('Minimum Username 8 karakter');
  document.location='index.php';
  </script>
  ";
} else if ($panjangPass < 8) {
  echo "
  <script>
  alert('Minimum Password 8 karakter');
  document.location='index.php';
  </script>
  ";
} else if ($UserBetul == $UserUser && $PassBetul == $PassUser) {
  echo "
  <script>
  alert('Login Berhasil');
  document.location='index.php';
  </script>
  ";
} else {
  echo "
  <script>
  alert('Username atau Password Salah');
  document.location='index.php';
  </script>
  ";
}
