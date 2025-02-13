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
