ReadMe
Group 1: Practical BioInformatics
Parth Garg,  Vishesh Agrawal,  Juhi Pandey,  Ankit Rana,  Sarthak Pal
Description of Platforms used
We have made our frontend files using html for structure css for designing the webpage, while the backend is made in javascript and  python based Flask.  To link it with the database and send information to the servers we have used php. Initially due to lack of any hosting platform we had used localhost. And we have made databases using phpMyAdmin.
Starting the Flask server for the anonymous one-to-one chat functionality
First install the dependencies using the following commands;
$ pip3 install flask
$ pip3 install flask_socketio
Navigate to the root directory of the “chatapp/” folder and execute the following command to start the flask server:
$ python3 main.py
How to Run the LocalHost Server, run php files and  Database using PhpMyAdmin.
To work with php files you have to work on the local host or host the php file in some web server. We worked with local host.
We have worked with XAMPP control panel for using APACHE and MYSQL. You can follow this website’s instructions to download and run the XAMPP control panel (this is for MAC, Windows and Linux systems)
https://www.apachefriends.org/download.html
Install the XAMPP in your system
Then you have to save the whole directory in XAMPP/htdocs/
Now switch on APACHE and MYSQL as start.
Now you can access the starting php file present in your system using local host by using the url in the browser :
http://localhost/pb_project/main.php 
Where pb_project is the name of directory that you save inside the htdocs folder. And main.php is the file you want to run using it.
main.php is the starting page which gives options to go to login, signup and covid updates.
PS: There can be times when mysql port is not available, so you can check the error from error_log and go to TASK MANAGER and remove the process. 
PHPMYADMIN
To use phpmyadmin you have to type in your browser
http://localhost/phpmyadmin/
Now you have to import the sql file that is there in the repository which will give the database that we are using. You can clear the database entries to start with a fresh dataset.
And now in phpmyadmin you can see all the entries which will be there in the database.
