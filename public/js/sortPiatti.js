//item object
function Item (id, order) {
    this.id = id;
    this.order = order;
}

$(document).ready(function () {

	$('.piattiModifier').on('click touchstart', function(button) {
		var idPiatto;

		if(button.toElement == null) {
			idPiatto = button.currentTarget.id;
		}else {
			idPiatto = button.toElement.id;
		}
		location.href='/editPiatto/' + idPiatto;
   });

   $('.piattiDelete').on('click touchstart', function(button) {
	   var idPiatto;

	   if(button.toElement == null) {
		   idPiatto = button.currentTarget.id;
	   }else {
		   idPiatto = button.toElement.id;
	   }
	   location.href='/destroyPiatto/' + idPiatto;
	 });
	 
// Sortable rows
    $('.sortableP').sortable({
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
            url: "http://104.131.188.84/api/sortPiatti",
            headers: {
                "_token": "{{ csrf_token() }}"
            },
            type: "POST",
            dataType: "json",
            data: {data: value},

            success: function (jsonData) {
                //alert("ok");
                window.location.href = "http://104.131.188.84/listPiatti";
            },

            error: function (request, status, error) {
                //alert(error);

            }

        });
    }
});
