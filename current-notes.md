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

rsync -vr --exclude=settings.php -e 'ssh -i /Users/nlong/.ssh/stwss-key-pair.pem' /Users/nlong/projects/stwss/drupal/sites/all/libraries/ ec2-user@stwss:/var/www/html/sites/all/libraries/

## Meeting 2015-10-05

Links need fixing (make them always expand)

Q. For links, rather than requiring either a full URL or a node/1
style path, what about auto-lookup?! There must be a module which does
this.

Add anchors? Or perhaps inject sub-pages.

Single what's on link. Direct to file? At the moment we have multiple
links to the current 'what is on' pdf. This is hard to remember to
update when things change!

Homepage content editable (the text).

Events on homepage (taken from upcoming/this week). HTC has 'This
week' and 'Events'.

https://stwss-files.s3.amazonaws.com/What's%20On%2C%20Oct-Dec%202015.pdf

Let's do 'this week'. Must be customisable.

Email sign-up. Link to mailchimp.

Images: go through recent photos and note any that we could use.

Action cards (talks etc.) should link to view pages (e.g. /talks and
so on).

Styling for /talks.

Update banners.

New banner: Morning Service 10:15am, Evening Service 7pm. Add CAP,
update Alpha.

Upcoming: Rememberance Sunday, Christmas.

Maps: add maps to contact-us/find us.

## Priorities

* links
* photos
* maps
* homepage editable
* email-signup (get mailchimp details)
* google analytics


17th October

- make homepage editable
- change banner
- ga
- favicon and basic SEO
