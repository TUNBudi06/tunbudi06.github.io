<?php
if (isset($_POST['t_button'])) { // cek apakah tombol Submit ditekan
    $email = $_POST['Email'];
    $pesan = $_POST['pesan'];
    $nama = $_POST['nama'];
	$token = '5354153853:AAG2kdQo_IsZu4A_Uz3_aPzh_FoXmkLSrGQ';
	$chat_id = '1670106753';


    // buat URL untuk mengirim pesan menggunakan API Telegram Bot
    $url = "https://api.telegram.org/bot" . $token . "/sendMessage?chat_id=" . $chat_id . "&text=" . urlencode("Nama: ". $nama . "\nEmail: " . $email . "\nPesan: " . $pesan );

    // kirim pesan menggunakan cURL
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    $result = curl_exec($ch);
    curl_close($ch);

    // tampilkan pesan berhasil terkirim
    header("refresh:2;URL=contact.html");
}
?>
