<!DOCTYPE html>
<html>
<head>
<title>İLETİSİM-TUBA GÜRBÜZ</title>
<link rel="stylesheet", href="iletisim.css">


</head>
<body>
<div class="container">
    <form id="iletisim" action="iletisim-post.php" method="POST">
<h2>İletişim Sayfası</h2>

<div class="form-control">
<input placeholder="Adınız Soyadınız" type="text" name="adsoyad" required autofocus>
</div>

<div class="form-control">
<input placeholder="E-Posta Adresiniz" type="email" name="mail" required>
</div>

<div class="form-control">
<input placeholder="Konu" type="text" name="konu" required>
</div>

<div class="form-control">
<textarea placeholder="Lütfen Mesajınızı Buraya Yazın.." required name="mesaj"> </textarea>
</div>

<div class="form-control">
<button name="submit" type="submit" id="submit">GÖNDER</button>
</div>

</form>
</div>
</body>
</html>
