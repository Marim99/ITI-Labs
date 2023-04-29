class Account {
    constructor(acc_no, balance) {
        this.acc_no = acc_no;
        this.balance = balance;
    }
    debitAmount() { }
    creditAmount() { }
    getBalance() { }
}
class Saving_Account extends Account {
    constructor(acc_no, balance, date_of_opening, Min_Balance) {
        super(acc_no, balance);
        this.date_of_opening = date_of_opening;
        this.Min_Balance = Min_Balance;
    }
    addCustomer() {
        console.log("customer added");
    }
    removeCustomer() {
        console.log("customer removed");
    }
}
class Current_Account extends Account {
    constructor(acc_no, balance, date_of_opening, interest_rate) {
        super(acc_no, balance);
        this.date_of_opening = date_of_opening;
        this.interest_rate = interest_rate;
    }
    addCustomer() {
        console.log("customer added");
    }
    removeCustomer() {
        console.log("customer removed");
    }
}
let savingAccount1 = new Saving_Account(20, 10, new Date("2023-04-12"), 5);
savingAccount1.addCustomer();
savingAccount1.removeCustomer();
let currentAccount1 = new Current_Account(200, 100, new Date("2023-04-12"), 50);
currentAccount1.addCustomer();
currentAccount1.removeCustomer();
