$( document ).ready(function() {

    $('#checkAll').prop('checked', false)


    $("#checkAll").click(function(){
        $('input:checkbox').not(this).prop('checked', this.checked);
    });
});