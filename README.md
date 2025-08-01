# Institute Management System

## Project Description

This is a simple web-based Institute Management System developed using PHP and MySQL. It provides functionalities for managing institute-related information such as courses, timetables, and user accounts. The system aims to offer a basic platform for educational institutions to showcase their offerings and manage student interactions.

## Features

- User Registration and Login
- Home Page with Institute Introduction
- About Us Page
- Course/Subject Information Page
- Timetable Display Page
- Contact Us Page
- Basic User Authentication

## Technologies Used

- **Frontend:** HTML, CSS
- **Backend:** PHP
- **Database:** MySQL

## Installation

To set up this project locally, follow these steps:

1.  **Clone the repository:**
    ```bash
    git clone <repository_url>
    ```
    (Replace `<repository_url>` with the actual URL of your GitHub repository)

2.  **Set up a web server:**
    Ensure you have a web server environment like XAMPP, WAMP, or LAMP installed, which includes Apache, MySQL, and PHP.

3.  **Place project files:**
    Copy the `Institute Management system` folder (which contains all the project files) into your web server's document root directory (e.g., `htdocs` for XAMPP, `www` for WAMP).

    Example path:
    `C:\xampp\htdocs\Institute Management system`

## Database Setup

1.  **Create a MySQL database:**
    Open phpMyAdmin (usually accessible via `http://localhost/phpmyadmin`) or your preferred MySQL client.
    Create a new database named `Institute Management system`.

2.  **Import the database schema:**
    Import the `Institute Management system.sql` file (located in the `Institute Management system/sql/` directory) into the newly created `Institute Management system` database.
    This file contains the `users` table structure.

    The `users` table has the following structure:

    | Column   | Type        | Description                   |
    | :------- | :---------- | :---------------------------- |
    | `Id`     | `INT`       | Primary Key, Auto-increment   |
    | `Username` | `VARCHAR(200)` | User's chosen username        |
    | `Email`    | `VARCHAR(200)` | User's email address          |
    | `Age`      | `INT`       | User's age                    |
    | `Password` | `VARCHAR(200)` | User's password (hashed/plain) |

3.  **Configure database connection:**
    Open the `config.php` file located in `Institute Management system/php/`.
    Ensure the database connection details match your MySQL setup:

    ```php
    <?php 
     
     $con = mysqli_connect("localhost","root","","Institute Management system") or die("Couldn't connect");

    ?>
    ```
    - `localhost`: Your database host (usually `localhost`)
    - `root`: Your MySQL username (default is `root` for XAMPP/WAMP)
    - ``: Your MySQL password (default is empty for XAMPP/WAMP)
    - `Institute Management system`: The name of the database you created

## Usage

1.  **Start your web server:**
    Ensure Apache and MySQL services are running in your XAMPP/WAMP/LAMP control panel.

2.  **Access the application:**
    Open your web browser and navigate to `http://localhost/Institute Management system`.

3.  **Register/Login:**
    You can register a new user account or log in with existing credentials to access the system's features.

## Screenshots

![Home Page]
<img width="1891" height="959" alt="image" src="https://github.com/user-attachments/assets/e9f827ee-bf8e-492b-bbe8-57028cffcf39" />
<img width="1886" height="918" alt="image" src="https://github.com/user-attachments/assets/52d04e53-ec8a-4e71-b180-2e8195cd2617" />

![Login Page]
<img width="1912" height="971" alt="image" src="https://github.com/user-attachments/assets/f737f311-b728-435e-be62-1ac7ec420794" />

## Contributing

Contributions are welcome! If you'd like to contribute to this project, please follow these steps:

1.  Fork the repository.
2.  Create a new branch (`git checkout -b feature/YourFeature`).
3.  Make your changes.
4.  Commit your changes (`git commit -m 'Add some feature'`).
5.  Push to the branch (`git push origin feature/YourFeature`).
6.  Open a Pull Request.

## License

This project is open-source and available under the [MIT License](LICENSE.md).

---

