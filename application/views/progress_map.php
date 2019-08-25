<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous" defer></script>
    <title>Carte du cheminement</title>
</head>
<body>
    Carte du cheminement.
    <table>
        <tr>
            <th>Sigle</th>
            <th>Nom</th>
            <th>Crédits</th>
        </tr>
        <?php foreach($courses as $course): ?>
            <tr>
                <td><?= $course->sigle ?></td>
                <td><?= $course->name ?></td>
                <td><?= $course->credits ?></td>
            </tr>
        <?php endforeach ?>
    </table>
</body>
</html>