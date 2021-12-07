<!-- https://www.cosmetica.com.tr/kisisel-bakim-urunleri/ -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="css/header.css" rel="stylesheet" type="text/css" media="all" />
    <link href="css/footer.css" rel="stylesheet" type="text/css" media="all" />
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
    <title>kişisel bakım</title>
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
     <h2 style="text-align:center">kişisel bakım ürünleri</h2>

<table >
<tr>
<td> <div class="card">
  <img src="https://img-cosmetica.mncdn.com/UPLOAD/URUNLER/thumb/017841_medium.jpg"  style="width:100%">
  <h1>Le Petit Marseillais Duş Jeli Vanilya Sütü 400 Ml</h1>
  <p class="price">₺35,90  </p>
  <p> vanilyanın eşsiz kokusu ve nemlendirici etkisiyle buluşan duş jeli. </p> <br> <br> <br>
</div></td>
<td> <div class="card">
  <img src="https://img-cosmetica.mncdn.com/UPLOAD/URUNLER/thumb/028355_1_medium.jpg"  style="width:100%">
  <h1>Nivea Body Q10 Sıkılaştırıcı Losyon 250 Ml</h1>
  <p class="price">₺22,90 </p>
  <p> Sıkı ve canlı bir cilt için; ihtiyaçlarınıza uygun sıkılaştırıcı kremler en sadık destekçiniz olacak. </p>  <br> <br>
</div></td>
<td><div class="card">
  <img src="https://img-cosmetica.mncdn.com/UPLOAD/URUNLER/thumb/223526_1_medium.jpg"  style="width:100%">
  <h1>Duru Duş Jeli Fresh Okyanus Esintisi 50 Ml</h1>
  <p class="price">₺4,90</p>
  <p> Okyanus mineralleri ve arındırıcı tanecikler içeren Duru Fresh Sensations Okyanus Esintisi duş jeli cildinizin derinlemesine temizlenmesine yardımcı olur. </p>
</div></td>
<td><div class="card">
  <img src="https://img-cosmetica.mncdn.com/UPLOAD/URUNLER/thumb/221355_1_medium.jpg"  style="width:100%">
  <h1>Signal Diş Macunu Çürüklere Karşı Nane Ferahlığı 100 Ml</h1>
  <p class="price">₺5,90 </p>
  <p> çürüklere karşı üstün koruma ve nane ferahlığı. </p> <br> 
  </div></td>
  <div class="card">
  <img src="https://img-cosmetica.mncdn.com/UPLOAD/URUNLER/thumb/222836_1_medium.jpg"  style="width:100%">
  <h1>Kotex Natural Ultra Süper Ekonomik Paket Gece 16'lı</h1>
  <p class="price">₺22,90</p>
  <p> ultra gece koruma. </p> <br> 
  </div>
  <div class="card">
  <img src="https://img-cosmetica.mncdn.com/UPLOAD/URUNLER/thumb/221602_1_medium.jpg"  style="width:100%">
  <h1>Bioder Bio Epiten Tüy Azaltıcı Sirli Bant Ağda Vücut Hassas 1+1</h1>
  <p class="price">₺18,90</p>
  <p> Bio Epilation ağda bantları serisi, güçlü formülü ile cildinizi istenmeyen  tüylerden temizleyerek ölü hücrelerden arındırır. </p> <br> 
  </div>
 <div class="card">
  <img src="https://img-cosmetica.mncdn.com/UPLOAD/URUNLER/thumb/018101_medium.jpg"  style="width:100%">
  <h1>Dove Cream Bar Shea Butter 100 Gr</h1>
  <p class="price">₺4,90 </p>
  <p> içeriğinde ki yağ sayesinde cildinize ipeksi bir yumuşaklık kazandırır.</p> <br> <br> <br> <br> <br> <br> <br> 
  </div>
  <div class="card">
  <img src="https://img-cosmetica.mncdn.com/UPLOAD/URUNLER/thumb/220302_1_medium.jpg"  style="width:100%">
  <h1>Neutrogena Parfümlü El Kremi 50 Ml</h1>
  <p class="price">₺21,90  </p>
  <p> kuru ve çatlak ciltler için anında yumuşama.</p> <br> <br> <br> <br> <br> 
  </div>
</tr>
</table>
@include("footer")
</body>
</html>