<?php
/**
 * Created by PhpStorm.
 * User: Asus
 * Date: 07/09/2018
 * Time: 11:43 SA
 */
?>

<body>
<div style="border: 2px solid navy; width: 50%; height: 50%;  margin: 50px auto;">
    <form action="Future%20Value%20Calculator.php" method="post">
        <h1 style="text-align: center; color: navy; font-size: 50px">Future Value Calculator</h1>
        <label class="styl">Investment Amount: <input type="text" name="inventmentAmount" style="width: 40%; margin-left: 20px; margin-bottom: 10px"></label><br>
        <label class="styl">Yearly Interest Rate: <input type="text" name="yearlyInterestRate" style="width: 40%; margin-left: 20px; margin-bottom: 10px"></label><br>
        <label class="styl">Number of Years: <input type="text" name="numberOfYears" class="input" style="width: 40%; margin-left: 42px; margin-bottom: 10px"></label><br>
        <input type="submit" value="Calculate" style="margin-left: 234px; width: 30% ">
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