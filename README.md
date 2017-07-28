# STwSS website

Files for STwSS website. Runs on Drupal (7).

## Local development

You'll need:

* a LAMP stack running locally
* a recent database dump (ask for this)

Theme (styling and layout) files are found under:

    sites/all/themes/stwss

The theme is custom but based off a Bootstrap starter kit.

## Deployment

Amazon's CodeDeploy is used for deployment. Anything merged into the
master branch will be automatically deployed to production.

The master branch is protected to disable force pushing. You'll need
to raise a PR to make any changes.

To test on our staging environment, push to the `stage` branch.

### How do I push a feature that requires database changes?

One way is to re-apply config changes on production once code has been
pushed. This is a bit tedious though and also error prone.

A better way is to bundle up config and content changes into
'features' using the
[Features module](https://www.drupal.org/project/features). Features
are stored as code which can then be enabled on production.
