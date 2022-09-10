<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

<form method="post" action=" https://epay.halkbank.mk/fim/api">
	<input type="hidden" name="clientid" value="180000440"/>
	<input type="hidden" name="storetype" value="3D_PAY_HOSTING"/>
	<input type="hidden" name="hash" value="iej6cPOjDd4IKqXWQEznXWqLzLI=" />
	<input type="hidden" name="trantype" value="Auth" />
	<input type="hidden" name="amount" value="91.96" />
	<input type="hidden" name="currency" value="949" />
	<input type="hidden" name="oid" value="1291899411421" />
	<input type="hidden" name="okUrl" value="https://www.teststore.com/success.php"/>
	<input type="hidden" name="failUrl" value="https://www.teststore.com/fail.php" />
	<input type="hidden" name="lang" value="en" />
	<input type="hidden" name="rnd" value="asdf" />
	<input type="hidden" name="encoding" value="utf-8" />
	<button type="submit">submit</button>
</form>

</body>
</html>