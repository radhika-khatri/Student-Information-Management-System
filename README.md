# Student Information Management System


This repository is a fork of the [Store-and-Retrieve-data-Php-Mysql](https://github.com/atembamanu/Store-and-Retrieve-data-Php-Mysql) project by [atembamanu](https://github.com/atembamanu). The original project has been enhanced and modified to provide a modern and user-friendly interface for managing student information.


## Changes and Improvements


Compared to the original project, the following changes and improvements have been made:


- Implemented a modern dark mode theme throughout the application, providing a visually appealing and eye-friendly interface.
- Enhanced the styles of the student form and fetched data page, including custom background colors, text colors, and button styles.
- Added server-side functionality for form submission and database operations, with input validation, error handling, and session management.
- Integrated server-side functionality with the student form, allowing for seamless data submission and displaying success or error messages.
- Implemented data fetching and record deletion capabilities on the fetched data page, enabling easy management of student records.


## Project Structure


The project consists of the following files:


- `index.php`: The main page that displays the student form and handles form submission.
- `server.php`: Contains the server-side logic for form submission, database operations, and session management.
- `fetch.php`: Displays the fetched student data from the database and provides functionality to delete records.
- `connection.php`: Establishes a connection to the MySQL database.
- `style.css`: Contains the CSS styles for the application, implementing the modern dark mode theme.


## Database Setup


To set up the database for this project, execute the following SQL code in your MySQL database:


```sql
CREATE TABLE user_info (
  id INT AUTO_INCREMENT PRIMARY KEY,
  first_name VARCHAR(50) NOT NULL,
  last_name VARCHAR(50) NOT NULL,
  email VARCHAR(100) UNIQUE NOT NULL,
  gender ENUM('Male', 'Female', 'Prefer not to say') NOT NULL,
  course VARCHAR(100) NOT NULL,
  description TEXT NOT NULL
);
```


This code creates a table named user_info with columns for storing student information, including first name, last name, email, gender, course, and description.


## Database Connection
To establish a connection to your MySQL database, open the ```connection.php``` file and update the following variables with your database credentials:


```
$localhost = ""; // Enter the MySQL server hostname or IP address (e.g., "localhost" or "127.0.0.1")
$username = ""; // Enter your MySQL username (e.g., "root")
$password = ""; // Enter your MySQL password (e.g., "Blessed2018!")
$dbname = ""; // Enter the name of your MySQL database (e.g., "class")
```
Replace the empty strings with your actual database hostname, username, password, and database name.


## Running the Project
To run the project using the PHP built-in server, follow these steps:


1. Open a terminal or command prompt.
2. Navigate to the project directory using the cd command. For example:


```bash
cd /path/to/your/project
```


3. Start the PHP built-in server by running the following command:


```bash
php -S localhost:3000
```
This command starts the server and makes it accessible at ```http://localhost:3000```
You can replace localhost with your desired IP address and 3000 with your desired port number.


4. Open a web browser and visit ```http://localhost:3000``` (or the appropriate URL based on your server configuration) to access the application.


## Contributing
Contributions to this project are welcome. If you find any issues or have suggestions for improvements, please feel free to open an issue or submit a pull request.



