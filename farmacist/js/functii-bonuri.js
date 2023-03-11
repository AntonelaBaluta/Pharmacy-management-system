$( document ).ready(function() {
    var table = $('#datatable').DataTable();
 
    // asteapta click pe fiecare buton de DELETE
    $('#datatable tbody').on('click', 'a.delete', function () {
        // Am pus id-ul in elementul tr (table row) pentru a-l folosi la UPDATE si DELETE
        var row = $(this).parents('tr');
        var id = parseInt(row.data('id'));
        
        table
            .row(row)
            .remove()
            .draw();

        $.ajax({
            method: "POST",
            url: "delete-bon.php",
            data: { id: id }
        })
        .done(function( ) {
            alert( "Bonul a fost sters." );
        });
    });
});