<?php require_once('../config.php'); ?>
<?php
if (isset($_GET['id'])) {
$id = $_GET['id'];
}
?>
<!DOCTYPE html>
<html class='ltr' dir='ltr' lang='vi'>

<head>
  <title>Hồ Sơ Uy Tín</title>
<meta content='width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=5' name='viewport'/>
<!-- DNS-Prefetch -->
<link rel="apple-touch-icon" sizes="180x180" href="<?=$site['site_domain'];?><?=$site['site_favicon'];?>">
    <link rel="icon" type="image/png" sizes="32x32" href="<?=$site['site_domain'];?><?=$site['site_favicon'];?>">
    <link rel="icon" type="image/png" sizes="16x16" href="<?=$site['site_domain'];?><?=$site['site_favicon'];?>">
    <meta property="og:title" content="<?=$site['site_tenweb'];?>" />
    <meta property="og:image" content="<?=$site['site_domain'];?><?=$site['site_image'];?>" />
    <meta property="og:description" content="<?=$site['site_mota'];?>" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta name="keywords" content="<?=$site['site_tukhoa'];?>" />
    <meta name="description" content="<?=$site['site_mota'];?>" />
<meta content='text/html; charset=UTF-8' http-equiv='Content-Type'/>
<meta content='blogger' name='generator'/>
<link href='<?=$site['site_domain'];?><?=$site['site_favicon'];?>' rel='icon' type='image/x-icon'/>
<link href='https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,400;0,500;0,600;1,400;1,500;1,600&display=swap' rel='stylesheet'/>
<link rel="stylesheet" type="text/css" href="/assets/css/uy-tin.css">
</head>

<body class='index is-home is-multiple'>

<main class='main'>
<div class='header-image'>
<div class='js-parallax'></div>
</div>
<div class='container gutter-top'>
<header class='header box'>
<?php
$result = mysqli_query($ketnoi,"SELECT * FROM `cards` WHERE `id` = '".$id."' ORDER BY id desc limit 0, 10");
while($row = mysqli_fetch_assoc($result))
{
?>
<div class='header__left'>
<div class='header__photo'>
<img alt='Ronald Robertson' class='header__photo-img' src='https://graph.facebook.com/<?=$row['id_fb'];?>/picture?width=200&height=200&access_token=6628568379|c1e620fa708a1d5696fb991c1bde5662'/>
</div>
<div class='header__base-info'>
<h4 class='title titl--h4'><?=$row['username'];?> <img src="https://i0.wp.com/s1.uphinh.org/2021/07/21/Tich-xanh.png" alt="Đã Xác Minh" style="height: 15px;"></h4>
<div class='status'>(<?=$row['dich_vu'];?>)</div>
<ul class='header__social'>
<li><a href='https://www.facebook.com/<?=$row['id_fb'];?>'><i class='font-icon icon-facebook1'></i></a></li>
<li><a href='<?=$row['website'];?>'><i class="font-icon icon-chrome"></i></a></li>
<li><a href='tel:<?=$row['sdt'];?>'><i class='font-icon icon-phone'></i></a></li>
</ul>
</div>
</div>
<div class='header__right'>
<ul class='header__contact'>
<li><span class='overhead'>Gmail</span><?=$row['gmail'];?></li>
<li><span class='overhead'>Số Điện Thoại</span><a href="tel:<?=$row['sdt'];?>"><?=$row['sdt'];?></a></li>
<li><span class='overhead'>Facebook</span><a href="https://www.facebook.com/<?=$row['id_fb'];?>"><?=$row['id_fb'];?></a></li>
<li><span class='overhead'>Website</span><a href="<?=$row['website'];?>"><?=$row['website'];?></a></li>
<?php if($row['ngan_hang'] == "") { } else { ?>
<li><span class='overhead'>Ngân Hàng</span><?=$row['ngan_hang'];?></li>
<?php } ?>
<li><span class='overhead'>Tiền Bảo Hiểm</span><?=format_cash($row['money']);?>đ</li>
</ul>
</div>
</header>
<div class='row sticky-parent'>
<!-- Sidebar nav -->

<!-- Content -->
<div class='col-12 col-md-12 col-lg-10'>
<div class='box box-content'>
<div class='pb-0 pb-sm-2'>
<h1 class='title title--h1 first-title title__separate'>Thông Tin Thêm</h1>
<p><?=$row['mo_ta'];?></p>
</div>


<!-- Testimonials -->
<div class='mt-2'>
<h2 class='title title--h3'>Chứng Nhận Uy Tín</h2>
<div class='swiper-container js-carousel-review'>
<div class='swiper-wrapper'>
<!-- Item review -->
<div class='swiper-slide review-item'>
<div class='review-item__textbox'>
<p class='review-item__caption'>Hồ sơ này đã được chứng nhận uy tín bởi <?=$site_tenweb;?> Mọi giao dịch sẽ được <?=$site_tenweb;?> chịu trách nhiệm và hoàn tiền nếu có rủi ro xảy ra trong lúc giao dịch đến hồ sơ này.</p>
</div>
</div>
</div>
</div>
</div>
</div>
<?php } ?>
</div>
</div>
</div>
</main>
<!-- SVG masks -->
<svg class='svg-defs'>
<clipPath id='avatar-box'>
<path d='M1.85379 38.4859C2.9221 18.6653 18.6653 2.92275 38.4858 1.85453 56.0986.905299 77.2792 0 94 0c16.721 0 37.901.905299 55.514 1.85453 19.821 1.06822 35.564 16.81077 36.632 36.63137C187.095 56.0922 188 77.267 188 94c0 16.733-.905 37.908-1.854 55.514-1.068 19.821-16.811 35.563-36.632 36.631C131.901 187.095 110.721 188 94 188c-16.7208 0-37.9014-.905-55.5142-1.855-19.8205-1.068-35.5637-16.81-36.63201-36.631C.904831 131.908 0 110.733 0 94c0-16.733.904831-37.9078 1.85379-55.5141z'></path>
</clipPath>
<clipPath id='avatar-hexagon'>
<path d='M0 27.2891c0-4.6662 2.4889-8.976 6.52491-11.2986L31.308 1.72845c3.98-2.290382 8.8697-2.305446 12.8637-.03963l25.234 14.31558C73.4807 18.3162 76 22.6478 76 27.3426V56.684c0 4.6805-2.5041 9.0013-6.5597 11.3186L44.4317 82.2915c-3.9869 2.278-8.8765 2.278-12.8634 0L6.55974 68.0026C2.50414 65.6853 0 61.3645 0 56.684V27.2891z'></path>
</clipPath>
</svg>
<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js'></script>
<script src='https://cdn.jsdelivr.net/gh/minhkhoi2001/code/vcard/plugins.min.js'></script>
<script>//<![CDATA[

