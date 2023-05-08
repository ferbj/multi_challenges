FROM ubuntu:20.10
RUN  apt-get upgrade
RUN  apt-get update
RUN  apt-get install nano
RUN mkdir -p /var/www/applicant
COPY *.php /var/www/applicant
RUN mkdir -p /var/www/test

RUN mkdir -p /mnt/backuptest

COPY *.png /var/www/test
COPY backup.sh /

CMD ./backup.sh
