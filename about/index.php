<?php 
    require('../common/utils.php');

    Utils::print_header(
        "About",
        "About Josh O'Neal and Develop Everything"
    );
?>

<div id="content">
    <h2>A bit about myself</h2>
    <p>
        My name is Josh O'Neal, and I'm a Senior Software Architect.
        <br /><br />
        I've been developing software since around 2008, starting with PHP, then making my way over to mobile when iOS and Android were fresh young platforms.
        <br /><br />
        From there, Xamarin caught my eye, and I used and evanglized it heavily, getting Xamarin Certified, attending Evolve, and so on. For business workflow applications, I still believe it's fantastic.
        <br /><br />
        Right now, professionally, I work for Nutrien (formerly Agrible), creating backend architecture using Django, which is a fantastic web framework.
        <br /><br />
        I've also recently finally put in the time to learn Swift, and am currently working on learning Unity 2D - I think it'd be awesome to start writing some little games.
        <br /><br />
        Speaking of games, my degree is <i>technically</i> in 3D Graphics Programming, but I've never used it professionally. I also collect video games, especially older boxed ones. In the future, I may write about my modest collection, for now, it's cataloged here on <a href="https://www.completionator.com/Community/Profile/11804">Completionator</a>.
        <br /><br />
    </p> 
    
    <h2>Why does this site look <i>old</i>?</h2>
    <p>
        Maybe "old" is the wrong word, but this site is definitely not what is being mass produced here in 2019. My goal is for it to be extremely simple, very light, and blazing fast. It has no Javascript libraries, isn't a single page app, and has no backing database.
        <br /><br />
        I guess it does use <a href="http://vanilla-js.com/">vanilla-js</a>, but only for analytics, which run through <a href="https://simpleanalytics.io/">Simple Analytics</a>, <i>not</i> Google Analytics.
        <br /><br />
        I was heavily inspired by Fabien Sanglard's <a href="https://fabiensanglard.net/bloated/index.html">fantastic post</a> on the sad state of our web, how it is so bloated and unfriendly to the end user, so those themes were on my mind while I built this out. I also, like most devs, enjoy reading <a href="https://news.ycombinator.com/news">Hacker News</a>, appreciating their simple layout tremendously.
        <br /><br />
    </p>

    <h2>What will I write about?</h2>
    <p>
        I plan on writing about everything, really. Mostly relating to various development topics (hence the title - Develop Everything).
        <br /><br />
        Since I'm currently doing Django for work, and Unity for fun, I expect the topics will be concentrated on those subjects, at least initially. Some mathematics and mobile development will no doubt sneak in though. And probably some PostgreSQL query stuff.
        <br /><br />
    </p>    
</div>

<?php Utils::print_footer(); ?>