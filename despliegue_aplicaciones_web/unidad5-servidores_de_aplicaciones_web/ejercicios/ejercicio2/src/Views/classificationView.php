<?php
    namespace Views;
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
    <link rel="stylesheet" href="/public/css/classification.css">
</head>

<body>
    <table>
        <tr>
            <th>Piloto</th>
            <th>Puntos</th>
        </tr>
        <?php
            foreach ($classification as $driver) {
                echo "<tr><td>" . htmlspecialchars($driver['name']) . "</td><td>" . htmlspecialchars($driver['total_points']) . "</td></tr>";
            }
        ?>
    </table>
    <div>
        <canvas id="chart" width="200" height="100"></canvas>
    </div>
    <script src="/public/assests/js/chart.js"></script>
    <script>
    const labelsValues = [
        <?php foreach ($teamClassification as $team) { echo '"' . htmlspecialchars($team['team']) . '",'; } ?>
    ];
    const dataValues = [<?php foreach ($teamClassification as $team) { echo $team['points'] . ','; } ?>];
    </script>
    <script src="/public/assests/js/graph.js"></script>
</body>

</html>