Az alkalmazás előkövetelménye a composer, ami az autoload php modul használata miatt szükséges (https://getcomposer.org/). 
Ezután a szükséges lépések: 
1.	A projekt git klónozása (https://github.com/oliverbalog/PizzaWeb2)
2.	A projekt gyökérkönyvtárában futtatni kell terminálból a „composer install --ignore-platform-reqs” parancsot
3.	Szükség lesz XAMPP vagy hasonló alkalmazásra, illetve MySQL adatbázisra és Apache futtatására
4.	Meg kell nyitni a config mappában található config.php fájlt és megváltoztatni az adatbázis kapcsolathoz szükséges változók értékeit.
5.	A phpmyadmin-ban importálni kell a notebooks.sql fájlt
6.	A hosztoláshoz meg kell nyitni a xampp mappájában található apache/conf/extra mappát és itt megnyitni a httpd-vhosts.conf file-t szövegszerkesztővel.
7.	Ezt hozzá kell adni: 
<VirtualHost *:80> 
   ServerName pizza.php
   DocumentRoot "/Applications/XAMPP/xamppfiles/htdocs/PizzaWeb2/public/" 
   <Directory "/Applications/XAMPP/xamppfiles/htdocs/PizzaWeb2/public"> 
     DirectoryIndex index.php
     AllowOverride All
     Require all granted
     Options Indexes FollowSymLinks Includes execCGI
   </Directory> 
</VirtualHost>
8.	Meg kell keresni a hosts file-t (Windows: C:/Windows/System32/drivers/etc)
9.	Hozzáadni: 127.0.0.1 pizza.php
10.	Ezután a mysql és apache indítása után meg lehet nyitni böngészőből a http://notebookweb2.web címen az alkalmazást.
