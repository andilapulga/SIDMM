$(document).ready(function(){
    $('#datepicker').datepicker({
        uiLibrary: 'bootstrap4'
    });
    $('#submit').click(function(){
    
      
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
                pgambar1:$('#gambar1').val(),
                pgambar2:$('#gambar2').val(),
                pgambar3:$('#gambar3').val()
               
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
                $('#gambar1').val(""),
                $('#gambar2').val(""),
                $('#gambar3').val("")

            }


            

        });
      
    });
    

});