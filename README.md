# Pimcore  Gitlab Login
Pimcore  plugin that allows to use Gitlab credentials to log into Pimcore's admin panel
# Features
  - Log into Pimcore's admin panel using your Gitlab account (and two-step verification!)
# Installation
```
composer require netfirms/pimcore-gitlab-login
```
After installation, go to Extensions in your Pimcore admin panel, click on configure. Fill up all the fields using data from Gitlab Access Control.

For redirect_uri use "http://yourdomain/plugin/GitlabLogin/index/index"

Make sure to set the same authorised redirect URI in Developers Console. Also authorise your domain as JS source.
