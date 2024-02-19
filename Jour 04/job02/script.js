$(document).ready(function () {

    async function jsonValueKey() {
        const url = 'json.json';
        const fetcher = await fetch(url);
        const json = await fetcher.json()
        document.querySelector("p").innerText = json.city;
    };
    $("#button").click(function () {
        jsonValueKey();
    });
});
