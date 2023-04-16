{extends file="main.tpl"}
{block name=content}

    <h1>Moje rezerwacje</h1>

    {foreach $res as $r}
        <div>
            <a href="{$conf->app_root}/rezerwacja/typ/{$r["reservation_id"]}">
                {$r["type_name"]} {$r["Item_name"]}
                {$r["data_odbioru"]} - {$r["data_zwrotu"]}
            </a>
        </div>
    {/foreach}

{/block}