//CSS PREFIX
var _ = 'new-prefix_';

var config = {
	//NEW CLASSES
	new_classes : [
	
		//404
		['site_tpl-404', _+'tpl-404'],
		['site_article-title', _+'article-title'],
		['site_article-text', _+'article-text'],
		
		//footer
		['site_footer', _+'footer'],
		['site_copyright', _+'copyright'],
		
		//header
		['site_header', _+'header'],
		['site_header__logo', _+'header__logo'],
		['site_header__phone', _+'header__phone'],
		['site_main', _+'main'],
		
		//home
		['site_tpl-blog', _+'tpl-blog'],
		['site_blog-pagination', _+'blog-pagination'],
		
		//content-accordion
		['site_content-accordion', _+'content-accordion'],
		['site_content-accordion__body', _+'content-accordion__body'],
		['site_content-accordion__header', _+'content-accordion__header'],
		['site_content-accordion__container', _+'content-accordion__container'],
		
		//counters
		['site_counters', _+'counters'],
		['site_counters__col', _+'counters__col'],
		['site_counters__item', _+'counters__item'],
		['site_counters__num', _+'counters__num'],
		['site_counters__text', _+'counters__text'],
		['site_counter', _+'counter'],
		
		//discount
		['site_discount', _+'discount'],
		['site_discount__title', _+'discount__title'],
		
		//guarantees
		['site_guarantees', _+'guarantees'],
		['site_guarantees__top-block', _+'guarantees__top-block'],
		['site_guarantees__top-img', _+'guarantees__top-img'],
		['site_guarantees__top-text', _+'guarantees__top-text'],
		['site_guarantees__items-wrap', _+'guarantees__items-wrap'],
		['site_guarantees__block-title', _+'guarantees__block-title'],
		['site_guarantees__item', _+'guarantees__item'],
		['site_guarantees__icon', _+'guarantees__icon'],
		['site_guarantees__desc', _+'guarantees__desc'],
		['site_guarantees__title', _+'guarantees__title'],
		['site_guarantees__text', _+'guarantees__text'],
		
		//guarantees-info
		['site_guarantees-info', _+'guarantees-info'],
		['site_guarantees-info__item', _+'guarantees-info__item'],
		['site_guarantees-info__icon', _+'guarantees-info__icon'],
		['site_guarantees-info__title', _+'guarantees-info__title'],
		['site_guarantees-info__text', _+'guarantees-info__text'],
		
		//order-steps
		['site_order-steps', _+'order-steps'],
		['site_order-steps__col', _+'order-steps__col'],
		['site_order-steps__item', _+'order-steps__item'],
		['site_order-steps__icon', _+'order-steps__icon'],
		['site_order-steps__text', _+'order-steps__text'],
		
		//prices-info
		['site_prices-info', _+'prices-info'],
		['site_prices-info__item', _+'prices-info__item'],
		['site_prices-info__icon', _+'prices-info__icon'],
		['site_prices-info__title', _+'prices-info__title'],
		['site_prices-info__text', _+'prices-info__text'],
		
		//samples
		['site_samples', _+'samples'],
		['site_samples__item', _+'samples__item'],
		['site_samples__link', _+'samples__link'],
		['site_samples__link-img', _+'samples__link-img'],
		['site_samples__link-text', _+'samples__link-text'],
		['site_samples__desc', _+'samples__desc'],
		['site_samples__title', _+'samples__title'],
		['site_samples__text', _+'samples__text'],
		
		//service-desc
		['site_service-desc', _+'service-desc'],
		['site_service-desc__wrap', _+'service-desc__wrap'],
		['site_service-desc__block', _+'service-desc__block'],
		['site_service-desc__title', _+'service-desc__title'],
		['site_service-desc__list', _+'service-desc__list'],
		['site_check-list', _+'check-list'],
		['site_service-desc__basic', _+'service-desc__basic'],
		['site_service-desc__basic-price-block', _+'service-desc__basic-price-block'],
		['site_service-desc__basic-text', _+'service-desc__basic-text'],
		['site_service-desc__basic-price', _+'service-desc__basic-price'],
		['site_service-desc__additional', _+'service-desc__additional'],
		['site_service-desc__additional-info', _+'service-desc__additional-info'],
		['site_service-desc__text', _+'service-desc__text'],
		['site_service-desc__price', _+'service-desc__price'],
		
		//services
		['site_services', _+'services'],
		['site_services__col', _+'services__col'],
		['site_services__item', _+'services__item'],
		['site_services__icon', _+'services__icon'],
		['site_services__title', _+'services__title'],
		['site_services__text', _+'services__text'],
		
		//services-tabs
		['site_services-tabs', _+'services-tabs'],
		['site_services-tabs__tablist', _+'services-tabs__tablist'],
		['site_services-tabs__tablist-item', _+'services-tabs__tablist-item'],
		['site_services-tabs__content', _+'services-tabs__content'],
		['site_services-tabs__content-item', _+'services-tabs__content-item'],
		['site_services-tabs__content-types', _+'services-tabs__content-types'],
		['site_services-tabs__content-subjects', _+'services-tabs__content-subjects'],
		['site_services-tabs__col', _+''],
		['site_services-tabs__wrap', _+''],
		['site_services-tabs__list-title', _+'services-tabs__list-title'],
		
		//services-slider
		['site_services-slider', _+'services-slider'],
		['site_services-slider__content', _+'services-slider__content'],
		['site_services-slider-1', _+'services-slider-1'],
		['site_services-slider-1__slide', _+'services-slider-1__slide'],
		['site_services-slider-1__image', _+'services-slider-1__image'],
		['site_services-slider-2', _+'services-slider-2'],
		['site_services-slider-2__slide', _+'services-slider-2__slide'],
		['site_services-slider-2__title', _+'services-slider-2__title'],
		['site_services-slider-2__text', _+'services-slider-2__text'],
		['site_services-slider-2__price', _+'services-slider-2__price'],
		['site_services-slider-2__img-text', _+'services-slider-2__img-text'],
		['site_services-slider__pagination', _+'services-slider__pagination'],
		
		//services-info
		['site_services-info', _+'services-info'],
		['site_services-info__item', _+'services-info__item'],
		['site_services-info__icon', _+'services-info__icon'],
		['site_services-info__title', _+'services-info__title'],
		
		//testimonials
		['site_testimonials', _+'testimonials'],
		['site_testimonials__content', _+'testimonials__content'],
		['site_testimonials__title', _+'testimonials__title'],
		['site_testimonials__text', _+'testimonials__text'],
		
		//top-slider
		['site_top-slider', _+'top-slider'],
		['site_top-slider__container', _+'top-slider__container'],
		['site_top-slider__slide', _+'top-slider__slide'],
		['site_top-slider__content', _+'top-slider__content'],
		['site_top-slider__title', _+'top-slider__title'],
		['site_top-slider__text', _+'top-slider__text'],
		
		//writers-slider
		['site_writers-slider', _+'writers-slider'],
		['site_writers-slider__container', _+'writers-slider__container'],
		['site_writers-slider__items-wrap', _+'writers-slider__items-wrap'],
		['site_writers-slider__slide', _+'writers-slider__slide'],
		['site_writers-slider__avatar', _+'writers-slider__avatar'],
		['site_writers-slider__data-list', _+'writers-slider__data-list'],
		['site_writers-slider__data', _+'writers-slider__data'],
		['site_writers-slider__label', _+'writers-slider__label'],
		['site_writers-slider__rating', _+'writers-slider__rating'],
		['site_writers-slider__value', _+'writers-slider__value'],
		['site_writers-slider__text', _+'writers-slider__text'],
		['site_writers-slider__nav', _+'writers-slider__nav'],
		['site_writers-slider__arrow', _+'writers-slider__arrow'],
		['site_writers-slider__arrow-next', _+'writers-slider__arrow-next'],
		['site_writers-slider__arrow-prev', _+'writers-slider__arrow-prev'],
		
		//tpl-index
		['site_tpl-index', _+'tpl-index'],
		['site_content', _+'content'],
		['site_tpl-blog-post', _+'tpl-blog-post'],
		
		//page-how-to-order
		['site_top-block', _+'top-block'],
		['site_top-block__title', _+'top-block__title'],
		['site_top-block__text', _+'top-block__text'],
		
		//prices
		['site_prices', _+'prices'],
		
		//writers-info
		['site_writers-info-1', _+'writers-info-1'],
		['site_writers-info-2', _+'writers-info-2']
	]
};

module.exports = config;