# nextcloud 31.0.4

## tutorial
- cloning project 
```
git clone 
```
- gunakan perintah untuk running docker 

```
docker compose up -d
```
- tunggu beberapa saat..

- buka browser `localhost` pastikan bisa di load

- login dengan default akun username : `admin` password : `nextcloud@2025`

## konfigurasi `trusted_domains`

- buka aksess root (biar data bisa di ubah ubah di file manager) 
```
sudo chmod -R 777 files/ mariadb/ nextcloud/
```
- masuk ke folder `nextcloud/config` pilih `config.php`

- cari `trusted_domains` di file `config.php`

- tambahkan domain atau ip server anda pada array `trusted_domains` contoh 
```
# ...
'trusted_domains' => 
array (
    0 => 'localhost',
    1 => 'localhost:8080',
    2 => '0.0.0.0:8080',
),
# ...
```
