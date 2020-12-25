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

<div class="menu">
    <ul>
        <li>
            <img src="common/images/logo.png" alt="tele"/>
        </li>
        <?php foreach ($menus as $menu) { ?>
            <li class="item">
                <a href="#">
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
            <a href="" class="hamburger">
                <img src="common/images/hamburger.svg" alt="hamburger"/>
            </a>
        </li>
    </ul>
</div>

<div class="mobile-menu">
    <a href="" class="close">
        <svg xmlns="http://www.w3.org/2000/svg" width="27.579" height="27.578" viewBox="0 0 27.579 27.578">
            <g transform="translate(-1754.71 -16.21)">
                <rect id="Rectangle_125" width="33" height="6" transform="translate(1754.71 39.545) rotate(-45)"
                      fill="#d00000" opacity="0.504"/>
                <rect id="Rectangle_126" width="33" height="6" transform="translate(1758.954 16.211) rotate(45)"
                      fill="#d00000" opacity="0.504"/>
            </g>
        </svg>
    </a>
    <ul>
        <li>
            <img src="common/images/logo.png" alt="tele"/>
        </li>
        <?php foreach ($menus as $menu) { ?>
            <li class="item">
                <a href="#">
                    <?php echo $menu['title'] ?></a>
            </li>
        <?php } ?>
    </ul>
</div>
