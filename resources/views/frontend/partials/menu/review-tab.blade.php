<?php

$reviews = [
    (object)[
        'image' => 'assets/frontend/images/icons/p1.png',
        'alt' => 'p1',
        'reviewerName' => 'Gunjan Puri',
        'rating' => 5,
        'timeAgo' => '1 month ago',
        'title' => 'Wonderful Experience...!!',
        'content' => 'Serve a healthy and good food. Having a parking facility and there are also waiting area available. These place is perfect for Celebration of birthday. Serve a healthy and good food. Having a parking facility and there are also waiting area available.'
    ],
    (object)[
        'image' => 'assets/frontend/images/icons/p2.png',
        'alt' => 'p2',
        'reviewerName' => 'Gunjan Puri',
        'rating' => 5,
        'timeAgo' => '1 month ago',
        'title' => 'Wonderful Experience...!!',
        'content' => 'Serve a healthy and good food. Having a parking facility and there are also waiting area available. These place is perfect for Celebration of birthday. Serve a healthy and good food. Having a parking facility and there are also waiting area available.'
    ],
    (object)[
        'image' => 'assets/frontend/images/icons/p5.png',
        'alt' => 'p5',
        'reviewerName' => 'Gunjan Puri',
        'rating' => 5,
        'timeAgo' => '1 month ago',
        'title' => 'Wonderful Experience...!!',
        'content' => 'Serve a healthy and good food. Having a parking facility and there are also waiting area available. These place is perfect for Celebration of birthday. Serve a healthy and good food. Having a parking facility and there are also waiting area available.'
    ],
    (object)[
        'image' => 'assets/frontend/images/icons/p4.png',
        'alt' => 'p4',
        'reviewerName' => 'Gunjan Puri',
        'rating' => 5,
        'timeAgo' => '1 month ago',
        'title' => 'Wonderful Experience...!!',
        'content' => 'Serve a healthy and good food. Having a parking facility and there are also waiting area available. These place is perfect for Celebration of birthday. Serve a healthy and good food. Having a parking facility and there are also waiting area available.'
    ]
];

function generateRatingStars($rating) {
    $stars = '';
    for ($i = 0; $i < $rating; $i++) {
        $stars .= '<li><i class="ri-star-fill star"></i></li>';
    }
    return $stars;
}
?>

<div class="tab-pane fade" id="review" role="tabpanel" tabindex="0">
    <div class="review-section">
        <ul class="review-box-list">

            <?php foreach ($reviews as $review): ?>
                <li>
                    <div class="review-box">
                        <div class="review-head">
                            <div class="review-image">
                                <img class="img-fluid img" src="<?php echo $review->image; ?>" alt="<?php echo $review->alt; ?>">
                            </div>
                            <div class="d-flex align-sm-items-center justify-content-between w-100">
                                <div>
                                    <h6 class="reviewer-name"><?php echo $review->reviewerName; ?></h6>
                                    <ul class="rating-star">
                                        <li><i class="ri-star-fill star"></i></li>
                                        <?php echo generateRatingStars($review->rating) ?>
                                    </ul>
                                </div>
                                <div>
                                    <h6><?php echo $review->timeAgo; ?></h6>
                                </div>
                            </div>
                        </div>
                        <div class="review-content">
                            <h6><?php echo $review->title; ?></h6>
                            <p><?php echo $review->content; ?></p>
                        </div>
                    </div>
                </li>
            <?php endforeach; ?>
        </ul>
    </div>
</div>