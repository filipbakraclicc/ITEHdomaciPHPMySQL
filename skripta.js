$(document).ready(function () {
    $('#izvestaji').DataTable();
    noviIzvestaj();
    brisanjeIzvestaja();
});


function noviIzvestaj() {

    $(document).on('click', '#sacuvajIzvestaj', function () {

        var mesec = $('#mesec').val();
        var godina = $('#godina').val();
        var prihodi = $('#prihodi').val();
        var troskovi = $('#troskovi').val();
        var kompanija = $('#kompanija').val();

        $.ajax(
            {
                url: 'sacuvaj.php',
                method: 'post',
                data: { Mesec: mesec, Godina: godina, Prihodi: prihodi, Troskovi: troskovi, Kompanija: kompanija },

                success: function (data) {
                    alert('Uspesno sacuvan izvestaj')
                    window.location.replace("index.php");
                }
            });
    })
}

function brisanjeIzvestaja() {

    $(document).on('click', '#obrisiIzv', function () {

        var izvID = $(this).attr('value');

        $.ajax({
            url: 'brisanje.php',
            method: 'post',
            data: { ID: izvID },

            success: function (data) {
                alert('Uspesno obrisan izvestaj')
                window.location.replace("index.php");
            }
        })
    })
}