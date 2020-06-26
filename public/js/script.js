$(function(){

    $('.tombolTambahData').on('click', function(){
        $('#judulModel').html('Tambah Data Mahasiswa');
        $('.modal-footer button[type=submit]').html('Tambah Data Mahasiswa');
        $('#nama').val('');
        $('#nrp').val('');
        $('#email').val('');
        $('#jurusan').val('');
        $('#id').val('');

    });
    
    $('.tombolUbahData').on('click', function(){
        $('#judulModel').html('Ubah Data Mahasiswa');
        $('.modal-footer button[type=submit]').html('Ubah Data Mahasiswa');
        $('.modal-body form').attr('action', 'http://127.0.0.1/phpmvc/public/mahasiswa/ubah')
        // console.log('ok')

        const id = $(this).data('id');

        
        $.ajax({
            url : 'http://127.0.0.1/phpmvc/public/mahasiswa/getubah',
            data : {id : id},
            method : 'post',
            crossDomain: true,
            dataType : 'json',
            success : function(data){
                // console.log(data);
                $('#id').val(data.id);
                $('#nama').val(data.nama);
                $('#nrp').val(data.nrp);
                $('#email').val(data.email);
                $('#jurusan').val(data.jurusan);
            }
        });
    });
});

