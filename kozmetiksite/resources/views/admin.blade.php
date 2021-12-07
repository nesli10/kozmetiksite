<!-- https://codepen.io/axelaredz/pen/zyIew -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="css/admin.css" rel="stylesheet" type="text/css" media="all" />
    <title>admin</title>
</head>
<body>
    <div class="admin-panel clearfix">
  <div class="slidebar">
    <div class="logo">
      <a href="/"></a>
    </div>
    <ul>
      <li><a href="#dashboard" id="targeted">anasayfa</a></li>
      <li><a href="#posts">hakkımızda </a></li>
      <li><a href="#media">misyon vizyon</a></li>
      <li><a href="#pages">ürün </a></li>
      <li><a href="#links">birim </a></li>
      <li><a href="#comments">footer</a></li>
      <li><a href="#plugins">slider</a></li>
      <li><a href="#users">duyurular</a></li>
    </ul>
  </div>
  <div class="main">
    <ul class="topbar clearfix">
    </ul>
    <div class="mainContent clearfix">
      <div id="dashboard">
        <h2 class="header"><span class="icon"></span>ana sayfa</h2>
         
       </div>
       <div id="posts">
         <h2 class="header">hakkımızda</h2>
          <div class="quick-press">
           <h4>hakkımızda ekleme</h4>
           <form action="" method="post">
             @csrf
             <input type="text" name="title" placeholder="başlık"/>
             <input type="text" name="content" placeholder="açıklama"/>
             <button type="button" class="save">kaydet</button>
             <button type="button" class="delet">sil</button>
             <button type="submit" class="submit" name="submit">uygula</button>
           </form>
         </div>
       </div>
       <div id="media">
         <h2 class="header">misyon vizyon</h2>
         <div class="quick-press">
           <h4>misyon vizyon ekleme</h4>
           <form action="" method="post">
             @csrf
             <input type="text" name="title" placeholder="başlık"/>
             <input type="text" name="content" placeholder="açıklama"/>
             <button type="button" class="save">kaydet</button>
             <button type="button" class="delet">sil</button>
             <button type="submit" class="submit" name="submit">uygula</button>
           </form>
         </div>
       </div>
       <div id="pages">
         <h2 class="header">ürün</h2>
          <div class="quick-press">
           <h4>ürün ekleme</h4>
           <form action="" method="post">
             @csrf
             <input type="text" name="tags" placeholder="katagori"/>
             <input type="text" name="title" placeholder="başlık"/>
             <input type="text" name="content" placeholder="açıklama"/>
             <input type="text" name="tags" placeholder="ücret"/>

             <button type="button" class="save">kaydet</button>
             <button type="button" class="delet">sil</button>
             <button type="submit" class="submit" name="submit">uygula</button>
           </form>
           <FORM ENCTYPE="multipart/form-data"
      ACTION="URL"
      METHOD=POST>
       <INPUT NAME="message"
         TYPE="file"> <BR> <BR>
            </FORM>
         </div>
       </div>
       <div id="links">
         <h2 class="header">birim</h2>
         <div class="quick-press">
           <h4>birim ekleme</h4>
           <form action="" method="post">
             @csrf
             <input type="text" name="title" placeholder="başlık"/>
             <input type="text" name="content" placeholder="açıklama"/>
             <button type="button" class="save">kaydet</button>
             <button type="button" class="delet">sil</button>
             <button type="submit" class="submit" name="submit">uygula</button>
           </form>
         </div>
       </div>
       <div id="comments">
         <h2 class="header">footer</h2>
         <div class="quick-press">
           <h4>footer ekleme</h4>
           <form action="" method="post">
             @csrf
             <input type="text" name="title" placeholder="adres"/>
             <input type="text" name="content" placeholder="telefon"/>
             <input type="text" name="content" placeholder="e mail"/>
             <input type="text" name="content" placeholder="sosyal medya adı"/>
              <input type="text" name="content" placeholder="sosyal medya linki"/>
              <input type="text" name="content" placeholder="sosyal medya ikonu"/>
             <button type="button" class="save">kaydet</button>
             <button type="button" class="delet">sil</button>
             <button type="submit" class="submit" name="submit">uygula</button>
           </form>
         </div>
       </div>
       <div id="plugins">
         <h2 class="header">slider</h2>
         <div class="quick-press">
           <h4>slider ekleme</h4>
           <form action="" method="post">
             @csrf
             <input type="text" name="title" placeholder="başlık"/>
             <input type="text" name="content" placeholder="açıklama"/>
             <input type="text" name="tags" placeholder="ücret"/>
             <button type="button" class="save">kaydet</button>
             <button type="button" class="delet">sil</button>
             <button type="submit" class="submit" name="submit">uygula</button>
           </form>
           <FORM ENCTYPE="multipart/form-data"
      ACTION="URL"
      METHOD=POST>
       <INPUT NAME="message"
         TYPE="file"> <BR> <BR>
            </FORM>
         </div>
       </div>
       <div id="users">
         <h2 class="header">duyurular</h2>
          <div class="quick-press">
           <h4>duyuru ekleme</h4>
           <form action="" method="post">
             @csrf
             <input type="text" name="title" placeholder="duyuru adı"/>
             <input type="text" name="content" placeholder="açıklama"/>
             <button type="button" class="save">kaydet</button>
             <button type="button" class="delet">sil</button>
             <button type="submit" class="submit" name="submit">uygula</button>
           </form>
           <FORM ENCTYPE="multipart/form-data"
      ACTION="URL"
      METHOD=POST>
       <INPUT NAME="message"
         TYPE="file"> <BR> <BR>
            </FORM>
         </div>
       </div>
     </div>
     <ul class="statusbar">
       <li class="logout"><a href="">çıkış</a></li>
     </ul>
   </div>
</div>
</body>
</html>