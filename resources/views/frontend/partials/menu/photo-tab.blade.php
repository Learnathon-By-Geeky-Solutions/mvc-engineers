<?php

$images = [
    (object)[
        'src' => 'assets/frontend/images/service/6.jpg',
        'alt' => '6'
    ],
    (object)[
        'src' => 'assets/frontend/images/service/7.jpg',
        'alt' => '7'
    ],
    (object)[
        'src' => 'assets/frontend/images/service/8.jpg',
        'alt' => '8'
    ],
    (object)[
        'src' => 'assets/frontend/images/service/9.jpg',
        'alt' => '9'
    ],
    (object)[
        'src' => 'assets/frontend/images/service/10.jpg',
        'alt' => '10'
    ],
    (object)[
        'src' => 'assets/frontend/images/service/11.jpg',
        'alt' => '11'
    ],
    (object)[
        'src' => 'assets/frontend/images/service/12.jpg',
        'alt' => '12'
    ],
    (object)[
        'src' => 'assets/frontend/images/service/13.jpg',
        'alt' => '13'
    ]
];
?>

<div class="tab-pane fade" id="photo" role="tabpanel" tabindex="0">
    <div class="photos-section ratio_landscape">
        <ul class="photos-list">
            <?php foreach ($images as $image): ?>
                <li>
                    <a href="<?php echo $image->src; ?>" data-fancybox="images" data-type="image">
                        <img class="img-fluid bg-img" src="<?php echo $image->src; ?>" alt="<?php echo $image->alt; ?>">
                    </a>
                </li>
            <?php endforeach; ?>
        </ul>
    </div>
</div>