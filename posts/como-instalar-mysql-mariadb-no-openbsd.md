+++
details:
    layout: post
    title: "Como Instalar MySQL (MariaDB no OpenBSD"
+++

### Como Instalar MySQL (MariaDB) no OpenBSD

---

`doas pkg_add mariadb-server`

```
quirks-2.54 signed on 2015-03-08T12:33:05Z
mariadb-server-10.0.16v0:p5-Term-ReadKey-2.30p6: ok
mariadb-server-10.0.16v0:p5-FreezeThaw-0.5001: ok
mariadb-server-10.0.16v0:p5-MLDBM-2.05: ok
mariadb-server-10.0.16v0:p5-Net-Daemon-0.48p0: ok
mariadb-server-10.0.16v0:p5-PlRPC-0.2018p2: ok
mariadb-server-10.0.16v0:p5-Params-Util-1.07p0: ok
mariadb-server-10.0.16v0:p5-Clone-0.37: ok
mariadb-server-10.0.16v0:p5-SQL-Statement-1.405: ok
mariadb-server-10.0.16v0:p5-DBI-1.633: ok
mariadb-server-10.0.16v0:p5-DBD-mysql-4.029: ok
mariadb-server-10.0.16v0: ok
The following new rcscripts were installed: /etc/rc.d/mysqld
See rcctl(8) for details.
Look in /usr/local/share/doc/pkg-readmes for extra documentation.
$
```

`doas mysql_install_db`

`/etc/rc.d/mysqld start`

`doas /etc/rc.d/mysqld start`

```
mysqld(ok)
```


`doas /usr/local/bin/mysql_secure_installation`


```
NOTE: RUNNING ALL PARTS OF THIS SCRIPT IS RECOMMENDED FOR ALL MariaDB
      SERVERS IN PRODUCTION USE!  PLEASE READ EACH STEP CAREFULLY!

In order to log into MariaDB to secure it, we'll need the current
password for the root user.  If you've just installed MariaDB, and
you haven't set the root password yet, the password will be blank,
so you should just press enter here.

Enter current password for root (enter for none):
OK, successfully used password, moving on...

Setting the root password ensures that nobody can log into the MariaDB
root user without the proper authorisation.

Set root password? [Y/n] Y
New password:
Re-enter new password:
Password updated successfully!
Reloading privilege tables..
 ... Success!


By default, a MariaDB installation has an anonymous user, allowing anyone
to log into MariaDB without having to have a user account created for
them.  This is intended only for testing, and to make the installation
go a bit smoother.  You should remove them before moving into a
production environment.

Remove anonymous users? [Y/n] Y
 ... Success!

Normally, root should only be allowed to connect from 'localhost'.  This
ensures that someone cannot guess at the root password from the network.

Disallow root login remotely? [Y/n] Y
 ... Success!

By default, MariaDB comes with a database named 'test' that anyone can
access.  This is also intended only for testing, and should be removed
before moving into a production environment.

Remove test database and access to it? [Y/n] Y
 - Dropping test database...
 ... Success!
 - Removing privileges on test database...
 ... Success!

Reloading the privilege tables will ensure that all changes made so far
will take effect immediately.

Reload privilege tables now? [Y/n] Y
 ... Success!

Cleaning up...

All done!  If you've completed all of the above steps, your MariaDB
installation should now be secure.

Thanks for using MariaDB!
```

