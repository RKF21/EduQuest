Introduction:
In this project, we focus on quizzes for different classes and subjects, particularly targeting students in classes 9-10 and 11-12. The web interface provides users the ability to take timed quizzes and submit their answers, with all questions dynamically generated from a database. Additionally, the project includes programming courses to support students' learning in various languages. 

Features:
- User authentication (Login/Logout).
- Dynamic quiz generation based on selected subjects.
- Timer functionality for quizzes.
- Result submission and processing.

 Prerequisites:
- PHP 
- Php Myadmin
- XAMPP local server
- VS Code
- CSS
- 
Installation:
1.Clone the repository:
   git clone https://github.com/your-repo/EduQuest.git
2. Place the project in the server root: If you are using XAMPP, place the folder in:
   C:/xampp/htdocs/eduquest
3. Start the server: Start your Apache and MySQL server from XAMPP Control Panel.
4.Configure the database:
   Import the eduquest.sql file into your MySQL database.
   Open http://localhost/phpmyadmin in your browser.
   Create a new database named eduquest.
   Import the eduquest.sql file located in the project root directory.
Database Setup:
1. Database: The MySQL database file eduquest.sql contains the necessary table structures and sample data for the quizzes and users. To set up the database:
              Go to phpMyAdmin and import the eduquest.sql file, which will create tables like users, questions, quiz_scores, etc.
2.  Configuring Database Connection: The database connection is already configured in the config.php file located in the Connection folder.

Project Structure:
eduquest/
│
├── Connection/
│   └── config.php            # Database connection file
│
├── templates/
│   └── header.php            # Header file for page navigation
│   └── footer.php            # Footer file for the website
│
├── add_question.php          # Page to add quiz questions
├── insert_question.php       # Processes quiz question data
├── quiz_subject.php          # Displays quiz questions based on the subject
├── submit_quiz.php           # Handles quiz submission
├── eduquest.sql              # MySQL database file
├── index.php                 # Main landing page
├── README.md                 # Project documentation
└── style.css                 # CSS file for styling

Usage
Login/Register:
   Users can log in using their credentials or register a new account. This authentication mechanism ensures only authorized users can access the quiz system.
Add Questions:
   Admins or authorized users can add quiz questions via the add_question.php page, where they can select the class, subject, and input question options.
Take Quizzes:
   Users can take quizzes by selecting a subject from the list. The quiz is timed, and users must complete it before the time runs out.
Submit Quiz:
   After completing the quiz, users submit their answers, and the system processes their responses to store results.

Screencast & Project Report link:
https://drive.google.com/drive/u/0/folders/1J4JojDRXboTL-W-vV6h90cGVAxkMW1ET

