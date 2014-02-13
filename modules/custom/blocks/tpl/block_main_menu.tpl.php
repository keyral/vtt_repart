<?php
/**
 * @file
 * Returns the HTML for a block.
 * 
 */
?>

<?php if (isset($items)): ?>
    <ul id="menu-main-menu">
        <?php foreach($items as $item): ?>
        <li class="menu-item">
            <a href="<?php print $item['href']; ?>">
                <?php print $item['title']; ?>
            </a>
        </li>
        <?php endforeach; ?>
    </ul>    
<?php endif; ?>


