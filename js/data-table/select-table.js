$(document).ready(function() {
    // var table = $('#dataTable').DataTable();
 
    $('#data-table tbody').on( 'click', 'tr', function () {
        $(this).toggleClass('selected');
        $(this).find(".fa-star").toggleClass('selected');
    } );
 
    $('#button').click( function () {
        alert( table.rows('.selected').data().length +' row(s) selected' );
    } );
} );