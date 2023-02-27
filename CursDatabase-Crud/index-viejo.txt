<?php

use App\Controllers\IncomesControllers;
#use App\Enums\IncomeTypeEnums;
#use App\Enums\PaymentMethodEnum;
use App\Controllers\WhitdrawalsController;


require("vendor/autoload.php");

#                       -----METODOS DE Whitdrawals-----
#    --- METODO STORE---
/* $withdrawal_controller = new WhitdrawalsController();
$withdrawal_controller->store([
    "payment_method" => 1,
    "type" => 1,
    "date" => date("Y-m-d H:i:s"),
    "amount" => 50,
    "description" => "Compré muchos jugetes para mis queridos y amados michis."
]); */
/* "payment_method" => PaymentMethodEnum::CreditCard->value,
    "type" => WithdrawalTypeEnum::Purchase->value, */
    
#    --- METODO INDEX---
/* $withdrawal_controller = new WhitdrawalsController();
$withdrawal_controller->index(); */

#    --- METODO SHOW---
/* $withdrawal_controller = new WhitdrawalsController();
$withdrawal_controller->show(1); */

#    --- METODO DESTROY---
/* $withdrawal_controller = new WhitdrawalsController();
$withdrawal_controller->destroy(2); */

#                       -----METODOS DE IncomesControllers-----

#    --- METODO STORE---
/* $incomes_controller = new IncomesControllers();
$incomes_controller->store([
    "payment_method" => 1,
    "type" => 1,
    "payment_method" => 1,
    "type" => 2,
    "date" => date("Y-m-d H:i:s"), // 2022-06-24 15:06:45
    "amount" => 3459861,
    "description" => "making money for mi mama bro"
]); */ 

#    --- METODO INDEX---
/* $incomes_controller = new IncomesControllers();
$incomes_controller->index();  */

#    --- METODO DESTROY---
/* $incomes_controller = new IncomesControllers();
$incomes_controller->destroy(1);  */

#    --- METODO UPDATE---
/* $incomes_controller = new IncomesControllers();
$incomes_controller->update([
    "payment_method" => 2,
    "type" => 1,
    "date" => date("Y-m-d H:i:s"), // 2022-06-24 15:06:45
    "amount" => 360800,
    "description" => "making money for mi mama dog"
],3);  */

#    --- METODO SHOW ---
/* $incomes_controller = new IncomesControllers();
$incomes_controller->show(3) */;

#   ---METODO STORE ---

$withdrawal_controller = new WhitdrawalsController();
$withdrawal_controller->update([
    "payment_method" => 2,
    "type" => 2,
    "date" => date("Y-m-d H:i:s"),
    "amount" => 90,
    "description" => "Compré muchos jugetes para mis queridos y amados bros."
],1);
