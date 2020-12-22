<div class="menu">
    <div class="logo">
        <img src="common/images/logo.png" alt="tele"/>
    </div>
    <?php $menus = [
        [
            'title' => "Product & Lösungen",
            'url' => "productand_loesungen"
        ],
        [
            'title' => 'EMS',
            'url' => "ems"
        ],
        [
            'title' => "Service & Support",
            'url' => "service_and_support"
        ],
        [
            'title' => "Über Tele",
            'url' => "ueber_tele"
        ]
    ];
    ?>
    <div class="menu-item">
        <ul>
            <?php foreach ($menus as $menu) { ?>
                <li class="item">
                    <a href="<?php $menu['title'] ?>">
                        <?php echo $menu['title'] ?></a></li>
            <?php } ?>
        </ul>
    </div>

</div>