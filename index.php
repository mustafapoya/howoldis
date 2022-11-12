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
    <link rel="stylesheet" href="library/plugin/devicon/devicon.min.css" />

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
        <?php
            $db = new SQLite3('tech_db.db');
            $results = $db->query('SELECT `icon`, `tech_name`, `start_date`, `link` FROM technologies');
            // while ($row = $results->fetchArray()) {
            //     print($row['tech_name']);
            //     print("<br/>");
            // }
        ?>
        <div class="container">
            <div class="row" style="margin-top: 20px;">
                <div class="col col-lg-12">
                    <div class="list-group w-auto">
                        <?php while ($row = $results->fetchArray()) { ?>
                        <a href="<?php echo $row['link']; ?>" target="_blank" class="list-group-item list-group-item-action d-flex gap-3 py-3" 
                            aria-current="true">
                            
                            <?php
                                $icon = $row['icon'];

                                if($icon == '') {
                                    $icon = "fa-regular fa-code";
                                }
                            ?>
                            <span class="<?php echo $icon ?> colored rounded-circle flex-shrink-0" style="width: 40px; height: 40px; font-size: 40px;"></span>
                            <div class="d-flex gap-2 w-100 justify-content-between">
                                <div>
                                    <h6 class="mb-0"><?php echo $row['tech_name'] ?></h6>
                                    <p class="mb-0 opacity-80" style="margin-top: 2px;">
                                        Release Data: <span class="fa-regular fa-calendar"></span> <b><?php echo $row['start_date'] ?></b>
                                    </p>
                                </div>
                                <?php
                                    $start_date   = new DateTime($row['start_date']);
                                    $current_date = new DateTime();
                                    $date_diff    = $start_date->diff($current_date);
                                ?>
                                <small class="opacity-50 text-nowrap"><?php print($date_diff->y . ' year ' . $date_diff->m . ' months') ?></small>
                            </div>
                        </a>
                        <?php } ?>
                    </div>
                </div>
            </div>
        </div>
    </main>
</body>
<script>

</script>

</html>