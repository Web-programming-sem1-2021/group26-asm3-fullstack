<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Browse</title>
    <link rel="stylesheet" href="../../style.css" />
    <link rel="stylesheet" href="../../style/browse.css" />
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" />
    <script src="../../jsFunctions.js" defer></script>
    <link rel="stylesheet" href="/style/cookie.css">
    <script src="/script/cookie.js" defer></script>
</head>

<body>
    <!-- referenced from : "https://www.w3schools.com/howto/howto_js_responsive_navbar_dropdown.asp" -->
    <?php

    include('inc/header.php');

    ?>

    <h1 style="margin: 20px; color: gray; font-size: 50px">
        Browse Stores by Name
    </h1>
    <aside>

        <?php

        function csvToJson($fname)
        {
            if (!($fp = fopen($fname, 'r'))) {
                die("Can't open file...");
            }
            $key = fgetcsv($fp, "1024", ",");
            $json = array();
            while ($row = fgetcsv($fp, "1024", ",")) {
                $json[] = array_combine($key, $row);
            }
            fclose($fp);
            return json_encode($json, true);
        }

        $fname = './data/categories.csv';
        $store = './data/stores.csv';

        $json = csvToJson($fname);
        $a = json_decode($json);

        $storeCSV = json_decode(csvToJson($store))
        ?>
        <section>
            <?php
            for ($index = 0; $index <= count($a); $index++) {
            ?>
                <a href="/browse-stores-by-name.php?id=<?php echo $a[$index]->id ?>"><?php echo $a[$index]->name ?></a><br />
                <br />
            <?php } ?>
        </section>
        </section>
    </aside>
    <div class="store-cards">
        <?php
        for ($i = 0; $i <= count($storeCSV); $i++) {

            if (
                $_GET['id'] !== null &&
                $storeCSV[$i]->category_id === $_GET['id']
            ) {
        ?>
                <div class="store-card">
                    <a href="../../storepages/store-2.html">
                        <h2>
                            <?php

                            echo $storeCSV[$i]->name;
                            ?>
                        </h2>
                    </a>
                    <p>
                        <a href="../../storepages/store-2.html">
                            <img class="store-image" src="../../storepages/images/Jacket/jacket5.jpg" alt="Picture of Helen" />
                        </a>
                    </p>
                    <p class="thumbnail-description">
                        Helen has fourth grade piano but in secret prefers to play electronic
                        keyboards. She loves synthesizer sounds and arguing with Jean over who
                        should play the basslines.
                    </p>
                </div>
            <?php } else if ($_GET['id'] === null) { ?>
                <div class="store-card">
                    <a href="../../storepages/store-2.html">
                        <h2>
                            <?php

                            echo $storeCSV[$i]->name;
                            ?>
                        </h2>
                    </a>
                    <p>
                        <a href="../../storepages/store-2.html">
                            <img class="store-image" src="../../storepages/images/Jacket/jacket5.jpg" alt="Picture of Helen" />
                        </a>
                    </p>
                    <p class="thumbnail-description">
                        Helen has fourth grade piano but in secret prefers to play electronic
                        keyboards. She loves synthesizer sounds and arguing with Jean over who
                        should play the basslines.
                    </p>
                </div>
        <?php
            }
        } ?>

    </div>

    <footer>
        <?php include('inc/footer.php'); ?>
    </footer>
</body>

</html>