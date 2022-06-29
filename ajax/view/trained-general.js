$(document).ready(function() {


    $('#app_trained').DataTable({
        'scrollX': true,
        //'bSort': false,
        //'scrollCollapse': true,

        'processing': true,
        'serverSide': true,
        'serverMethod': 'post',
        'ajax': {
            'url': 'functions/view/trained_general.php'
        },
        'columns': [
            { data: 'trained_id' },
            { data: 'cell' },
            { data: 'operation' },
            { data: 'sop' },
            { data: 'rev' },
            { data: 'emp_number' },
            { data: 'person' },
            { data: 'supervisor' },
        ]
    });
});

