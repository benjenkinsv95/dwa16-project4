# Text2Phonetics Engine

## Live URL
<http://p4.ben-jenkins.com>

## Planning Doc URL
<https://docs.google.com/document/d/1R4U7Ht8jzItDFMDV64tzfGA-cBNQQKwJKKkQl2N2lg4/edit?usp=sharing>

## Description
This site is dedicated to cataloging and building phonetic pronunciations for the Acapela Group text-to-speech voices.

Users can view, edit, and create pronunciations for a voice, then try playing them back with the [Acapela Speech Demo](https://acapela-box.com/AcaBox/index.php).


## Demo URL [TODO]


## CRUD Operations
* Create: http://p4.ben-jenkins.com/pronunciations/create
* Read: http://p4.ben-jenkins.com/pronunciations/1
* Update: http://p4.ben-jenkins.com/pronunciations/1/edit
* Delete: http://p4.ben-jenkins.com/pronunciations (Click any of the delete buttons here)

## Details for teaching team
My GitHub project has an *.idea* folder and a *p4.iml* file committed. These are configuration files for the IDE I use, IntelliJ IDEA, and are not outside code.

My authentication uses BDD and closely follows this tutorial: https://laracasts.com/lessons/laravel-5-and-behat-driving-authentication


## Outside code
* Bootstrap: http://getbootstrap.com/
* Bootstrap Journal Theme: http://bootswatch.com/journal/
* JQuery (Used by Bootstrap): https://jquery.com/
* Font-Awesome (An icon format): http://fontawesome.io/

### Composer Packages
#### Laravel
* "php": ">=5.6.4",
* "laravel/framework": "5.3.*",
* "mockery/mockery": "0.9.*",
* "phpunit/phpunit": "~5.0",
* "symfony/css-selector": "3.1.*",
* "symfony/dom-crawler": "3.1.*"

#### Project-specific
* "barryvdh/laravel-debugbar": "^2.3": Used for debugging on local setup. 
* "rap2hpoutre/laravel-log-viewer": "^0.7.0": Used for easier log viewing.
* "fadion/rule": "^1.1": Used to create validation with a builder, instead of a string. I find it easier to understand and appreciate the IDEs ability to autosuggest what rules are available.
* "laracasts/generators": "^1.1": Added extra generators to php artisan
##### Behat/BDD Specific (All used for driving my authentication with Behat)
"behat/behat": "^3.2",
"behat/mink": "^1.7",
"behat/mink-extension": "^2.2",
"laracasts/behat-laravel-extension": "^1.0"

    