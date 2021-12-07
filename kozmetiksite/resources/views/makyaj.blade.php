<!-- https://www.cosmetica.com.tr/makyaj/?page=3 -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="css/header.css" rel="stylesheet" type="text/css" media="all" />
    <link href="css/footer.css" rel="stylesheet" type="text/css" media="all" />
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
    <title>makyaj</title>
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
<body  >
     @include("header")
<h2 style="text-align:center; ">makyaj malzemeleri</h2>

<table >
<tr>
<td> <div class="card">
  <img src="https://img-cosmetica.mncdn.com/UPLOAD/URUNLER/thumb/222843_1_medium.jpg"  style="width:100%">
  <h1>Maybelline New York Lash Sensational Sky High Maskara</h1>
  <p class="price">₺64,90 </p>
  <p> Maybelline New York Lash Sensational Sky High Maskara gözlerinizde istediğiniz güçlü etkiyi yaratmanızı sağlar. </p>
</div></td>
 
<td> <div class="card">
  <img src="https://img-cosmetica.mncdn.com/UPLOAD/URUNLER/thumb/025765_2_medium.jpg"  style="width:100%">
  <h1>Maybelline New York Instant Anti Age Eraser Kapatıcı-01 Light</h1>
  <p class="price">₺54,90 </p>
  <p> Akışkan dokusu sayesinde göz çevresinde çizgilenme ya da kalın tabaka oluşturmaz.
Yuvarlak roll-on ucu sayesinde kolayca uygulanır. </p>
</div></td>

<td><div class="card">
  <img src="https://img-cosmetica.mncdn.com/UPLOAD/URUNLER/thumb/040019_medium.jpg"  style="width:100%">
  <h1>Golden Rose Dipliner Black  </h1> 
  <p class="price">₺42,50  </p><br>
  <p> keskin bir bakış sağlar    </p> <br> <br><br><br><br><br>
</div></td>
<td><div class="card">
  <img src="https://img-cosmetica.mncdn.com/UPLOAD/URUNLER/thumb/023481_1_medium.jpg"  style="width:100%">
  <h1>Nivea Lip Care Blackberry Shine </h1> 
  <p class="price">₺17,90   </p><br>
  <p>Yoğun bakım sağlar.Nemlendirir.    </p> <br><br><br><br><br><br>
</div></td>
<div class="card">
  <img src="https://img-cosmetica.mncdn.com/UPLOAD/URUNLER/thumb/218238_medium.jpg"  style="width:100%">
  <h1>Maybelline New York Tattoo Liner Jel Göz Kalemi 911 Smooth Walnut (Kahverengi) </h1> 
  <p class="price">₺31,90   </p>
  <p>Maybelline New York markasından yeni Tattoo Liner Jel Göz Kalemi 36 saate kadar kalıcılık sağlıyor.   </p> <br><br><br>
</div>
<div class="card">
  <img src="https://img-cosmetica.mncdn.com/UPLOAD/URUNLER/thumb/219316_1_medium.jpg" style="width:100%">
  <h1>Maybelline New York Fit Me Matte+Poreless Pudra 90 Translucent </h1> 
  <p class="price">₺51,90    </p>
  <p>Formülünde bulunan mikro pudra tanecikleri ile yüzdeki gözenekli görünümü ustaca kapatır.
    Ciltte kolayca dağılan eşsiz formülüyle yüze kolayca uyum sağlayarak doğal bir görünüm kazanmasına yardımcı olur.   </p> 
</div>
<div class="card">
  <img src="https://img-cosmetica.mncdn.com/UPLOAD/URUNLER/thumb/042721_medium.jpg"  style="width:100%">
  <h1>Golden Rose Matte Lipstick Crayon No:21 </h1> 
  <p class="price">₺17,90     </p>
  <p> Yoğun kapatıcılığı ile göz dolduran, kadifemsi yapısıyla kolayca sürülen ve içeriğinde bulunan E vitamini ile dudaklarınızı besleyerek kurumasına engel olur.   </p> 
</div>
<div class="card">
  <img src="https://img-cosmetica.mncdn.com/UPLOAD/URUNLER/thumb/223054_1_medium.jpg"  style="width:100%">
  <h1>Pastel Oje 313 </h1> 
  <p class="price">₺5,90      </p>
  <p> değişik ve güzel renk seçenekleri mevcuttur  </p> <br><br><br><br><br><br><br>
</div>
  </tr>
</table>
 @include("footer")
</body>
</html>