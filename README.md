
## Cara Penginstallan


Download Database dibawah ini:
https://drive.google.com/drive/folders/1yKxYlCEM1ByL1jhqB4cVacLP5zqT8-Cn?usp=sharing

CARA PENGINSTALAN PROJECT

### Langkah 1: Clone Repository dari GitHub
Buka terminal atau command prompt, lalu gunakan perintah berikut untuk mengkloning repositori dari GitHub:

```bash
git clone https://github.com/nama_pengguna/nama_repo.git
```

Gantilah `nama_pengguna` dan `nama_repo` dengan informasi yang sesuai dengan repositori yang ingin Anda gunakan.

### Langkah 2: Pindah ke Direktori Proyek
Masuk ke direktori proyek yang telah Anda klona:

```bash
cd nama_repo
```

### Langkah 3: Instal Dependensi dengan Composer
Jalankan perintah berikut untuk menginstal semua dependensi proyek menggunakan Composer:

```bash
composer install
```

### Langkah 4: Salin File .env
Duplikat file `.env.example` dan ubah namanya menjadi `.env`:

```bash
cp .env.example .env
```

### Langkah 5: Konfigurasi Database
Buka file `.env` dan konfigurasi pengaturan database sesuai dengan pengaturan MySQL Anda. Atur parameter seperti `DB_HOST`, `DB_PORT`, `DB_DATABASE`, `DB_USERNAME`, dan `DB_PASSWORD`.

### Langkah 6: Generate App Key
Jalankan perintah berikut untuk menghasilkan kunci aplikasi Laravel:

```bash
php artisan key:generate
```

### Langkah 7: Migrasi dan Seed Database
Jalankan perintah migrasi untuk membuat tabel-tabel database:

```bash
php artisan migrate
```

Jika ada seeders yang disertakan, jalankan juga perintah berikut:

```bash
php artisan db:seed
```

### Langkah 8: Jalankan Server
Jalankan server pengembangan Laravel menggunakan perintah:

```bash
php artisan serve
```

### Langkah 9: Akses Aplikasi
Buka browser dan akses aplikasi Laravel melalui URL yang diberikan oleh perintah `php artisan serve`, biasanya di `http://localhost:8000`.

### Catatan:
Pastikan bahwa MySQL server dan phpMyAdmin sudah diinstal dan berjalan di sistem Anda. Sesuaikan konfigurasi database pada file `.env` dengan pengaturan MySQL dan phpMyAdmin Anda.


