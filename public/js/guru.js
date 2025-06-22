$(document).ready(function() {
    $('#peminjam').on('change', function () {
        var idPeminjam = $(this).val();
        // console.log("ID dipilih: ", idPeminjam);
        
        $.ajax({
            type: 'POST',
            url: 'http://localhost/inventaris_mvc/public/guru/getJabatanByPeminjam',
            data: { id_peminjam: idPeminjam },
            success: function (data) {
                $('#jabatan').html(data);
            },
            error: function (xhr, status, error) {
                console.error("Error: ", error);
            }
        });
    });
});