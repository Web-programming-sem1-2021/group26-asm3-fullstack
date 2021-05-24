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
    <?php include "inc/header.php"; ?>

    <h1 style="margin: 20px; color: gray; font-size: 50px">
        Browse Stores by categories
    </h1>

    <aside>

        <?php
        function csvToJson($fname)
        {
            if (!($fp = fopen($fname, "r"))) {
                die("Can't open file...");
            }
            $key = fgetcsv($fp, "1024", ",");
            $json = [];
            while ($row = fgetcsv($fp, "1024", ",")) {
                $json[] = array_combine($key, $row);
            }
            fclose($fp);
            return json_encode($json, true);
        }

        $icons = [
            "department.svg",
            "groceries.svg",
            "hamburger.svg",
            "clothing.svg",
            "accessories.svg",
            "medicine.svg",
            "technology.svg",
            "pets.svg",
            "toys.svg",
            "special.svg",
            "thrift.svg",
            "service.svg",
            "kiosk.svg",
        ];

        $categories = "./data/categories.csv";
        $stores = "./data/stores.csv";

        $jsonCategories = json_decode(csvToJson($categories));

        $jsonStores = json_decode(csvToJson($stores));
        ?>
        <section>
            <?php for (
                $index = 0;
                $index < count($jsonCategories);
                $index++
            ) { ?>
            <div class='category-link'>
                <img class="footer-icon" src="./icons/<?php echo $icons[
                    $index
                ]; ?>" />
                <a href="/browse-stores-by-categories.php?id=<?php echo $jsonCategories[
                    $index
                ]->id; ?>">
                    <?php echo $jsonCategories[$index]->name; ?></a>
                <br />
            </div>
            <?php } ?>

        </section>

    </aside>
    <div class=" store-cards">
        <?php for ($i = 0; $i < count($jsonStores); $i++) {
            if (
                !empty($_GET["id"]) &&
                $jsonStores[$i]->category_id === $_GET["id"]
            ) { ?>
        <div class="store-card">
            <a href="../../storepages/store-2.html">
                <h2>
                    <?php echo $jsonStores[$i]->name; ?>
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
        <?php } elseif (empty($_GET["id"])) { ?>
        <div class="store-card">
            <a href="../../storepages/store-2.html">
                <h2>
                    <?php echo $jsonStores[$i]->name; ?>
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
        <?php }
        } ?>

    </div>
    <footer>
        <?php include "inc/footer.php"; ?>
    </footer>

    <script src="../../jsFunctions.js"></script>
</body>

</html>