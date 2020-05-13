<?php 
    require('../common/utils.php');

    Utils::print_header(
        "Elixir Posts",
        "Posts filed under Elixir"
    );
?>

<div id="content">
    <h1>Elixir Posts</h1>
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
                <td class="nowrap">2020-05-13</td>
                <td><a href="/elixir/why-elixir/">Why Elixir</a></td>                
            </tr>
        </tbody>
    </table>
</div>

<?php require('../common/footer.php'); ?>