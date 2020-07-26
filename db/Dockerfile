FROM mysql
ENV MYSQL_DATABASE argos
ENV MYSQL_ROOT_PASSWORD argos
ADD init.sh /docker-entrypoint-initdb.d/
ADD init.sql /docker-entrypoint-initdb.d/
RUN chown -R mysql:mysql /docker-entrypoint-initdb.d/
RUN chown -R mysql:mysql /var/lib/mysql /var/run/mysqld
EXPOSE 3306
