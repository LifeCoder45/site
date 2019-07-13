<?php 
    require('../../common/utils.php');

    Utils::print_header(
        "How to Find the iOS Simulator's Database",
        "How to Find the iOS Simulator's Database - With Xamarin"
    );
?>

<div id="content">
    <p id="post-datetime">
        July 8th, 2019
    </p>
    <p id="post-category">
        ↳ <a href="/xamarin/">Xamarin</a>
    </p>
    <h1>How to Find the iOS Simulator's Database</h1>
    <p>
        When using CoreData in iOS, or manually using SQLite, sometimes it helps to be able to connect to your application's database with a browser, such as <a href="https://www.navicat.com/en/products/navicat-for-sqlite">Navicat</a>.
        <br /><br />        
        It can be tricky to find the file's location, since each iOS simulator, and each application installed to each simulator, have their own randomly generated UUID-named directory.
        <br /><br />
        However, with a short bit of code, we can get the location of each app, at runtime.
    </p>
    <p>
        If you already have an application, great! If not, you can use this <a href="https://developer.xamarin.com/samples/monotouch/ThreadedCoreData/">Xamarin sample</a>, which features CoreData.
    </p>
    <hr />
    <p>
        To get started, let's add a simple logging method, and invoke it when the application launches.
        <br /><br />
        Simply open the <code>AppDelegate.cs</code> file, which should be located in the root of your iOS project, and add <code>LogDocumentDirectory</code>.
        <br /><br />
        Then, call it from <code>FinishedLaunching</code>. You may need to implement this method, if it's not already stubbed out.
    </p>
    <pre>
private void LogDocumentDirectory()
{
    var documentUrls = NSFileManager.DefaultManager.GetUrls(
        NSSearchPathDirectory.DocumentDirectory,
        NSSearchPathDomain.User
    );

    var documentDirectory = documentUrls.FirstOrDefault()?.ToString()?.Replace(
        "file://",
        string.Empty
    );

    Console.WriteLine($"Document directory: {documentDirectory}");
}

public override bool FinishedLaunching(UIApplication application, NSDictionary launchOptions)
{        
    LogDocumentDirectory();
    
    // your existing code, possibly

    return true;
}</pre>
    <p>
        When you run your app, you should see output similar to mine, with a different User directory (probably), and different
    </p>
    <pre>
# line breaks added for legibility        
Document directory: /Users/josh/Library/Developer/CoreSimulator/Devices ⏎
                    /4A2368D0-398A-4C0C-975A-10F780D50930/data/Containers/Data ⏎
                    /Application/CB697916-52D3-4C0D-B787-D406121BC4B4/Documents/</pre>
    <p>
        To use that path via Finder, first open a window:
    </p>
    <img class="post-image" src="/xamarin/ios-sqlite-database/1.png" height="360" />
    <p>
        Then, open the "Go to Location" UI, with ⌘+⇧+G (Command+Shift+G):
    </p>
    <img class="post-image" src="/xamarin/ios-sqlite-database/2.png" height="360" />
    <p>
        Paste in the path from the earlier Application Output, and choose "Go", and you should see your SQLite file:
    </p>
    <img class="post-image" src="/xamarin/ios-sqlite-database/3.png" height="360" />
    <hr />
    <p>
        If you'd prefer to use the Terminal (or even better, <a href="https://iterm2.com/">iTerm2</a>), just launch and <code>cd</code> into it.
        <br /><br />
        From there, you can use <code>$ open .</code> to launch a Finder window, or use <code>sqlite3</code> to query your database:
    </p>
    <img class="post-image" src="/xamarin/ios-sqlite-database/4.png" height="480" />
    <hr />
    <p>
        That's all it takes to find your app's database location.
        <br /><br />
        Of course, this will work in Swift, if your application is being written natively!
        <br /><br />
        Thanks for reading, I hope to see you again!
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