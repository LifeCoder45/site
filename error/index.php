<?php 
    require('../common/utils.php');

    Utils::print_header(
        "Uh-Oh!",
        "An error page - something broke.."
    );
?>

<div id="content">
    <h1>Uh-Oh!</h1>
    <p>
        Something broke, is missing, or is very unhappy.
    </p> 
</div>

<?php Utils::print_footer(); ?>