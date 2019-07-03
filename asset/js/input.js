$(document).ready(function(){
    $('#datepicker').datepicker({
        uiLibrary: 'bootstrap4'
    });
    $('#submit').click(function(){
    if($('#nama_kegiatan').val()==""){
        alert("Tidak ada data yang diinputkan")
    }
    else{
        $.ajax({
            url:'input/tambah',
            method:'POST',
            data:{
                pnamakegiatan:$('#nama_kegiatan').val(),
                pjeniskegiatan:$('#jenis_kegiatan').val(),
                ptahapkegiatan:$('#tahap_kegiatan').val(),
                ptanggalkegiatan:$('#datepicker').val(),
                pbiayabahan:$('#biaya_bahan').val(),
                pbiayaoperasional:$('#biaya_operasional').val(),
                pbiayatakterduga:$('#biaya_takterduga').val(),
                piddana:$('#id_dana').val(),
                pkeberhasilan:$('#keberhasilan').val(),
                puploaded_images:$('#uploaded_images').val(),
              
               
            },
            success:function(say){
                alert(say)
                $('#nama_kegiatan').val(""),
                $('#jenis_kegiatan').val(""),
                $('#tahap_kegiatan').val(""),
                $('#datepicker').val(""),
                $('#biaya_bahan').val(""),
                $('#biaya_operasional').val(""),
                $('#biaya_takterduga').val(""),
                $('#id_dana').val(""),
                $('#keberhasilan').val(""),
                $('#uploaded_images').val("")
            
            }

            


            

        });

    }
      
       
      
    });



    $('#files').change(function(){
        var files = $('#files')[0].files;
        var error = '';
        var form_data = new FormData();
        for(var count = 0; count<files.length; count++)
        {
        var name = files[count].name;
        var extension = name.split('.').pop().toLowerCase();
        if(jQuery.inArray(extension, ['gif','png','jpg','jpeg']) == -1)
        {
            error += "Invalid " + count + " Image File"
        }
        else
        {
            form_data.append("files[]", files[count]);
        }
        }
        if(error == '')
        {
        $.ajax({
            url:"input/upload", //base_url() return http://localhost/tutorial/codeigniter/
            method:"POST",
            data:form_data,
            contentType:false,
            cache:false,
            processData:false,
            beforeSend:function()
            {
            $('#uploaded_images').val("Uploading...");
            },
            success:function(data)
            {
            $("#tampil_gambar").html("")
            $('#uploaded_images').val(data);
            $('#files').val('');
            var datagambar = data.split(',');
            $.each(datagambar, function(index, value) { 
                $("#tampil_gambar").append(`
                <div class="col-sm-3">
                    <img src="./asset/images/`+value+`" alt="..." class="img-thumbnail">
                    </div>
                    `)
              });
            }
        })
        }
        else
        {
        alert(error);
        }
     });
    

});