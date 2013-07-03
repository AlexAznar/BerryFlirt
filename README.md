BerryFlirt
===========

Memcache

      sudo apt-get install php5-memcache
      
      sudo gedit /etc/php5/conf.d/memcache.ini
      
      
      ; uncomment the next line to enable the module
      extension=memcache.so
      
      
      sudo /etc/init.d/apache2 restart


Supervisor

	sudo apt-get installl supervisor

	/etc/suupervisor/conf.d/register_user_worker.conf

		[program:register-user-worker]
		command=/usr/bin/php -f /home/metacrilato/public_html/CherryFlirt/symfony RegisterUserWorkerTask:recive
		process_name=%(program_name)s_%(process_num)s
		numprocs=1
		autorestart=true
		startsecs=2
		stopsignal=TERM
		stopwaitsecs=15
		redirect_stderr=true

	supervisorctl reload
	supervisorctl status

Redis

	sudo apt-get install redis-server
	redis-cli -h 127.0.0.1
	

API ROUTES
==========
