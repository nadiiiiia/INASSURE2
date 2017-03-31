var App = (function () {
    'use strict';

    App.dataTables = function ( ) {

        //We use this to apply style to certain elements
        $.extend(true, $.fn.dataTable.defaults, {
            dom:
                    "<'row am-datatable-header'<'col-sm-6'l><'col-sm-6'f>>" +
                    "<'row am-datatable-body'<'col-sm-12'tr>>" +
                    "<'row am-datatable-footer'<'col-sm-5'i><'col-sm-7'p>>"
        });

        $("#table-list-meet").dataTable();
    };
    

    return App;
})(App || {});
