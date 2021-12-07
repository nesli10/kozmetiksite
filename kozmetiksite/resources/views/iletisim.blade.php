<!-- https://www.youtube.com/watch?v=grgA7g-2fYI -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="css/iletisim.css" rel="stylesheet" type="text/css" media="all" />
    <link href="css/header.css" rel="stylesheet" type="text/css" media="all" />
    <link href="css/footer.css" rel="stylesheet" type="text/css" media="all" />
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
    <title>iletişim</title>
</head>
<body>
 <header>
  <div class="small" id="header-scroll">
    <h1 ><a style="font-family: Gabriola; font-size: 40px;" href="/">PARILTI KOZMETİK</a></h1>
    <nav>
      <ul>
        <li><a class="nav-link" href="/hakkimizda">hakkımızda</a></li>
        <li><a class="nav-link" href="/misyonvizyon">misyon-vizyon</a></li>
        <li>
          <a href="#3">ürünlerimiz</a>
          <div class="sub-menu">
            <ul>
              <li> <a  href="/makyaj">makyaj </a> </li>
              <li><a  href="/kisiselbakim">kişisel bakım </a></li>
              <li><a  href="/sacbakim">saç bakım </a></li>
            </ul>
          </div>
        </li>
        <li>
          <a href="#4">birimlerimiz</a>
          <div class="sub-menu">
            <ul>
              <li> <a  href="/pazarlama">pazarlama </a> </li>
              <li><a  href="/reklam">reklam </a></li>
              <li><a  href="/bilgiislem">bilgi işlem </a></li>
            </ul>
          </div>
        </li>
        <li><a class="nav-link" href="/iletisim">iletişim</a></li>
      </ul>
    </nav>
   
  </div>
</header> 
<div class="contact_form">
		<div class="formulario">			
      <h1>iletişim  </h1>
		<h3>şikayet ve öneri</h3>
					<form action="submeter-formulario.php" method="post">				
								<p>
									<label for="nome" class="colocar_nome">adınız
										<span class="obrigatorio">*</span>
									</label>
										<input type="text" name="introduzir_nome" id="nome" required="obrigatorio" placeholder="adınız">
								</p>
							
								<p>
									<label for="email" class="colocar_email">Email
										<span class="obrigatorio">*</span>
									</label>
										<input type="email" name="introduzir_email" id="email" required="obrigatorio" placeholder="email">
								</p>
						
								<p>
									<label for="telefone" class="colocar_telefone">konu
									</label>
										<input type="tel" name="introduzir_telefone" id="telefone" placeholder="konu">
								</p>		
							
								<p>
									<label for="mensagem" class="colocar_mensagem">Mesajınız
										<span class="obrigatorio">*</span>
									</label>                     
                               		  <textarea name="introduzir_mensagem" class="texto_mensagem" id="mensagem" required="obrigatorio" placeholder="mesajınız"></textarea> 
                               	</p>	  								
							
								<button type="submit" name="enviar_formulario" id="enviar"><p>gönder</p></button>
					</form>
		</div>	
		<iframe src="https://www.google.com/maps/d/embed?mid=1rBkVFi3qc-KxwEGcJCT0wtmbP9Ve0Pqw" width="540" height="380"></iframe>
	</div>
	@include("footer")

</body>
</html>