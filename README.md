# BMI Calculator

## Overview
This project is a simple BMI (Body Mass Index) calculator built using HTML, CSS, and PHP. The calculator allows users to input their weight and height, calculates their BMI, and categorizes them into different health ranges.

## Features
- Input fields for weight (kg) and height (cm)
- BMI calculation with proper categorization:
  - Underweight (<18.5)
  - Normal weight (18.5 - 24.9)
  - Overweight (25 - 29.9)
  - Obese (>30)
- A color-coded BMI scale for quick visualization
- Reference categories with images to help users understand their BMI category
- Responsive and modern UI design

## How It Works
1. The user enters their weight (in kg) and height (in cm) into the provided input fields.
2. Upon clicking the "Calculate BMI" button, the PHP script processes the input.
3. The BMI is computed using the formula:
   
   \[ BMI = \frac{weight (kg)}{height (m)^2} \]
   
4. The output is displayed with a corresponding category and message.

## File Structure
```
- index.html   # Main frontend with the BMI form and UI elements
- styles.css   # Styling for UI elements
- script.php   # Backend logic for BMI calculation
- images/      # Contains images for BMI category reference
```

## Installation & Usage
1. Ensure you have a local or online PHP server (e.g., XAMPP, WAMP, or a live server).
2. Place all files in the server's public directory.
3. Open `index.html` in a browser.
4. Enter weight and height, then submit the form to see the calculated BMI.

## Known Issues & Future Improvements
- **Client-side validation**: Currently, the form relies on HTML validation; additional JavaScript validation could improve UX.
- **Better UI feedback**: Displaying real-time BMI results without page reload using JavaScript.
- **Dark mode support**: Adding a toggle for dark mode.

## Credits
Developed by [Kelvin, Renyi, Liwei and Fer].

Enjoy using the BMI Calculator! 🚀

