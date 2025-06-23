$(document).ready(function() {
    $('#peminjam').on('change', function () {
        var idPeminjam = $(this).val();
        console.log(idPeminjam)
        
        $.ajax({
            type: 'POST',
            url: 'http://localhost/inventaris_mvc/public/siswa/getKelasSiswaByPeminjam',
            data: { id_peminjam: idPeminjam },
            success: function (data) {
                $('#kelsis').html(data);
            },
            error: function (xhr, status, error) {
                console.error("Error: ", error);
            }
        });
    });
});