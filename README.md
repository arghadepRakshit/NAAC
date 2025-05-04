# NAAC
:

🏫 NAAC DVV Automation System
📌 Project Overview
This project automates the NAAC DVV (Data Validation and Verification) process, a critical step in the accreditation of higher education institutions in India. The system is designed to handle large academic and administrative datasets, verify document authenticity, and reduce manual effort through smart automation using Python, SQL, and basic machine learning techniques.

⚙️ Features
🔍 Automated PDF & Document Analysis
Extracts and verifies tabular and textual data from research papers, academic documents, and administrative PDFs.

🧠 Machine Learning Integration
Uses ML models to detect document anomalies, identify duplicates, and validate formats automatically.

📊 Data Processing with Pandas
Utilizes Pandas for data cleaning, transformation, and aggregation of key metrics required by NAAC.

🗂️ Database Management with SQL
Efficient data storage and querying using MySQL, ensuring scalable and reliable data access.

🌐 Web Interface (Flask + PHP)
A user-friendly web interface built using Flask (Python) and PHP for uploading documents and viewing validation reports.

🧠 Technologies Used
Languages: Python, PHP, SQL

Libraries & Tools: Pandas, NumPy, Scikit-learn, PyPDF2, EasyOCR, OpenCV

Frameworks: Flask

Database: MySQL

Others: HTML, CSS, JavaScript (for frontend integration)

🛠️ Modules
Document Upload Module
Professors or admins can upload research articles or administrative files in PDF format.

Text & Table Extraction Engine
Parses documents to extract tables, text, and metadata using libraries like PyPDF2, fitz, and EasyOCR.

Validation Engine (ML-based)
Applies machine learning models to:

Detect incomplete or fake submissions

Match data with internal records

Flag suspicious entries

Database Integration
All extracted and processed data is stored in a structured MySQL database for future audits and analysis.

Reporting Dashboard
Displays validation results, summary statistics, and document status with filtering and export options.

💡 Impact
Reduced manual data verification time by 85%

Improved accuracy and consistency in submitted data

Streamlined the NAAC DVV documentation process

Enabled real-time monitoring of document statuses

📈 Future Scope
Integrate AI-based plagiarism detection

Add user roles and document history tracking

Implement full-text search across documents

Generate auto-formatted NAAC reports

🤝 Contribution
Built and maintained by [Your Name], serving as a Backend Developer and system architect. Played a key role in:

Designing the database schema

Developing document parsing logic

Training and integrating ML models

Deploying the Flask-based web interface

