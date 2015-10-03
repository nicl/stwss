# Notes

need

html and css for nav

menus to call upon (or just child items - yes)

disable links on main nav

a way to list related links on a page (tabs or pills)

http://getbootstrap.com/components/#nav

So if today I can sort out the nav.

And then tomorrow the main components!

Yes. Awesome.



And also - get it online somewhere! No robots though.



For iTunes RSS:
https://www.drupal.org/node/1473728

And storing files in S3, one of::

https://www.drupal.org/project/amazons3
https://www.drupal.org/project/storage_api

See:
http://davidcsonka.com/blog/how-use-amazon-s3-store-your-drupal-website-files


Then put it online - with S3 file uploads...



--

get it online (private though)

implement blocks (talks, newsletters,



could just scp all the files? yes!


--

Homepage:




## Commands

rsync -vr --exclude=settings.php -e 'ssh -i /Users/nlong/.ssh/stwss-key-pair.pem' /Users/nlong/projects/stwss/drupal/sites/all/themes/stwss/ ec2-user@stwss:/var/www/html/sites/all/themes/stwss/
