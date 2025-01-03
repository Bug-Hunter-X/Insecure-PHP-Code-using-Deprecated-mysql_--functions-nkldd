# Insecure PHP Code Example and Solution

This repository demonstrates a common PHP security vulnerability involving the use of deprecated `mysql_*` functions and a lack of proper error handling.  The `bug.php` file shows the insecure code. The `bugSolution.php` file provides a secure alternative using prepared statements and PDO.

**Vulnerability:** SQL Injection
The original code is vulnerable to SQL injection attacks because user input is directly inserted into the SQL query without proper sanitization or escaping.  This allows malicious users to inject arbitrary SQL code and potentially compromise the database.

**Solution:** Using PDO with Prepared Statements
The solution uses PHP's Data Objects (PDO) extension with prepared statements.  Prepared statements prevent SQL injection by separating the SQL query from user-supplied data.  Parameters are bound securely, preventing malicious code execution.