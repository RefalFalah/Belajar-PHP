### Menampilkan DATABASE
Perintah :
```
SHOW DATABASES;
```
<img src="https://media.discordapp.net/attachments/868319460216434728/965778333390475274/InShot_20220419_073806305.jpg" alt="SHOW DATABASES;">

### Membuat DATABASE Baru
Perintah :
```
CREATE DATABASE siswa;
```
<img src="https://media.discordapp.net/attachments/868319460216434728/965779263590653962/InShot_20220419_073633774.jpg" alt="CREATE DATABASE siswa;">

### Menggunakan DATABASE 
Perintah :
```
USE siswa;
```
<img src="https://media.discordapp.net/attachments/868319460216434728/965779263590653962/InShot_20220419_073633774.jpg" alt="USE siswa;">

### Membuat Tabel Baru 
Perintah :
```
CREATE TABLE data_siswa (id INT(10),nama VARCHAR(30),kelas VARCHAR(20),jurusan VARCHAR(20));
```
<img src="https://media.discordapp.net/attachments/868319460216434728/965779263892627466/InShot_20220419_074043291.jpg" alt="CREATE TABLE data_siswa;">

### Menampilkan Tabel
Perintah :
```
SHOW TABLES;
```
<img src="https://media.discordapp.net/attachments/868319460216434728/965779264186253342/InShot_20220419_074224849.jpg" alt="SHOW TABLES;">

### Menampilkan Struktur Tabel
Perintah :
```
DESC data_siswa;
```
<img src="https://media.discordapp.net/attachments/868319460216434728/965779264534351892/InShot_20220419_074338926.jpg" alt="DESC data_siswa;">

### Input Data 
Perintah :
```
INSERT INTO data_siswa (id,nama,kelas,jurusan) VALUES
-> (1,'Refal','XI RPL 2','RPL'),   
-> (2,'Fyan','XI RPL 3','RPL'),
-> (3,'Nabila','XI RPL 2','RPL');
```
<img src="https://media.discordapp.net/attachments/868319460216434728/965779264932835428/InShot_20220419_074428426.jpg" alt="INPUT DATA;">

### View Data
Perintah :
```
SELECT * FROM data_siswa;
```
<img src="https://media.discordapp.net/attachments/868319460216434728/965779265222221834/InShot_20220419_074519642.jpg" alt="VIEW DATA;">
