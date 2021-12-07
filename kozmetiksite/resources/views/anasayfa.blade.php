<!--https://www.rossmann.com.tr/?gclid=Cj0KCQiAy4eNBhCaARIsAFDVtI1bQU7Mn3pfOgch_koXYAqkmF5t8JcYc7xxAHmfOEb4B9nrS2IKzF0aAhJbEALw_wcB  -->
<!-- https://www.yazilimbilisim.net/web/css/css-slider-yapimi/ -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="css/header.css" rel="stylesheet" type="text/css" media="all" />
    <link href="css/slider.css" rel="stylesheet" type="text/css" media="all" />
    <link href="css/duyurular.css" rel="stylesheet" type="text/css" media="all" />
    <link href="css/footer.css" rel="stylesheet" type="text/css" media="all" />
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
    <title>anasayfa</title>
</head>
<body>
 @include("header")
<div id="slider-wrapper">
    <div class="slider">
        <a class="img-bir" href="/slider1" >
            <img src="https://img-cosmetica.mncdn.com/UPLOAD/URUNLER/thumb/218806_medium.jpg">
            
         </a>
        <a class="img-iki"href="/slider2" >
                <img src="https://img-cosmetica.mncdn.com/UPLOAD/URUNLER/thumb/017731_1_medium.jpg">
            
        </a>
        <a class="img-uc" href="/slider3">
            <img src="https://img-cosmetica.mncdn.com/UPLOAD/URUNLER/thumb/014283_1_medium.jpg">
           
        </a>
     </div>
</div>
<table >
<h1 class="baslik" > DUYURULAR </h1>
<tr>
<td><a class="img1" href="/duyuru1" ><img src="https://cdn.rossmann.com.tr/media/mnmcms/widgetNinetyNine/Elidor-Kargo-Bedava-Banner_828x508px-619b5bd23a209.jpg" width="350" height="250"></a></td>
<td><a  class="img1" href="/duyuru2" ><img src="https://cdn.rossmann.com.tr/media/mnmcms/widgetNinetyNine/828x508px-619b5bd239956.jpg" width="350" height="250"></a></td>
<td><a class="img1" href="/duyuru3" ><img src="https://cdn.rossmann.com.tr/media/mnmcms/widgetNinetyNine/Makyaj-101-Mobile-61968cbfc1f15.jpg" width="350" height="250"></a></td>
<tr>
<td><a class="img1" href="/duyuru4" ><img src="https://cdn.rossmann.com.tr/media/mnmcms/widgetNinetyNine/rossmann-promo-banner-828x508-6193b5357ff89.jpg" width="350" height="250"></a></td>
<td><a class="img1" href="/duyuru5" ><img src="https://cdn.rossmann.com.tr/media/mnmcms/widgetNinetyNine/rossmann-face-banner-828x508-6193b549067ee.jpg" width="350" height="250"></a></td>
<td><a href="/duyurudevam">
     <button class="btn profile-edit-btn" >daha fazla</button>
     </a></td>
</tr>
</tr>
</table>
 @include("footer")
</body>
</html>