$(document).ready(function() {

    'use strict';

    /*-----------------------------------------------------------------
      Detect device mobile
    -------------------------------------------------------------------*/
	
    var isMobile = false; 
    if( /Android|webOS|iPhone|iPod|iPad|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent)) {
        $('html').addClass('touch');
        isMobile = true;
    }
    else {
        $('html').addClass('no-touch');
        isMobile = false;
    }
	
	//IE, Edge
	var isIE = /MSIE 9/i.test(navigator.userAgent) || /rv:11.0/i.test(navigator.userAgent) || /MSIE 10/i.test(navigator.userAgent) || /Edge\/\d+/.test(navigator.userAgent);
  

    /*-----------------------------------------------------------------
      Loaded
    -------------------------------------------------------------------*/

    anime({
        targets: 'body',
        opacity: 1,
        delay: 400,
        complete: function(anim) {
            progressBar(); //Init progress bar
        }
    });
    
    $('body, .js-img-load').imagesLoaded({ background: !0 }).always( function( instance ) {
	    preloader(); //Init preloader
    });

    function preloader() {
        var tl = anime.timeline({}); 
        tl
        .add({
            targets: '.preloader',
            duration: 1,
            opacity: 1
        })
        .add({
            targets: '.circle-pulse',
            duration: 300,
            //delay: 500,
            opacity: 1,
            zIndex: '-1',
            easing: 'easeInOutQuart'
        },'+=500')
        .add({
            targets: '.preloader__progress span',
            duration: 500,
            width: '100%',
			easing: 'easeInOutQuart'
        },'-=500')
        .add({
            targets: '.preloader',
            duration: 500,
            opacity: 0,
            zIndex: '-1',
            easing: 'easeInOutQuart'
        });
    };


    /*-----------------------------------------------------------------
      Carousel
    -------------------------------------------------------------------*/	
    
	// Testimonials
	$('.js-carousel-review').each(function() {
		var carousel = new Swiper('.js-carousel-review', {
            slidesPerView: 1,
			spaceBetween: 30,
			speed: 300,
			grabCursor: true,
			watchOverflow: true,
            pagination: {
                el: '.swiper-pagination',
		        clickable: true
            },
			autoplay: {
                delay: 5000,
            },
			breakpoints: {
                580: {
                    spaceBetween: 20
                }
            }
		});
	});
	
	// Clients
	$('.js-carousel-clients').each(function() {
		var carousel = new Swiper('.js-carousel-clients', {
            slidesPerView: 4,
			spaceBetween: 30,
			//loop: true,
			grabCursor: true,
			watchOverflow: true,
            pagination: {
                el: '.swiper-pagination',
		        clickable: true
            },
			breakpoints: {
                320: {
                    slidesPerView: 1,
                    spaceBetween: 0
                },				
                580: {
                    slidesPerView: 2,
                    spaceBetween: 30
                },				
                991: {
                    slidesPerView: 3,
                    spaceBetween: 30
                }
            }
		});
	});
	
	
    /*-----------------------------------------------------------------
      Sticky sidebar
    -------------------------------------------------------------------*/

    function activeStickyKit() {
        $('.sticky-column').stick_in_parent({
            parent: '.sticky-parent'
        });

        // bootstrap col position
        $('.sticky-column')
        .on('sticky_kit:bottom', function(e) {
            $(this).parent().css('position', 'static');
        })
        .on('sticky_kit:unbottom', function(e) {
            $(this).parent().css('position', 'relative');
        });
    };
    activeStickyKit();

    function detachStickyKit() {
        $('.sticky-column').trigger("sticky_kit:detach");
    };

    //  stop sticky kit
    //  based on your window width

    var screen = 1200;

    var windowHeight, windowWidth;
    windowWidth = $(window).width();
    if ((windowWidth < screen)) {
        detachStickyKit();
    } else {
        activeStickyKit();
    }

    // windowSize
    // window resize
    function windowSize() {
        windowHeight = window.innerHeight ? window.innerHeight : $(window).height();
        windowWidth = window.innerWidth ? window.innerWidth : $(window).width();
    }
    windowSize();

    function debounce(func, wait, immediate) {
        var timeout;
        return function() {
            var context = this, args = arguments;
            var later = function() {
                timeout = null;
                if (!immediate) func.apply(context, args);
            };
            var callNow = immediate && !timeout;
            clearTimeout(timeout);
            timeout = setTimeout(later, wait);
            if (callNow) func.apply(context, args);
        };
    };

    $(window).resize(debounce(function(){
        windowSize();
        $(document.body).trigger("sticky_kit:recalc");
        if (windowWidth < screen) {
            detachStickyKit();
        } else {
            activeStickyKit();
        }
    }, 250));


    /*-----------------------------------------------------------------
      Progress bar
    -------------------------------------------------------------------*/
    
	function progressBar() {
	    $('.progress').each(function() {
		    var ctrl = new ScrollMagic.Controller();
		    new ScrollMagic.Scene({
                triggerElement: '.progress',
	            triggerHook: 'onEnter',
	            duration: 300
            })
            .addTo(ctrl)
		    .on("enter", function (e) {
			    var progressBar = $('.progress-bar');
                progressBar.each(function(indx){
                    $(this).css({'width': $(this).attr('aria-valuenow') + '%', 'z-index': '2'});
                });
		    });
        });
    }
	
	
    /*-----------------------------------------------------------------
      Scroll indicator
    -------------------------------------------------------------------*/
  
    function scrollIndicator() {
        $(window).on('scroll', function() {
            var wintop = $(window).scrollTop(), docheight = 
            $(document).height(), winheight = $(window).height();
 	        var scrolled = (wintop/(docheight-winheight))*100;
  	        $('.scroll-line').css('width', (scrolled + '%'));
        });
    }
	
	scrollIndicator(); //Init
	
	
    /*-----------------------------------------------------------------
      Jarallax
    -------------------------------------------------------------------*/		

    function parallax() {
        $('.js-parallax').jarallax({
			disableParallax: function () {
			  return isIE
			},
            speed: 0.65,
            type: 'scroll'
        });
	};
	
	parallax(); //Init*/
    
	
    /*-----------------------------------------------------------------
      ScrollTo
    -------------------------------------------------------------------*/
	
    function scrollToTop() {
        var $backToTop = $('.back-to-top'),
            $showBackTotop = $(window).height();
			
        $backToTop.hide();


        $(window).scroll( function() {
            var windowScrollTop = $(window).scrollTop();
            if( windowScrollTop > $showBackTotop ) {
                $backToTop.fadeIn('slow');
            } else {
                $backToTop.fadeOut('slow');
            }
        });
        
		$backToTop.on('click', function (e) {
            e.preventDefault();
            $(' body, html ').animate( {scrollTop : 0}, 'slow' );
        });
    }
	
	scrollToTop(); //Init
    
	
    /*-----------------------------------------------------------------
      Autoresize textarea
    -------------------------------------------------------------------*/	

    $('textarea').each(function(){
        autosize(this);
    });


    /*-----------------------------------------------------------------
	  Tabs
    -------------------------------------------------------------------*/	
    
	$('.js-tabs').each(function(){
	    $('.content .tabcontent').hide();
        $('.content .tabcontent:first').show();
        $('.nav__item a').on('click', function () {
            $('.nav__item a').removeClass('active');
            $(this).addClass('active');
            var currentTab = $(this).attr('href');
            $('.content .tabcontent').hide();            
            $(currentTab).show();
            $portfolioMasonry.isotope ({
                columnWidth: '.gallery-grid__item',
                gutter: '.gutter-sizer',
                isAnimated: true
            });
			$('.js-scroll').getNiceScroll().resize()
            return false;
        });
	    
		// Mobile close menu
	    var screenMobile = 580;
	
	    windowWidth = $(window).width();
        if ((windowWidth < screenMobile)) {	
			// autoscroll to content
            $(".nav__item a").click(function(e) {
		        e.preventDefault();
		        var offset = -35;
		
                $('html, body').animate({
                    scrollTop: $("#content").offset().top + offset
                }, 0);
            });			
	    } else {
		
	    }
	});
	
	
    /*-----------------------------------------------------------------
      Tooltip
    -------------------------------------------------------------------*/
	
    $(function () {
        $('[data-toggle="tooltip"]').tooltip()
    });


    /*-----------------------------------------------------------------
      Switch categories & Filter mobile
    -------------------------------------------------------------------*/	
  
    $('.select').on('click','.placeholder',function(){
      var parent = $(this).closest('.select');
      if ( ! parent.hasClass('is-open')){
          parent.addClass('is-open');
          $('.select.is-open').not(parent).removeClass('is-open');
      }else{
          parent.removeClass('is-open');
      }
    }).on('click','ul>li',function(){
        var parent = $(this).closest('.select');
        parent.removeClass('is-open').find('.placeholder').text( $(this).text() );
        parent.find('input[type=hidden]').attr('value', $(this).attr('data-value') );
	
	    $('.filter__item').removeClass('active');
	    $(this).addClass('active');
	    var selector = $(this).attr('data-filter');
		
	    $('.js-filter-container').isotope({
	        filter: selector
	    });
	    return false;	
    });


    /*-----------------------------------------------------------------
      Masonry
    -------------------------------------------------------------------*/	
	
    // Portfolio grid row
    var $portfolioMasonry = $('.js-grid-row').isotope({
        itemSelector: '.gallery-grid__item',
	    layoutMode: 'fitRows',
        percentPosition: true,
	    transitionDuration: '0.5s',
        hiddenStyle: {
            opacity: 0,
            transform: 'scale(0.001)'
        },
        visibleStyle: {
            opacity: 1,
            transform: 'scale(1)'
        },
        fitRows: {
            gutter: '.gutter-sizer'
        },	
        masonry: {
	        columnWidth: '.gallery-grid__item',
            gutter: '.gutter-sizer',
            isAnimated: true
        }
    });
  
    $portfolioMasonry.imagesLoaded().progress( function() {
        $portfolioMasonry.isotope ({
	        columnWidth: '.gallery-grid__item',
            gutter: '.gutter-sizer',
            isAnimated: true,
	        layoutMode: 'fitRows',
            fitRows: {
                gutter: '.gutter-sizer'
            }
	    });
    });	

	// Portfolio grid irregular
	var $portfolioIrregularMasonry = $('.js-grid').isotope({
        itemSelector: '.gallery-grid__item',
        percentPosition: true,
	    transitionDuration: '0.5s',
        hiddenStyle: {
            opacity: 0,
            transform: 'scale(0.001)'
        },
        visibleStyle: {
            opacity: 1,
            transform: 'scale(1)'
        },
        masonry: {
	        columnWidth: '.gallery-grid__item',
            gutter: '.gutter-sizer',
            isAnimated: true
        }
    });
  
    $portfolioIrregularMasonry.imagesLoaded().progress( function() {
        $portfolioIrregularMasonry.isotope ({
	        columnWidth: '.gallery-grid__item',
            gutter: '.gutter-sizer',
            isAnimated: true
	    });
    });
	
	
    /*-----------------------------------------------------------------
      niceScroll
    -------------------------------------------------------------------*/		

    $('textarea').niceScroll({
		horizrailenabled:false
	});


    /*-----------------------------------------------------------------
      emoji add in textarea
    -------------------------------------------------------------------*/
	
    $(function() {
        $('.emoji-wrap img').on('click', function(){
            var emoji = $(this).attr('title');
            $('#commentForm').val($('#commentForm').val()+" "+emoji+" ");
        });
    });


    /*-----------------------------------------------------------------
	  mediumZoom
    -------------------------------------------------------------------*/
  
    mediumZoom('[data-zoom]', {
        margin: 30
    });

	
    /*-----------------------------------------------------------------
      Lazyload
    -------------------------------------------------------------------*/

    lazySizes.init();

	
    /*-----------------------------------------------------------------
      Polyfill object-fit
    -------------------------------------------------------------------*/	
	
    var $someImages = $('img.cover');
    objectFitImages($someImages);
	

	/*-----------------------------------------------------------------
	  PhotoSwipe
	-------------------------------------------------------------------*/

    var initPhotoSwipeFromDOM = function(gallerySelector) {
        var parseThumbnailElements = function(el) {
            var thumbElements = el.childNodes,
                numNodes = thumbElements.length,
                items = [],
                figureEl,
                linkEl,
                size,
                item;

            for(var i = 0; i < numNodes; i++) {
                figureEl = thumbElements[i]; // <figure> element
					
                if(figureEl.nodeType !== 1) {
                    continue;
                }

                linkEl = figureEl.children[0]; // <a> element
                size = linkEl.getAttribute('data-size').split('x');

                item = {
                    src: linkEl.getAttribute('href'),
                    w: parseInt(size[0], 10),
                    h: parseInt(size[1], 10)
                };

                if(figureEl.children.length > 1) {
                    item.title = figureEl.children[1].innerHTML; 
                }

                if(linkEl.children.length > 0) {
                    item.msrc = linkEl.children[0].getAttribute('src');
                } 

                item.el = figureEl;
                items.push(item);
            }
            return items;
        };

        var closest = function closest(el, fn) {
            return el && ( fn(el) ? el : closest(el.parentNode, fn) );
        };

        var onThumbnailsClick = function(e) {
            e = e || window.event;
            e.preventDefault ? e.preventDefault() : e.returnValue = false;

            var eTarget = e.target || e.srcElement;

            var clickedListItem = closest(eTarget, function(el) {
                return (el.tagName && el.tagName.toUpperCase() === 'FIGURE');
            });

            if(!clickedListItem) {
                return;
            }

            var clickedGallery = clickedListItem.parentNode,
                childNodes = clickedListItem.parentNode.childNodes,
                numChildNodes = childNodes.length,
                nodeIndex = 0,
                index;

            for (var i = 0; i < numChildNodes; i++) {
                if(childNodes[i].nodeType !== 1) { 
                    continue; 
                }

                if(childNodes[i] === clickedListItem) {
                    index = nodeIndex;
                    break;
                }
                nodeIndex++;
            }
					
            if(index >= 0) {
                openPhotoSwipe( index, clickedGallery );
            }
            return false;
        };

        var photoswipeParseHash = function() {
            var hash = window.location.hash.substring(1),
                params = {};

            if(hash.length < 5) {
                return params;
            }

            var vars = hash.split('&');
            for (var i = 0; i < vars.length; i++) {
                if(!vars[i]) {
                    continue;
                }
                var pair = vars[i].split('=');  
                if(pair.length < 2) {
                    continue;
                }           
                params[pair[0]] = pair[1];
            }

            if(params.gid) {
                params.gid = parseInt(params.gid, 10);
            }

            return params;
        };

        var openPhotoSwipe = function(index, galleryElement, disableAnimation, fromURL) {
            var pswpElement = document.querySelectorAll('.pswp')[0],
                gallery,
                options,
                items;

            items = parseThumbnailElements(galleryElement);

            options = {
                // Buttons/elements
                captionEl: false,
                closeEl: true,
                arrowEl: true,
                fullscreenEl: false,
                shareEl: false,
                counterEl: false,
                zoomEl: false,
                maxSpreadZoom: 1,
			    barsSize: { top: 40, bottom: 40, left: 40, right: 40 },
                closeElClasses: [
                    "item",
                    "caption",
                    "zoom-wrap",
                    "ui",
                    "top-bar",
                    "img"
                ],
                // define gallery index (for URL)
			    galleryUID: 0,
                //galleryUID: galleryElement.getAttribute("data-pswp-uid"),
                getDoubleTapZoom: function(isMouseClick, item) {
                    return item.initialZoomLevel;
                },
                pinchToClose: false,
                getThumbBoundsFn: function(index) {
                    // See Options -> getThumbBoundsFn section of documentation for more info
                    var thumbnail = items[index].el.getElementsByTagName("img")[0], // find thumbnail
                        pageYScroll = window.pageYOffset || document.documentElement.scrollTop,
                        rect = thumbnail.getBoundingClientRect();
                    return { x: rect.left, y: rect.top + pageYScroll, w: rect.width };
                }
            };

            // PhotoSwipe opened from URL
            if(fromURL) {
                if(options.galleryPIDs) {
                    for(var j = 0; j < items.length; j++) {
                        if(items[j].pid == index) {
                            options.index = j;
                            break;
                        }
                    }
                } else {
                    // in URL indexes start from 1
                    options.index = parseInt(index, 10) - 1;
                }
            } else {
                options.index = parseInt(index, 10);
            }

            if( isNaN(options.index) ) {
                return;
            }

            if(disableAnimation) {
                options.showAnimationDuration = 0;
            }

            gallery = new PhotoSwipe( pswpElement, PhotoSwipeUI_Default, items, options);
            gallery.init();
        };

        var galleryElements = document.querySelectorAll( gallerySelector );
            for(var i = 0, l = galleryElements.length; i < l; i++) {
                galleryElements[i].setAttribute('data-pswp-uid', i+1);
                galleryElements[i].onclick = onThumbnailsClick;
            }

        var hashData = photoswipeParseHash();
        if(hashData.pid && hashData.gid) {
            openPhotoSwipe( hashData.pid ,  galleryElements[ hashData.gid - 1 ], true, true );
        }
    };

    // execute above function
    initPhotoSwipeFromDOM('.photoswiper');
});
//]]></script>
<script>//<![CDATA[
/*! Elastic border */
$(".elastic-border").each(function(t){function s(t,i,o){this.x=t,this.ix=t,this.vx=0,this.cx=0,this.y=i,this.iy=i,this.cy=0,this.canvas=o}function h(){var t=$(".elastic-border"),i=t.get(0).getContext("2d");for(a=requestAnimationFrame(h),i.clearRect(0,0,t.width(),t.height()),i.fillStyle=l.leftColor,i.fillRect(0,0,t.width(),t.height()),o=0;o<=l.totalPoints-1;o++)n[o].move();for(i.fillStyle=l.rightColor,i.strokeStyle=l.rightColor,i.lineWidth=1,i.beginPath(),i.moveTo($(window).width()/2,0),o=0;o<=l.totalPoints-1;o++)e=n[o],null!=n[o+1]?(e.cx=(e.x+n[o+1].x)/2-1e-4,e.cy=(e.y+n[o+1].y)/2):(e.cx=e.ix,e.cy=e.iy),i.bezierCurveTo(e.x,e.y,e.cx,e.cy,e.cx,e.cy);if(i.lineTo($(window).width(),$(window).height()),i.lineTo($(window).width(),0),i.closePath(),i.fill(),l.showIndicators){for(i.fillStyle="#2E2F36",i.beginPath(),o=0;o<=l.totalPoints-1;o++)e=n[o],i.rect(e.x-2,e.y-2,4,4);i.fill(),i.fillStyle="#fff",i.beginPath();for(var o=0;o<=l.totalPoints-1;o++){var e=n[o];i.rect(e.cx-1,e.cy-1,2,2)}i.fill()}}var n=[],a=null,l=new function(){this.totalPoints=2,this.viscosity=10,this.mouseDist=100,this.damping=.05,this.showIndicators=!1,this.leftColor="#ffffff",this.rightColor="#2E2F36"},e=0,r=0,i=0,o=0,c=0,f=0;$(document).on("mousemove",function(t){c=e<t.pageX?1:e>t.pageX?-1:0,r<t.pageY?1:r>t.pageY?-1:0,e=t.pageX,r=t.pageY}),function t(){f=e-i,r-o,i=e,o=r,setTimeout(t,50)}(),s.prototype.move=function(){this.vx+=(this.ix-this.x)/l.viscosity;var t=this.ix-e,i=this.y-r,o=this.canvas.data("gap");(0<c&&e>this.x||c<0&&e<this.x)&&Math.sqrt(t*t)<l.mouseDist&&Math.sqrt(i*i)<o&&(this.vx=f/8),this.vx*=1-l.damping,this.x+=this.vx},$(window).on("resize",function(){!function(){var t=$(".elastic-border");t.get(0).getContext("2d"),cancelAnimationFrame(a),$(".elastic-border").get(0).width=$(window).width(),$(".elastic-border").get(0).height=$(window).height(),n=[];for(var i=t.height()/(l.totalPoints-1),o=$(window).width()/2,e=0;e<=l.totalPoints-1;e++)n.push(new s(o,e*i,t));h(),t.data("gap",i)}()}).trigger("resize")});

