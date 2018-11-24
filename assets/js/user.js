$(document).on("click", '.tombol', function(e){
 var id_user = $(this).data('id_user');
 var username = $(this).data('username');
 var password = $(this).data('password');
 var nama = $(this).data('nama');
 var nis = $(this).data('nis');
 var ttl = $(this).data('ttl');
 var alamat = $(this).data('alamat');
 var jk = $(this).data('jk');


 $(".id_user").val(id_user);
 $(".username").val(username);
 $(".password").val(password);
 $(".nama").val(nama);
 $(".nis").val(nis);
 $(".ttl").val(ttl);
 $(".alamat").val(alamat);
 $(".jk").val(jk);
 
 if (jk == "pria") {
 $("#pria").attr('checked', true);
 } else if (jk == "wanita") {
 $("#wanita").attr('checked', true);
 };

 $(".text-delete").text("Apakah anda yakin akan menghapus user dengan username " + username + "?");


})