<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<?php

$clientId = "180000440";			//Merchant Id defined by bank to user
$amount = "9.95";					//Transaction amount
$oid = "u78";							//Order Id. Must be unique. If left blank, system will generate a unique one.

$okUrl = "https://www.newface.mk/home/subscription#";		//URL which client be redirected if authentication is successful
$failUrl = "https://www.newface.mk/home/";	//URL which client be redirected if authentication is not successful

$rnd = microtime();				//A random number, such as date/time
$currencyVal = "840";			//Currency code, 949 for TL, ISO_4217 standard
$storekey = "SKEY0943";			//Store key value, defined by bank.
$storetype = "3d_pay_hosting";	//3D authentication model
$lang = "en";					//Language parameter, "tr" for Turkish (default), "en" for English
$instalment = "";				//Instalment count, if there's no instalment should left blank
$transactionType = "Auth";		//transaction type

$hashstr = $clientId . $oid . $amount . $okUrl . $failUrl .$transactionType. $instalment .$rnd . $storekey;

$hash = base64_encode(pack('H*',sha1($hashstr)));

?>
<form method="post" action="https://epay.halkbank.mk/fim/est3Dgate">
    <center>
        <h1>
            3D Pay Hosting Sample Page</h1>
        <table class="tableClass">
            <tr class="trHeader">
                <td colspan="2">
                    This sample page submits client Id, transaction type, amount, okUrl, failUrl, order
                    Id, instalment count and store key.
                    <br />
                    Credit card information will be asked in the 3d secure page.
                </td>
            </tr>
            <tr>
                <td align="center" colspan="2">
                    <input type="submit" value="Submit" class="buttonClass" />
                </td>
            </tr>
        </table>
        <input type="text" name="clientid" value="<?php echo $clientId; ?>" />
        <input type="text" name="amount" value="<?php echo $amount; ?>" />
        <input type="text" name="islemtipi" value="<?php echo $transactionType; ?>" />
        <input type="text" name="taksit" value="<?php echo $instalment; ?>" />
        <input type="text" name="oid" value="<?php echo $oid; ?>" />
        <input type="text" name="okUrl" value="<?php echo $okUrl; ?>" />
        <input type="text" name="failUrl" value="<?php echo $failUrl; ?>" />
        <input type="text" name="rnd" value="<?php echo $rnd; ?>" />
        <input type="text" name="hash" value="<?php echo $hash; ?>" />
        <input type="text" name="storetype" value="<?php echo $storetype; ?>" />
        <input type="text" name="lang" value="<?php echo $lang; ?>" />
        <input type="text" name="currency" value="<?php echo $currencyVal; ?>" />
        <input type="text" name="refreshtime" value="10" />
    </center>
</form>
</body>
</html>