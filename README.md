# SimpleCalendar

A simple js html css calendar uses php to get/add events from mysql database.

# Calendar Application with PHP and MySQL Integration

This is a simple calendar application that allows users to manage events. It uses HTML, CSS, and JavaScript for the frontend, and PHP for backend functionality to interact with a MySQL database.

## Features

- Display a monthly calendar view.
- Add, edit, and delete events.
- Store events in a MySQL database.
- Retrieve events from the database.

## Project Structure

```
SimpleCalendar/
├── index.html          # HTML structure for the calendar
├── js/
│   ├── calendar.js    # JavaScript file for client-side functionality
│   └── (moment.js)    # Moment.js included via CDN
├── css/
│   └── calendar.css   # CSS file for styling
└── php/
    └── db_connect.php  # PHP file for connecting to the MySQL database
```

## Screenshots

![Calendar Interface](screenshots/1.png)

_Description: This screenshot shows the calendar interface with events displayed._

## Getting Started

To get started with this project, follow these steps:

### Prerequisites

- Web server (e.g., Apache, Nginx)
- PHP (version 7 or later)
- MySQL database

### Installation

1. Clone the repository:

   ```bash
   git clone https://github.com/arabgeeks/SimpleCalendar.git
   ```
## To Do

- [ ] Implement event creation and editing functionalities

 ## License

The original frontend project was created by [Paul Navasard](https://codepen.io/peanav) on CodePen. You can view the original project [here](https://codepen.io/peanav/pen/xxKWzG).

This repository contains a modified version of the original project, which includes additional backend functionality for interacting with a MySQL database using PHP. The modifications enable the application to store and retrieve event data from the database, enhancing its functionality beyond the original frontend implementation.

### Licenses

- **Original CodePen Project License**:
  - The original project from CodePen is licensed under the [MIT License](https://opensource.org/licenses/MIT). Please refer to the [LICENSE-CodePen-MIT](LICENSE-CodePen-MIT) file for details.

- **Repository License**:
  - This modified version of the project in this repository is licensed under the [MIT License](https://opensource.org/licenses/MIT). Please refer to the [LICENSE](LICENSE) file for details.
