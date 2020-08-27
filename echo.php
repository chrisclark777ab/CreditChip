<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Echo</title>
</head>

<body>
<p>
<form id="submit" action="get_echo.php" method="post">

  <label><em><strong>Message Title</strong></em><br />
    <br />
    <input name="title" type="text" placeholder="E.g. Hello" id="title" size="75" />
  </label>
</p>
<p><strong><em>Email Message</em></strong></p>
<p>
  <textarea name="message" placeholder="E.g. Hi, this is bill..." id="message" cols="90" rows="5"></textarea>
</p>
<p>
  <label>
    <input type="submit" name="button" id="button" value="send" />
  </label>
</p>

</form>
</body>
</html>
