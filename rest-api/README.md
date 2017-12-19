# REST-API Knowledge Base Tanaman

Modul ini adalah simulasi shared dataset tanaman dengan REST-API. Dikembangkan dengan menggunakan framework CodeIgniter dan library [REST-Controller](https://github.com/chriskacerguis/codeigniter-restserver) oleh Phil Sturgeon, Chris Kacerguis.

## Penggunaan:

Untuk mendapatkan keseluruhan dataset tanaman:
```
http://domainname/index.php/tanaman
```

Kirimkan opsi parameter berikut untuk memfilter dataset:
- s: Opsi queri umum pencarian tanaman
- ph: ph tanaman (toleransi +/- 1.0)
- temp: temperatur udara (toleransi +/- 10)
- udara: kelembaban udara (toleransi +/- 10)
- dpl: ketinggian tempat (toleransi +/- 100 m)
- hujan: curah hujan (toleransi +/- 15)

Format
```
http://domainname/index.php/tanaman[?opsi1=nilai_opsi1&opsi2=nilai_opsi2]
```
contoh:
- Untuk mendapatkan dataset tanaman padi
```
http://domainname/index.php/tanaman?s=padi
```
- Untuk mendapatkan dataset tanaman jagung dengan ph 6.0 (toleransi +/- 1.0)
```
http://domainname/index.php/tanaman?s=jagung&ph=6
```

Untuk dataset Skema Tanam dapat menggunakan format url:
```
http://domainname/index.php/skema_tanam?id=idtanaman
```