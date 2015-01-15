<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Kişisel Site</title>
<link href="hanife.css" rel="stylesheet" type="text/css" />
</head>

<body>
<div id="ana">
  <div id="ustmenu">Ana Sayfa  |  Site Haritası  |  Favorilerine Ekle</div>
  
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
    <p>2008 Yılında Hizmet vermeye başlayan Host Ajans İnternet ve Hosting Hizmetleri Türkiye'deki hosting sektöründe yapmış olduğu araştırma ve tespit sonucunda Avrupa'ya istinaden fiyat farklılıklarının düşmesi ile ilgili çalışmalarda bulunmuş ve bugün Türkiye'nin en ucuz Web hosting Hizmetini veren firma konumuna gelmiştir.Teknolojiyi takip etmenin bir yolunun web yazılım ve programlama olduğunu düşünen firmamız Türk Gençliğinin ve Türk Firmalarının maliyet , kalite , hız , destek ile ilgili daha önce yaşamış oldukları problemleri detaylı bir araştırmaya tabi tutmuş Avrupa'daki hizmet anlayışını incelemiş alt yapı ve hizmet anlayış farklılıklarını uyumlu hale getirmiştir.Bugün sadece 5.00 TL gibi bir bütçe ile 1 yıllık Web Hosting paketi sahibi olabiliyor şirketinizi , kendinizi tanıtabiliyor dünya ile iletişimi sağlayabiliyorsunuz   2008 Yılında Hizmet vermeye başlayan Host Ajans İnternet ve Hosting Hizmetleri Türkiye'deki hosting sektöründe yapmış olduğu araştırma ve tespit sonucunda Avrupa'ya istinaden fiyat farklılıklarının düşmesi ile ilgili çalışmalarda bulunmuş ve bugün Türkiye'nin en ucuz Web hosting Hizmetini veren firma konumuna gelmiştir.Teknolojiyi takip etmenin bir yolunun web yazılım ve programlama olduğunu düşünen firmamız Türk Gençliğinin ve Türk Firmalarının maliyet , kalite , hız , destek ile ilgili daha önce yaşamış oldukları problemleri detaylı bir araştırmaya tabi tutmuş Avrupa'daki hizmet anlayışını incelemiş alt yapı ve hizmet anlayış farklılıklarını uyumlu hale getirmiştir.Bugün sadece 5.00 TL gibi bir bütçe ile 1 yıllık Web Hosting paketi sahibi olabiliyor şirketinizi , kendinizi tanıtabiliyor dünya ile iletişimi sağlayabiliyorsunuz  </p>
    <p> 2008 Yılında Hizmet vermeye başlayan Host Ajans İnternet ve Hosting Hizmetleri Türkiye'deki hosting sektöründe yapmış olduğu araştırma ve tespit sonucunda Avrupa'ya istinaden fiyat farklılıklarının düşmesi ile ilgili çalışmalarda bulunmuş ve bugün Türkiye'nin en ucuz Web hosting Hizmetini veren firma konumuna gelmiştir.Teknolojiyi takip etmenin bir yolunun web yazılım ve programlama olduğunu düşünen firmamız Türk Gençliğinin ve Türk Firmalarının maliyet , kalite , hız , destek ile ilgili daha önce yaşamış oldukları problemleri detaylı bir araştırmaya tabi tutmuş Avrupa'daki hizmet anlayışını incelemiş alt yapı ve hizmet anlayış farklılıklarını uyumlu hale getirmiştir.Bugün sadece 5.00 TL gibi bir bütçe ile 1 yıllık Web Hosting paketi sahibi olabiliyor şirketinizi , kendinizi tanıtabiliyor dünya ile iletişimi sağlayabiliyorsunuz </p>
  </div>
  </div>
  <div id="icalt"></div>
  
  
  
  
  <div id="alt"><div id="altyazi">Host Ajans Kişisel 2011 Tüm Hakkı Saklıdır.</div></div>
</div>
</body>
</html>