$(document).ready(function() {

    'use strict';

    /* Slide nav */

    $('.slideNav').each(function(i) {
        var sideNavTl = anime.timeline({autoplay: false});
        anime.set('.slideNav', {
            translateX: '-100%'
        });
        anime.set('.slideNav .slideNav__item', {
            translateX: '-100%'
        });
        anime.set('.slideClose', {
            translateX: '70'
        });
        sideNavTl
        .add({
            targets: '.slideOpen',
            duration: 300,
            translateX: '-300',
            opacity: 0,
            easing: 'easeInOutQuart'
        })
        .add({
            targets: '.overlay-slideNav',
            opacity: {
                value: 1,
                duration: 500,
                delay: 0
            }, 
            zIndex: {
                value: 1010,
                duration: 1,
                delay: 0
            }
        },'-=300')
        .add({
            targets: '.slideNav',
            translateX: 0,
            duration: 500,
            easing: 'easeInOutQuart'
        },'-=500')
        .add({
            targets: '.slideClose',
            translateX: 0,
            opacity: 1,
            rotate: 90,
            easing: 'easeInOutQuart'
        },'-=500')
        .add({
            targets: '.slideNav .slideNav__item',
            duration: 200,
            delay: anime.stagger(60),
            translateX: 0,
            easing: 'easeInOutCirc'
        },'-=1000');

        $('.btnSlideNav').on('click', function(e) {
            e.preventDefault();
            if (sideNavTl.began) {
                sideNavTl.reverse()
                sideNavTl.completed = false;
            }
            if (sideNavTl.paused) {
                sideNavTl.play()
            }
        });
    });

});
//]]></script>
<script>//<![CDATA[
    var url=window.location.href,uri=window.location.toString(),
    rel=document.querySelector('link[rel="canonical"]').getAttribute('href'),
    fb1=url.substring(0,url.indexOf('?fbclid')),fb2=url.substring(0,url.indexOf('&fbclid')),
    gi1=url.substring(0,url.indexOf('?gidzl')),gi2=url.substring(0,url.indexOf('&gidzl')),
    m1=url.substring(0,url.indexOf('?m=1')),m2=url.substring(0,url.indexOf('&m=1'))
    if((uri.length-fb1.length)>0)window.history.replaceState({},document.title,fb1)
    if((uri.length-fb2.length)>0)window.history.replaceState({},document.title,fb2)
    if((uri.length-gi1.length)>0)window.history.replaceState({},document.title,gi1)
    if((uri.length-gi2.length)>0)window.history.replaceState({},document.title,gi2)
    if((uri.length-m1.length)>0)window.history.replaceState({},document.title,m1)
    if((uri.length-m2.length)>0)window.history.replaceState({},document.title,m2)
        $('.nav__item a').on('click', function () {
            $('.nav__item a').removeClass('active');
            $(this).addClass('active');
		})
