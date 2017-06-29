St Thomas with St Stephen's Website
===================================

[http://www.stwss.org.uk](http://www.stwss.org.uk)

## Running

The site is currently running on AWS using Codedeploy for in-place
code updates, connected to Github.

Most of the provisioning is automated, but you'll need to set up the
lamp stack and database on the initial deploy. SSH into the instance
and run:

    $ sudo apt-get install tasksel
    $ sudo tasksel install lamp-server

At this point you'll be prompted for a master password for mysql.

You should then be able to restore a recent database backup using the
Backup and Restore module. (You may need to ensure the server has API
keys for S3 access before doing this, as backups are stored in S3.)

## Status

*2017-06-01* - the initial version of the site has been running for
almost 2 years and hasn't really been updated in the time beyond a few
minor changes. The focus at the moment is now to make it easy and
reliable to deploy changes and facilate quicker iteration. As part of
this, we will migrate to Drupal 8, which has better configuration
management.

## Original brief

The current site does not do a good job of introducing the church: in
appearance it is middle-aged; functionally, it is not straightforward
to use.

The aim is to create a new site, which better says who we are and also
who we aspire to be. It should feel 'happy' and 'lively'. A
picture-led design will help here. It should be dynamic: we should
expect the homepage to change regularly; groups, for example the
Mission Group, should be able to manage their own sections of the
site.

The target audience is the informal, younger, comtemporary side of our
church-life. The expectation is that this is the group most likely to
use the web to find a church. In particular, we should target people
living in Clapham Park and Streatham as these areas (relatively) lack
churches which meet the needs of young people - contrast with Balham
which does have options here.

The website should also serve the existing congregation by
communicating our services, other events, and any other notices.

The website should also help those seeking to use the church
building(s) for community and/or commercial use. This may come at a
later stage though.

Above all, we want the website and our work on it to bring glory to
our Father who loves us, and to point to Jesus who showed us the way!

## Existing sites we like

[/docs/sites-we-like.md](/docs/sites-we-like.md)

## Colours and design

* clean
* picture-led
* suitable for our target audience
* the colour-palette should say 'family', 'warm', 'local'
* not necessarily using the existing church logo or colours - the
  'city-on-a-hill' motif from the new glass design might be more
  appropriate here

Ideas for images include:

* local signs (e.g. for the Clapham Park Estate)
* worship (either congregation, worship band, or both)
* sport/activity on the common (football, joggers, etc.)
* preaching
* local shops
* any iconic locations in the area

## Original budget

The budget is low/non-existent. The aim is to produce the site quickly
and cheaply (perhaps using a stock design of some sort). Nic Long has
agreed to lead on this on a voluntary basis.

The site is expected to last for a couple of years or so, at which
point we may have grown sufficiently to invest in a new website(!).
