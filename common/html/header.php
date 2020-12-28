<?php
$headers = [
    [
        'title' => 'EMS-FERTIGUNG',
        'text' => 'Entlang Der gesamten wertschöpfungskette von elektronikentwicklung über-producktion bis logistik',
        'image' => 'common/images/header.jpg',
        'link'=> '#'
    ],
    [
        'title' => 'EMS-FERTIGUNG',
        'text' => 'Entlang Der gesamten wertschöpfungskette von elektronikentwicklung über-producktion bis logistik',
        'image' => 'common/images/header.jpg',
        'link'=> '#'
    ],
    [
        'title' => 'EMS-FERTIGUNG',
        'text' => 'Entlang Der gesamten wertschöpfungskette von elektronikentwicklung über-producktion bis logistik',
        'image' => 'common/images/header.jpg',
        'link'=> '#'
    ]
]
?>

<div class="header">
    <div class="swiper-container">
        <div class="swiper-wrapper">
            <?php foreach ($headers as $key => $header) { ?>
                <div class="swiper-slide">
                    <img src="<?php echo $header['image'] ?>" alt="header_<?php echo $key ?>" class="swiper-lazy"/>
                    <div class="swiper-lazy-preloader"></div>
                    <div class="slider-text">
                        <h1><?php echo $header['title'] ?></h1>
                        <p><?php echo $header['text'] ?> </p>
                        <a class="btn" href="<?php $header['link'] ?>">Mehr Erfahren</a>
                        <div class="swiper-button-next"></div>
                        <div class="swiper-button-prev"></div>
                    </div>
                </div>
            <?php } ?>
        </div>
        <!-- Add Scrollbar -->
        <div class="swiper-scrollbar"></div>
        <!-- Add Pagination -->
        <div class="swiper-pagination"></div>

    </div>


</div>