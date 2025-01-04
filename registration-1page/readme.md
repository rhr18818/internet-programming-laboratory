# Detailed README: Single Page Registration Form Project

This README provides an in-depth look at the registration form project, a web application designed to collect user information. This project was developed as part of my Internet Programming Laboratory course.

## Project Description

The Registration Form project is a simple web application that allows users to input their personal details through an HTML form. The collected data includes name, email, phone number, gender, and city of residence. The form is designed with basic styling for a clear and user-friendly interface. Upon submission, the entered data is displayed on the page using JavaScript without server-side processing.

## Functionality Breakdown

1.  **User Input:**
    *   The `index.html` file contains the HTML structure for a registration form.
    *   The form includes input fields for:
        *   Name (text input)
        *   Email (email input)
        *   Phone number (number input)
        *   Gender (radio buttons)
        *   City (select dropdown)
    *   Basic form controls like radio buttons for gender and a dropdown menu for city selection make the user experience smooth.

2.  **Form Submission (Client-Side):**
    *   The form submission is handled via JavaScript using event listener on the submit button click.
    *   The `submit_data()` function captures the input values.
    *   It prevents the default form submission behavior using `event.preventDefault()`.
    *   The function updates the content of the "Submitted Data" div with the collected information in a user-friendly format.

3.  **User Interface:**
    *   The `index.html` uses basic CSS styling for a clean look and feel.
    *   The form is centered on the page, with clearly labeled input fields for usability.
    *   The layout is responsive, ensuring the form looks good on different screen sizes.
    *   The "Submitted Data" section displays collected information.

## Code Structure

### `index.html`

*   Contains the HTML structure of the registration form, with input fields, labels, and form elements.
*   Includes inline CSS styles to format the layout, making the form visually organized.
*   Embeds JavaScript code to handle the form submission without using PHP or any server-side technology.
*   The `submit_data()` function, within the `<script>` tag, fetches data, prevent default form behavior and displays the submitted data after processing on the HTML.

## Setup and Usage

1.  Open `index.html` directly in a web browser.
2.  Fill out the fields in the registration form with your information.
3.  Click the "Register" button.
4.  The submitted data will be shown in the  "-Submited Data-" section on the right without loading page.

## Technologies

*   **HTML:** For structuring the web page and form elements.
*   **CSS:** For basic styling.
*   **JavaScript:** For handling form submission and displaying the data dynamically.

## Future Improvements

*   Add HTML5 form validation for enhanced data integrity.
*   Implement proper error handling for cases where user inputs are invalid.
*   Use backend language like PHP for server-side submission
*   Incorporate database interaction for data persistence.

## Contact

<a href="mailto:ratul.hasan.infi.bd@gmail.com">✉️ ratul.hasan.infi.bd@gmail.com</a>
