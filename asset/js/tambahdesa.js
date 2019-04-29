$(document).ready(function(){
    $('#submitu').click(function(){
       namadesa=$('#nama_desa').val()
       $.ajax({
           url:'tambahdesa/tambah',
           method:'POST',
           data:{
               pnamadesa: namadesa
            
           },
           success:function(say){
               alert(say)
           }

       })
    });
});