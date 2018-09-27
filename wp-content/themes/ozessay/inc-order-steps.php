<?php
$template_path = get_bloginfo('template_url');
$steps = [
    [
        'icon' => $template_path . '/img/icon-clipboard.png',
        'img' => $template_path . '/img/order-steps/order-steps_1.svg',
        'text' => 'Leave us your order request',
    ],
    [
        'icon' => $template_path . '/img/icon-chat.png',
        'img' => $template_path . '/img/order-steps/order-steps_2.svg',
        'text' => 'We will reach out to you to verify the details',
    ],
    [

        'icon' => $template_path . '/img/icon-edit.png',
        'img' => $template_path . '/img/order-steps/order-steps_3.svg',
        'text' => 'Once the order is approved it gets into our system and we assign a writer who will finish your paper on time',
    ],
    [
        'icon' => $template_path . '/img/icon-download.png',
        'img' => $template_path . '/img/order-steps/order-steps_4.svg',
        'text' => 'You get a completed project hassle free',
    ],
];
?>

<!--ORDER-STEPS-->
<section id="order_steps" class="site_order-steps">
	<?php if (!is_page('how-to-order')) : ?>
		<div class="section-title">
			<div class="container">How simple and easy make an order</div>
		</div>
	<?php endif; ?>
	<div class="container">
		<div class="row">
			<?php foreach ($steps as $item): ?>
				<div class="col-sm-3 site_order-steps__col-<?php echo ++$k; ?>">
					<div class="site_order-steps__item">
						<div class="site_order-steps__icon"><img src="<?php echo $item['icon']; ?>"/></div>
        				<div class="site_order-steps__text"><img src="<?php echo $item['img']; ?>"/></div>
                        <!--<div class="site_order-steps__text">--><?php //echo $item['text']; ?><!--</div>-->
					</div>
				</div>
			<?php endforeach; ?>
		</div>
	</div>
</section>