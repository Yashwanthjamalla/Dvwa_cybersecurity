# DVWA – SQL Injection and Security Misconfiguration Project

This repository contains the implementation and analysis of SQL Injection and Security Misconfiguration vulnerabilities using the Damn Vulnerable Web Application (DVWA).

## Project Overview

The objective of this project is to demonstrate:
- SQL Injection at Low Security Level
- Prevention of SQL Injection at High Security Level
- Identification of Security Misconfiguration issues

The project was performed in a local environment using XAMPP and DVWA.

## Environment Used

- Operating System: Windows
- Web Server: Apache (XAMPP)
- Database: MySQL
- Application: Damn Vulnerable Web Application (DVWA)
- Browser: Google Chrome

## Repository Structure

The repository contains the DVWA source code used during the project. The following files are important for understanding the vulnerability analysis:

- `vulnerabilities/sqli/source/low.php`  
  → Contains vulnerable SQL query implementation (before fix)

- `vulnerabilities/sqli/source/high.php`  
  → Contains secure SQL query implementation (after fix)

- `config/config.inc.php`  
  → Contains security configuration and default settings

## Key Observations

- At the Low security level, SQL Injection is possible due to direct use of user input in SQL queries.
- At the High security level, SQL Injection is prevented using input validation and prepared statements.
- Security Misconfiguration was observed through insecure default settings and plain-text credentials.

## How to Run the Project

1. Install XAMPP
2. Place the DVWA folder inside `htdocs`
3. Start Apache and MySQL from XAMPP Control Panel
4. Open browser and go to `http://localhost/DVWA`
5. Configure the database using the DVWA setup page
6. Set security level to Low or High for testing

## Purpose of This Repository

This repository is created for academic purposes to support a cybersecurity project submission. It allows reviewers to inspect the code and understand the difference between vulnerable and secure implementations.

