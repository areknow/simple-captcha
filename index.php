<?PHP
$num1 = rand(1, 10);
$num2 = rand(1, 10);
$result = ($num1 * $num2);
?>

<script>
function checkForm(f) {
    if (f.elements['EMAIL'].value == "") {
        alert("Please include your email address");
        return false;
    } else {
        if (f.elements['CAPTCHA'].value == "<?PHP echo $result; ?>") {
            f.submit();
            return false;
        }
        else {
            alert("Are you even human?");
            return false;
}}}
</script>

<form action="action.php" method="post" onsubmit="return checkForm(this); return false;">
<div>What is <?PHP echo $num1.' * '.$num2; ?></div>
<div><input name="CAPTCHA" required="" type="text" /></div>
<div>

<button name="submiter" type="submit">Submit</button>
</div>
</form>
