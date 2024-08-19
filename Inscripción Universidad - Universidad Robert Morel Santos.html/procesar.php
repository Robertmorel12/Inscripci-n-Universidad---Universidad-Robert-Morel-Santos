<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Aquí se procesan los datos enviados desde el formulario.

    // Mostrar la página de agradecimiento
    echo "<!DOCTYPE html>
    <html lang='es'>
    <head>
        <meta charset='UTF-8'>
        <meta name='viewport' content='width=device-width, initial-scale=1.0'>
        <title>Gracias - Universidad Robert Morel Santos</title>
        <link rel='stylesheet' href='estilos.css'>
        <script>
            // Redirigir a la página de inicio después de 15 segundos
            setTimeout(function(){
                window.location.href = 'index.html';
            }, 15000);
        </script>
    </head>
    <body>
        <main>
            <h1>¡Gracias por completar tu formulario de inscripción!</h1>
            <p>Nos complace informarte que hemos recibido tu solicitud de ingreso a la Universidad Robert Morel Santos. Tu interés en formar parte de nuestra comunidad académica es muy importante para nosotros. A partir de este momento, comenzaremos a procesar tu información para asegurarnos de que todo esté en orden.</p>
            <p>Serás redirigido a la página de inicio en <span id='contador'>15</span> segundos.</p>
        </main>
        <footer>
            <p>&copy; 2024 Universidad Robert Morel Santos. Todos los derechos reservados.</p>
        </footer>
        <script>
            // Contador regresivo de 15 segundos
            let tiempo = 15;
            let contador = document.getElementById('contador');
            setInterval(function(){
                if (tiempo > 0) {
                    tiempo--;
                    contador.textContent = tiempo;
                }
            }, 1000);
        </script>
    </body>
    </html>";
}
?>
