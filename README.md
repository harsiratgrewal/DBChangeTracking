# Database Tracking Server

### Description: The project's goal is to provide a service for tracking changes in the database. It targets specific tables to check if they were updated within a specified time interval. Users execute a script with arguments for table name, column name, and time interval, after which the server keeps checking for updates.

## Tracking changes in database tables and columns within specific time intervals. The user specifies the table name, column name, and time interval. The project consists of 5 interconnected scripts:

- Cron Job Script: Executable by the user, it takes three arguments: Table Name, Column Name, and Time Interval. It modifies the time interval and calls the change script.
- Change Script: Manages the change tracking process. It calls the database with a query using table and column names, compares updates, and logs the activity.
- SQL Connection Script: Establishes a connection to the SQL database, editable only by the admin group.
- Project PHP Script: Displays text from the messages file updated by the Change Script.
- Fetch Message Script: Fetches messages from the message text file.
