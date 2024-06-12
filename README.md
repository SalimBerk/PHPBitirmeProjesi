## 1.Giriş

<p>
  Oyun Günlüğü web sitesinin geliştirme süreci benim için oldukça keyifliydi. Projede yapacağım işlemleri gün gün kafamda programladım ve yapmak istediklerim noktasında herhangi bir sorunla karşılaşmadım.
</p>
<br>
<p>
  Oyun Günlüğü projesi tüm oyun severlere hitap etmektedir. Bu site, kullanıcılara satın almak istedikleri oyunlar hakkında detaylı bilgiler sunmaktadır. Kullanıcılar, oynadıkları oyunlara yorumlarını bırakarak oyunu satın almak isteyen diğer kullanıcılara rehberlik etmektedirler. Sitenin zengin ve kullanışlı ara yüzü, kullanıcıları sitede tutmaya yetecek ve onlara keyifli zaman geçirmelerini sağlayacaktır.
</p>
<br>

## 2.Proje Tanımı

<p>
  Oyun Günlüğü sitesi, PHP, JS, MySQL, JSON ve RESTful API kullanılarak geliştirilmiş bir web uygulamasıdır. Sitenin ara yüzü Tailwind CSS ile tasarlanmıştır. Slider kullanımı için
Swiper kütüphanesinden yararlanılmıştır.
</p>
<br>

## Uygulamada Kullanıcılar:

<ul>
<li>Kayıt olup giriş yapabilmektedirler.</li>
<li>Giriş yapan kullanıcılar yönetici ve kullanıcılar olarak ikiye ayrılırlar.</li>
<li>Profil resimlerini değiştirebilirler.</li>
</ul>

<div style="display:flex;  gap:2rem; align-items:center; justify-content:center;">
<img src="https://github.com/SalimBerk/PHPBitirmeProjesi/assets/77536512/334ca657-b70d-4f1a-9a0c-806a1bd8acfc" style="height:400px; width:500px; margin-top:0px;">
<img src="https://github.com/SalimBerk/PHPBitirmeProjesi/assets/77536512/0ff6ebca-6b28-4804-aed6-9555b74d32f3" style="height:400px; width:500px; margin-top:0px;">
</div>
<img src="https://github.com/SalimBerk/PHPBitirmeProjesi/assets/77536512/a352232c-0292-4e14-96fc-e7a63562562c" style="width:full;">
<br>

## Yönetici Paneli
<ul>
<li>Yöneticiye oyun ekleme, silme ve güncelleme işlemlerini yerine getirme imkanı sunar.</li>
</ul>

<br>

<img src="https://github.com/SalimBerk/PHPBitirmeProjesi/assets/77536512/fea7d82c-f0f9-4fd1-bd2c-ecc55d2c7e44" style="width:full;">



## Oyunlar
<ul>
  <li>Sitede çok sayıda oyun bulunmaktadır.</li>
  <li>Kullanıcılar oyunların fiyatlarını ve oyun hakkında detaylı bilgileri öğrenebilirler.</li>
</ul>
<br>

<img src="https://github.com/SalimBerk/PHPBitirmeProjesi/assets/77536512/6930bf26-b618-4ec9-a1f9-a9e52e7efb24" style="width:full;">

<br>

## Yorumlar:
<ul>
<li>Giriş yapan kullanıcılar oyunlara yorum bırakabilirler.</li>
<li>Giriş yapmayan kullanıcılar ise sadece yapılmış olan yorumları okuyup inceleyebilirler.</li>
</ul>

<img src="https://github.com/SalimBerk/PHPBitirmeProjesi/assets/77536512/bcf1407a-681b-473b-883b-141c1e6edb77" style="width:full;">

## 3. Kullanılan Teknolojiler:

1. PHP: Sunucu tarafında çalışan betik dili.
2. MySQL: Veritabanı yönetim sistemi.
3. JSON: Veri değişim formatı.
4. RESTful API: API tasarım modeli.

##  4. Özellikler (Swiper js, Tailwind CSS)

## 4.1 Kullanıcı Yönetimi:

1. Kullanıcı kayıt ve giriş sistemi.
2. Şifrelerin güvenli bir şekilde saklanması (hashing).
3. Kullanıcı profili ve hesap yönetimi.


## 4.2 Veritabanı İşlemleri

1. CRUD (Create, Read, Update, Delete) Oyun için yapılan işlemler
2. Veritabanı tasarımı ve ilişkisel veritabanı yönetimi.

Gamesiteapp adında veritabanı oluşturuldu. Bu veritabanında 5 adet tablo bulunmaktadır.

<img src="https://github.com/SalimBerk/PHPBitirmeProjesi/assets/77536512/436e8e8e-77aa-4f25-b9c7-e1d344c18b68" style="width:500px; height:500px;">

<br>

<ul>
  <li>category</li>
	<li>comments</li>
	<li>games</li>
  <li>gamescategory</li>
	<li>users</li>
 <li>likes</li>

</ul>

<br>

<p>
  Oyunlar ve kategorileri arasında çoka çok ilişki kuruldu. Kullanıcılar yorumlar ilişkilendirildi.
Ve gerekli görülen yerlerde ilişki kuruldu. MySQL kullanarak veritabanı işlemleri gerçekleştirildi
</p>

<br>

## 4.3 Form Yönetimi
<p>
  Veri doğrulama ve hata yönetimi.
Kullanıcıdan alınan verilerin işlenmesi ve saklanması sağlandı.

</p>
<br>

## 4.4 Form Yönetimi
<p>
 Kullanıcıların dosya yükleyebilmesi (örneğin resim yükleme).
Yüklenen dosyaların sunucuda güvenli bir şekilde saklanması sağlandı.
</p>

## 4.5 JSON ve RESTful API
<p>
 JSON formatında veri alışverişi.
RESTful API oluşturma ve kullanma.
API üzerinden veri alma ve gönderme işlemleri yapıldı.
</p>


## 4.6 Oturum Yönetimi

<p>
  PHP Sessions kullanarak oturum yönetimi.
Kullanıcı oturumlarının güvenli bir şekilde yönetilmesi.

</p>

<br>

## 4.7 Güvenlik

<p>Güvenlik kısmına henüz bakılmadı. Bakılacak.</p>


## 4.8 PHP OOP ve PDO

<p>
  PHP kullanarak veri tabanı işlemleri gerçekleştirildi. Tekrarlı kodlar azaltılarak kod okunabilirliği arttırıldı.
</p>

















