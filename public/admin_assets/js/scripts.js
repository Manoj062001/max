// $(document).ready(function () {
//     $('#datatable').DataTable();
// });

$(document).ready(function () {
    var table = $('#datatable').DataTable({
        dom: 'Bfrtip',
        buttons: [ 'copy', 'csv', 'excel', 'pdf', 'print']
    });
});

