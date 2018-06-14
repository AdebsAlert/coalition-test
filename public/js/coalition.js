$(document).ready(function(){

    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

    $('#product-form').submit(function(event){
        event.preventDefault();
        var $form = $(this);

        $.ajax({
            type: 'POST',
            url: '/product',
            data: $form.serialize(),
            success: function($data) {
                $data = JSON.parse($data);
                $form.get(0).reset();
                $tbody = $('#table-body');
                $tbody.empty();
                var $totalValue = 0;
                for(var i = 0; i < $data.length; i++) {
                    $tbody.append('<tr><td>'+ $data[i].name +'</td><td>'+ $data[i].quantity +'</td><td>'+ $data[i].price +'</td><td>'+ $data[i].created_at + '</td><td>' + $data[i].total_value + '</td></tr>');
                    $totalValue  += parseFloat($data[i].total_value);
                }

                $tbody.append(('<tr><td colspan="4"><b>Sum of Total Value</b></td><td><b>' + $totalValue + '</b></td> </tr>'));
            }
        });
    });
});