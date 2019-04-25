$(document).ready(function(){
    $('#submit').click(function(){
        // alert("gsdsg")
      
        $.ajax({
            url:'tambahdesa/tambah',
            method:'POST',
            data:{
               
                pnamaDesa:$('#nama_desa').val()
               
            },
            success:function(say){
                alert(say)
                $('#pesan').empty();
                $('#pesan').html('<p class="success">success</p>')
            }
        });
      
    });
});