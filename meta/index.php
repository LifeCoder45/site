<?php 
    require('../common/utils.php');

    Utils::print_header(
        "Meta Posts",
        "Posts filed under Meta"
    );
?>

<div id="content">
    <h1>Meta Posts</h1>
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
                <td class="nowrap">2019-01-29</td>
                <td><a href="/meta/why-now/">Why Now?</a></td>                
            </tr>
        </tbody>
    </table>
</div>

<?php require('../common/footer.php'); ?>