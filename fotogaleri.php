
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Arpacıoğlu inşaat</title>
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
   	<? include("baglan.php"); 
	$sql="select * from haberler ORDER BY  tarih DESC limit 2 "; 
	$habersql=mysql_query($sql);
	while($haber=mysql_fetch_array($habersql))
	{
	?>
        <div id="habericerikyazi" style="color:#990000; font-family:Arial, Helvetica, sans-serif; margin-top:15px; font-weight:bold;"><?=$haber["tarih"];
	?></div>
    <div id="habericerikyazi"><a href="haberdetay.php?id=<?=$haber["id"];?>"><?=$haber["baslik"];?></a></div>
    <?}?>
    <div align="right" style="width:230px; margin-bottom:10px; margin-top:20px; float:left; margin-right:10px;"><a href="haberler.php"><img src="images/tumhaberler.png" width="81" height="11" /></a></div>
  </div>
  
  
  <div id="banner"><img src="images/banner_03.png" /></div>
  
  
  <div id="icyazi"> 
   
       <table align="left" border="0" cellpadding="1" cellspacing="1" style="width: 100%;">
	<tbody>
	<? include("baglan.php"); 
	$gal="select * from galeri where aktif=1"; 
	$galery=mysql_query($gal);
	while($galeri=mysql_fetch_array($galery))
	{
	?>
		<tr>
			<td style="text-align: center; vertical-align: middle; height: 50px;"><img alt="<?=$galeri["adi"];?>" src="images/<?=$galeri["imgurl"];?>" style="width: 178px; height: 48px;"></td>
			<td>
			<p><strong>&nbsp;<?=$galeri["adi"];?>&nbsp;&nbsp;</strong></p>
			<div id="galeri">&nbsp;<?=$galeri["aciklama"];?></div>
			</td>
		</tr> <tr><td colspan=2><hr></td></tr> <? } ?>
	</tbody>
</table>
 
   
  </div>
  </div>
  <div id="icalt"></div>
  
  
  
  
  <div id="alt"><div id="altyazi">Hanife Özdemir Kişisel 2013 Tüm Hakkı Saklıdırr.</div></div>
</div>
</body>
</html>
