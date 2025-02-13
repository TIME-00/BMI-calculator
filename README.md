## How It # Iteration 1: Basic BMI Calculation

## **Project Overview**

This iteration focuses on implementing a **basic BMI Calculator** in PHP, allowing users to enter their **weight (kg) and height (cm)** to calculate their **BMI value**.Works
1. The user enters their weight (in kg) and height (in cm) into the provided input fields.
2. Clicking the "Calculate BMI" button triggers the PHP script to process the input.
3. The BMI is calculated using the formula:

   \[ BMI = \frac{weight (kg)}{height (m)^2} \]

4. The result is displayed with a corresponding category, message, and color-coded scale.
5. Users can reset the form using the "Reset" button.

## File Structure
```
- index.html   # Main frontend with the BMI form and UI elements
- styles.css   # Styling for UI elements (if applicable)
- script.php   # Backend logic for BMI calculation
- images/      # Contains images for BMI category reference
```

## **🚀 Features Implemented**
✅ User inputs **weight (kg) and height (cm)**.  
✅ BMI calculated using the formula:  
✅ Displays the **BMI result** in text format.  

## Installation & Usage
### Requirements
- A local or online PHP server (e.g., XAMPP, WAMP, or a live server)

### Steps
1. Download and extract the project files.
2. Place all files in your server's public directory (e.g., `htdocs` for XAMPP).
3. Start the PHP server.
4. Open `index.html` in a web browser.
5. Enter your weight and height, then click "Calculate BMI" to view your results.

## Example Calculation
| Weight (kg) | Height (cm) | BMI  | Category   |
|------------|------------|------|------------|
| 70         | 175        | 22.9 | Normal     |
| 50         | 160        | 19.5 | Normal     |
| 85         | 170        | 29.4 | Overweight |
| 100        | 165        | 36.7 | Obese      |

## Future Improvements
- **Client-side validation**: JavaScript-based validation for improved user experience.
- **Live BMI calculation**: Display results dynamically without requiring form submission.
- **Dark mode support**: An option for users to switch to dark mode.
- **Improved UI enhancements**: Additional styling and animations for a modern look.

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

## Credits
Developed by [Kelvin, Renyi, Liwei and Fer].

Enjoy using the BMI Calculator! 🚀
