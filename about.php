<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    <title>HOW-OLD-IS</title>
    <?php include('master/lib.php'); ?>

</head>

<body>
    <div id="overlay">
        <img src="library/img/loading.svg" style="width: 60px; height: 60px; left: 50%; top: 50%; position: relative;" alt="Loading" />
    </div>
    <?php @include('master/header.php') ?>
    <main class="main-content">
        <div class="container">
            <div class="row" style="margin-top: 20px;">
                <div class="col col-lg-12">
                    <h3>How Old Is?</h3>
                    <p>
                        Sometimes it's difficult to determine the exact date of a project was made publicly available.
                        Sometimes there is a large gap between the public release and the official launch. If there is 
                        uncertainty over which date to pick when adding a technology, aim for the earlier of the two.
                    </p>
                    <hr>
                    <h3>Adding Technology</h3>
                    <p>
                        This project is developed using <a href="https://www.php.net/" target="_blank"><i class="devicon-php-plain colored"></i>PHP</a> and 
                        <a href="https://www.sqlite.org/index.html" target="_blank"><i class="devicon-sqlite-plain colored"></i>SQlite</a> database and used 
                        <a href="https://devicon.dev/" target="_blank"><i class="devicon-devicon-plain colored"></i>devicon</a> library for icons of each technology.
                        You can use <a href="https://sqlitebrowser.org/" target="_blank">DB-Browser</a> for opening SQlite DB and chaning data.

                    </p>
                    <h4>We are interested in: </h4>
                    <ul>
                        <li>Programming Languages</li>
                        <li>Programming Languages Frameworks</li>
                        <li>Programming Languages Tools</li>
                    </ul>
                    <hr>
                    <h3>Contribution</h3>
                    <p>
                        If you are interested in making a Contribution, please fork the project and send pull request.
                        All Contributions are welcome, no matter how old a technology is.
                    </p>
                    <hr>

                </div>
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
</script>

</html>