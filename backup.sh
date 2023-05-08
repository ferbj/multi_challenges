#!/bin/bash

#folders_to_backup
folder_backup_1 = "/home/var/www/applicant"
folder_backup_2 = "/home/var/www/test"

#destination
destination = "/mnt/backuptest"

# Create archive filename.
day=$(date +%A)
hostname=$(hostname -s)
backup_file="$hostname-$day.tar.bz2"
files = "/mnt/backup/*"
old_file=""
# looking for more of 5 files and deleting older
if (( ${#files[@]} > 5 )) 
then 
  for filename in "${files[@]}"
  do
     f=$( stat --printf=%Y "$filename" )
     if [ -z "$old_file"] || ((f < age))
     then
         age="$f"
         old_file="$filename"
     fi
  done
  rm "$old_file"
fi
# Printing status backup message. 
echo "Backup $folder_1 to $destination/$backup_file"
echo "Backup $folder_2 to $destination/$backup_file"
date
echo 
# Backup files using tar 
tar czf $destination/$backup_file $folder_backup_1 $folder_backup_2
# Print status finished
echo 
echo "Backup finished"
date

# Listing files in $destination to check files
ls -lh $destination

# To execute this script daily 
sudo crontab -e 15 1 * * * /path_to_script/backup.sh backup.sh >/dev/null 2>&1
