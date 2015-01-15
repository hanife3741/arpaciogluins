
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Arpacıoğlu İnşaat</title>
<link href="hanife.css" rel="stylesheet" type="text/css" />
</head>

<body>
<div id="ana">
  <div id="ustmenu"><a href="index.php">Ana Sayfa</a>  |  Favorilerine Ekle</div>
  
  <div id="logo"><a href="index.php"><img src="images/logo.png" width="250" height="75" /></a></div>
  
  
  
  <div id="menualani">  <div id="menustil"><ul>
										<li><a href="index.php" ><img src="images/isareti.png" border="0" align="left"/>&nbsp;Ana Sayfa</a> </li> 
                                        <li><a href="hakkimizda.php" ><img src="images/isareti.png" border="0" align="left"/>&nbsp;Hakkımızda</a> </li> 
                                        <li><a href="referanslar.php" ><img src="images/isareti.png" border="0" align="left"/>&nbsp;Referanslar</a> </li> 
                                        <li><a href="fotogaleri.php" ><img src="images/isareti.png" border="0" align="left"/>&nbsp;Foto Galeri</a> </li> 
                                       <li><a href="iletisim.php" ><img src="images/isareti.png" border="0" align="left"/>&nbsp;İletişim</a> </li> 
  </ul></div></div>
  
 <? include("baglan.php"); ?> 
  <div id="icust"></div>
  
  <div id="icorta">
  <div id="bizdenhaberler">
    <div id="bizdenic"></div>
	<?
	$sql="select * from haberler ORDER BY  tarih DESC limit 2 "; 
	$habersql=mysql_query($sql);
	while($haber=mysql_fetch_array($habersql))
	{
	?>
        <div id="habericerikyazi" style="color:#990000; font-family:Arial, Helvetica, sans-serif; margin-top:15px; font-weight:bold;"><?=$haber["tarih"];?></div>
    <div id="habericerikyazi"><a href="haberdetay.php?id=<? $haber["id"]; ?>"><?=$haber["baslik"];?></a></div>
    <?}?>
    
    
    
    <div align="right" style="width:230px; margin-bottom:10px; margin-top:20px; float:left; margin-right:10px;"><a href="haberler.php"><img src="images/tumhaberler.png" width="81" height="11" /></a></div>
  </div>
  
  
  <div id="banner"><img src="images/banner_03.png" /></div>
  
  
  <div id="icyazi">  
  
  <div id="kutu">
       
     <div id="anasayfavizyon"><h3>Bizden mail almak ister misiniz?</h3>
	 <form method="GET" >
        <input type="text" name="ad" style="width:255px; height:20px; padding:5px;" placeholder="Adınız Soyadınız" />
        <input type="text" name="eposta" style="width:255px; height:20px; padding:5px; margin-top:10px;" placeholder="Eposta Adresiniz"/>	
		<input type="text" name="mesaj" style="width:255px; height:150px; padding:5px; margin-top:10px;" placeholder="Mesajınız"/>
		<input type="hidden" name="islem" value="epostakaydet" >
        <input type="submit" value=" Gönder "   style="margin-top:10px;" />
        </form >
		
		<?

if($_POST["ad"] == ""){
         echo "Ad-soyad Boş Bırakılmaz!";
      }
elseif($_POST["eposta"] == "" && empty($eposta) == ""){
         echo "E-posta Boş bırakılamaz!";
      }
elseif($_POST["mesaj"] == "" && empty($mesaj) == ""){
         echo "Bİr mesaj yazın!";}
	  //Boş değilse 
else{
    function isValidEmail($eposta){
       if(filter_var($eposta, FILTER_VALIDATE_EMAIL)){
        return true;
        }
      else {
            return false;
       }}
	   //fonksiyonumuzun kontrolünü yapalım
      if(isValidEmail($eposta)){
      //boş değil ve e mail yazımı doğru formatta ise 
        echo "E-posta yazımı doğru";
		if ($_GET['islem']=="epostakaydet" )
		 { 
		 $sql = 'INSERT INTO eposta ( adi , eposta,mesaj ) VALUES ("'.$_GET["ad"].'", "'. $_GET["eposta"].'", "'. $_GET["mesaj"].'")' ;
		 if (mysql_query($sql))
		 Echo "Kaydınız Gerçekleşmiştir. İlginiz için Teşekkür Ederiz..";
		 }
   } 
   else {
        echo "E-posta yazımı yanlış";
   }
		 }
		?>
        
         </div>
       </div>
       
      <div id="aragolge"></div>
      
   
   
     <div id="kutu">
       
         <div id="anasayfavizyon"><h3>Vizyonumuz</h3>ARPACIOĞLU DEKORASYON, Kalitede, müşteri odaklı çalışan ve müşterisine her zaman memnuniyet sunan bir firma olmaya özen göstermektedir.

Bize Güvenebilirsiniz; Beraber iş yapmanın en önemli unsurunun karşılıklı güven olduğuna inanıyoruz. Güveninizi boşa çıkarmayız.

Tecrübeliyiz; Ekibimiz genç ve dinamik olmakla beraber sektörde tecrübeli bir çekirdek kadro etrafında genişlemektedir. Sürekli olarak kendini yenileyen bir anlayış ile çalıştığımız için sektörde haklı bir yerimiz var.

Yenilikçiyiz; Görev aldığımız projelerin yapısına uygun olarak yeni yaklaşımlar, yeni çözümler üretiriz. Gerçekleştirdiğimiz her proje bizim için ayrı bir heyecan ve değerdir. 

Size vereceğimiz referans, müşterilerimize vermiş olduğumuz özenin teminatıdır.
 </div> </div>
   
  </div>
  <div id="icalt"></div>
  
  
  
  

  <div id="alt"><div id="altyazi">Hanife Özdemir Kişisel 2013 Tüm Hakkı Saklıdır.</div></div>
</div>
</body>
</html>
