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

<div class="menu container">
    <ul>
        <li>
            <img src="common/images/logo.png" alt="tele"/>
        </li>
        <?php foreach ($menus as $menu) { ?>
            <li class="item">
                <a href="<?php $menu['title'] ?>">
                    <?php echo $menu['title'] ?></a>
            </li>
        <?php } ?>
        <li>
            <button>PRODUKTSUCHE</button>
        </li>
        <li>
            <img src="common/images/search.svg" alt="search"/>
        </li>
        <li>
            <a href="">
                <img src="common/images/hamburger.svg" alt="hamburger"/>
            </a>
        </li>
    </ul>
</div>