{extends file="main.tpl"}
{block name=content}

    <h1>O nas</h1>
    <p id="onas_content">{$content}</p>
    <form id="onas_edit_form" action="{$conf->app_root}/onas/edytuj" method="post">
        <textarea id="onas_content_edit" name="content"></textarea>
        <input type="submit" value="Zapisz"/>
    </form>
    {if \core\RoleUtils::inRole('isAdmin')}
        <button id="onas_edit" onclick="enableEdit_onas()">Edytuj</button>
    {/if}

    <script src="{$conf->app_root}/js/onas.js"></script>
{/block}