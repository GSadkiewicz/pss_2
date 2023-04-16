{extends file="main.tpl"}
{block name=content}
    <div class="page">
        <h1>{$item['Name']}</h1>
        <div class="wrap">
            <a class="btn" href="{$conf->app_root}/rezerwacja?item={$item["Item_id"]}">Zarezerwuj</a>
        </div>
    </div>
    

{/block}