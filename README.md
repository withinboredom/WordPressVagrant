A Wordpress Development Box Ready to Eat
========================================

A Vagrant WordPress Setup for immediate use in PhpStorm.

Also installs mailcatcher, a system to intercept mail and viewable in the webbrowser. If using the recommended plugins below, simply go to http://test.com:1080

Wordpress can be accessed at http://test.com/src/

What is installed?
==================

* mailcatcher
* xdebug
* MySql
* Apache
* PHP 5.4


Recommended Vagrant Plugins
===========================

vagrant plugin install vagrant-cachier

  Caches installation packages on the host.

vagrant plugin install vagrant-hostsupdater

  updates your host file automatically
  
vagrant plugin install vagrant-vbguest

  Updates virtualbox guest additions on boot, if they are out of date

Getting Started
===============

Clone the repository and install Vagrant and the recommended vagrant plugins. Then just type:
vagrant up
