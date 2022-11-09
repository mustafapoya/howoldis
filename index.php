<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Website</title>
</head>
<body>
    <?php
        $db = new SQLite3('tech_db.db');
        $results = $db->query('SELECT tech_name FROM technologies');

        while ($row = $results->fetchArray()) {
            print($row['tech_name']);
            print("<br/>");
        }
    ?>
</body>
</html>
