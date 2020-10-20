<?php 
$result = "";
class get_greatest_common_divisor
{
    var $a;
    var $b;

    function get_greatest_common_divisor( $a, $b ) 
    {
        $large = $a > $b ? $a: $b;
        $small = $a > $b ? $b: $a;
        $remainder = $large % $small;
        return 0 == $remainder ? $small : get_greatest_common_divisor( $small, $remainder );
    }
}

$gcd = new get_greatest_common_divisor();
if(isset($_POST['submit']))
{   
    $result = $gcd->getresult($_POST['n1'],$_POST['n2'],$_POST['op']);
}
?>

<form method="post">
<table align="center">
    <tr>
        <td><strong><?php echo $result; ?><strong></td>
    </tr>
    <tr>
        <td>Enter 1st Number</td>
        <td><input type="text" name="n1"></td>
    </tr>

    <tr>
        <td>Enter 2nd Number</td>
        <td><input type="text" name="n2"></td>
    </tr>

    <tr>
        <td></td>
        <td><input type="submit" name="submit" value="                =                "></td>
    </tr>

</table>
</form>