{extends file="main.tpl"}
{block name=content}

    <h1>Kontakt</h1>

    <p id="kontakt_content">{$content}</p>
    {if \core\RoleUtils::inRole('isAdmin')}
        <form id="kontakt_edit_form" action="{$conf->app_root}/kontakt/edytuj" method="post">
            <textarea id="kontakt_content_edit" name="content"></textarea>
            <input type="submit" value="Zapisz"/>
        </form>
    
        <button id="kontakt_edit" onclick="enableEdit_kontakt()">Edytuj</button>
    {/if}

    <script src="{$conf->app_root}/js/kontakt.js"></script>
{/block}