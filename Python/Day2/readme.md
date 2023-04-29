## Day2
 
## Employee

This class represents an individual employee and has the following methods:

| Method                  | Description                                                      |
|-------------------------|------------------------------------------------------------------|
| `transfer(new_dept)` | Moves the employee to a new department. |
| `fire(employee_id)`                | Removes the employee from the system.                            |
| `show_all_employees()`  | Displays a list of all employees in the system.                  |
| `print_employees(rows)`     | Prints out details of the employee.                              |
| `get_employee_by_id()`  | get employee by id.                  |


## Manager

This class represents a manager which inherits from class employee and has the following methods :

| Method                  | Description                                                      |
|-------------------------|------------------------------------------------------------------|
| `show_all_managers`  | Displays a list of all employees in the system.                  |
| `print_managers(rows)`     | Prints out details of the employee.                              |


## SqlHandler

This class handles interactions with the database and has the following methods:

| Method                                    | Description                                                       |
|-------------------------------------------|-------------------------------------------------------------------|
| `connect()`                               | Establishes a connection to the database.                         |
| `close()`                            | Closes the connection to the database.                            |
| `create_table(table_name, columns)`                          | Creates a table for storing employee information.                 |
| `insert_to_database(table, data)`              | Inserts a new records into the table.                         |
| `update_database(emp_id, new_department)` | Updates the department of an existing employee. |
| `delete_from_database(table, record_id)`            | Deletes a reacord from table.                             |
| `get_all_data(table)`                               | Retrieves all data records from the table.                 |
| `execute_query(query, params=None)`                               | execute query.                 |


## to Run the App 
- First create the database in your loaclhost 
- Run Create_tables.py to create tables Note (you must change SqlHandler(host="localhost", user="root",
                    password="mypassword", database="mydatabase") with your own data)
- Run main.py
