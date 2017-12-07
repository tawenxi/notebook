 7
down vote
accepted
	

I'm resurrecting this because it was one of the early results on google for my problem...

First, ssh into your box vagrant ssh from the Homestead folder.

Then, install php5-mssql sudo apt-get update && sudo apt-get install php5-mssql

For newer Vagrant with PHP 7, use sudo apt-get update && sudo apt-get install php7.0-sybase.

If this fails, you may need to do sudo apt-get upgrade.

Now edit freetds.conf sudo vi /etc/freetds/freetds.conf

Change the top few lines:

[global]
        # TDS protocol version
        tds version = 7.2
        client charset = UTF-8

Finally you should create a locales.conf file within /etc/freetds to allow correct parsing of dates with SQL Server, i have this configuration and has worked well with DateTime, DateTime2, SmallDateTime and Date data types: sudo vi /etc/freetds/locales.conf

[default]
    date format = %Y-%m-%d %H:%M:%S.%z

[en_US]
    date format = %b %e %Y %I:%M:%S:%z%p
    language = us_english
    charset = iso_1

[es_ES]
    date format = %b %d %Y %I:%M%p
    language = spanish
    charset = iso_1

[pt_BR]
    date format = %d/%m/%Y %H:%M
    language = Portuguese
    charset = iso_1

[it_IT]
    date format = %d/%m/%Y %H:%M
    language = Italiano
    charset = iso_1

Last, restart your server vagrant halt && vagrant up (Just restarting nginx doesn't cause the settings to take effect.)




alias updater='php artisan update:R9 --only=nobackup && git stash && git checkout MSSQLDABATABASE && php artisan update:R9 --only=backup && git add . && git commit -m"save GL_Pz Seed file" && git checkout master && git stash pop && git status'