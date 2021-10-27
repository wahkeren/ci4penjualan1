$(document).on('click', '#btn-edit', function(){
    $('.modal-body #id-barang').val($(this).data('id'));
    $('.modal-body #kode-barang').val($(this).data('kode'));
    $('.modal-body #nama-barang').val($(this).data('nama'));
    $('.modal-body #stok').val($(this).data('stok'));
    $('.modal-body #harga-jual').val($(this).data('jual'));
    // $('.modal-body #id-kategori').val($(this).data('kategori'));
});

$(document).on('click', '#btn-edit-kategori', function(){
    $('.modal-body #id-kategori').val($(this).data('id'));
    $('.modal-body #nama-kategori').val($(this).data('nama'));
    // $('.modal-body #id-kategori').val($(this).data('kategori'));
});

$(document).on('click', '#btn-tambahbarang', function(){
    $('.row #kode-barang').val($(this).data('kodebarang'));
    $('.row #nama-barang').val($(this).data('namabarang'));
    $('.row #harga-jual').val($(this).data('harga'));
    $("#transaksi").modal("hide");
   
});

// $(document).on('click', '#tambahkeranjang', function(){
//     $('.row #kode-barang').val($(this).data('kodebarang'));
//     $('.row #nama-barang').val($(this).data('namabarang'));
//     $('.row #harga-jual').val($(this).data('harga'));
//     $("#transaksi").modal("hide");
   
// });

$("#tambahkeranjang").click(function(){
var invoice = $("#invoice").val();
var kode_barang = $("#kode-barang").val();
var harga = $("#harga").val();
var qty = $("#qty").val();
var id_user = $("#id_user").val();



});