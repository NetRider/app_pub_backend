//item object
function Item (id, order) {
    this.id = id;
    this.order = order;
}

$(document).ready(function () {
// Sortable rows
    $('.sortableC').sortable({
        containerSelector: 'table',
        itemPath: '> tbody',
        itemSelector: 'tr',
        placeholder: '<tr class="placeholder"/>',

        onDrop: function ($item, container, _super) {

            //serialize ids
            var orderItems = [];
            var i = 0;
            $("tr").each(
                function () {
                    var id = $(this).attr("id");
                    if(id!=null) {
                        var order = i;
                        var item = new Item(id, order);
                        orderItems.push(item);//array with ids and order
                    }
                    i++;
                }
            );

            updateOrder(JSON.stringify(orderItems));
        }

    });

//sends the new order to the server
    function updateOrder(value) {
        $.ajax({
            url: "http://127.0.0.1:8000/api/sortCategorie",
            headers: {
                "_token": "{{ csrf_token() }}"
            },
            type: "POST",
            dataType: "json",
            data: {data: value},

            success: function (jsonData) {
                //alert("ok");
                window.location.href = "http://127.0.0.1:8000/listCategorie";
            },

            error: function (request, status, error) {
                //alert(error);

            }

        });
    }
});
