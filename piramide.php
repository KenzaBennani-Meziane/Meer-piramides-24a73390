<!DOCTYPE html>
<head>
</head>
<style>
.white {
    background-color: #ffffff;
    width: 100px;
    height: 100px;
}

.black {
    background-color: #000000;
    width: 100px;
    height: 100px;
}

tr {
    border-style: solid;
}

</style>
<body>
<table>
<?php



for ($tr = 0; $tr<10; $tr++) {
    echo "<tr>";
    for ($td = 0; $td<$tr; $td++) {
            echo "<td class='black'></td>";
    }
    echo "</tr>";
}
?>
</table>
</body>
</html>