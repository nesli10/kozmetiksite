<!-- https://www.cosmetica.com.tr/sac-bakim/ -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="css/header.css" rel="stylesheet" type="text/css" media="all" />
    <link href="css/footer.css" rel="stylesheet" type="text/css" media="all" />
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
    <title>saç bakım</title>
     <style>
.card {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  max-width: 300px;
  margin: auto;
  text-align: center;
  font-family: arial;
  float:left;
  margin-right:18px;
  margin-left:18px;
  margin-top:40px;
}

.price {
  color: grey;
  font-size: 22px;
}

.card button {
  border: none;
  outline: 0;
  padding: 12px;
  color: white;
  background-color: #000;
  text-align: center;
  cursor: pointer;
  width: 100%;
  font-size: 18px;
}

.card button:hover {
  opacity: 0.7;
}
</style>
</head>
<body>
     @include("header")
     <h2 style="text-align:center">saç bakım ürünleri</h2>

<table >
<tr>
<td><div class="card">
  <img src="https://img-cosmetica.mncdn.com/UPLOAD/URUNLER/thumb/042415_1_medium.jpg"  style="width:100%">
  <h1>Gliss Şampuan 360 Ml Ultimate Oil Elixir</h1>
  <p class="price">₺12,90   </p>
  <p> saçlara derinlemesine bakım uygular.</p> <br><br><br><br><br>
</div></td>
<td><div class="card">
  <img src="https://img-cosmetica.mncdn.com/UPLOAD/URUNLER/thumb/221405_1_medium.jpg"  style="width:100%">
  <h1>L'Oréal Paris Elseve Amla Yağı Bukle Belirginleştirici Saç Bakım Kremi 200 Ml</h1>
  <p class="price">₺14,90    </p>
  <p> Saçlara derinlemesine bakım yaparken, bukleleri kolaylıkla kontrol altına alıyor.</p> 
</div></td>
<td><div class="card">
  <img src="https://img-cosmetica.mncdn.com/UPLOAD/URUNLER/thumb/042144_medium.jpg"  style="width:100%">
  <h1>Palette Göz Alıcı Renkler 7-77 Yoğun Bakır</h1>
  <p class="price">₺15,50  </p>
  <p> uzun süre kalıcı renk yoğunluğu sağlar.</p> <br><br><br><br><br>
</div></td>
<td><div class="card">
  <img src="https://img-cosmetica.mncdn.com/UPLOAD/URUNLER/thumb/223499_1_medium.jpg"  style="width:100%">
  <h1>Ellips Hair Besleyici Saç Vitamini 6 Kapsül</h1>
  <p class="price">₺14,90    </p>
  <p>Argan Yağı, Jojoba Yağı, Vitamin A, C, E ve ProVitamin B5 içeren zengin formülüyle, yıpranmış ve zayıf düşmüş saçları besler, bakım yapar ve korur.</p><br> <br>
</div></td>
<div class="card">
  <img src="https://img-cosmetica.mncdn.com/UPLOAD/URUNLER/thumb/019319_medium.jpg"  style="width:100%">
  <h1>Restorex Onarıcı Bakım Yağı 100 Ml</h1>
  <p class="price">₺16,50   </p>
  <p> Restorex, içeriğindeki Phytosterol ile saç uzamasında 2 haftada gözle görülür sonuçlar elde etmenize yardımcı oluyor. </p> <br>
</div>
<div class="card">
  <img src="https://img-cosmetica.mncdn.com/UPLOAD/URUNLER/thumb/013487_medium.jpg"  style="width:100%">
  <h1>Morfose Saç Spreyi Ultra Strong Turuncu 400 Ml</h1>
  <p class="price">₺21,90   </p>
  <p> saçlarınızın hacmini ve şeklini korumasına yardımcı olur.</p> 
</div>
<div class="card">
  <img src="https://img-cosmetica.mncdn.com/UPLOAD/URUNLER/thumb/221688_1_medium.jpg"  style="width:100%">
  <h1>Elidor Süper Saç Bakım Maskesi Duş Öncesi Bakım Avokado Ve Üzüm Çekirdeği Yağı 30 Ml</h1>
  <p class="price">₺6,90   </p>
  <p>elidor saç bakım maskesi duş öncesi bakım duşta zaman kaybetmeden saçlarınızı koruyor ve besliyor.</p> 
</div>
<div class="card">
  <img src="https://img-cosmetica.mncdn.com/UPLOAD/URUNLER/thumb/017287_1_medium.jpg"  style="width:100%">
  <h1>L'Oréal Paris Elseve Saç Kremi 360 Ml 3 Mucizevi Kil</h1>
  <p class="price">₺13,40  </p>
  <p>Normal ve Yağlanmaya Eğilimli Saçlar İçin geliştirilmiştir.Kolay tarama sağlar.Nemlendirir, saçlarınızı ağırlaştırmaz.Saçlarınıza canlı görünüm verir.</p> <br><br><br><br>
</div>
</tr>
</table>
@include("footer")
</body>
</html>