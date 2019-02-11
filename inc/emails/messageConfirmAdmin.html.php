<html>
<head><title>Message de <?php if(isset($var['firstname']) && isset($var['name'])) echo $var['firstname']." ".$var['name']; ?></title></head>
<body>
    <p>
        <strong>Adresse:</strong> <?php if(isset($var['email'])) echo $var['email'] ; ?>
    </p>
    <p>
        <strong> Message:</strong> <?php if(isset($var['message'])) echo nl2br($var['message']) ; ?>
    </p>
</body>
</html>