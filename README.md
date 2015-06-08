# PHP/Symfon2/Doctrine2 Ordering Middleware Webapp
Webapp middleware integrated with [SonataAdminBundle](https://github.com/sonata-project/SonataAdminBundle) and [MSSQLBundle](https://github.com/realestateconz/MssqlBundle) to handle ordering on a third party POS system with database in Microsoft SQLServer 2005 and authentication managed using [SonataUserBundle](https://github.com/sonata-project/SonataUserBundle) and [FOSUserBundle](https://github.com/FriendsOfSymfony/FOSUserBundle).


### Important notes on db connectivity to an SQLServer from a linux machine.

You must install `freetds` to you *nix box, install sample below is used on an ubuntu machine.

sudo apt-get install freetds-bin
apt-get install freetds-dev


If using ruby gems in the same ubuntu machine where configuring freetds you must install `freetds-dev` to be abel to use `tiny_tds` ruby gem.

Open the freetds.conf file `/etc/freetds/freetds.conf` on Debian / Ubuntu and `/usr/local/etc/freetds.conf` on Mac OS X) and add the connection details of your server:

```
[my_server]
host = sql.example.com
port = 1433
tds version = 8.0
client charset = UTF-8
text size = 20971520
```

To test the connection

`tsql -S my_server -U myusername`


To enable MSSQL support on php
`sudo apt-get install php5-sybase`

And add the DBLIB driver for Doctrine (packaged in a Symfony bundle) in your app:

In your Symfony app directory
`composer require realestateconz/mssql-bundle:dev-master`

Enable the Symfony bundle. Add this line in the registerBundles() method of your AppKernel in app/AppKernel.php:

`new Realestate\MssqlBundle\RealestateMssqlBundle(),`
Finally, configure Doctrine to use this driver. Edit `app/config/config.yml`:

```
doctrine:
    dbal:
        driver_class: Realestate\MssqlBundle\Driver\PDODblib\Driver
        host: my_server
        dbname: MYDATABASE
        user: myuser
        password: mypassword
```
        
Note that you must use the driver_class parameter, and not driver. Of course, you should not hardcode these values. Use the interactive parameters system instead.

### Entities and sonat admin bundle

When defining entities and using sonata admin bundle, always define a toString() method for the entity class to avoid weird behaviors when integrating the bundle to symfony2 
`public function __toString()` the return value can be any of the public methods of the class.
 
#### NVARCHAR & NTEXT Data Types for the mssql server bundle

To avoid unexpected behavior for large text fields a workaround is using varchar(max) for those fields if not then prepare to scratch your hair a lot.

NVARCHAR & NTEXT are not supported. In SQL 2000 SP4 or newer, SQL 2005 or SQL 2008, if you do a query that returns NTEXT type data, you may encounter the following exception: _mssql.MssqlDatabaseError: SQL Server message 4004, severity 16, state 1, line 1: Unicode data in a Unicode-only collation or ntext data cannot be sent to clients using DB-Library (such as ISQL) or ODBC version 3.7 or earlier.

It means that SQL Server is unable to send Unicode data to FTREETDS, because of shortcomings of FTREETDS. You have to CAST or CONVERT the data to equivalent NVARCHAR data type, which does not exhibit this behaviour.


### SQLServer Weird behaviors and connection timeouts

Whenever a weird beharior happends go to the freetds log file normally located in `/tmp/freetds.log` there you will find a detailed log of what happends. Believe it or not lots of connection timeout happends for no reason even when no user is having interaction with the database.

