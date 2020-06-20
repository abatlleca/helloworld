<?php
    require __DIR__ . '/vendor/autoload.php';

    // Initialize the i18n class
    $i18n = new i18n('lang/lang_{LANGUAGE}.yml', 'langcache/');
    // Parameters: language file path, cache dir, default language (all optional)

    // init object: load language files, parse them if not cached, and so on.
    $i18n->init();
?>

<html>
<head>
<title><?php echo L::greeting; ?></title>    

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="assets/css/app.css" rel="stylesheet">
</head>

<body>
<div id="app">
    <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
        <div class="container">
            <a class="navbar-brand" href="/">
                <?php echo L::greeting; ?>
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <!-- Left Side Of Navbar -->
                <ul class="navbar-nav mr-auto">

                </ul>

                <!-- Right Side Of Navbar -->
                
                    <ul class="navbar-nav ml-auto">
                        <!-- Language Links -->
                        <li class="nav-item">
                            <a class="nav-link" href="./?lang=ca">CA</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="./?lang=es">ES</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="./?lang=en">EN</a>
                        </li>
                    </ul>
                    
            </div>
        </div>
    </nav>
</div>
<main class="py-4">
    <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-header"></div>

                        <div class="card-body">
                            <!-- Get some greetings -->
                            <p><?php echo L::greeting; ?></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</main>
</body>
</html>


