<h1> Praktikum TCC minggu 09 (Docker for beginners-Linux)</h1>

untuk praktikum ini sebelum mulai untuk menggunakan terminal linux pada web maka terlebih dahulu untuk Login ke akun Docker masing-masing

<h2>#0 Prerequisites</h2>
clone repo dari github dengan nama linux_tweet_app pada akun dockersamples.

![gambar1](gambar1.png)

<h2>#1 Run some simple docker container</h2>

1. memulai dengan container image alpine

![gambar2](gambar2.png)

2. melihat semua daftar container

![gambar2](gambar3.png)

3. Menjalankan Docker container dan mengakses terminal ubuntu

![gambar2](gambar4.png)

4. perintah seperti:

![gambar2](gambar5.png)
![gambar2](exit6.png)

5. Cek versi host VM

![gambar2](gambar7.png)

6. menjalankan MySQL container

![gambar2](gambar8.png)

7. melihat daftar container

![gambar2](gambar9.png)

8. Cek log dan proses yang berjalan didalam container

![gambar2](gambar10.png)
![gambar2](gambar11.png)

9. melihat versi MySQL yang digunakan

![gambar2](gambar12.png)

10. menghubungkan terminal ke sh

![gambar2](gambar13.png)

<h2>#2 package and run a custom app using docker</h2>
Membuat image sederhana

1. berpindah ke direktory repo yang telah diclone dan melihat isi dari Dockerfile

![gambar2](gambar14.png)

2. mengexport variabel dengan akun docker masing-masing

![gambar2](gambar15.png)

3. membuat docker image

![gambar2](gambar16.png)

4. menjalankan container untuk menghosting image yang sebelumnya telah dibuat

![gambar2](gambar17.png)

5. mengecek hasilnya dari link yang disediakan

![gambar2](link18.png) 
![gambar2](gambar19.png)

6. menghentikan dan menghapus container

![gambar2](gambar20.png)


<h2>#3 modify a running website</h2>
Update the image

1. membuat image baru

![gambar2](updateimage.png)

2. melihat daftar image yang ada

![gambar2](gambar22.png)

3. Login menggukan akun docker masing-masing agar dapat dipush ke akun docker kita

![gambar2](logindocker25.png)

4. push image versi 1.0 dan 2.0

![gambar2](pushimage26.png)

5. melihat hasil push di akun docker kita masing-masing

![gambar2](hasilpush.png)