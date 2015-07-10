# quiz-platform
This website is basically a quiz platform where you can create quiz questions and throw them as challenge for others to answer. You can also play quiz by answering questions created by other users.

##Build instructions
* Install xampp or wampp server. Click [here](https://www.apachefriends.org/index.html) to go to xampp installation page. Make sure you install it properly.For xampp users, go to xampp control panel and start the Apache and mySQL modules.

* Install laravel in your local machine. You can do that by visiting the website [laravel.com](http://laravel.com) and check out the documentation.

* You can even run this app without HOMESTEAD. I personally didn't use HOMESTEAD during my application development. You have to turn on vt-x in your bios settings (if it's not turned on by default) to install Homestead.

* If you want to install HOMESTEAD, please check the laravel documentation for HOMESTEAD installation in the laravel official website (link has been given in the earlier instructions).

* **Note** : In the remaining instructions, some of them are specific to xampp or wampp users while others are necessary for even HOMESTEAD users. If an instruction is specific for xampp users, it will begin with (For xampp users).

* Download this project to your local machine and extract the zip file.
 
* (For xampp users) If you are using xampp server, put the extracted project folder in htdocs sub-directory within the xampp installation directory.

* In the command prompt, navigate to the project directory and type the command

composer update

The composer will automatically download the entire laravel framework and the php dependencies used in this project. You need not manually download any of them. If you get any error, first check whether your composer is properly installed by running the command

composer  

(or)

composer -v

(This works only in the case where composer is globally installed).

* Now you can find the vendor directory is created in your project folder. Please check in the vendor directory whether the autoload.php file is present. If not, probably there might be some error in your installation.

* Now , change the .env.example file in the project folder to .env

* (For xampp users) If you are  using xampp server and not using homestead, make the folowing changes in the .env file.

DB_HOST=localhost

DB_DATABASE=quiz

DB_USERNAME=root

DB_PASSWORD=''

(The default password is empty. So the two single quotation marks mean empty)
Here 'quiz' is the name of the database (you can give any other name as you like).
DB_USERNAME and DB_PASSWORD are the environmental variables which represent your database username and password respectively. Generally, the values which I have given above automatically hold true in your case too since these are  default for xampp server. If you have some other username and password, please change these environmental variables accordingly.

* run the command

php artisan key:generate

This command automatically sets the environment variable APP_KEY

* (For xampp users) Create a new database with name 'quiz' ie, the same name which you gave to DB_DATABASE in the .env file. You can do so through the phpMyAdmin tool in your server.To go the phpMyAdmin page, type the below url in the browser. 

localhost/phpmyadmin

* run the command 

php artisan migrate 

This command creates all the necessary tables in the database.

* With these build instructions, you are ready to run the project.

Now there are two ways in which you can run the project.

###Method 1: Using laravel development server
* In the terminal or command prompt , change the path to the project location and type the command

php artisan serve

Check if you get any error like this

Failed to listen on localhost:8000 <reason: An attempt was made to access a socket in a way forbidden by its access permissions.>

This is because some other program might be using the same port (8000). If your xampp server is running, I think you will probably get this error message.
For me, the port 8888 worked fine. To use 8888 port, type the below command in cmd

php artisan serve --port="8888"

If this too shows  similar error message, check in internet and use some other port or follow method 2 mentioned below.

* If there are no errors and Laravel development server is running successfully, go to the browser and type the url

localhost:{port-number}

Here {port-number} means the port in which the Laravel development server is launched.

Eg1.If 8000 port is running fine for you, then the url will be 

localhost:8000

Eg2.If 8888 port is running fine, then url will be

localhost:8888

###Method 2 Using xampp web server (For xampp users)
* If you followed my earlier instruction of placing the project in the htdocs sub-directory within the xampp installation directory, then you are almost ready.

* To run the project, go to your browser and type the url

localhost/{folder-path}/{folder-name}/public/

Here {folder-path} is the path where you placed this project in your server and {folder-name} is the name you gave to this project folder. If you placed it in htdocs directory and named it quiz-platform, then the homepage url is 

localhost/quiz-platform/public/

##Tables
1.'users' table :

Stores the information of registered users of this website.
  
2. 'questions' table:
 
This table stores the questions submitted by the user and the id of the user who submitted the question (foreign key).

3. 'question_user' table:

This is a pivot table which establishes the  many to many relationship between the website users and their answered questions.

The remaining 'migrations' table and 'password_resets' table are both created by in-built migrations in laravel.

##Modules used
1.[Bootstrap](http://getbootstrap.com/) :
For responsive web design

2.[jquery](http://jquery.com/):
For making animations and referring DOM elements easier.

3.[jquery.autosize.js](http://www.jacklmoore.com/autosize)

jQuery plugin for auto-sizing the textarea field in forms.

4.[dataTables](http://www.datatables.net/)

DataTables is a table plug-in for the jQuery Javascript library. It is a highly flexible tool, based upon the foundations of progressive enhancement, and will add advanced interaction controls to any HTML table.

5.[jquery.popconfirm.js](http://ifnot.github.io/PopConfirm/)

jQuery plugin for displaying a pop up confirmation message upon clicking a button.

##Server routes
* '/'

home page
* 'auth/login'

Log in page for registered users
* 'auth/register'

Registration page
* 'auth/logout'

To log out authenticated user
* 'quiz/design'

Displays all the questions previously submitted by the authenticated user with options for editing and deleting.
* 'quiz/design/create'

* 'quiz/design/{design}/edit'

* 'quiz/play'

Displays quiz questions from all categories for the user to answer.

* 'quiz/play/{category}'

Displays questions from a specific category.Here, the category must be one among history, sports, literature, science and politics.

* 'quiz/scores'

* 'quiz/scores/user'

**Note**:
Please run this project only with internet access because I didn't include the bootstrap and jQuery files in the project.
I'm have used them only through CDN to improve the performance of the web app. So please don't run this project when your computer is disconnected from internet.

##Screenshots
![welcome page](/screenshots/welcome.png)

![login page](/screenshots/login.png)

![registration page](/screenshots/register.png)

![all categories questions page](/screenshots/all.png)

![history questions page](/screenshots/history.png)

![politics questions page](/screenshots/politics.png)

![literature questions page](/screenshots/literature.png)

![science questions page](/screenshots/science.png)

![sports questions page](/screenshots/sports.png)

![create question page](/screenshots/create.png)

![update question page](/screenshots/update.png)

![leaderboard page](/screenshots/leaderboard.png)

![myscore](/screenshots/myscore.png)

![instructions page](/screenshots/instructions.png)

![index](/screenshots/index.png)