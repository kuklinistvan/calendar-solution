![screenshot](screenshot.png)



# Calendar Solution

After a server upgrade I have realized that setting up a calendar server and finding a *working* client is not as easy as it once used to be (if it ever was?).

You can choose either the Debian package or the official released version. Then you have the official documentation, the README.debian files, and the Debian wiki to follow - already at least four different routes to take while finding that the information is not exactly up to date anymore on any of them.

> ...and then notice that among the two available and usable open source web clients, AgenDAV looks prettier (my subjective opinion), but InfCloud has the capability to access the todos and the addressbook.

Also, these software were written at the time of PHP 5, whereas the newer versions aren't backward-compatible.

Stop the suffering. Use the image. *And open an issue if something does not work! I'm happy to help :)* 

### Disclaimer

I'm not blaming neither PHP, DAViCal, AgenDAV or InfCloud - I'm happy to have them, but I acknowledge that their setup cost me an unnecessarily huge amount of time. I'm hoping that I'm saving someone else's time ;)

## Installation

The first time you run this image, the databases must be initialized. Fire up them with.

```
docker-compose up
```

Wait a minute or two on the first run. Then, bootstrap the databases:

```
# The order is important!
docker exec -it calendar-solution_mariadb_1 /bootstrap.sh
docker exec -it calendar-solution_postgres_1 /bootstrap.sh # note down the admin password!
docker exec -it calendar-solution_web_1 /bootstrap.sh
```

(you can look up the container names with `docker ps`)

After that, you're set. Hit Ctrl+C to interrupt this session and next time start in the background with `docker-compose up -d`

You may put a proxy in front of the web container.