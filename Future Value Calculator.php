<?php
/**
 * Created by PhpStorm.
 * User: Asus
 * Date: 07/09/2018
 * Time: 11:43 SA
 */
$inventmentAmounts = $_POST["inventmentAmount"];
$yearlyInterestRate1 = $_POST["yearlyInterestRate"];
$numberOfYears1 = $_POST["numberOfYears"];
$future = $inventmentAmounts +($inventmentAmounts * $yearlyInterestRate1 * $numberOfYears1);
?>

<body>
<div style="border: 2px solid navy; width: 50%; height: 50%;  margin: 50px auto;">
    <form method="post">
        <h1 style="text-align: center; color: navy; font-size: 50px">Future Value Calculator</h1>
        <label class="styl">Investment Amount: <?php echo " <span style='margin-left: 30px'> $ $inventmentAmounts </span>"?></label><br>
        <label class="styl">Yearly Interest Rate: <?php echo " <span style='margin-left: 30px'> $yearlyInterestRate1 % </span>"?></label><br>
        <label class="styl">Number of Years: <?php echo "<span style='margin-left: 52px'> $numberOfYears1 </span>"?></label><br>
        <label class="styl">Future Value: <?php echo "<span style='margin-left: 86px'> $ $future </span> "?></label><br>
    </form>
</div>
</body>

<style>
    .styl{
        padding-left: 45px;
        font-size: 20px;
    }
    .input{
        margin-bottom: 20px;
    }
</style>
