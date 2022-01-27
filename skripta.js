$(document).ready(function () {
    noviIzvestaj();
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