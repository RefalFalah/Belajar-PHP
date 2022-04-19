### Menampilkan DATABASE
Perintah :
```
SHOW DATABASES;
```
### Membuat DATABASE Baru
Perintah :
```
CREATE DATABASE siswa;
```
### Menggunakan DATABASE 
Perintah :
```
USE siswa;
```
### Membuat Tabel Baru 
Perintah :
```
CREATE TABLE data_siswa (id INT(10),nama VARCHAR(30),kelas VARCHAR(20),jurusan VARCHAR(20));
```
### Menampilkan Tabel
Perintah :
```
SHOW TABLES;
```
### Menampilkan Struktur Tabel
Perintah :
```
DESC data_siswa;
```
### Input Data 
Perintah :
```
INSERT INTO data_siswa (id,nama,kelas,jurusan) VALUES
-> (1,'Refal','XI RPL 2','RPL'),   
-> (2,'Fyan','XI RPL 3','RPL'),
-> (3,'Nabila','XI RPL 2','RPL');
```
### View Data
Perintah :
```
SELECT * FROM data_siswa;
```
