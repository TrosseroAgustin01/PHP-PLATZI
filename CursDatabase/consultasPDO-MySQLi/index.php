<?php

#use App\Controllers\IncomesControllers;
#use App\Enums\IncomeTypeEnums;
#use App\Enums\PaymentMethodEnum;
use App\Controllers\WhitdrawalsController;


require("vendor/autoload.php");

/* $incomes_controller = new IncomesControllers();
$incomes_controller->store([
    #"payment_method" => PaymentMethodEnum::BankAccount->value,
    #"type" => IncomeTypeEnums::Salary->value,
    "payment_method" => 1,
    "type" => 2,
    "date" => date("Y-m-d H:i:s"), // 2022-06-24 15:06:45
    "amount" => 1000000,
    "description" => "Pago de mi salario por mi arduo y muy bien trabajo :D"
]); */

$withdrawal_controller = new WhitdrawalsController();
$withdrawal_controller->store([
    "payment_method" => 1,
    "type" => 1,
    "date" => date("Y-m-d H:i:s"),
    "amount" => 20,
    "description" => "Compré mucha comida para mis queridos y amados michis."
]);
/* "payment_method" => PaymentMethodEnum::CreditCard->value,
    "type" => WithdrawalTypeEnum::Purchase->value, */