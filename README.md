# redis-phpSession-handler

PHP session can be stored in Redis server, every service using this Redis server as session handler, will have shared session.
This is solution for session problem in distributed services.

## How to run
>`docker-compose up --build`

Then try to connect to `localhost:8081` or `localhost:8081`, session should be the same between these instantions.