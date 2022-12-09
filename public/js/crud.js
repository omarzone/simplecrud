$( document ).ready(function() {

    $('#checkAll').prop('checked', false)


    $("#checkAll").click(function(){
        $('input:checkbox').not(this).prop('checked', this.checked);
    });




    $('.delete_all').on('click', function(e) {


        var allVals = [];  
        $(".sub_chk:checked").each(function() {  
            allVals.push($(this).attr('data-id'));
        });  


        if(allVals.length <=0)  
        {  
            alert("Porfavor selecciona al menos un registro");  
        }  else {  


            var check = confirm("Esta seguro que desea borrar estos registros?");  
            if(check == true){  


                var join_selected_values = allVals.join(","); 
                console.log(join_selected_values);

                $.ajax({
                    url:  '/deleteAll',
                    type: 'DELETE',
                    headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
                    data: 'ids='+join_selected_values,
                    success: function (data) {
                        if (data['success']) {
                            $(".sub_chk:checked").each(function() {  
                                $(this).parents("tr").remove();
                            });
                            alert(data['success']);
                        } else if (data['error']) {
                            alert(data['error']);
                        } else {
                            alert('Algo salio mal :(');
                        }
                    },
                    error: function (data) {
                        alert(data.responseText);
                    }
                });


              $.each(allVals, function( index, value ) {
                  $('table tr').filter("[data-row-id='" + value + "']").remove();
              });
            }  
        }  
    });









});