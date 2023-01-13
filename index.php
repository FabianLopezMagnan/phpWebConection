<html>
  <head>
    <title>PHP Test</title>
  </head>
  <body>
<?php

$mysqli = mysqli_init();
$mysqli->ssl_set(NULL, NULL, "/etc/ssl/certs/ca-certificates.crt", NULL, NULL);
$mysqli->real_connect("us-east.connect.psdb.cloud","26c9hrgzylhckwk9mmps","pscale_pw_G8EgcJt1JAffrm1TLpOSuaTGeUj6xcMkjmcnpUfTMJQ", "prueba");
// Verifica la conexión
if ($mysqli->connect_error) {
    die("Error de conexión: " . $conn->connect_error);
} 
echo "Conexión exitosa";

$mysqli->close();
?>
    <!--
    This script places a badge on your repl's full-browser view back to your repl's cover
    page. Try various colors for the theme: dark, light, red, orange, yellow, lime, green,
    teal, blue, blurple, magenta, pink!
    -->
    <script src="https://replit.com/public/js/replit-badge.js" theme="blue" defer></script> 
  </body>
</html>