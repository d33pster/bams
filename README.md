# bams
Bank Accounts Management System, Authors - [Soumyo Deep Gupta](https://github.com/d33pster) and [Sairam Santosh Pimple](https://github.com/SairamPimple)

## Requires XAMPP, PHP, PYHTON3 and MYSQL

###### Download Xampp from -> https://www.apachefriends.org/download.html
###### Download MySQL from -> https://dev.mysql.com/downloads/
###### Download Python 3.12.0 or above -> https://www.python.org/downloads/

#### Usage
1. Git Clone from github -> [GitHub-Bams](https://github.com/d33pster/bams) .
2. Install Xampp from the Link Provided for your respective OS.
3. If not using macos, find out the ```htdocs``` directory inside the xampp installation directory.
4. Open Xampp and run Apache and MySQL Servers. Check Common Errors if MySQL Server fails to start -> [Common Errors](#common-errors)
5. Open [PHPMYADMIN](http://localhost/phpmyadmin) and follow the instructions -> [Set Up PHPMYADMIN](#phpmyadmin-setup-needed-before-launch)
6. Open a terminal at the cloned folder.
##### MacOS
1. run command ```chmod a+x set unset launch```
2. run command ```./set``` and enter the ```htdocs``` DIRECTORY PATH or hit enter if xampp is installed using default settings.
3. run command ```./launch```
##### Windows
1. run command ```python set``` and enter the ```htdocs``` DIRECTORY PATH
2. run command ```python launch```
##### Linux
1. run command ```chmod a+x set unset launch```
2. run command ```./set``` and enter the ```htdocs``` DIRECTORY PATH
3. run command ```./launch```

#### PHPMYADMIN Setup (needed before launch)
1. Go to [Settings](http://localhost/phpmyadmin/index.php?route=/preferences/manage) and Click on Reset
2. Create a New Database named ```bams_```
3. Then Select ```bams_``` and go to import
4. Select ```bams.sql```

#### Common Errors
1. Check the ```htdocs``` directory properly.
2. In MacOS, Turn off the ```MySQL Server``` from ```System Settings``` before Starting ```MySQL Server``` in ```XAMPP```