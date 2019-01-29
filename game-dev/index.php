<?php 
    require('../common/utils.php');

    Utils::print_header(
        "Game Development Resources",
        "Various resources useful for game developers"
    );
?>

<div id="content">
    <h1>Game Development Resources</h1>
    <p>
        In December of 2018 I decided to begin learning game development, one of the last "normal" areas of software development that I've not worked with.
    </p>
    <p>
        As I began working through <a href="https://www.udemy.com/unitycourse/" target="_blank">a fantastic Unity course on Udemy</a>, I began visiting websites and Subreddits I'd never been to, and collecting links which contained valuable information.
    </p>
    <p>
        I will be maintaining and sharing that list here, in the hopes that it may bring value to another other fresh developers.
    </p>    
    <br />

    <!-- Template -->
    <!--
    <div class="resource-list-item">
        <a href="SITE">SITE</a>
          
        <p>
            TEXT
        </p>
    </div>
    -->

    <h2>Genre-Specific</h2>
    <div class="resource-list-item">
        <a href="https://shmups.system11.org/viewforum.php?f=9">https://shmups.system11.org/viewforum.php?f=9</a>          
        <p>
            The Development board of a forum dedicated to SHMUP (Shoot em up) style games, one of my favorite genres.
        </p>
    </div>
    <br />
    
    <h2>Daily Websites</h2>
    <div class="resource-list-item">
        <a href="http://www.gamasutra.com/">http://www.gamasutra.com/</a>
        <p>
            All kinds of news about the professional game industry.
        </p>
    </div>        
    <div class="resource-list-item">
        <a href="http://indiegamesplus.com/">http://indiegamesplus.com/</a>
        <p>
            Indie game news.
        </p>
    </div>
    <div class="resource-list-item">
        <a href="http://gamecareerguide.com/">http://gamecareerguide.com/</a>
        <p>
            Development retrospectives, probably other stuff.
        </p>
    </div>  
    <div class="resource-list-item">
        <a href="https://old.reddit.com/r/IndieGaming+PixelArt+Unity2D+Unity3D+gamedev/">https://old.reddit.com/r/IndieGaming+PixelArt+Unity2D+Unity3D+gamedev/</a>
        <p>
            A multi-Subreddit for various game dev related Subreddits.
        </p>
    </div>              
    <br />

    <h2>Mathematics</h2>
    <div class="resource-list-item">
        <a href="https://www.youtube.com/user/numberphile">https://www.youtube.com/user/numberphile</a>
        <p>
            numberphile is supposed to be a great YouTuber for learning various math topics. 
            <br /><br />
            Relevant to this list, I've read that the <a href="https://www.youtube.com/watch?v=3BR8tK-LuB0">video</a> on <a href="https://en.wikipedia.org/wiki/Quaternion">quaternions</a> is great.
        </p>
    </div>
    <div class="resource-list-item">
        <a href="https://www.youtube.com/channel/UC1_uAIS3r8Vu6JjXWvastJg">https://www.youtube.com/channel/UC1_uAIS3r8Vu6JjXWvastJg</a>
        <p>
            Mathologer, another YouTuber that I've seen mentioned on Reddit, people seemed to react very positively to their videos.
        </p>
    </div>
    <div class="resource-list-item">
        <a href="https://weeklycoder.com/2015/07/22/the-incredibly-useful-sine-waves-part-1-trigonometry-game-dev-primer/">https://weeklycoder.com/2015/07/22/the-incredibly-useful-sine-waves-part-1-trigonometry-game-dev-primer/</a>
        <p>
            A primer on trigonometry for game development.
        </p>
    </div>
    <br />

    <h2>Assets</h2>
    <div class="resource-list-item">
        <a href="https://opengameart.org/">https://opengameart.org/</a>
        <p>
            All kinds of free assets, from sound to graphics.
        </p>
    </div>
    <div class="resource-list-item">
        <a href="https://kenney.nl/">https://kenney.nl/</a>
        <p>
            I'm not sure who Kenny is, but he has a ton of great free stuff on his site, which we used in the Unity 2D course to prototype.
        </p>
    </div>        
    <div class="resource-list-item">
        <a href="https://www.dafont.com/">https://www.dafont.com/</a>
        <p>
            All kinds of fonts, to use especially with <a href="https://assetstore.unity.com/packages/essentials/beta-projects/textmesh-pro-84126">TextMesh Pro</a> in Unity.
        </p>
    </div>        
    <br />
    
    <h2>Tutorials</h2>
    <div class="resource-list-item">
        <a href="https://handmadehero.org/">https://handmadehero.org/</a>
        <p>
            Handmade Hero is "an ongoing project to create a complete, professional-quality game accompanied by videos that explain every single line of its source code."
            <br /><br />
            This seems interesting due to the nature of it being the entire source for a completed game, a theme common in some of this items.
        </p>
    </div>
    <div class="resource-list-item">
        <a href="http://www.maizure.org/projects/lets-make-dangerous-dave/index.html">http://www.maizure.org/projects/lets-make-dangerous-dave/index.html</a>
        <p>
            Build <a href="https://en.wikipedia.org/wiki/Dangerous_Dave">Dangerous Dave</a> from scratch. 
            <br /><br />
            While I've never played Dangerous Dave, I've read about it, and John Romero, in the fantastic book <a href="https://www.amazon.com/Masters-Doom-Created-Transformed-Culture/dp/0812972155">Masters of Doom</a>.
        </p>
    </div>
    <br />

    <h2>Other Articles & Papers</h2>
    <div class="resource-list-item">
        <a href="https://macsphere.mcmaster.ca/bitstream/11375/16048/1/thesis.pdf">https://macsphere.mcmaster.ca/bitstream/11375/16048/1/thesis.pdf</a>
        <p>
            A paper title "MAKU: A Code Generator for Bullet Hell Games".
            <br /><br />
            While bullet hell is not my favorite SHMUP sub-genre, this could be an interesting read.
        </p>
    </div>
    <br />
    
</div>

<?php Utils::print_footer(); ?>