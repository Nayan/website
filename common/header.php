    <head>
        <meta charset="utf-8">
        <title><?php echo $pageTitle; ?></title>
        <meta name="description" content="<?php echo $pageDescription; ?>">
        <?php
        // If canonical URL is specified, include canonical link element
            if($pageCanonical)
            {
                echo '<link rel="canonical" href="' . $pageCanonical . '">';
            }
            // If meta robots content is specified, include robots meta tag
            if(isset($pageRobots) && $pageRobots)
            {
                echo '<meta name="robots" content="' . $pageRobots . '">';
            }else{
                echo '<meta name="robots" content="all">';
            }
        ?>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
        <link href="css/stack-interface.css" rel="stylesheet" type="text/css" media="all" />
        <link href="css/socicon.css" rel="stylesheet" type="text/css" media="all" />
        <link href="css/lightbox.min.css" rel="stylesheet" type="text/css" media="all" />
        <link href="css/flickity.css" rel="stylesheet" type="text/css" media="all" />
        <link href="css/iconsmind.css" rel="stylesheet" type="text/css" media="all" />
        <link href="css/jquery.steps.css" rel="stylesheet" type="text/css" media="all" />
        <link href="css/theme.css" rel="stylesheet" type="text/css" media="all" />
        <link href="css/custom.css" rel="stylesheet" type="text/css" media="all" />
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:200,300,400,400i,500,600,700%7CMerriweather:300,300i" rel="stylesheet">
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    </head>