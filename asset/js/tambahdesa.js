$(document).ready(function(){
    $('#submitu').click(function(){
        if($('#nama_desa').val()==""){
            alert("Tidak ada data yang diinputkan")
        }
        else{
       $.ajax({
           url:'tambahdesa/tambah',
           method:'POST',
           data:{
            pnamadesa:$('#nama_desa').val()
            
           },
           success:function(say){
               alert(say)
               $('#nama_desa').val("")
           }
        
       })}
    });
});