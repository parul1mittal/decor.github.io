<!DOCTYPE html>
<html lang="en">
<?php
include("connection/connect.php");
include_once 'product-action.php';
error_reporting(0);
session_start();
if (isset($_POST['$item_total']))
{
    $item_total += ($item["price"]*$item["quantity"]);
    $item_total=$_POST['$item_total'];
}
?>
<head>
<meta charset="utf-8">
 <link rel="icon" type="image/png" sizes="16x16" href="images/img/logo9.jpg">
    <title>Boutique</title>
</head>
<body>
<form method="post" action="paytm/PaytmKit/pgRedirect.php">
        <table border="1">
            <tbody>
                <tr>
                    <th>S.No</th>
                    <th>Label</th>
                    <th>Value</th>
                </tr>
                <tr>
                    <td>1</td>
                    <td><label>ORDER_ID::*</label></td>
                    <td><input id="ORDER_ID" tabindex="1" maxlength="20" size="20"
                        name="ORDER_ID" autocomplete="off"
                        value="<?php echo  "ORDS" . rand(10000,99999999)?>">
                    </td>
                </tr>
                <tr>
                    <td>2</td>
                    <td><label>CUSTID ::*</label></td>
                    <td><input id="CUST_ID" tabindex="2" maxlength="12" size="12" name="CUST_ID" autocomplete="off" value="<?php echo $_SESSION['user_id'] ?>"></td>
                </tr>
                <tr>
                    <td>3</td>
                    <td><label>INDUSTRY_TYPE_ID ::*</label></td>
                    <td><input id="INDUSTRY_TYPE_ID" tabindex="4" maxlength="12" size="12" name="INDUSTRY_TYPE_ID" autocomplete="off" value="Retail"></td>
                </tr>
                <tr>
                    <td>4</td>
                    <td><label>Channel ::*</label></td>
                    <td><input id="CHANNEL_ID" tabindex="4" maxlength="12"
                        size="12" name="CHANNEL_ID" autocomplete="off" value="WEB">
                    </td>
                </tr>
                <tr>
                    <td>5</td>
                    <td><label>txnAmount*</label></td>
                    <td><input title="TXN_AMOUNT" tabindex="10"
                        type="text" name="TXN_AMOUNT"
                        value="<?php echo $item_total; ?>">
                    </td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td><input value="CheckOut" type="submit"   onclick=""></td>
                </tr>
            </tbody>
        </table>
        * - Mandatory Fields
    </form>

    </body>
</html>