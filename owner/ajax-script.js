$(document).on('change','#client', function(){
    var event = $(this).val();
    if(event){
        $.ajax({
            type:'POST',
            url:'backend-script.php',
            data:{'event_id':event},
            success:function(result){
                $('#event1').html(result);
               
            }
        }); 
    }else{
        $('#event1').html('<option value="">Event</option>');
    }
});
$(document).on('change','#client1', function(){
    var event1 = $(this).val();
    if(event1){
        $.ajax({
            type:'POST',
            url:'backend-script.php',
            data:{'event_id1':event1},
            success:function(result){
                $('#event1').html(result);
               
            }
        }); 
    }else{
        $('#event1').html('<option value="">Event</option>');
    }
});