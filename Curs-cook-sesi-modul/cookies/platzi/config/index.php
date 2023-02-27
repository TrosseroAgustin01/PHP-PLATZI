<?php

setcookie(
    name: "subdomain_cookie",
    value: "Esta cookie solo está disponible en /configuracion",
    expires_or_options: time() + 60 * 60 * 24,
    path: "/prueba/Curs-cook-sesi-modul/cookies/platzi/config/index.php",
    domain: "localhost",
    secure: false,
    httponly: true
);

echo "<pre>";
var_dump($_COOKIE);
echo "</pre>";

?>