function ajax(url, id, page = 1)
{
    var lista = document.getElementById("glowny");
    var fetchurl = `${url}?id=${id}&strona=${page}`;

	fetch(fetchurl)
	.then(response => {return response.text();})
    .then(body => {lista.innerHTML = body;});
}