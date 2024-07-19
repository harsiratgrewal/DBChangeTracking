<!DOCTYPE html>
<html>
<head>
    <title>CSI3660 Project Webpage</title>
    <style>
        body { font-family: Arial, sans-serif; }
        h1, h2 { color: navy; }
        .script-section { margin-top: 20px; }
        .script-image { width: 100%; max-width: 600px; }
        ul { list-style-type: none; }
        li { margin-bottom: 10px; }
    </style>
</head>
<body>
    <h1>Welcome to the CSI3660 Project Website</h1>
    <h2>CSI 3660 Project: Database Tracking Server</h2>
    <p><strong>Author:</strong> Harsirat Grewal</p>
    <p><strong>Description:</strong> The project's goal is to provide a service for tracking changes in the database. It targets specific tables to check if they were updated within a specified time interval. Users execute a script with arguments for table name, column name, and time interval, after which the server keeps checking for updates.</p>
    <p><strong>Background:</strong> This project is based on a database project for designing and implementing database strategies for the human mars mission. It's crucial to track data updates for mission-critical tasks. This project implements a Linux server for this purpose, modified to send alerts when data isn't updated within a set interval.</p>
    
    <h2>Project Overview</h2>
    <p><strong>Service:</strong> Database Change Tracking</p>
    <p>Tracking changes in database tables and columns within specific time intervals. The user specifies the table name, column name, and time interval. The project consists of 5 interconnected scripts:</p>
    <ol>
        <li><strong>Cron Job Script:</strong> Executable by the user, it takes three arguments: Table Name, Column Name, and Time Interval. It modifies the time interval and calls the change script.</li>
        <li><strong>Change Script:</strong> Manages the change tracking process. It calls the database with a query using table and column names, compares updates, and logs the activity.</li>
        <li><strong>SQL Connection Script:</strong> Establishes a connection to the SQL database, editable only by the admin group.</li>
        <li><strong>Project PHP Script:</strong> Displays text from the messages file updated by the Change Script.</li>
        <li><strong>Fetch Message Script:</strong> Fetches messages from the message text file.</li>
    </ol>

    <!-- Script Images -->
    <div class="script-section">
        <h3>1. Cron Job Script</h3>
        <img class="script-image" src="https://ibb.co/mcTFWZN" alt="Cron Job Script Image" />
    </div>

    <div class="script-section">
        <h3>2. Change Script</h3>
        <img class="script-image" src="/var/www/html/Change.jpg" alt="Change Script Image" />
    </div>

    <div class="script-section">
        <h3>3. SQL Connection Script</h3>
        <img class="script-image" src="/var/www/html/SQL.jpg" alt="SQL Connection Script Image" />
    </div>

    <div class="script-section">
        <h3>4. Project Web Server Script</h3>
        <img class="script-image" src="/var/www/html/ProjectPHP.jpg" alt="Project Server Script Image" />
    </div>

    <div class="script-section">
        <h3>5. Fetch Message Script</h3>
        <img class="script-image" src="/var/www/html/FetchPHP.jpg" alt="Fetch Message Script Image" />
    </div>


    <h2>Working of Service</h2>
<p>Example Test Run: <code>bash cron.sh AirlockChamber RecordTime 1</code></p>
<p>Tracking the <code>RecordTime</code> column from <code>AirlockChamber</code> table.</p>

<div class="script-section">
    <img class="script-image" src="/var/www/html/Before.jpg" alt="Tracking RecordTime column from AirlockChamber" />
    <p>Tracking RecordTime column from AirlockChamber</p>
</div>

<div class="script-section">
    <img class="script-image" src="/var/www/html/Query.jpg" alt="Inserting a row to the AirlockChamber table" />
    <p>Inserting a row to the AirlockChamber table</p>
</div>

<div class="script-section">
    <img class="script-image" src="/var/www/html/After.jpg" alt="After a change was detected" />
    <p>After a change was detected</p>
</div>

    <h2>References</h2>
    <ul>
        <li><a href="https://docs.microsoft.com/en-us/sql/linux/sql-server-linux-overview?view=sql-server-ver15">SQL Server on Linux Overview</a></li>
        <li><a href="https://phoenixnap.com/kb/how-to-list-display-view-all-cron-jobs-linux">How to List, Display, and View all Cron Jobs on Linux</a></li>
        <li><a href="https://help.ubuntu.com/community/CronHowto">CronHowto on Ubuntu Community Help Wiki</a></li>
        <li><a href="https://httpd.apache.org/docs/">Apache HTTP Server Documentation</a></li>
    </ul>
    <p>Note: Some YouTube videos and ChatGPT were used for troubleshooting scripts and assisting with complex lines of code.</p>
</body>
</html>

