// memanggil jquery
$(document).ready(function(){
    // hilangkan tombol cari
    $('#tombolCari').hide();
    
    // event ketika keyword ditulis
    $('#keyword').on('keyup', function() {
        // munculkan icon loading
        $('.loader').show();
        
        // ajax menggunakan load
        // $('#container').load('ajax/index.php?keyword=' + $('#keyword').val());
        
        // $.get()
        $.get('ajax/index.php?keyword=' + $('#keyword').val(), function(data) {
            $('#container').html(data);
            $('.loader').hide();
        });
    });
});