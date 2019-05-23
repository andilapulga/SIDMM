$(document).ready(function(){
    $('#datepicker').datepicker({
        uiLibrary: 'bootstrap4'
    });
    $('#submit').click(function(){
        // alert($('#nama_laporan').val())
      
        $.ajax({
            url:'input/tambah',
            method:'POST',
            data:{
                pnamakegiatan:$('#nama_kegiatan').val(),
                pjeniskegiatan:$('#jenis_kegiatan').val(),
                ptahapkegiatan:$('#tahap_kegiatan').val(),
                ptanggalkegiatan:$('#datepicker').val(),
               
            },
    //         success:function(say){
    //             alert(say)
    //             $('#pesan').empty();
    //             $('#pesan').html('<p class="success">success</p>')
    //         }
        });
      
    });
});