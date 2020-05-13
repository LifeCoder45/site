<?php 
    require('common/utils.php');

    Utils::print_header(
        "Develop Everything",
        "The Personal Site of Josh O'Neal"
    );
?>

<div id="content">
    <h1>Posts</h1>
    <table>
        <thead>
            <tr>
                <th class="post-header-date">Date</th>
                <th class="post-header-category">Category</th>
                <th>Title</th>
            </tr>
        </thead>
        <tbody>
            <!-- Template -->
            <!-- 
            <tr>
                <td class="nowrap">YYYY-MM-DD</td>
                <td class="nowrap"><a href="/CATEGORY/">CATEGORY</a></td>
                <td><a href="/CATEGORY/POST-SLUG/">POST TITLE</a></td>                
            </tr>
            -->
            <tr>
                <td class="nowrap">2020-05-13</td>
                <td class="nowrap"><a href="/elixir/">Elixir</a></td>
                <td><a href="/elixir/why-elixir/">Why Elixir</a></td>                
            </tr>
            <tr>
                <td class="nowrap">2019-07-13</td>
                <td class="nowrap"><a href="/xamarin/">Xamarin</a></td>
                <td><a href="/xamarin/ios-sqlite-database/">How to Find the iOS Simulator's Database</a></td>                
            </tr>
            <tr>
                <td class="nowrap">2019-01-29</td>
                <td class="nowrap"><a href="/meta/">Meta</a></td>
                <td><a href="/meta/why-now/">Why Now?</a></td>                
            </tr>
        </tbody>
    </table>
</div>

<?php Utils::print_footer(); ?>