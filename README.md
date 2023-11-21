# Project Login with PHP and MySQL

This project implements a basic login system using PHP and MySQL. Allows users to enter their credentials and access a personalized page.

## Requirements

- PHP (version required)
- Web server (e.g. Apache)
- MySQL or database compatible

## Project Configuration

1. **Clone the Repository:**
    ```bash
    git clone https://github.com/Anyel-ec/PHP-MySQL-Session.git
    ```

2. **Configure the Database:**
    - Create a database on your MySQL server.
    - Import the provided SQL file in `db/DDL.sql` to configure the database structure.

3. **Start the Server:**
    - If you are using built-in PHP (e.g. `php -S localhost:8080`), start the server.
    - If you use Apache, make sure the document root points to the project directory.

## Use

1. Access the login page (`index.html`) and provide your credentials.
2. If the credentials are correct, you will be redirected to a personalized user page.
3. You can log out at any time by clicking the corresponding button.

## Project Structure

- `index.html`: Login page with a form to enter credentials.
- `accesoUsuario.php`: PHP script to validate credentials and manage the user session.
- `paginaUsuario.php`: Custom page for authenticated users that shows information and allows you to log out.
- `cerrar.php`: PHP script to close the user session.
- `db/DDL.sql`: SQL file for creating the database and the users table.
- `db/DML.sql`: SQL file for inserting data into the database.

## Contributions

Contributions are welcome. If you would like to contribute, follow these steps:

1. Fork the repository.
2. Create a new branch (`git checkout -b feature/new-feature`).
3. Make your changes and commit (`git commit -am 'Add new feature'`).
4. Push to the branch (`git push origin feature/new-feature`).
5. Create a new Pull Request.

## License

This project is licensed under the [License Name] license. See the `LICENSE.md` file for more details.