# Run Python from PHP
A Simple Example of Running Python files from PHP codes.

## General Information
This is a simple small project to show execution of Python files from PHP codes on a web server.
There are 3 files to be placed in the web server's root folder:
1. **brand.php**:  This is the main file to be opened in a web browser. It has a GET method in PHP form that asks for a brand name from the user to write in a textbox.
2. **brand_get.php**: This file receives the entered brand name from the GET method in **brand.php** and writes it to a newly created **data.txt** file. Then, **brand_get.php** executes "python" command on the system to run the **run.py** file which appends a new line of string at the end of the **data.txt** file. Finally, all the content of this text file is printed on the browser page.   
3. **run.py**: This file is executed with a command from the **brand_get.php** file and it appends a new line of string to the **data.txt** file.
* **data.txt**: This is the created text file which includes both the brand name taken from user input and the additional appended line of string by the **run.py** file.

## Technologies
This project is created with:
* XAMPP
* PHP
* Python

## Setup & Run
1. Download and install [XAMPP](https://www.apachefriends.org/download.html) to obtain a local web server.
2. Activate the Apache module from the control panel of XAMPP.
3. Place all the 3 files (**brand.php**, **brand_get.php** and **run.py**) in the XAMPP web server's root folder: **htdocs**
4. Open the **brand.php** file in a web browser:
```
localhost/brand.php
```
5. Enter any string in the textbox and submit it.
