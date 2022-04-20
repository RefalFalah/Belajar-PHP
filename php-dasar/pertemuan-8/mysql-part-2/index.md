### Menacari Data Berdasarkan nama
Perintah :
```
SELECT * FROM data_siswa WHERE nama = 'Refal';
```
<img src="https://media.discordapp.net/attachments/868319460216434728/966124676915019787/InShot_20220420_064454689.jpg">

### Menacari Data Berdasarkan Urutan
Perintah :
```
SELECT * FROM data_siswa WHERE id < 3;
```
<img src="https://media.discordapp.net/attachments/868319460216434728/966124677187661824/InShot_20220420_064536448.jpg">

### Penggunaan OR dan AND
Perintah :
```
SELECT * FROM data_siswa WHERE id < 3 OR kelas = 'XI RPL 3' AND jurusan = 'RPL';
```
<img src="https://media.discordapp.net/attachments/868319460216434728/966124677422522378/InShot_20220420_064613938.jpg">

### Penggunaan LIKE dan %
Perintah :
```
SELECT * FROM data_siswa WHERE nama LIKE '%a';
```
<img src="https://media.discordapp.net/attachments/868319460216434728/966124677766479872/InShot_20220420_064640122.jpg">

### Sorting Data 
Perintah :
```
SELECT * FROM data_siswa ORDER BY nama;
```
<img src="https://media.discordapp.net/attachments/868319460216434728/966124678009741412/InShot_20220420_064714943.jpg">

### Sorting Data Dengan Alfabet Terbalik
Perintah :
```
SELECT * FROM data_siswa ORDER BY nama DESC;
```
<img src="https://media.discordapp.net/attachments/868319460216434728/966124678353653801/InShot_20220420_064740632.jpg">

### Penambahan Field Dalam Tabel
Perintah :
```
ALTER TABLE data_siswa
-> ADD tahun_masuk VARCHAR (30);
```
<img src="https://media.discordapp.net/attachments/868319460216434728/966124678643064893/InShot_20220420_064850126.jpg">

### Mengisi Data Field Yang Baru Dibuat
Perintah :
```
UPDATE data_siswa
-> SET tahun_masuk = '2020'
-> WHERE id = 1;
```
<img src="https://media.discordapp.net/attachments/868319460216434728/966124678932488202/InShot_20220420_065034498.jpg">