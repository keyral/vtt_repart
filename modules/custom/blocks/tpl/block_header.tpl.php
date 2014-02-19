<?php
/**
 * @file
 * Returns the HTML for a block.
 */
?>
<div id="header">
    <div id="header_in">

        <h1><a href="<?php print url('<front>');?>"><?php print variable_get('site_name', 'Site Name'); ?></a></h1>

        <div id="menu">
            <?php if (isset($items)): ?>
                <ul>
                    <?php foreach ($items as $item): ?>
                        <li>
                            <a href="<?php print $item['href']; ?>" class="<?php print $item['class']; ?>">
                                <?php print $item['title']; ?>
                            </a>
                        </li>
                    <?php endforeach; ?>
                </ul>
            <?php endif; ?>
        </div>

    </div>
    <div id="header_background"></div>
</div>