# BMI Calculator

## Overview
This project is a user-friendly BMI (Body Mass Index) calculator designed with HTML, CSS, and PHP. It allows users to enter their weight and height, calculates their BMI, and provides a clear categorization with visual aids.

## Features
- **Easy-to-use interface**: Simple form for entering weight and height.
- **Accurate BMI calculation**: Computes BMI using the standard formula.
- **Categorization of BMI results**:
  - Underweight (BMI < 18.5)
  - Normal weight (18.5 - 24.9)
  - Overweight (25 - 29.9)
  - Obese (BMI > 30)
- **Color-coded BMI scale**: Helps visualize BMI status.
- **Informative category reference**: Includes images and explanations for each BMI category.
- **Reset button**: Allows users to clear inputs easily.
- **Responsive design**: Works well on both desktop and mobile devices.

## How It Works
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

##   Branching and Merging Explanation
🔹 Our Approach to Using Branches and Merging
To ensure efficient collaboration and version control, we followed a structured branching strategy using Git and GitHub.

## **✅ Branching Strategy**
1. Main Branch (main) → The stable production-ready branch.
2. Feature Branches (iteration-1, iteration-2, iteration-3)

   iteration-1 → Developed basic BMI calculation.

   iteration-2 → Added BMI classification and image display.

   iteration-3 → Improved UI, added JavaScript validation, and dynamic elements.

Each team member worked on their assigned feature branch to prevent conflicts in the main branch.

## **✅ Merging Strategy**
Once a feature was complete and tested, we merged it into main using Pull Requests (PRs).

## Merging Process:
Pull Request (PR) Created – After finishing a feature, we opened a PR on GitHub to review changes.

Code Review & Conflict Resolution – The team checked for merge conflicts and fixed any discrepancies.

Merge to Main – Once approved, the branch was merged into main using GitHub’s merge feature.

Branch Deletion (Optional) – After merging, unused branches were deleted to keep the repository clean.

## **📌 Kanban Board Explanation**
We used Trello to manage the development process
Our Kanban Board consist of Backlog, To Do, In Progress, Testing, and Done
Backlog - Contains all planned tasks/features.
To Do - Tasks that are ready to start
In Progress - Features currently being developed.
Testing - Completed features undergoing testing/debugging.
Done - Successfully completed and merged features.

## **✅ Example of Task Breakdown**
## Iteration 1 - Basic BMI Calculation
1. To create the BMI function
2. When done moved the tab from backlog -> in progress
3. When finished moved the tab from testing -> done

## Reflections
## **✔ Improved Task Management** - Everyone knew what tasks were pending, ongoing, or completed.
## **✔ Reduced Miscommunication** - The team had a clear visual representation of progress.
## **✔ Better Collaboration** - Allowed us to track who was working on what in real time.
## **✔ Faster Issue Resolution** - If a task got stuck in "Testing", we quickly addressed bugs.

## Link to Kanban Board
https://trello.com/b/TlONs9n6/bmi-calculator?utm_source=eval-email&utm_medium=email&utm_campaign=board-invite
## Credits
Developed by [Kelvin, Renyi, Liwei and Fer].

Enjoy using the BMI Calculator! 🚀

