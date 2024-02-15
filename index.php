<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>
    <?php
    class Title {
    public $title;

    function set_title($title) {
        $this->title = $title;
        return $this->title;
    }
}

$pageTitle = new Title();
$title = $pageTitle->set_title("Assassin's Creed"); ?>
    </title>
    <link rel="stylesheet" href="Core/index_style.css">
    <link rel="icon" href="https://pngimg.com/d/assassins_creed_PNG57.png">
</head>

<body>
    
    <header>
        <nav>
            <ul>
                <li class="logo"><img src="https://occ-0-2794-2219.1.nflxso.net/dnm/api/v6/LmEnxtiAuzezXBjYXPuDgfZ4zZQ/AAAABWb-R2s6r6LrV954UsHYIAJUA45rqz7ikXl0jzAD-cfkKjRMmonOfnCprobmSNcmcWOyMEU3fVAjRbXYXLLrvzvuFT5jVZkqUTRNXAm2x1ma.png?r=eb4" alt="Assassin's Creed Logo" width="200" height="80"></li>

                <?php require "menu.php"; 
                $navigation = new Menu();
                $navigation->header();?>

            </ul>
        </nav>
    </header>

    <main>
        <section class="welcome">
            <h1><?php require_once "menu.php"; echo $welcome ?></h1>
            <p>Explorez le monde des Assassins et des Templiers.</p>
        </section>
        <br>
        <section class="categorie">
            <a href="Core/Pages/games.php"><img src="https://www.micromania.fr/dw/image/v2/BCRB_PRD/on/demandware.static/-/Sites-masterCatalog_Micromania/default/dw02baa646/images/high-res/3330628_scrmax.jpg?sw=480&sh=480&sm=fit" width="350" height="200"></a>
            <h2>Games</h2>
            <p>Découvrir tous les jeux Assassin's Creed.</p>
        </section>
        <section class="categorie1">
            <a href="https://www.ubisoft.com/fr-fr/"><img src="https://xboxsquad.fr/wp-content/uploads/2023/03/18f8103546d0afdf2cceeb8a07dd3a84e5840e0004e7bc822c287f7a6396311f.jpeg" width="350" height="200"></a>
            <h2>Chez Ubisoft</h2>
            <p>Accédez au site officiel de Ubisoft</p>
        </section>
        <section class="categorie2">
            <a href="Core/Pages/lore.php"><img src="https://wallpapercave.com/wp/DgVRjoJ.jpg" width="350" height="200"></a>
            <h2>Lore</h2>
            <p>Voir une partie du Lore d'Assassin's Creed</p>
        </section>
    </main>

</body>
</html>
