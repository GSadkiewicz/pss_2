<!DOCTYPE html>
<html lang="PL-pl">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>X-sport</title>
    <link rel="stylesheet" href="{$conf->app_root}/main.css">
</head>

<body>
    <header>
        <div class="header-wrap">
            <div class="logo-wrap">
                <a href="{$conf->app_root}/">
                    <img class="banner" src="{$conf->app_root}/assets/adas_malysz.png" alt="banner"/>
                    <h1>-SPORT</h1>
                </a>
            </div>
        </div>
    </header>
    <div class="main-wrap">
        <nav class="sidebar-wrap">
            <a href="{$conf->app_root}/kategorie">Oferta</a>
            <a href="{$conf->app_root}/onas">O nas</a>
            <a href="{$conf->app_root}/kontakt">Kontakt</a>
            {if \core\RoleUtils::inRole('loggedIn')}
                <a href="{$conf->app_root}/wyloguj">Wyloguj się</a>
                <a href="{$conf->app_root}/rezerwacje">Moje rezerwacje</a>
                {if \core\RoleUtils::inRole('isAdmin')}
                {/if}
            {else}
                <a href="{$conf->app_root}/logowanie">Zaloguj się</a>
            {/if}
        </nav>
        <div class="content-wrap">
            {block name=content} {/block}
        </div>
    </div>
    <footer>
        &copy; X-SPORT 2023
    </footer>
</body>

</html>