Assalamualaikum {{ $nama }} <br>

Terima kasih atas pendaftarannya, formulir pendaftaran Paket {{ $nama_paket }} Anda telah kami terima. <br>
<br> 
Paket : <b>{{ $nama_paket }}</b> <br>
Nomor Order : <b>{{ $id }}</b> <br>
<br>
Harga: Rp. {{ $harga }}<br>
<br>

Selanjutnya silahkan segera Transfer Rp {{ $harga }},- ke rekening berikut: <br>
<br>
Mandiri a/n Mohammad Imaad Al Hamas no rek. <br><b>90000-1139-4872</b><br>
<br>
BCA a/n Mohammad Imaad Al Hamas no rek. <br><b>553-045-2567</b><br>
<br>
setelah transfer, harap segera mengirimkan konfirmasi pembayaran melalui halaman {{ route('konfirmasi_pembayaran',['$id_order'=>$id]) }}<br>
<br>
Terima kasih.
<br>
<br>
Jika ada pertanyaan dapat hubungi +6287878567807 (Whatsapp) <br>
atau Email ke zuriyakidsteam@gmail.com