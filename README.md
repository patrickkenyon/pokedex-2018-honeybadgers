# pokedex-2018-honeybadgers

### Database Setup

Step 1: Set database IP address

In 'dataScrape/ApiPull.php', change the IP_ADDRESS constant on line 7 to the address of your database, 
if your database is not located at the default address.

Step 2: Create database

Using the database manager of your choice, create a database called 'pokedex_hb'.

Step 3: Create table

Then run 'sql/pokedex_hb.sql' in the database manager.
This will create the pokemon table.

Step 4: Populate pokemon table

Open your terminal and navigate to 'pokedex-2018-honeybadgers' and run 'php -f dataScrape/ApiPull.php'.  
This will add 151 pokemon to the table.