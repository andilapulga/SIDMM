$(document).ready(function(){
    $('#submit').click(function(){
        username=$('#username').val()
      
        $.ajax({
            url:'inputper/tambah',
            method:'POST',
            data:{
                pusername:$('#username').val(),
                ppassword:$('#password').val(), 
                pnama:$('#nama').val(),
                pid_desa:$('#id_desa').val(),
                plevel:$('#level').val(),
                pNoHp:$('#no_hp').val() 
            },
            success:function(say){
                alert(say)
                $('#username').val(""),
                $('#password').val(""), 
                $('#nama').val(""),
                $('#id_desa').val(""),
                $('#level').val(""),
                $('#no_hp').val("") 
            }
       });
       
      
    });
});