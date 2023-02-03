<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    require 'dbconnection.php';
    ?>
    <table class="table align-middle">
        <thead>
            <tr class="text-center">
                <th scope="col">cover</th>
                <th scope="col">nome</th>
                <th scope="col">cognome</th>


            </tr>
        </thead>
        <?php
        /*$query = "SELECT novel.*,CONCAT(author.first_name,' ',author.last_name) AS autore FROM novel INNER JOIN author ON novel.author=author.id"; */
        $query = "SELECT * FROM author";
        $result = $mysqli->query($query); ?>
        <tbody>
            <?php
            while ($row = $result->fetch_assoc()) {
                echo
                "<tr class='text-center'>
                <td><img src='assets/" . $row['src_propic'] . "'></td>
                <td>Nome " . $row['first_name'] . "</td>
                <td>Cognome " . $row['last_name'] . "</td>
                <td>Nascita " . $row['birth_date'] . "</td>
                <td>Morte " . $row['death_date'] . "</td>
            </tr>";
            }
            echo
            "</tbody>
            </table>";
            ?>
</body>

</html>