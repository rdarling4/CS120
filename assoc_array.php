<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Associative Array</title>
<style>
    body {
        font-family: monospace;
        padding: 20px;
    }
    .day {
        display: inline-block;
        width: 100px;
        font-weight: bold;
    }
</style>
</head>

<body>
<h2>Office Hours</h2>

<?php
$hours = array(
    'Monday'    => '9am - 4pm',
    'Tuesday'   => '9am - 4pm',
    'Wednesday' => '9am - 4pm',
    'Thursday'  => '9am - 4pm',
    'Friday'    => '9am - 4pm',
    'Saturday'  => '10am - 2pm',
    'Sunday'    => 'Closed'
);

foreach ($hours as $day => $time) {
    echo "<div><span class='day'>$day:</span> $time</div>";
}
?>

</body>
</html>