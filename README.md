PROCEDURE :
1) Set Up the Database:

  Create a database and table to store registration details. Open the XAMPP Control Panel and start the Apache and MySQL services by  clicking the Start buttons next to each.
If XAMPP is not Installed download the XAMPP Installer for your OS and run the installer and then follow step 1.
Open phpMyAdmin: In the browser, go to http://localhost/phpmyadmin and click on the Databases tab, enter tech_event as the name, and click Create.
Select the tech_event database and Go to the SQL tab and enter the following SQL code to create the users table and execute it to create table in database

 sql code:
 
 CREATE TABLE users (
 
 id INT AUTO_INCREMENT PRIMARY KEY,
 
 name VARCHAR(50) NOT NULL,
 
 email VARCHAR(100) UNIQUE NOT NULL,
 
 password VARCHAR(255) NOT NULL,
 
 created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
 
 );

 2) Create Registration and Login Pages: Use PHP for backend logic.

  Go to the htdocs folder in your XAMPP directory and Create a new folder named tech_event.
Open a text editor and Create a new files called register.php and login.php and save it in the tech_event folder. Write the code for the registration form(html ,css) and backend logic(php).

3) Accessing the pages:
   
In the browser, go to http://localhost/tech_event/register.php and fill in the form and submit it to register a user. Now Go to http://localhost/tech_event/login.php and enter the email and password of the 
user you registered to log in and check if the data entered in the registration page is added to the database.
Navigate back to myphpadmin page to view the details in the database. To view the complete details we can also use the sql command : SELECT * FROM `users`;
After the completeion of the process turn off the Apache and MySQL services in the 
XAMPP Control Panel.

OUTPUT SCREENSHOTS :

![Picture1](https://github.com/user-attachments/assets/3ef5f2bc-1412-49d4-a808-e1a062b4b177)

![Picture2](https://github.com/user-attachments/assets/a8cea23c-389c-442f-bde9-1e5dd3eec390)

![Picture3](https://github.com/user-attachments/assets/06b93c3f-7fd4-4846-9341-fa23dc8e606a)

