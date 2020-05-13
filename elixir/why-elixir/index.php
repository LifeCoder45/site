<?php 
    require('../../common/utils.php');

    Utils::print_header(
        "Why Elixir?",
        "Why Elixir? - Discussing the decision to learn yet another language."
    );
?>

<div id="content">
    <p id="post-datetime">
        May 13th, 2019
    </p>
    <p id="post-category">
        ↳ <a href="/elixir/">Elixir</a>
    </p>
    <h1>Why Elixir?</h1>
    <p>
        For the past year or so, I've dabbled in Elixir. I had heard of the language by name, but that was really it. Some time last year though, I came across a post discussing companies using Elixir, and how it was built to run in the Erlang VM, BEAM. Both of these concepts were also foreign to me, but after some research, and seeing how insanely performant and scalable they can be, I was very intrigued.
    </p>
    <p>
        <a href="https://www.erlang-solutions.com/blog/which-companies-are-using-elixir-and-why-mytopdogstatus.html">This post</a> by Erlang Solutions was a real eye opener. I couldn't believe that Discord and Pinterest were using the tech to such success, yet I'd never really heard of it. <a href="https://www.phoenixframework.org/blog/the-road-to-2-million-websocket-connections">This post</a> discusses the ability to scale Phoenix to <b>2 Million</b> connections on a single box (40core/128gb). That is some insane scalability.
    </p>
    <p>
        Throughout my career, I've dabbled in functional languages, primarily F#, as I have done a ton of C# development, so it was kind of natural. Of course I've played with Haskell as well, as all curious developers do. But, both of these never quite clicked for me. F# is really nice, but it's so close to C# land via .NET, that it still felt like you had to make a lot of sacrifices, mixing in a bunch of imperative techniques. And Haskell just felt a bit too academic to try to push in an enterprise setting.
    </p>
    <p>
        When I saw the Elixir syntax, it felt extremely familiar and welcoming, something other functional languages I've explored over the years did not offer. At the time of writing, I'm employed writing Python & Django, and if I dare, I'd say it felt very Python-y. Not in the structure of the language (keywords, formatting, etc) per say, but more in that it was very elegant to read, and intuitive to pick up.
    </p>
    <p>
        Another big draw to me was Phoenix itself, speaking of Django. I love having a nice framework when I do backend code, and it's quite hard to top Django. Paired with <a href="https://www.django-rest-framework.org/">Django REST Framework</a>, it may be impossible! Phoenix is very easy to jump into, the Plugs make total sense. I will say that Ecto is neat, but doesn't remotely compare to what the Django ORM offers. Really, that fact combined with the lack of an auto-generated Admin view is the biggest Phoenix negative to me, at this point.
    </p>
    <p>
        That said, Phoenix has some incredible stuff. I haven't played with it yet, but LiveView looks fantastic. And, Channels and Presence are jaw dropping.
    </p>
    <p>
        I think what struck me the most is how scalable and safe this stack appears to be. I love REST, I know it's going to be here for a long time still, but I also see Websockets really starting to surge. So many applications now have online user lists, or are "live" single page apps, relying heavily on many small network requests. I think this is the new frontier of backend development, as I felt mobile was the new world of client development, when iOS was announced.
    </p>
    <p>
        I intend to update this site a bit more frequently, sharing whatever cool Elixir things I learn, as I learn them. I've also set up a resources list <a href="/elixir-dev/">here</a>, and will continue to update it.
    </p>
    <p>
        Apologies if this post was a bit rambly, it was a long time coming, and I finally got a chance to just rough it out!
    </p>
    <p>
        - Josh
    </p>
</div>

<!-- 
    - fabien site
    - learning unity, want to share
    - more of personal site
    - have had blogs over years
-->

<?php require('../../common/footer.php'); ?>