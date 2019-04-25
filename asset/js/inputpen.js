$(document).ready(function(){
    $('#submit').click(function(){
        // alert("gsdsg")
      
        $.ajax({
            url:'inputpen/tambah',
            method:'POST',
            data:{
                pusername:$('#username').val(),
                ppassword:$('#password').val(), 
                pnama:$('#nama').val(),
                pidDesa:$('#id_desa').val(),
                pNoHp:$('#no_hp').val() 
            },
            success:function(say){
                alert(say)
                $('#pesan').empty();
                $('#pesan').html('<p class="success">success</p>')
            }
        });
      
    });
});