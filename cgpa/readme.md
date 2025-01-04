# Dynamic CGPA Calculator Project

This README provides detailed information about the CGPA calculator project developed as part of my Internet Programming Laboratory course.

## Project Description

The CGPA calculator is a web application that allows users to dynamically input their course information—including course names, grades, and credits—and calculate their cumulative grade point average (CGPA). The application provides a user-friendly interface for adding and removing courses, as well as a clear display of the calculated CGPA and course-wise information.

## Functionality Breakdown

1.  **Dynamic Course Inputs:**
    *   The `index.html` file contains a form where users can input course details.
    *   JavaScript functions dynamically add new course input fields using the `addCourse()` function.
    *   Users can remove course input fields using the `removeCourse()` function.

2.  **Form Submission and Calculation:**
    *   The form data is submitted to `calculate_cgpa.php` using the POST method.
    *   The PHP script retrieves the submitted grades and credits from the POST data.
    *   A loop iterates over the submitted data, calculating the total grade points by multiplying each grade by its corresponding credit.
    *   The total credits are also summed.
    *   Finally, the CGPA is calculated by dividing the total grade points by the total credits.
    *   The `calculate_cgpa.php` script displays each course's grade points and credits, along with the final CGPA, total credits, and total grade points.

3.  **User Interface:**
    *   The `index.html` uses a container with a central form for ease of use.
    *   Each course input is inside a course row, with add and remove buttons for flexibility.
    *   `calculate_cgpa.php` provides a summary and clear result display.
    *   The web pages uses a consistent styling throughout.

## Code Structure

### `index.html`

*   Contains the HTML structure for the CGPA calculator form.
*   Includes CSS for styling the calculator.
*   Has JavaScript functions for dynamic input handling (add and remove courses)
    *   `addCourse()`: Creates new course input fields dynamically.
    *   `removeCourse()`: Deletes specific course input rows when the remove button is clicked.

### `calculate_cgpa.php`

*   Receives and processes the form data submitted from `index.html`.
*   Calculates the CGPA by iterating through the grades and credits.
*   Displays the calculated CGPA along with total credits and grade points.
*   Includes a link to go back and calculate another CGPA.

## Setup and Usage

1.  Make sure to use web server environment (e.g., XAMPP, WAMP).
2.  Place `index.html` and `calculate_cgpa.php` into your webserver root directory.
3.  Open `index.html` in a browser.
4.  Add or remove course inputs as needed using the "Add Course" button and remove buttons.
5.  Enter the course names, grades, and credits in the fields provided.
6.  Click "Calculate CGPA" to submit the form and view your result.

## Technologies

*   **HTML:**  For content structure
*   **CSS:** For styling.
*   **JavaScript:** For dynamic input handling.
*   **PHP:**  For form data processing and calculation.

## Future Improvements

*   Add form validation to avoid invalid user input.
*   Store data in a database.
*   Add error handling to ensure that the application doesn't crash when an unexpected error is thrown.
*   Implement more advanced CGPA calculations (e.g., different grading systems).

## Contact
[ratul.hasan.infi.bd@gmail.com]
