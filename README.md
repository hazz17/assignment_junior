Electricity Consumption Calculator

💡 Features

- Input fields for:
  - Voltage (V)
  - Current (A)
  - Rate (sen/kWh)
    
- Calculates:
  - Power (W)
  - Energy consumption per hour, per day, and per month (kWh)
  - Total cost per hour, per day, and per month (RM)
    
- Input validation to ensure positive values
- Clean and responsive UI using Bootstrap 4
- Modular PHP functions for calculation (`functions.php`)

🧮 Formulas Used

- Power (W) = Voltage × Current  
- Energy (kWh) = (Power × Hours) ÷ 1000  
- Total Cost (RM) = Energy × (Rate ÷ 100)  

🚀 How to Run

1. Make sure you have Laragon or XAMPP installed.  
2. Copy the project folder `assignment_junior` into Laragon’s `www` folder:  C:\laragon\www\assignment_junior
3. Open Laragon and click Start All.  
4. Open your browser and navigate to:  http://localhost/assignment_junior
5. Fill in the Voltage, Current, and Rate fields, then click Calculate to see results.

📂 Project Structure
assignment_junior/
│── index.php 
│── functions.php 
│── README.md 

👨‍💻 Author

Mohd Hazri Bin Abu Bakar
Bachelor of Computer Science (Data Science) with Honours  
Universiti Malaysia Sabah
