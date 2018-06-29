    $(document).ready(function() {
        $('#tabelReportpss').DataTable();
    } );

    $(document).ready(function() {
        $('#sakura-table').DataTable();
    } );

    $('.input-pss').click(function(){
        var id = $(this).data('id');
        var parameter = $(this).data('parameter');
        var hasil = $(this).data('hasil');
        var status = $(this).data('status');
        if (id) {
            $('#layanan_pss_detail_id').val(id);
            $('#parameter_pengisian').val(parameter);
            $("input[name=hasil_pengisian][value=" + hasil + "]").prop('checked', true);
            $("input[name=status_pengisian][value=" + status + "]").prop('checked', true);
        }
    else{
        alert('Data tidak ditemukan !!!');
    }
});