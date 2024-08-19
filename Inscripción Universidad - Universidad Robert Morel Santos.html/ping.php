<?php
function pingRepl() {
    $url = "https://your-repl-name.your-username.repl.co"; // Reemplaza con tu URL real

    $ch = curl_init($url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_TIMEOUT, 10);
    curl_setopt($ch, CURLOPT_HEADER, false);

    $response = curl_exec($ch);
    curl_close($ch);

    if ($response) {
        echo "Ping successful!\n";
    } else {
        echo "Ping failed!\n";
    }
}

// Llama a la función ping cada 5 minutos
while (true) {
    pingRepl();
    sleep(300); // Pausa por 300 segundos (5 minutos)
}
