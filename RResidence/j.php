<?php
$button = array();
if('POST' === $_SERVER['REQUEST_METHOD']) {
    if(isset($_POST['items']) && is_array($_POST['items'])) {
        foreach($_POST['items'] as $item) {
            $items[] = $item;
        }
    }
}
?>
<html>
    <head>
        <title>Demo</title>
    </head>
    <body>
        <?php if($items): ?>
            <ul>
                <?php foreach($items as $item): ?>
                    <li><?php echo $item; ?></li>
                <?php endforeach; ?>
            </ul>
        <?php endif; ?>
        <form method="post">
            <input type="text" name="item" />
            <input type="submit" value="Add Item" />
            <?php if($items): ?>
                <?php foreach($items as $item): ?>
                    <input type="hidden" name="items[]" value="<?php echo $item; ?>" />
                <?php endforeach; ?>
            <?php endif; ?>
        </form>
    </body>
</html>