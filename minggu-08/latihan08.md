<h1>Latihan Pertemuan Ke 8</h1>
Pada pertemuan ke 8 ini adalah membahas tentang Docker compose. berikut adalah cara untuk melakukan docker compose

1. pertama iyalah membuat folder dengan nama composetest 
![gambar1](fldercomposetest.png)

2. langkah selanjutnya adalah membuat file app.py 

![gambar2](app.py1.png)

3. membuat file requirements.txt
![gambar3](requirements.txt.png)

4. langkah selanjutnya ialah membuat Dockerfile
![gambar4](Dockerfile.png)

5. define services compose file
![gambar5](docker-compose.png)

6. run dengan perintah docker-compose up
![gambar6](run1.png)
![gambar7](run2.png)

7. lihat hasil outputnya di web browser
![gambar8](outputdibrowser.png)

refresh pada web browser untuk melihat berubah pada angka
![gambar9](refrshoutput.png)

8. Edit the Compose file to add a bind mount
![gambar10](mount.png)

9. Perintah lain docker-compose

Menjalankan dan melihat variabel yang tersedia
$ docker-compose run web env

Menghentikan aplikasi
$ docker-compose stop

Menghapus containers
$ docker-compose down --volumes