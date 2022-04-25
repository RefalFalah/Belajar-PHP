### Modifikasi Tabel Menentukan Primary Key
Perintah :
```
ALTER TABLE data_siswa MODIFY id INT NOT NULL, 
-> ADD PRIMARY KEY (id);
```
<img src="https://media.discordapp.net/attachments/868319460216434728/968016817492738118/InShot_20220425_120227133.jpg">

### Mengubah Nama Field / Coloum
Perintah :
```
ALTER TABLE data_siswa
-> CHANGE id no int(11);
```
<img src="https://media.discordapp.net/attachments/868319460216434728/968016817735999508/InShot_20220425_120318021.jpg">

### Mengubah Nama Tabel
Perintah :
```
ALTER TABLE data_siswa
-> RENAME siswa;
```
<img src="https://media.discordapp.net/attachments/868319460216434728/968016817958318124/InShot_20220425_120407536.jpg">

### Menghapus Data Pada Tabel
Perintah :
```
DELETE FROM siswa WHERE no = 2;
```
<img src="https://media.discordapp.net/attachments/868319460216434728/968016818553905263/InShot_20220425_120959993.jpg">

### Menampilkan Beberapa Data
Perintah :
```
SELECT nama, tahun_masuk FROM siswa
-> WHERE no = 1;
```
<img src="https://media.discordapp.net/attachments/868319460216434728/968016818906214430/InShot_20220425_121100833.jpg">

### Menghapus Tabel
Perintah :
```
DROP TABLE siswa;
```
<img src="https://media.discordapp.net/attachments/868319460216434728/968016819229184030/InShot_20220425_121125535.jpg">

### Menghapus DATABASE
Perintah :
```
DROP DATABASE siswa;
```
<img src="https://media.discordapp.net/attachments/868319460216434728/968016819229184030/InShot_20220425_121125535.jpg">