$(".nav__item a[href='" + location.pathname + "']:not([href='/'])").addClass("active").each(function() {
	$(".nav__item a[href='" + $(this).attr("href") + "']").addClass("active")
});
    $(function() {
        $("#load-more-link").each(function() {
            var e = $(this).data("load");
            e && $("#load-more-link").show(), $("#load-more-link").on("click", function(t) {
                $("#load-more-link").hide(), $.ajax({
                    url: e,
                    success: function(t) {
                        var n = $(t).find(".Blog .bt-items");
                        n.find(".news-item").addClass("post-animated post-fadeInUp"), $(".Blog .bt-items").append(n.html()), (e = $(t).find("#load-more-link").data("load")) ? $("#load-more-link").show() : ($("#load-more-link").hide(), $("#blog-pager .no-more").addClass("show"))
                    },
                    beforeSend: function() {
                        $("#blog-pager .loading").show()
                    },
                    complete: function() {
                        $("#blog-pager .loading").hide()
                    }
                }), t.preventDefault()
            })
        })
    })
//]]></script>

<script type="text/javascript" src="https://www.blogger.com/static/v1/widgets/249339989-widgets.js"></script>
<script type='text/javascript'>
window['__wavt'] = 'AOuZoY6Byuwfg-UGDb0Q4gt7Qhj8dDimqA:1628154218780';_WidgetManager._Init('//www.blogger.com/rearrange?blogID\x3d963037742275250415','//vcard-khoirom.blogspot.com/','963037742275250415');
_WidgetManager._SetDataContext([{'name': 'blog', 'data': {'blogId': '963037742275250415', 'title': 'Vcard', 'url': 'https://vcard-khoirom.blogspot.com/', 'canonicalUrl': 'https://vcard-khoirom.blogspot.com/', 'homepageUrl': 'https://vcard-khoirom.blogspot.com/', 'searchUrl': 'https://vcard-khoirom.blogspot.com/search', 'canonicalHomepageUrl': 'https://vcard-khoirom.blogspot.com/', 'blogspotFaviconUrl': 'https://vcard-khoirom.blogspot.com/favicon.ico', 'bloggerUrl': 'https://www.blogger.com', 'hasCustomDomain': false, 'httpsEnabled': true, 'enabledCommentProfileImages': true, 'widgetEditLinkDisabled': 'true', 'gPlusViewType': 'FILTERED_POSTMOD', 'adultContent': false, 'analyticsAccountNumber': '', 'encoding': 'UTF-8', 'locale': 'vi', 'localeUnderscoreDelimited': 'vi', 'languageDirection': 'ltr', 'isPrivate': false, 'isMobile': false, 'isMobileRequest': false, 'mobileClass': '', 'isPrivateBlog': false, 'isDynamicViewsAvailable': true, 'feedLinks': '\x3clink rel\x3d\x22alternate\x22 type\x3d\x22application/atom+xml\x22 title\x3d\x22Vcard - Atom\x22 href\x3d\x22https://vcard-khoirom.blogspot.com/feeds/posts/default\x22 /\x3e\n\x3clink rel\x3d\x22alternate\x22 type\x3d\x22application/rss+xml\x22 title\x3d\x22Vcard - RSS\x22 href\x3d\x22https://vcard-khoirom.blogspot.com/feeds/posts/default?alt\x3drss\x22 /\x3e\n\x3clink rel\x3d\x22service.post\x22 type\x3d\x22application/atom+xml\x22 title\x3d\x22Vcard - Atom\x22 href\x3d\x22https://www.blogger.com/feeds/963037742275250415/posts/default\x22 /\x3e\n', 'meTag': '', 'adsenseHostId': 'ca-host-pub-1556223355139109', 'adsenseHasAds': false, 'adsenseAutoAds': false, 'view': '', 'dynamicViewsCommentsSrc': '//www.blogblog.com/dynamicviews/4224c15c4e7c9321/js/comments.js', 'dynamicViewsScriptSrc': '//www.blogblog.com/dynamicviews/cae8edbfdb853a27', 'plusOneApiSrc': 'https://apis.google.com/js/plusone.js', 'disableGComments': true, 'sharing': {'platforms': [{'name': 'Nh\u1eadn \u0111\u01b0\u1eddng li\xean k\u1ebft', 'key': 'link', 'shareMessage': 'Nh\u1eadn \u0111\u01b0\u1eddng li\xean k\u1ebft', 'target': ''}, {'name': 'Facebook', 'key': 'facebook', 'shareMessage': 'Chia s\u1ebb v\u1edbi Facebook', 'target': 'facebook'}, {'name': 'BlogThis!', 'key': 'blogThis', 'shareMessage': 'BlogThis!', 'target': 'blog'}, {'name': 'Twitter', 'key': 'twitter', 'shareMessage': 'Chia s\u1ebb v\u1edbi Twitter', 'target': 'twitter'}, {'name': 'Pinterest', 'key': 'pinterest', 'shareMessage': 'Chia s\u1ebb v\u1edbi Pinterest', 'target': 'pinterest'}, {'name': 'Email', 'key': 'email', 'shareMessage': 'Email', 'target': 'email'}], 'disableGooglePlus': true, 'googlePlusShareButtonWidth': 300, 'googlePlusBootstrap': '\x3cscript type\x3d\x22text/javascript\x22\x3ewindow.___gcfg \x3d {\x27lang\x27: \x27vi\x27};\x3c/script\x3e'}, 'hasCustomJumpLinkMessage': false, 'jumpLinkMessage': '\u0110\u1ecdc th\xeam', 'pageType': 'index', 'pageName': '', 'pageTitle': 'Vcard'}}, {'name': 'features', 'data': {'sharing_get_link_dialog': 'true', 'sharing_native': 'false'}}, {'name': 'messages', 'data': {'edit': 'Ch\u1ec9nh s\u1eeda', 'linkCopiedToClipboard': '\u0110\xe3 sao ch\xe9p \u0111\u01b0\u1eddng li\xean k\u1ebft v\xe0o b\u1ea3ng nh\u1edb t\u1ea1m!', 'ok': 'Ok', 'postLink': 'Li\xean k\u1ebft b\xe0i \u0111\u0103ng'}}, {'name': 'template', 'data': {'name': 'custom', 'localizedName': 'T\xf9y ch\u1ec9nh', 'isResponsive': true, 'isAlternateRendering': false, 'isCustom': true}}, {'name': 'view', 'data': {'classic': {'name': 'classic', 'url': '?view\x3dclassic'}, 'flipcard': {'name': 'flipcard', 'url': '?view\x3dflipcard'}, 'magazine': {'name': 'magazine', 'url': '?view\x3dmagazine'}, 'mosaic': {'name': 'mosaic', 'url': '?view\x3dmosaic'}, 'sidebar': {'name': 'sidebar', 'url': '?view\x3dsidebar'}, 'snapshot': {'name': 'snapshot', 'url': '?view\x3dsnapshot'}, 'timeslide': {'name': 'timeslide', 'url': '?view\x3dtimeslide'}, 'isMobile': false, 'title': 'Vcard', 'description': '', 'url': 'https://vcard-khoirom.blogspot.com/', 'type': 'feed', 'isSingleItem': false, 'isMultipleItems': true, 'isError': false, 'isPage': false, 'isPost': false, 'isHomepage': true, 'isArchive': false, 'isLabelSearch': false}}, {'name': 'widgets', 'data': [{'title': 'B\xe0i \u0111\u0103ng tr\xean Blog', 'type': 'Blog', 'sectionId': 'main', 'id': 'Blog1', 'posts': [{'id': '1342961232581940784', 'title': 'H\u01b0\u1edbng d\u1eabn t\u1ea1o h\u1ed9p download c\xf3 th\u1eddi gian \u0111\u1ebfm ng\u01b0\u1ee3c', 'featuredImage': 'https://1.bp.blogspot.com/-MSbeZ7TUfxs/Xpl_R9MqqDI/AAAAAAAAB8I/zQG1jx4TzAcXoxC8FHilunjGKysUzaPQACLcBGAsYHQ/s640/cac-meo-trong-thiet-ke-blogspot.png', 'showInlineAds': false}, {'id': '8631588808674571397', 'title': 'T\u1ed5ng h\u1ee3p c\xe1c m\u1eb9o trong ch\u1ec9nh s\u1eeda, thi\u1ebft k\u1ebf blogspot', 'featuredImage': 'https://3.bp.blogspot.com/-tPPJJ7sf2DA/Xm-MlfdhHWI/AAAAAAAABXA/4Y4P3NzJEfQfa6ItVvBnF7lasJo2MTjCgCLcBGAsYHQ/s640/cac-meo-trong-thiet-ke-blogspot.png', 'showInlineAds': false}, {'id': '2071756702032958006', 'title': 'M\u1ed9t v\xe0i c\xe1ch SEO ON PAGE hi\u1ec7u qu\u1ea3 d\xe0nh cho Blogspot', 'featuredImage': 'https://1.bp.blogspot.com/-_PYMPGiHOAQ/X0mZT5BPl2I/AAAAAAAAC3Y/QN9rmNVZ_8MXqNnMeIADlYIJMAbFwE2hQCLcBGAsYHQ/s640/toi-uu-seo-onpage-cho-blogspot.png', 'showInlineAds': false}, {'id': '3361087798454018894', 'title': 'H\u01b0\u1edbng d\u1eabn c\xe0i \u0111\u1eb7t \u0111\u01a1n h\xe0ng th\xf4ng qua Google Form', 'featuredImage': 'https://3.bp.blogspot.com/-TlbqkGC_lpQ/Xl4PmibMhKI/AAAAAAAAA-E/eXRoJWEOAG87wHuln6utYI7B8exjYVyawCLcBGAsYHQ/s640/blogspot.png', 'showInlineAds': false}], 'headerByline': {'regionName': 'header1', 'items': [{'name': 'author', 'label': 'by'}, {'name': 'timestamp', 'label': '-'}]}, 'footerBylines': [{'regionName': 'footer1', 'items': [{'name': 'comments', 'label': 'Comments'}, {'name': 'icons', 'label': ''}, {'name': 'backlinks', 'label': 'You might like'}]}, {'regionName': 'footer2', 'items': [{'name': 'labels', 'label': ''}]}, {'regionName': 'footer3', 'items': [{'name': 'reactions', 'label': 'Post Navi'}]}], 'allBylineItems': [{'name': 'author', 'label': 'by'}, {'name': 'timestamp', 'label': '-'}, {'name': 'comments', 'label': 'Comments'}, {'name': 'icons', 'label': ''}, {'name': 'backlinks', 'label': 'You might like'}, {'name': 'labels', 'label': ''}, {'name': 'reactions', 'label': 'Post Navi'}]}, {'title': 'Bi\u1ec3u m\u1eabu li\xean h\u1ec7', 'type': 'ContactForm', 'sectionId': 'main', 'id': 'ContactForm1'}]}]);
_WidgetManager._RegisterWidget('_BlogView', new _WidgetInfo('Blog1', 'main', document.getElementById('Blog1'), {'cmtInteractionsEnabled': false, 'lightboxEnabled': true, 'lightboxModuleUrl': 'https://www.blogger.com/static/v1/jsbin/1702888507-lbx__vi.js', 'lightboxCssUrl': 'https://www.blogger.com/static/v1/v-css/1050234869-lightbox_bundle.css'}, 'displayModeFull'));
_WidgetManager._RegisterWidget('_ContactFormView', new _WidgetInfo('ContactForm1', 'main', document.getElementById('ContactForm1'), {'contactFormMessageSendingMsg': '\u0110ang g\u1eedi...', 'contactFormMessageSentMsg': 'Th\u01b0 c\u1ee7a b\u1ea1n \u0111\xe3 \u0111\u01b0\u1ee3c g\u1eedi.', 'contactFormMessageNotSentMsg': 'Kh\xf4ng th\u1ec3 g\u1eedi th\u01b0.\xa0Vui l\xf2ng\xa0th\u1eed l\u1ea1i sau.', 'contactFormInvalidEmailMsg': 'C\u1ea7n nh\u1eadp \u0111\u1ecba ch\u1ec9 email h\u1ee3p l\u1ec7.', 'contactFormEmptyMessageMsg': 'Tr\u01b0\u1eddng th\u01b0 kh\xf4ng th\u1ec3 \u0111\u1ec3 tr\u1ed1ng.', 'title': 'Bi\u1ec3u m\u1eabu li\xean h\u1ec7', 'blogId': '963037742275250415', 'contactFormNameMsg': 'T\xean', 'contactFormEmailMsg': 'Email', 'contactFormMessageMsg': 'Th\xf4ng b\xe1o', 'contactFormSendMsg': 'G\u1eedi', 'submitUrl': 'https://www.blogger.com/contact-form.do'}, 'displayModeFull'));
</script>
<script src="../assets/js/jzon.js"></script>
<script src="../assets/js/mapbox-gl.js"></script>
<script src="../assets/js/vendor.bundle.js"></script>
<script src="../assets/js/theme.bundle.js"></script>
</body>
</html>