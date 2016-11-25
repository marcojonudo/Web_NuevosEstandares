    <head>
        <!-- CHARSET -->
        <meta charset="utf-8"/>

        <!-- TITLE AND BASE -->
        <title><?= $page_title; ?></title>
        <base href="http://localhost/estandares/" />
        <link rel="icon" href="./img/logo/favicon.png" type="image/png" />
        <meta name="theme-color" content="#CE4257">

        <!-- SEO METADATA -->
        <meta name="Description" content="<?= $metadata_description; ?>"/>
        <meta name="Keywords" content="<?= $metadata_keywords; ?>"/>
        <meta name="Author" content="<?= $metadata_author; ?>"/>

        <!-- SOCIAL NETWORKS METADATA -->
        <meta property="og:title" content="<?= $page_title ?>" />
        <meta property="og:description" content="<?= $og_description; ?>" />
        <meta property="og:url" content="http://localhost/estandares/" />
    <?php
        foreach ($og_images as $image) :
    ?>
        <meta property="og:image" content="<?= $image; ?>" />
    <?php
        endforeach;
    ?>
        <meta property="og:site_name" content="<?= $og_site_name; ?>" />

        <!-- RESPONSIVE METADATA -->
        <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=yes">

        <link rel="stylesheet" type="text/css" media="all" href="./css/style.css" />
        <link href="https://fonts.googleapis.com/css?family=Shrikhand" rel="stylesheet">

        <!-- METRICS -->
        <?php include_once ("metrics/analytics.php"); ?>
        <?php include_once ("metrics/search-console.php"); ?>
        <?php include_once ("metrics/facebook-pixel.php"); ?>
    </head>
