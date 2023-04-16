{extends file="main.tpl"}
{block name=content}

    <h1>Dziekujemy za złożenie rezerwacji !</h1>
    <div>
        <p>Data odbioru: {$res["data_odbioru"]}</p>
        <p>Data zwrotu: {$res["data_zwrotu"]}</p>
        <p>Cena za {$days} dni {$res["total_price"]}zł</p>
        <p>Imię i nazwisko: {$res["imie"]} {$res["nazwisko"]}</p>
        <p>Telefon: {$res["numer_telefonu"]}</p>

        <h3>Produkt:</h3>
        <p>{$res["type_name"]} | {$res["Item_name"]}</p>
    </div>


{/block}