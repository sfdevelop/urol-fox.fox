$(document).ready(function () {
    $('#table_character').DataTable({
        processing: true,
        serverSide: true,
        stateSave: true,
        searching: false,
        bFilter: false,
        bInfo: false,
        "language": {
            "lengthMenu": "Отображать _MENU_ записей на странице",
            "zeroRecords": "Ничего не найдено",
            "info": "Показано: _PAGE_ с _PAGES_",
            "infoEmpty": "Нет доступных записей",
            "loadingRecords": "Загрузка...",
            "processing": "Загрузка...",
            "search": "Поиск:",
            "paginate": {
                "first": "First",
                "last": "Last",
                "next": ">>",
                "previous": "<<"
            },
            "infoFiltered": "(отфильтровано из _MAX_ дотсупных записей)"
        },
        columns: [
            {
                data: 'id',
                name: 'id',
                orderable: false,
                searchable: false,
                visible: false
            },
            {
                data: 'title_character',
                name: 'title_character',
            },
            // {
            //     data: 'characteristic.sort',
            //     name: 'characteristic.sort',
            // },
            {
                data: 'action',
                name: 'action',
                orderable: false,
                searchable: false
            },
        ],
    });
});
