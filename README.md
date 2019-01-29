This is the source code for my [personal site](http://joshoneal.me/).

I have been inspired by Fabien Sanglard's [fantastic post](https://fabiensanglard.net/bloated/index.html) on super fast, non-bloated websites, and have decided to revive my site for the 3rd or 4th time.

To stay blazing fast, I will not be using any CMS or platform, just handrolling all of the content in VS Code, after accumulating ideas in my Evernote scratch pad.

At least initially I'll be using no database for this, and no required Javascript on the front end. I think the only thing that may make me change that approach is if maintaining the category listing pages and the Atom feed file (coming eventually) is too painful.

For analytics, I'll be trying out [Simple Analytics](https://simpleanalytics.io/), which is paid, but proclaims "I'm a solo developer who wants to build an actual privacy-first product. I'm very grateful to my users, who are making this possible. Thank you!". I hope my visitors are alright with this option over the more questionable Google Analytics, understanding that I'd like to get some traffic metrics. Anyone who is already blocking Javascript should be able to circumvent it just fine though, and still have a great experience.

I am using PHP solely to include a common header and footer (it's probably the first PHP I've written in almost a decade, and it's enabled by default on my host that I have had for years). I initially tried to get away with copy-pasting entire index.html file for each page, and that got pretty nasty pretty quickly, as we all knew it would.

The structure of my various pages is simply:

```
# site root
~/site

# contains header.php & footer.php
~/site/common/

# a page, includes an index.php, and optionally files/*, for that page
~/site/contact/
```

An example page looking roughly like:

```
# ~/site/sample-page/index.php

<?php require('../common/header.php') ?>

<div id="content">
    <h1>Sample Page</h1>
    <p>
        TODO
    </p> 
</div>

<?php require('../common/footer.php') ?>
```