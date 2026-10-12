<?php

interface NotifikasiInterface {
    public function kirim($tujuan, $pesan);
}

class EmailNotifikasi implements NotifikasiInterface {
    public function kirim($tujuan, $pesan) {
        echo "Mengirim EMAIL ke [{$tujuan}] dengan pesan: \"{$pesan}\"<br>";
    }
}

class WhatsAppNotifikasi implements NotifikasiInterface {
    public function kirim($tujuan, $pesan) {

        echo "Mengirim WHATSAPP ke [{$tujuan}] dengan pesan: \"{$pesan}\"<br>";
    }
}

class SmsNotifikasi implements NotifikasiInterface {
    public function kirim($tujuan, $pesan) {

        echo "Mengirim SMS ke [{$tujuan}] dengan pesan: \"{$pesan}\"<br>";
    }
}


$notifikasis = [
    new EmailNotifikasi(),
    new WhatsAppNotifikasi(),
    new SmsNotifikasi()
];

$tujuan = "08123456789 / user@email.com";
$pesan = "Halo, akun Anda berhasil dibuat!";

foreach ($notifikasis as $notif) {
    $notif->kirim($tujuan, $pesan);
}
