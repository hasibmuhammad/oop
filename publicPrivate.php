<?php

class Fund
{

 public $fund;

 public function __construct($intialFund = 0)
 {
  $this->fund = $intialFund;
 }

 public function addFund($money)
 {
  $this->fund += $money;
 }

 public function deductFund($money)
 {
  $this->fund -= $money;
 }

 public function getTotalFund()
 {
  echo "Our total fund is {$this->fund}\n";
 }

}

$ourTotalFund = new Fund(100);
$ourTotalFund->getTotalFund();
$ourTotalFund->addFund(100);
$ourTotalFund->deductFund(10);
$ourTotalFund->getTotalFund();
