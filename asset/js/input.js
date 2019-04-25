$(document).ready(function(){
    $('#submit').click(function(){
        // alert("gsdsg")
      
        $.ajax({
            url:'input/tambah',
            method:'POST',
            data:{
                pusername:$('#username').val(),
                pnamaKegiata:$('#nama_kegiatan').val(),
                pjenisKegiatan:$('#jenis_kegiatan').val(),
                pjenisAnggaran:$('#jenis_anggaran').val(),
                ptahap:$('#tahap_kegiatan').val(),
                ptanggal:$('#tanggal_kegiatan').val(),
                pbiayabahan:$('#biaya_bahan').val(),
                pbiayaOP:$('#biaya_operasional').val(),
                pbiayaTak:$('#biaya_takterduga').val(),
                ptotal:$('#total_biaya').val(),
                ppres:$('#presentase_keberhasilan').val(),
                ppj:$('#penanggung_jawab').val(),
                pdok:$('#dokumentasi').val(),
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