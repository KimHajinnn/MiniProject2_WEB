# Mini Project 2 PBW
- Nama : Christian Amsal Asimaro Lumban Tobing
- NIM : 2409116053

# Deskripsi Singkat
Website ini merupakan pengembangan dari portfolio statis menjadi website dinamis berbasis PHP dan MySQL(Laragon). Seluruh data yang ditampilkan pada halaman utama diambil langsung dari database, bukan lagi ditulis secara manual di dalam kode HTML atau JavaScript.

Data yang dibuat dinamis meliputi:
- Informasi profil
- Daftar pengalaman
- Daftar skill beserta level
- Daftar sertifikat

Dengan pendekatan ini, konten website dapat diperbarui melalui database tanpa harus mengubah struktur kode tampilan.

# Tampilan Setiap Section / Fitur
## Hero Section
Menampilkan:
- Foto profil
- Nama
- Role / Jabatan
- Deskripsi singkat
- Email
- Nomor telepon
- Lokasi
- Link LinkedIn & GitHub

Semua data diambil dari tabel profile.

## About Section
Menampilkan:

- Deskripsi lengkap profil (about)
- Daftar pengalaman dalam bentuk list

Daftar pengalaman diambil dari tabel experiences dan ditampilkan menggunakan perulangan.

## Skills Section
Menampilkan:

- Nama skill
- Level kemampuan dalam bentuk progress bar

Level skill diambil dari tabel skills dan digunakan untuk menentukan lebar progress bar secara dinamis.

## Certificates Section
Menampilkan:

- Gambar sertifikat
- Judul sertifikat
- Penerbit
- Tahun

Data diambil dari tabel certificates, sedangkan gambar diambil langsung dari foto.

# Penjelasan Code Setiap Section / Fitur
## Koneksi Database
File koneksi.php digunakan untuk menghubungkan aplikasi dengan database MySQL menggunakan laragon.

Contoh:
```
$conn = new mysqli($host, $user, $pass, $db);
```
Koneksi ini digunakan untuk menjalankan query pengambilan data.

## Pengambilan Data
Data diambil menggunakan query SELECT pada masing-masing tabel.

Contoh pengambilan profil:
```
$profile = $conn->query("SELECT * FROM profile LIMIT 1")->fetch_assoc();
```

## Hero Section
Data ditampilkan menggunakan sintaks PHP:
```
<?= $profile['name']; ?>
<?= $profile['role']; ?>
<?= $profile['photo']; ?>
```
Foto profil dipanggil berdasarkan nama file yang tersimpan di database:
```
<img src="assets/profile/<?= $profile['photo']; ?>">
```

## Experience Section
Menampilkan data menggunakan perulangan while:
```
<?php while($exp = $experiences->fetch_assoc()): ?>
    <li><?= $exp['experience']; ?></li>
<?php endwhile; ?>
```
Perulangan ini memungkinkan sistem menampilkan semua data yang tersimpan dalam tabel.

## Skills Section
Skill ditampilkan dengan progress bar dinamis:
```
<?php while($skill = $skills->fetch_assoc()): ?>
```
Nilai level digunakan untuk menentukan lebar progress bar:
```
style="width: <?= $skill['level']; ?>%"
```
Semakin tinggi nilai level, semakin panjang progress bar.

## Certificates Section
Menampilkan data sertifikat secara dinamis:
```
<?php while($cert = $certificates->fetch_assoc()): ?>
```
Gambar sertifikat diambil dari folder:
```
<img src="assets/certificates/<?= $cert['image']; ?>">
```
Link verifikasi ditampilkan jika tersedia:
```
<a href="<?= $cert['credential_url']; ?>" target="_blank">
```

# Teknologi yang Digunakan
- Visual Studio Code
- CSS
- PHP
- Laragon

# Dokumentasi Output
## Tampilan Home
<img width="1882" height="976" alt="image" src="https://github.com/user-attachments/assets/20b8bae8-49a5-4312-9cce-1338c3820a83" />

## Tampilan About Me
<img width="1884" height="843" alt="image" src="https://github.com/user-attachments/assets/d8654bb8-afa0-47f0-bee8-e8d78ca605b3" />

## Tampilan Certificates
<img width="1889" height="968" alt="image" src="https://github.com/user-attachments/assets/f467dbd0-9eb8-480e-a797-10f83c8e6fa4" />
