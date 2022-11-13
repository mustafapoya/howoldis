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
    <script src="library/js/jquery-3.6.1.min.js"></script>
    <script src="library/js/script.js"></script>
</head>

<body>
    <div id="overlay">
        <img src="library/img/loading.svg" style="width: 60px; height: 60px; left: 50%; top: 50%; position: relative;" alt="Loading" />
    </div>
    <header>
        <div class="px-3 py-2 text-bg-dark">
            <div class="container">
                <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
                    <a href="/" class="d-flex align-items-center my-2 my-lg-0 me-lg-auto text-white text-decoration-none">
                        <img src="library/img/golbarg.png" class="bi me-2" alt="golbarg logo" style="width: 34px; height: 34px;">
                        Golbarg.net
                    </a>
                    <ul class="nav col-12 col-lg-auto my-2 justify-content-center my-md-0 text-small">
                        <li>
                            <a href="index.php" class="nav-link text-secondary">
                                <span class="fa-solid fa-house-user" style="width: 24px; height: 24px;"></span>
                                Home
                            </a>
                        </li>
                        <li>
                            <a href="https://github.com/mustafapoya/howoldis" target="_blank" class="nav-link text-secondary">
                                <span class="fa-brands fa-github" style="width: 24px; height: 24px;"></span>
                                GitHub
                            </a>
                        </li>
                        <li>
                            <a href="about.php" class="nav-link text-white">
                                <span class="fa-solid fa-info" style="width: 24px; height: 24px;"></span>
                                About
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </header>
    <main class="main-content">
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
            
            </div>
        </div>
    </main>
</body>
<script>
    $(function() {
        $("#overlay").fadeOut(500, function() {
            $(".main-content").fadeIn(500);
        });
    })

    $(document).ready(function() {
        tech_list = $('.tech-list');

        $('#input-search').on('input', function() {
            input = $(this);
            search = input.val().toLowerCase();

            tech_list.find('.tech-item').each(function() {
                element = $(this);
                tech_name = element.attr('tech-name').toLowerCase();

                if (tech_name.includes(search)) {
                    element.show();
                } else {
                    element.hide();
                }
            })
        })
    });
</script>

</html>