$('.tombol').on("click", function(e){

 var id_acara = $(this).data('id_acara');
 var nama_acara = $(this).data('nama_acara');
 var genre = $(this).data('genre');
 var lokasi = $(this).data('lokasi');
 var harga = $(this).data('harga');
 var tanggal = $(this).data('tanggal');
 var deksripsi = $(this).data('deksripsi');
 var rating = $(this).data('rating');
 var gambar = $(this).data('gambar');
 var gs = $($this).data('gs');


 $(".id_acara").val(id_acara);
 $(".nama_acara").val(nama_acara);
 $(".genre").val(genre);
 $(".lokasi").val(lokasi);
 $(".harga").val(harga);
 $(".tanggal").val(tanggal);
 $(".deksripsi").val(deksripsi);
 $(".rating").val(rating);
 $(".gambar").val(gambar);
 $(".gs").val(gs);


})