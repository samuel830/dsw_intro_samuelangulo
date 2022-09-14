<html>
    <head>
        <title>Tablas HTMl</title>
    </head>
    <body>
        <table border="1">
            <tr>
            <td><b>Fecha actual</b></td>
            <td><b>Hora actual formato 24 horas</b></td>
            </tr>

            <td><?php echo date('Y/m/d'); ?></td>
            <td><?php date_default_timezone_set("Europe/London");
            echo date('H:i:s'); ?></td>
        </table>
    </body>
</html>