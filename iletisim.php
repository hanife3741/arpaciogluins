
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
  
  
  <div id="icust"></div>
  
  <div id="icorta">
  <div id="bizdenhaberler">
    <div id="bizdenic"></div>
        <?
		include("baglan.php");
	$sql="select * from haberler ORDER BY  tarih DESC limit 2 "; 
	$habersql=mysql_query($sql);
	while($haber=mysql_fetch_array($habersql))
	{
	?>
        <div id="habericerikyazi" style="color:#990000; font-family:Arial, Helvetica, sans-serif; margin-top:15px; font-weight:bold;"><?=$haber["tarih"];?></div>
    <div id="habericerikyazi"><a href="haberdetay.php?id=<?=$haber["id"];?>"><?=$haber["baslik"];?></a></div>
    <?}?>
    
    <div align="right" style="width:230px; margin-bottom:10px; margin-top:20px; float:left; margin-right:10px;"><img src="images/tumhaberler.png" width="81" height="11" /></div>
  </div>
  
  
  <div id="banner"><img src="images/banner_03.png" /></div>
  
  
  <div id="icyazi"> 
    <center<p><b>İLETİŞİM</b><br><br>
	
	<b>Adres :</b>İnönü Mahallesi 1966 Sokak No:27 <br><br> Gebze / KOCAELİ<br><br>

<b>Tel :</b>05378541270 <br><br>

<b>E-mail :</b><a href="mailto:arpaciogludekarasyon@hotmail.com">arpaciogludekarasyon@hotmail.com</a><br><br>

<b>Facebook :</b><a href="https://www.facebook.com/messages/salim.ozdemir.315" >Salim Özdemir</a></p></center> <br>
<p align="center">
		<iframe width="600" height="250" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?f=q&amp;source=s_q&amp;hl=tr&amp;geocode=&amp;q=no:27+1966.+Sokak,+%C4%B0n%C3%B6n%C3%BC+Mh.,+Gebze,+T%C3%BCrkiye&amp;aq=&amp;sll=40.815449,29.443853&amp;sspn=0.010036,0.021136&amp;ie=UTF8&amp;hq=&amp;hnear=%C4%B0n%C3%B6n%C3%BC+Mh.,+1966.+Sk,+Gebze,+T%C3%BCrkiye&amp;ll=40.815452,29.44385&amp;spn=0.005018,0.010568&amp;t=m&amp;z=14&amp;output=embed"></iframe><br><small><a href="https://maps.google.com/maps?f=q&amp;source=embed&amp;hl=tr&amp;geocode=&amp;q=no:27+1966.+Sokak,+%C4%B0n%C3%B6n%C3%BC+Mh.,+Gebze,+T%C3%BCrkiye&amp;aq=&amp;sll=40.815449,29.443853&amp;sspn=0.010036,0.021136&amp;ie=UTF8&amp;hq=&amp;hnear=%C4%B0n%C3%B6n%C3%BC+Mh.,+1966.+Sk,+Gebze,+T%C3%BCrkiye&amp;ll=40.815452,29.44385&amp;spn=0.005018,0.010568&amp;t=m&amp;z=14" style="color:#0000FF;text-align:left">Daha Büyük Görüntüle</a></small>
	 </p>
  </div>
  </div>
  <div id="icalt"></div>
  
  
  
  
  <div id="alt"><div id="altyazi">Hanife Özdemir Kişisel 2013 Tüm Hakkı Saklıdır.</div></div>
</div>
</body>
</html>
