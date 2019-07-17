$(document).ready(function(){
    $('#submit').click(function(){
        if($('#instruksi').val()==""){
            alert("Tidak ada data yang diinputkan")
        }
        else{
        $.ajax({
            url:'instruction/add_instruction',
            method:'POST',
            data:{
                pinstruction:$('#instruction').val(),
                ptitle:$('#title').val()

                
               
            },
            success:function(say){
                alert(say)
                $('#instruction').val("")
               
                
               
            }
       });
       
        }
    });
});