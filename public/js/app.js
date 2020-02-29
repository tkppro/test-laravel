function format(d) {
    // `d` is the original data object for the row
    let wrap = '<table cellpadding="5" cellspacing="0" border="0" style="width:100%">'
    let closingTag = '</table>';
    let result = ''
    d.package_details.forEach(element => {
        result += '<tr>' +
            '<td>Full name:</td>' +
            '<td>' + element.name + '</td>' +
            '</tr>' +
            '<tr>' +
            '<td>Package id:</td>' +
            '<td>' + element.package_id + '</td>' +
            '</tr>' +
            '<tr>' +
            '<td>Price:</td>' +
            '<td>' + element.price + '</td>' +
            '</tr>' +
            '<tr>' +
            '<td>Quantity:</td>' +
            '<td>' + element.qty + '</td>' +
            '</tr>' +
            '<tr>' +
            '<td>Weight:</td>' +
            '<td>' + element.weight + '</td>' +
            '</tr><tr><td></td><td></td></tr>'
    });

    return wrap + result + closingTag;
}

$(document).ready(function() {
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
    var table = $('#example').DataTable({
        ajax: { url: "http://127.0.0.1:8000/api/packages", dataSrc: "" },
        "columns": [{
                "className": 'details-control',
                "orderable": false,
                "data": null,
                "defaultContent": ''
            },
            { "data": "name" },
            { "data": "package_id" },
            { "data": "tracking_number" },
            { "data": "date_received" }
        ],
        "order": [
            [1, 'asc']
        ]
    });
    // Add event listener for opening and closing details
    $('#example tbody').on('click', 'td.details-control', function() {
        var tr = $(this).closest('tr');
        var row = table.row(tr);

        if (row.child.isShown()) {
            // This row is already open - close it
            row.child.hide();
            tr.removeClass('shown');
        } else {
            // Open this row
            row.child(format(row.data())).show();
            tr.addClass('shown');
            $('.details-control').css('background-size', '30px')
        }
    });

    $('#example').on('click', 'tbody tr', function() {
        var tr = $(this).closest('tr');

        table.row(this).edit({
            buttons: [
                { label: 'Cancel', fn: function() { this.close(); } },
                'Edit'
            ]
        });
    });
});