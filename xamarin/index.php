<?php 
    require('../common/utils.php');

    Utils::print_header(
        "Xamarin Posts",
        "Posts filed under Xamarin"
    );
?>

<div id="content">
    <h1>Xamarin Posts</h1>
    <table>
        <thead>
            <tr>
                <th class="post-header-date">Date</th>
                <th>Title</th>
            </tr>
        </thead>
        <tbody>
            <!-- Template -->
            <!-- 
            <tr>
                <td class="nowrap">YYYY-MM-DD</td>
                <td><a href="/CATEGORY/POST-SLUG/">POST TITLE</a></td>                
            </tr>
            -->
            <tr>
                <td class="nowrap">2019-07-13</td>
                <td><a href="/xamarin/ios-sqlite-database/">How to Find the iOS Simulator's Database</a></td>                
            </tr>
        </tbody>
    </table>
</div>

<?php require('../common/footer.php'); ?>