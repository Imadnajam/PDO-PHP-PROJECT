# Task List Application

## Overview

This is a simple PHP project that demonstrates how to use PDO (PHP Data Objects) for database access with a MySQL database. The application serves as a basic task list where users can create, read, update, and delete tasks. It aims to illustrate the use of PDO for secure database interactions and provide a foundation for building more complex PHP applications.

## Features

- Create new tasks
- View existing tasks
- Update task details
- Delete tasks
- User-friendly interface

## Prerequisites

Before you begin, ensure you have the following installed:

- PHP (7.2 or higher)
- MySQL (5.7 or higher)
- Composer (for dependency management)
- A web server (e.g., Apache or Nginx)

## Installation

Follow these steps to set up the project:

1. **Clone the Repository:**

   ```bash
   git clone https://github.com/yourusername/task-list-app.git
   cd task-list-app

task-list-app/
│
├── config.php          # Database configuration file
├── public/             # Public folder for web access
│   ├── index.php       # Entry point for the application
│   ├── css/            # CSS files
│   └── js/             # JavaScript files
│
├── src/               # Application source code
│   ├── Task.php        # Task model for interacting with the database
│   ├── TaskController.php # Controller for handling requests
│   └── View.php        # View rendering logic
│
├── templates/         # HTML templates for views
│   ├── header.php      # Header template
│   ├── footer.php      # Footer template
│   └── tasks.php       # Task list view
│
└── README.md           # Project documentation

