<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HOW-OLD-IS</title>
    <link rel="stylesheet" href="library/plugin/bootstrap/css/bootstrap.min.css" />
    <link rel="stylesheet" href="library/plugin/font-awesome/css/fontawesome.min.css" />
    <link rel="stylesheet" href="library/plugin/font-awesome/css/brands.min.css" />
    <link rel="stylesheet" href="library/plugin/font-awesome/css/solid.min.css" />

    <link rel="stylesheet" href="library/css/style.css" />

    <script src="library/plugin/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="library/js/script.js"></script>
</head>

<body>
    <header>
        <div class="px-3 py-2 text-bg-dark">
            <div class="container">
                <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
                    <a href="/" class="d-flex align-items-center my-2 my-lg-0 me-lg-auto text-white text-decoration-none">
                        <img src="library/img/golbarg.png" class="bi me-2" alt="golbarg logo" style="width: 40px; height: 40px;">
                        Golbarg.net
                    </a>
                    <ul class="nav col-12 col-lg-auto my-2 justify-content-center my-md-0 text-small">
                        <li>
                            <a href="#" class="nav-link text-secondary">
                                <span class="fa-solid fa-house-user" style="width: 24px; height: 24px;"></span>
                                Home
                            </a>
                        </li>
                        <li>
                            <a href="#" class="nav-link text-secondary">
                                <span class="fa-brands fa-github" style="width: 24px; height: 24px;"></span>
                                GitHub
                            </a>
                        </li>
                        <li>
                            <a href="#" class="nav-link text-white">
                                <span class="fa-solid fa-info" style="width: 24px; height: 24px;"></span>
                                About
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </header>
    <main>
        <div class="container">
            <div class="row">
                <div class="col col-lg-12">
                    Something
                </div>
            </div>
        </div>
    </main>
    <?php
        $db = new SQLite3('tech_db.db');
        $results = $db->query('SELECT tech_name FROM technologies');

        while ($row = $results->fetchArray()) {
            print($row['tech_name']);
            print("<br/>");
        }
    ?>
</body>
<script>

</script>

</html>