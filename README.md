# LegalOneChallenge-Symfony
# problem
We have an aggregated log file that contains logs from all services, this file size in TBs.
Now we are planning to have a new project to display a dashboard but in order to do that we need you to do the following:

1.	 Write code that reads the aggregated log file and saves it into a database
a.	Please note that other services will continue logging to the same file.
b.	Database modeling is not restricted, pick a schema that works for you. 

2.	Create a service that will have an endpoint /count. The endpoint should return a COUNT of rows that matched the filters criteria.
a.	This endpoint accepts a list of filters via GET request, you can send zero or more filters to the endpoint. The filters are:
i.	serviceNames
ii.	statusCode
iii.	startDate
iv.	endDate
b.	Endpoint result: { counter: 0}

## Requirements ##
1. Docker version 18.06 or later
2. Docker compose version 1.22 or later
3. An editor or IDE (ideally vscode)
4. MySQL Workbench
5. Apache latest
6. PHP 8.0.2
7. MySQL 5.7
8. Symfony 6
9. Doctrine
10. PHPUnit
11. Composer
12. symfony-cli

## Data ##
There are two files exist in public/ folder
1. logs.log  (This file contain only 20 records for testing)
2. logs - copy.zip (This file has a size of 2GB and contains 30 Million records to test the large files)

## API's url ##
1. **/api/count** 
This endpoint should return a COUNT of rows that matched the filters criteria
3. **/api/delete**
This endpoint truncate all the records exist in log database table
5. **/api/doc.json**
This endpoin will show the json of api's for swagger

## Api documentation ##
Swagger has been used to for api documentation. You can generate the json for swagger from **/api/doc.json** api. 

## Approches used ##
1. SOLID
2. DRY
3. KISS
4. Repository design pattern
5. packing with composer
6. Namespaces
7. api docuementation with swagger
8. Unit test cases using phpUnit
9. TDD approach

## Setting up the project ##

**METHOD 1: Using Docker**

Prerequisites are installed Docker and Docker Compose (which, depending on your platform, might be a part of the Docker installation). If you’re using Windows, make sure you have the WSL2 feature enabled. use ports 8101 and 8102 for project.The same applies to the DB port. You might already have default port 3306 occupied on your local machine. We’ll use official Docker images for building db_server and db_admin containers. You can find the official (and many other) container images on https://hub.docker.com/.

after that
1.  make sure Docker desktop is installed
2.  **run this command docker-compose up -d –build** to start the containers
3.  Execute **Bash** on server container (where server is the name you’ve given to container) by running **docker-compose exec server bash**
4.  Now check http://localhost:8101/ and http://localhost:8102/. Your site and PhpMyAdmin should be available

**METHOD 2: Using Composer**

1. Clone the project using **git clone**
2. Run **composer intall** to install the dependencies
3. Set the DB variables in .ENV file
4. Run **.\symfony console doctrine:migrations:migrate** in project directory to migrate the log table
5. Run **.\symfony server:start** to start the server


## Add Data to Database using console command ##

 1. Run **php bin/console app:update-log** command in the terminal to add the data
 
 If the services are writing the data contineusly then we schedule the console command for every minute using supervisor.when service write the date into database, we   will empty the log file.
 How to schedule the console command
 
 **php /root/absolute/for/symfony/project/app/console app:update-log**
 
 
 ## How to Handle the large file ###
 
This function reads a file up to length number of bytes. Youare the one who gets to specify  the length so you don’t have to worry about running out of memory we read the large text file (1024*1024) 1MB at a time and it took some iterations to read the whole file. You can set the value of chunk_size to a reasonable value and read a very large file without exhausting your memory. You could use this technique to read a 1GB file using just 1MB of memory  in about 1024 iterations. You can also read even larger files and increase the chunk_size if you want to  keep the number of iterations low after reading the file, will the chunck size from log file 
      






 
