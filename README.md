# School Portal – PHP & MySQL

A student management web application developed as a Field Training Task at WE School for Applied Technology.

The project allows administrators to add, view, search, and delete student records, with automatic Pass/Fail status evaluation based on students' scores.

### Features
- **Add Students:** Insert student names and scores into the database.
- **View Students:** Display student records in a dashboard table.
- **Search Students:** Search for students by name.
- **Pass/Fail Evaluation:** Automatically determine student status based on a score of 50 or above.
- **Delete Records:** Remove student records with a confirmation prompt.
- **Database Integration:** Store and manage student data using MySQL.
- **Responsive Navigation:** Use Bootstrap 5 for the navigation bar and interface.

### Technologies Used
- HTML5
- CSS3
- PHP
- MySQL
- Bootstrap 5
- XAMPP

### Setup
1. Copy the project folder into `C:\xampp\htdocs\`.
2. Start Apache and MySQL from the XAMPP Control Panel.
3. Create a database named `school_db` in phpMyAdmin.
4. Create the `students` table with `id`, `name`, and `score` columns.
5. Open the project at `http://localhost/school_portal/`.

This project demonstrates practical skills in PHP form handling, MySQL database operations, CRUD functionality, and dynamic data display.
