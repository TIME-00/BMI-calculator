This is the initial version of the BMI Calculator project. The application allows users to input their weight and height and calculates their Body Mass Index (BMI).

Features
Simple user interface with form inputs for weight and height.
Instant calculation of BMI after form submission.
Basic BMI result display.

Setup Instructions
Clone or download this repository to your local machine.
Ensure you have a PHP server (e.g., XAMPP, WAMP) set up.
Place the files in your web server's directory (e.g., htdocs for XAMPP).
Open the application in your browser at http://localhost/bmi_calculator.

How to Use
Enter your weight (in kg) and height (in cm).
Click the "Calculate BMI" button.
View your calculated BMI result.

BMI Calculation Formula
𝐵𝑀𝐼 = Weight (kg) / Height (m)2

Example Calculation
If the user enters 70 kg for weight and 170 cm for height:

𝐵𝑀𝐼 = 70(1.7)2≈24.2
BMI= (1.7) 2

Version History
Version 1: Basic BMI calculator without categorization or images.

Future Improvements
Add BMI categorization (Underweight, Normal, Overweight, Obese).
Display appropriate images based on BMI results.
Improve UI design and responsiveness.


test
# Iteration 1: Basic BMI Calculation

## **Project Overview**
This iteration focuses on implementing a **basic BMI Calculator** in PHP, allowing users to enter their **weight (kg) and height (cm)** to calculate their **BMI value**.

---

## **🚀 Features Implemented**
✅ User inputs **weight (kg) and height (cm)**.  
✅ BMI calculated using the formula:  
✅ Displays the **BMI result** in text format.  

---

## **💻 Code Implementation**
- **PHP script (`index.php`)** processes the BMI calculation when the form is submitted.
- **Basic HTML form** is used for user input.

**Example Code:**
```php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
 $weight = $_POST["weight"];
 $height = $_POST["height"];

 if ($weight > 0 && $height > 0) {
     $heightInMeters = $height / 100;
     $bmi = $weight / ($heightInMeters * $heightInMeters);
     echo "Your BMI is: " . round($bmi, 1);
 } else {
     echo "Please enter valid numbers.";
 }
}
Challenges: Users entering negative values, Users not entering any value
Solutions: Added basic input validation to prevent negative numbers, Used required attribute in <input> fields

Example output:
Enter Weight (kg): 70
Enter Height (cm): 175
Your BMI is: 22.9
