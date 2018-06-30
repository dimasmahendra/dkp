$('.edit-pemohon').click(function(){
    var no_pirt = $(this).data('no_pirt');
    var masaberlaku = $(this).data('masaberlaku');
    var id_pemohon = $(this).data('id_pemohon');
    var id_user = $(this).data('id_user');
    var namalengkap = $(this).data('namalengkap');
    var alamat = $(this).data('alamat');
    var telepon_rumah = $(this).data('telepon_rumah');
    var telepon_hp = $(this).data('telepon_hp');
    var namaperusahaan = $(this).data('namaperusahaan');
    var alamatperusahaan = $(this).data('alamatperusahaan');
    var kodepos = $(this).data('kodepos');
    var telepon_kantor = $(this).data('telepon_kantor');
    var kode_pangan = $(this).data('kode_pangan');
    var kode_kemasan = $(this).data('kode_kemasan');
    var merk = $(this).data('merk');
    var namadagang = $(this).data('namadagang');
    var beratbersih = $(this).data('beratbersih');
    var prosesproduksi = $(this).data('prosesproduksi');
    var masasimpan = $(this).data('masasimpan');
    var kodeproduksi = $(this).data('kodeproduksi');
    var cara_produksi = $(this).data('cara_produksi');
    var bulanberdiri = $(this).data('bulanberdiri');
    var alat_produksi = $(this).data('alat_produksi');
    var tahunberdiri = $(this).data('tahunberdiri');
    var komposisi = $(this).data('komposisi');
    var status = $(this).data('status');
    if (id_pemohon) {
        $('#no_pirt').val(no_pirt);
        $('#masaberlaku').val(masaberlaku);
        $('#id_pemohon').val(id_pemohon);
        $('#id_user').val(id_user);
        $('#nama_pemohon').val(namalengkap);
        $('#alamat_pemohon').val(alamat);            
        $('#telepon_rumah').val(telepon_rumah);            
        $('#telepon_hp').val(telepon_hp);            
        $('#nama_perusahaan').val(namaperusahaan);            
        $('#alamat_perusahaan').val(alamatperusahaan);            
        $('#kodepos').val(kodepos);            
        $('#telepon_kantor').val(telepon_kantor);            
        $('#kode_pangan').val(kode_pangan);            
        $('#kode_kemasan').val(kode_kemasan);            
        $('#merk').val(merk);            
        $('#nama_dagang').val(namadagang);            
        $('#berat_bersih').val(beratbersih);            
        $('#proses_produksi').val(prosesproduksi);            
        $('#masa_simpan').val(masasimpan);            
        $('#kode_produksi').val(kodeproduksi);            
        $('#cara_produksi').val(cara_produksi);            
        $('#bulan_produksi').val(bulanberdiri);            
        $('#alat_produksi').val(alat_produksi);            
        $('#tahun_berdiri').val(tahunberdiri);            
        $('#komposisi').val(komposisi);            
        $('#status_edit').val(status);            
        }
    else{
        alert('Data tidak ditemukan !!!');
    }
});

$('.edit-verifikasi').click(function(){
    var no_pirt = $('#no_pirt').val();
    var id_pemohon = $('#id_pemohon').val();
    var id_user = $('#id_user').val();
    var namalengkap = $('#nama_pemohon').val();
    var namaperusahaan = $('#nama_perusahaan').val();
    var alamatperusahaan = $('#alamat_perusahaan').val();
    var namadagang = $('#nama_dagang').val();
    var masaberlaku = $('#masaberlaku').val();
    console.log();
    if (id_pemohon) {
        $('#editPemohon').modal('hide');
        $('#editVerifikasi').modal('show');
        $('#no_pirt_ver').val(no_pirt);
        $('#id_pemohon_ver').val(id_pemohon);
        $('#id_user_ver').val(id_user);
        $('#nama_pemohon_ver').val(namalengkap);           
        $('#nama_perusahaan_ver').val(namaperusahaan);            
        $('#alamat_perusahaan_ver').val(alamatperusahaan);            
        $('#nama_dagang_ver').val(namadagang);
        $('#masaberlaku_ver').val(masaberlaku);
    }
    else{
        alert('Data tidak ditemukan !!!');
    }
});

$(document).ready(function() {
    $(function () {
        $('#masaberlaku_ver').datetimepicker({
            format: 'YYYY-MM-DD'
        });
    });
});

function yesnoCheck(that) {
    if (that.value == "Lain - Lain") {
        document.getElementById("ifYes").style.display = "block";
    } else {
        document.getElementById("ifYes").style.display = "none";
    }
}

function yesnoChecks(that) {
    if (that.value == "Lain - Lain") {
        document.getElementById("ifYess").style.display = "block";
    } else {
        document.getElementById("ifYess").style.display = "none";
    }
}

$('.edit-pss').click(function(){
    var id = $(this).data('id');
    var user_id = $(this).data('user_id');
    var namalengkap = $(this).data('namalengkap');
    var alamatlengkap = $(this).data('alamatlengkap');
    var nomorhp = $(this).data('nomorhp');
    var namausaha = $(this).data('namausaha');
    var alamatusaha = $(this).data('alamatusaha');
    if (id) {
        $('#id_pss').val(id);
        $('#user_id').val(user_id);
        $('#namalengkap_edit').val(namalengkap);
        $('#alamatlengkap_edit').val(alamatlengkap);
        $('#nomorhp_edit').val(nomorhp);
        if ($("#namausaha_edit option[value='" + namausaha + "']").length > 0 === false) {
            document.getElementById("ifYess").style.display = "block";
            $('#namausahatext_edit').val(namausaha);
        }
        else {
            $('#namausaha_edit').val(namausaha);   
        }             
        $('#alamatusaha_edit').val(alamatusaha);
    }
    else{
        alert('Data tidak ditemukan !!!');
    }
});

$(document).ready(function() {
    $(function () {
        $('#tanggal_awal').datetimepicker({
            format: 'YYYY-MM-DD'
        });
    });
});

$(document).ready(function() {
    $(function () {
        $('#tanggal_akhir').datetimepicker({
            format: 'YYYY-MM-DD'
        });
    });
});

$('.input-pss').click(function( event ){
    event.preventDefault();
    var id = $(this).data('id');
    var parameter = $(this).data('parameter');
    var hasil = $(this).data('hasil');
    var status = $(this).data('status');
    if (id) {
        $('#layanan_pss_detail_id').val(id);
        $('#parameter_pengisian').val(parameter);
        if (hasil) {
            $('input[name=hasil_pengisian][value="' + hasil + '"]').prop('checked', true);
            $('input[name=status_pengisian][value="' + status + '"]').prop('checked', true);    
        }
        else {
            $('input[name=hasil_pengisian][value="Negatif"]').prop('checked', true);
            $('input[name=status_pengisian][value="Tidak Tersertifikasi"]').prop('checked', true);   
        }        
    }
    else{
        alert('Data tidak ditemukan !!!');
    }
});