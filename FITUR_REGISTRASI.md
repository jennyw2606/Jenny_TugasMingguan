# 📝 Fitur Registrasi Akun

## Deskripsi
Aplikasi Laravel CRUD Mahasiswa ini dilengkapi dengan sistem autentikasi lengkap yang memungkinkan user untuk mendaftar akun baru dan login.

## Fitur yang Tersedia

### 1. **Registrasi Akun Baru**
- URL: `http://localhost:8000/register`
- Method: GET (tampil form) / POST (submit form)
- Field Input:
  - **Nama Lengkap**: Wajib diisi, maksimal 255 karakter
  - **Email**: Wajib diisi, harus unik di database
  - **Password**: Minimal 8 karakter, harus dikonfirmasi
  - **Konfirmasi Password**: Harus cocok dengan password

### 2. **Login Akun**
- URL: `http://localhost:8000/login`
- Method: GET (tampil form) / POST (submit form)
- Field Input:
  - **Email**: Email yang didaftarkan
  - **Password**: Password akun
  - **Ingat Saya**: Optional, untuk mengingat login

### 3. **Logout Akun**
- Tersedia di navbar (dropdown user menu)
- Method: POST
- Route: `/logout`

### 4. **Akses Halaman Mahasiswa**
- Halaman `/mahasiswa` **protected** dan hanya bisa diakses setelah login
- Setelah berhasil registrasi atau login, user akan diarahkan ke halaman `/mahasiswa`

## Struktur Database

### Tabel `users`
```sql
id           - PRIMARY KEY
name         - String (nama pengguna)
email        - String UNIQUE (email unik)
password     - String (hashed password)
remember_token - String (optional, untuk remember me)
created_at   - Timestamp
updated_at   - Timestamp
```

## Flow Aplikasi

```
Home (/) 
  ↓
  ├─→ Guest User
  │    ├─→ Login (/login)
  │    └─→ Register (/register)
  │         ↓
  │         Success → Redirect ke /mahasiswa
  │         Error → Tampil error message
  │
  └─→ Authenticated User
       ├─→ Dashboard (/mahasiswa)
       │    ├─→ Lihat data
       │    ├─→ Tambah data
       │    ├─→ Edit data
       │    └─→ Hapus data
       │
       └─→ Logout → Redirect ke /login
```

## Validasi & Security

### Validasi Registrasi
- ✅ Nama: Required, max 255 chars
- ✅ Email: Required, unique, valid email format
- ✅ Password: Required, min 8 chars, confirmed

### Security Features
- 🔒 CSRF Protection (Token di setiap form)
- 🔒 Password Hashing (Bcrypt)
- 🔒 Session-based Authentication
- 🔒 Middleware `guest` untuk login/register (mencegah akses saat sudah login)
- 🔒 Middleware `auth` untuk halaman protected

## File-file yang Digunakan

### Controllers
- `app/Http/Controllers/Auth/RegisterController.php`
- `app/Http/Controllers/Auth/LoginController.php`

### Views
- `resources/views/auth/register.blade.php`
- `resources/views/auth/login.blade.php`
- `resources/views/layouts/app.blade.php` (navbar dengan user menu)
- `resources/views/home.blade.php` (halaman utama)

### Models
- `app/Models/User.php`

### Routes
- `routes/web.php` - Menggunakan `Auth::routes()` dari Laravel

## Testing

### Test Registrasi
```bash
# 1. Buka halaman register
http://localhost:8000/register

# 2. Isi form dengan data:
- Nama: John Doe
- Email: john@example.com
- Password: password123
- Konfirmasi: password123

# 3. Klik tombol Daftar
# 4. Jika berhasil, redirect ke /mahasiswa
```

### Test Login
```bash
# 1. Buka halaman login
http://localhost:8000/login

# 2. Isi form dengan:
- Email: john@example.com
- Password: password123

# 3. Klik tombol Login
# 4. Jika berhasil, redirect ke /mahasiswa
```

### Test Logout
```bash
# 1. Dari halaman /mahasiswa (sudah login)
# 2. Klik dropdown user di navbar
# 3. Pilih "Logout"
# 4. Redirect ke /login
```

## Error Messages

### Registrasi
- Email sudah terdaftar: "The email has already been taken"
- Password tidak cocok: "The password confirmation does not match"
- Password terlalu pendek: "The password must be at least 8 characters"

### Login
- Email tidak ditemukan atau password salah: "These credentials do not match our records"

## Konfigurasi

### .env
```env
APP_ENV=local
APP_DEBUG=true
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=laravelti
DB_USERNAME=root
DB_PASSWORD=
SESSION_DRIVER=database
```

### config/auth.php
- Default guard: `web`
- User provider: `users` (model User)

## Tips & Trik

1. **Bypass Login Lokal** (untuk development):
   - Edit `.env` set `APP_DEBUG=true` untuk melihat error detail

2. **Reset Password Pengguna**:
   - Query database langsung: `DELETE FROM users WHERE email = 'user@example.com'`
   - Kemudian registrasi ulang

3. **Test Multiple Users**:
   - Registrasi beberapa akun berbeda untuk testing

4. **Remember Me**:
   - Centang "Ingat Saya" saat login untuk extended session

## Troubleshooting

### Issue: "Call to undefined method middleware()"
**Solusi**: Middleware diatur di `Auth::routes()`, bukan di controller

### Issue: Redirect loop setelah login
**Solusi**: Cek konfigurasi redirect path di `$redirectTo` di controller

### Issue: Email validation error
**Solusi**: Pastikan format email valid (xxx@yyy.com)

---

**Status**: ✅ Fitur Registrasi Selesai dan Siap Digunakan
**Last Updated**: 2026-01-22
