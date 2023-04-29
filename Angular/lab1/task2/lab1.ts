class Account {
  constructor(private acc_no: number, private balance: number) {}
  debitAmount() {}
  creditAmount() {}
  getBalance() {}
}

interface IAccount {
  date_of_opening: Date;
  addCustomer(): void;
  removeCustomer(): void;
}

class Saving_Account extends Account implements IAccount {
  constructor(
    acc_no,
    balance,
    public date_of_opening: Date,
    private Min_Balance: number
  ) {
    super(acc_no, balance);
  }
  addCustomer(): void {
  console.log("customer added");
  
  }
  removeCustomer(): void {
    console.log("customer removed");
    
  }
}

class Current_Account extends Account implements IAccount {
  constructor(
    acc_no,
    balance,
    public date_of_opening: Date,
    private interest_rate: number
  ) {
    super(acc_no, balance);
  }
  addCustomer(): void {
    console.log("customer added");
  }
  removeCustomer(): void {
    console.log("customer removed");
  }
}


let savingAccount1=new Saving_Account(20, 10, new Date("2023-04-12"), 5);
savingAccount1.addCustomer();
savingAccount1.removeCustomer();


let currentAccount1=new Current_Account(200, 100, new Date("2023-04-12"), 50);
currentAccount1.addCustomer();
currentAccount1.removeCustomer();

