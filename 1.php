<?php

class BankAccount {
    private $accountNumber;
    private $balance;

    public function __construct($accountNumber, $rowBalance = 0) {
        $this->accountNumber = $accountNumber;
        $this->balance = $rowBalance;
    }

    public function deposit($amount) {
        if ($amount > 0) {
            $this->balance += $amount;
            echo "Deposited: $amount. New balance: $this->balance\n";
        } else {
            echo "Deposit amount must be positive.\n";
        }
    }
    public function withdraw($amount) {
        if ($amount > 0) {
            if ($amount <= $this->balance) {
                $this->balance -= $amount;
                echo "Withdrawn: $amount. New balance: $this->balance\n";
            } else {
                echo "Insufficient balance. Available balance: $this->balance\n";
            }
        } else {
            echo "Withdrawal amount must be positive.\n";
        }
    }
    public function getBalance() {
        return $this->balance;
    }
    public function getAccountNumber() {
        return $this->accountNumber;
    }
}
$account = new BankAccount("123456789", 1000);
$account->deposit(1);
$account->withdraw(100);


?>