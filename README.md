# zircom

* The sql file for the project is examination.sql which require creating Mysql database with the name examination

* config.php file in the api directory is where to set the Mysql credentials for the project

* All api request is expected to be routed to index.php file in the api directory, an .htaccess file is provided in the api directory to ease that

* Three available end points is as below,

  Fetch all students, GET: /api/students/all
  
  Fetch students by category, GET: /api/students/category/{category}
  
  Fetch number of students in the three categories, GET: /api/students/statistics
  
  
* The Graphical user interface is the home page for fetching record from the three end points via the browser.
  
* Fibonacci  series of the first 100 numbers is available via this path /fibonacci.php
  
  
