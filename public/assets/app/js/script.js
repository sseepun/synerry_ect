
$(function(){ 'use strict';

    // Topnav
    var topnav = $('nav.topnav'),
        topnavMinisite = $('nav.topnav-minisite');
    var sidenav = $('nav.sidenav'),
        sidenavMenus = sidenav.find('.menu-container'),
        sidenavToggle = $('nav .sidenav-toggle');
    var accessPanel = $('.side-panel.access-panel');
    var simple = '<?php echo $sideNavStyle; ?>';

    if(topnav.length){
        // Generate Sidenav
        sidenavMenus.html( topnav.find('#topnav-menu').html() );
        sidenavMenus.find('em').remove();
        sidenavMenus.find('.num, .title, .submenu-title').remove();
        sidenavMenus.find('.has-children').each(function(){
            $(this).append('<div class="dropdown-toggle"><em class="fas fa-chevron-right"></em></div>');
        });
        sidenavMenus.find('.dropdown-toggle').click(function(e){
            e.preventDefault();
            var self = $(this);
            self.toggleClass('active');
            self.prev().slideToggle();
        });
    }else if(topnavMinisite.length){
        // Generate Sidenav
        sidenavMenus.html( topnavMinisite.find('#topnav-menu').html() );
        sidenavMenus.find('.has-children').each(function(){
            $(this).append('<div class="dropdown-toggle"><em class="fas fa-chevron-right"></em></div>');
        });
        sidenavMenus.find('.dropdown-toggle').click(function(e){
            e.preventDefault();
            var self = $(this);
            self.toggleClass('active');
            self.prev().slideToggle();
        });
    }

    // Sidenav Toggle
    sidenavToggle.click(function(e){
        e.preventDefault();
        if($('body').hasClass('sidenav-opened')){
            $('html, body').removeClass('sidenav-opened');
            sidenavToggle.find('> *').removeClass('active');
            sidenav.removeClass('active');
        }else{
            $('html, body').addClass('sidenav-opened');
            sidenavToggle.find('> *').addClass('active');
            sidenav.addClass('active');
        }
    });
    $('.sidenav-filter').click(function(e){
        e.preventDefault();
        $('html, body').removeClass('sidenav-opened');
        sidenavToggle.find('> *').removeClass('active');
        sidenav.removeClass('active');
    });

    // Back to Top
    var backToTop = $('.back-to-top');
    backToTop.click(function(e){
        e.preventDefault();
        $('html, body').stop().animate({ scrollTop: 0 }, 800 );
    });

      // Global Search Container
      var globalSearchContainer = $('.global-search-container'),
      globalSearchToggles = $('.global-search-toggle');
    if(globalSearchContainer.length && globalSearchToggles.length){
      if(globalSearchContainer.hasClass('use-gsap')){
          var globalSearchTl =  new TimelineMax({paused: true})
              .to('.global-search-container', .6, {
                  autoAlpha: 1, ease: Power3.easeInOut
              })
              .from('.global-search-container h2', .6, {
                  opacity: 0, y: 30, ease: Power3.easeInOut
              }, '-=.3')
              .from('.global-search-container .input-container', .6, {
                  opacity: 0, y: 30, ease: Power3.easeInOut
              }, '-=.3')
              .reverse();
          $('.global-search-toggle').click(function(e){
              e.preventDefault();
              globalSearchTl.reversed( !globalSearchTl.reversed() );
              globalSearchContainer.toggleClass('active');
              if(globalSearchContainer.hasClass('active')){
                  globalSearchContainer.find('input[type=text]').focus();
              }
          });
      }else{
          globalSearchToggles.click(function(e){
              e.preventDefault();
              globalSearchToggles.toggleClass('active');
              globalSearchContainer.toggleClass('active');
              if(globalSearchContainer.hasClass('active')){
                  globalSearchContainer.find('input[type=text]').focus();
                  $('html, body').addClass('global-search-opened');
              }else{
                  $('html, body').removeClass('global-search-opened');
              }
          });
      }
  }


    // Footer
    var footer = $('nav.footer');
    if(footer.length){
        footer.find('.btn-footer').click(function(e){
            e.preventDefault();
            $(this).toggleClass('active');
            footer.find('.footer-wrapper').slideToggle();
        });
    }


    // Font Sizes
    var bodySize = 16,
        fontsizeBtns = $('.btn.font-size-btn');
    fontsizeBtns.click(function(e){
        e.preventDefault();
        var self = $(this);
        var s = Number(self.data('size'));
        if(s==0) bodySize = 16;
        else if(s==1 || s==-1) bodySize += s;
        else bodySize = s;
        $('html, body').css('font-size', bodySize+'px');

        if(self.hasClass('option')){
            fontsizeBtns.removeClass('active');
            self.addClass('active');
        }
    });

    // Themes
    var themeBtns = $('.theme-btn');
    themeBtns.click(function(e){
        e.preventDefault();
        var self = $(this);
        $('#css-theme').attr('href', 'public/assets/app/css/color-'+$(this).data('theme')+'.css');
        $('body').removeClass('theme-0 theme-1 theme-2');
        $('body').addClass('theme-'+self.data('theme'));

        if(self.hasClass('option-row')){
            themeBtns.removeClass('active');
            self.addClass('active');
        }
    });

    // Letter Spacing
    var lspBtns = $('.btn-lsp');
    lspBtns.click(function(e){
        e.preventDefault();
        var self = $(this);
        var val = Number(self.data('lsp'));
        lspBtns.removeClass('active');
        self.addClass('active');
        if(!val){
            $('body').css('letter-spacing', '');
        }else{
            $('body').css('letter-spacing', val+'px');
        }
    });

    // Mouse Cursor
    var cursorBtns = $('.btn-cursor');
    cursorBtns.click(function(e){
        e.preventDefault();
        var self = $(this);
        cursorBtns.removeClass('active');
        self.addClass('active');
    });


    // Accessibility
    var accessibility = $('nav.access-panel');
    accessibility.find('> .wrapper > .icon, .panel-row:first-child').click(function(e){
        e.preventDefault();
        accessibility.toggleClass('active');
    });
    $('.access-filter').click(function(e){
        e.preventDefault();
        accessibility.removeClass('active');
    });

    
    // Check on Scroll
    function checkOnScroll(st){
        if(st > 4*bodySize){
            backToTop.addClass('active');
        }else{
            backToTop.removeClass('active');
        }
        if(topnav.length){
            if(st > 2.375*bodySize){
                topnav.addClass('sticky');
                globalSearchContainer.addClass('sticky');
            }else{
                topnav.removeClass('sticky');
                globalSearchContainer.removeClass('sticky');
            }
        }else if(topnavMinisite.length){
            var scale = 4.4375;
            if(window.innerWidth < 992) scale = 3.9375;
            if(st > scale*bodySize){
                topnavMinisite.addClass('sticky');
                globalSearchContainer.addClass('sticky');
                accessPanel.addClass('sticky');
            }else{
                topnavMinisite.removeClass('sticky');
                globalSearchContainer.removeClass('sticky');
                accessPanel.removeClass('sticky');
            }
        }
    }
    checkOnScroll( $(window).scrollTop() );
    $(window).scroll(function(){
        checkOnScroll( $(this).scrollTop() );
    });


    // Date Picker
    $('input.date-picker').each(function(){
        new Datepicker($(this)[0], {});
    });

    // Dropzone
    $('.input-dropzone').each(function(){
        $(this).dropzone({
            url: 'writable',
            acceptedFiles: 'image/*,application/pdf',
            autoProcessQueue: false,
            uploadMultiple: true,
            parallelUploads: 5,
            maxFiles: 5,
            maxFilesize: 5,
            addRemoveLinks: true,
        });
    });

    // Upload Wrapper
    $('.form-group > .upload-wrapper > input[type="file"]').change(function(){
        var filename = this.value.replace(/C:\\fakepath\\/i, ''),
            parent = $(this).parent(),
            text = parent.find('> .text');
        if(text.length) text.html(filename);
        else parent.append('<div class="text">'+filename+'</div>');
    });


    // Button Toggle
    $('.btn-toggle').click(function(e){
        e.preventDefault();
        $('.toggle-target[data-toggle="'+$(this).data('toggle')+'"]').toggleClass('active');
    });

     // Button Popup
     $('.btn-popup-toggle').click(function(e){
        e.preventDefault();
        $('.popup-container[data-popup="'+$(this).data('popup')+'"]').toggleClass('active');
    });
     $('.btn-popup-toggle-02').click(function(e){
        e.preventDefault();
        $('.popup-container-02[data-popup="'+$(this).data('popup')+'"]').toggleClass('active');
    });
    $('.btn-popup-close-all').click(function(e){
        e.preventDefault();
        $('.popup-container').removeClass('active');
        $('.popup-container-02').removeClass('active');
    });

    // Button Copy
    var copyReady = true;
    $('a[data-copy]').click(function(e){
        e.preventDefault();
        var self = $(this),
            target = $('textarea[data-copy="'+self.data('copy')+'"]'),
            popup = self.closest('.shortcode-container');
        if(copyReady && target.length){
            copyReady = false;
            target[0].select();
            target[0].setSelectionRange(0, target[0].value.length);
            document.execCommand('copy');
            target.blur();
            self.html('<div class="d-flex ai-center"><img src="public/assets/app/images/icon-svg/vote-dark-green.svg" alt="Icon"> <span>คัดลอกสำเร็จ</span></div>');
            if(popup.length){
                setTimeout(function(){
                    popup.removeClass('active');
                }, 1200);
            }
            setTimeout(function(){
                copyReady = true;
                self.closest('.toggle-target').removeClass('active');
                self.html('คัดลอก');
            }, 3000);
        }
    });
    

    // Tab Container
    var tabContainers = $('.tab-container');
    if(tabContainers.length){
        tabContainers.each(function(){
            var self = $(this),
                tabs = self.find('.tabs .tab'),
                tabContents = self.find('.tab-contents > .tab-content');
            tabs.click(function(e){
                var target = tabContents.filter('[data-tab="'+$(this).data('tab')+'"]'),
                    oldTargets = tabContents.filter('.active'),
                    slideContainers = target.find('.slide-container');
                if($(this).hasClass('active')) e.preventDefault();
                if(target.length && !$(this).hasClass('active')){
                    e.preventDefault();
                    tabs.removeClass('active');
                    $(this).addClass('active');

                    tabContents.removeClass('fade-in');
                    oldTargets.addClass('fade-out');
                    target.addClass('fade-in');
                    setTimeout(function(){
                        tabContents.removeClass('fade-in fade-out active');
                        target.addClass('active');
                    }, 600);
                    
                    if(slideContainers.length){
                        slideContainers.each(function(){
                            $(this).find('.slides').slick('setPosition');
                        });
                    }
    
                    AOS.refresh();
                }
            });
        });
    }


    // Shortcode Container
    $('.shortcode-container').each(function(){
        var self = $(this);
        self.find('> .btn, .btn-close').click(function(e){
            e.preventDefault();
            self.toggleClass('active');
        });
    })


    // Slide Container 01
    var slideContainer01 = $('.slide-container-01');
    if(slideContainer01.length){
        slideContainer01.each(function(){
            var self = $(this);
            self.find('.slides').slick({
                centerMode: true, centerPadding: 0, slidesToShow: 1, swipeToSlide: true,
                focusOnSelect: true, autoplay: true, autoplaySpeed: 4000, speed: 600,
                arrows: false, dots: true, appendDots: self.find('.dots')
            });
        });
    }

    // Slide Container 02
    var slideContainer02 = $('.slide-container-02');
    if(slideContainer02.length){
        slideContainer02.each(function(){
            var self = $(this);
            self.find('.slides').slick({
                centerMode: false, centerPadding: 0, slidesToShow: 6, swipeToSlide: true,
                focusOnSelect: true, autoplay: true, autoplaySpeed: 4000, speed: 600,
                arrows: false, dots: false,
                responsive: [
                    { breakpoint: 1299.98, settings: { slidesToShow: 5, } },
                    { breakpoint: 1199.98, settings: { slidesToShow: 4, } },
                    { breakpoint: 991.98, settings: { slidesToShow: 3, } },
                    { breakpoint: 767.98, settings: { slidesToShow: 2, } }
                ]
            });
        });
    }

    
    // Slide Target 01
    var slideTarget01 = $('.slide-target-01');
    if(slideTarget01.length){
        slideTarget01.each(function(){
            var self = $(this),
                slideContainer = self.find('.slide-display'),
                slideNav = self.find('.slide-nav');
            if(slideContainer.length){
                slideContainer.find('> .slides').slick({
                    centerMode: true, centerPadding: 0, slidesToShow: 1, infinite: true,
                    focusOnSelect: true, autoplay: false, speed: 900,  adaptiveHeight: true, 
                    arrows: false, dots: false, asNavFor: slideNav.find('> .slides'),
                });
                slideNav.find('> .slides').slick({
                    centerMode: true, centerPadding: 0, slidesToShow: 6, infinite: true,
                    focusOnSelect: true, autoplay: false, speed: 900,
                    arrows: false, dots: false, asNavFor: slideContainer.find('> .slides'),
                    responsive: [
                        { breakpoint: 1199.98, settings: { slidesToShow: 5, } },
                        { breakpoint: 991.98, settings: { slidesToShow: 4, } },
                        { breakpoint: 767.98, settings: { slidesToShow: 3, } },
                        { breakpoint: 575.98, settings: { slidesToShow: 2, } },
                    ]
                });
            }
        });
    }
    
    // Slide Target 02
    var slideTarget02 = $('.slide-target-02');
    if(slideTarget02.length){
        slideTarget02.each(function(){
            var self = $(this),
                slideContainer = self.find('.slide-display'),
                slideNav = self.find('.slide-nav');
            if(slideContainer.length){
                slideContainer.find('> .slides').slick({
                    centerMode: true, centerPadding: 0, slidesToShow: 1, infinite: true,
                    focusOnSelect: true, autoplay: true, autoplaySpeed: 4000, speed: 900, 
                    adaptiveHeight: true, dots: false,
                    arrows: true, appendArrows: slideContainer.find('> .arrows'),
                    asNavFor: slideNav.find('> .slides'),
                });
                slideNav.find('> .slides').slick({
                    centerMode: true, centerPadding: 0, slidesToShow: 5, infinite: true,
                    focusOnSelect: true, autoplay: false, speed: 900,
                    arrows: false, dots: false, asNavFor: slideContainer.find('> .slides'),
                    responsive: [
                        { breakpoint: 1199.98, settings: { slidesToShow: 4, } },
                        { breakpoint: 767.98, settings: { slidesToShow: 3, } },
                        { breakpoint: 575.98, settings: { slidesToShow: 2, } },
                    ]
                });
            }
        });
    }


    // Banner 01
    var banner01 = $('.banner-01');
    if(banner01.length){
        banner01.each(function(){
            var self = $(this),
                options = {
                    centerMode: true, centerPadding: 0, slidesToShow: 1, swipeToSlide: true,
                    focusOnSelect: true, autoplay: true, autoplaySpeed: 4000, speed: 600,
                    dots: false, arrows: true,
                    prevArrow: self.find('.arrow.arrow-prev'),
                    nextArrow: self.find('.arrow.arrow-next'),
                };
            if(self.hasClass('img-only')){
                options = {
                    centerMode: true, centerPadding: 0, slidesToShow: 1, swipeToSlide: true,
                    focusOnSelect: true, autoplay: true, autoplaySpeed: 4000, speed: 600,
                    dots: false, adaptiveHeight: false, arrows: true, 
                    prevArrow: self.find('.arrow.arrow-prev'),
                    nextArrow: self.find('.arrow.arrow-next'),
                };
            }
            self.find('.slides').slick(options);
        });
    }

     // Banner 02
     var banner02 = $('.banner-02');
     if(banner02.length){
         banner02.each(function(){
            var self = $(this);
            new Swiper(self.find('.swiper-container'), {
                loop: true,
                spaceBetween:0,
                slidesPerView: 1,
                speed: 800,
                grabCursor: true,
                navigation: {
                nextEl: self.find('.btn-icon-next'),
                prevEl: self.find('.btn-icon-prev'),
                },
                pagination: {
                    el: self.find('.dots'),
                    clickable: true,
                },
            });
        });
     }

      // Banner 03
      var banner03 = $('.banner-03');
      if(banner03.length){
          banner03.each(function(){
             var self = $(this);
             new Swiper(self.find('.swiper-container'), {
                 loop: true,
                 spaceBetween:0,
                 slidesPerView: 1,
                 speed: 800,
                 grabCursor: true,
                 navigation: {
                 nextEl: self.find('.btn-icon-next'),
                 prevEl: self.find('.btn-icon-prev'),
                 },
                 pagination: {
                    el: self.find('.snp-pagination'),
                    clickable: true,
                    renderBullet: function (index, className) {
                    return '<span class="' + className + '">' + (index + 1) + "</span>";
                    },
                },
             });
         });
      }
    
    // Client 01
    var client01 = $('.client-01');
    if(client01.length){
        client01.find('.slide-container').each(function(){
            var self = $(this);
            self.find('> .slides').slick({
                centerMode: true, centerPadding: '8px', slidesToShow: 5, swipeToSlide: true,
                focusOnSelect: true, autoplay: true, autoplaySpeed: 4000, speed: 600,
                dots: false, arrows: false,
                responsive: [
                    { breakpoint: 1199.98, settings: { slidesToShow: 4, } },
                    { breakpoint: 991.98, settings: { slidesToShow: 3, } },
                    { breakpoint: 767.98, settings: { slidesToShow: 2, centerPadding: '40px' } },
                    { breakpoint: 575.98, settings: { slidesToShow: 1, centerPadding: '50px' } },
                ]
            });
        });
    }

    
    // Client 02
    var client02 = $('.client-02');
    if(client02.length){
        client02.each(function(){
            var self = $(this);
            new Swiper(self.find('.swiper-container'), {
                loop: true,
                slidesPerView: 6,
                spaceBetween: 20,
                speed: 800,
                grabCursor: true,
                navigation: {
                    nextEl: self.find('.btn-icon-next'),
                    prevEl: self.find('.btn-icon-prev'),
                },
                pagination: {
                    el: self.find('.dots'),
                    clickable: true,
                },
                breakpoints: {
                    1299.98: { slidesPerView: 5 },
                    991.98: { slidesPerView: 4 },
                    767.98: { slidesPerView: 3 },
                    575.98:{ slidesPerView: 2 },
                    390.98:{ slidesPerView: 1 }
                },
            });
        });
    }

        // Page Loader
        let pageLoader = $('.page-loader');
        if(pageLoader.length){
            if(pageLoader.hasClass('style-02')){
                window.onload = function(){
                    setTimeout(function(){
                        pageLoader.addClass('started');
                    }, 100);
                    setTimeout(function(){
                        pageLoader.addClass('fade-out');
                        setTimeout(function(){
                            pageLoader.remove();
                            $('body').removeClass('loading');
                            AOS.init({ easing: 'ease-in-out-cubic', duration: 750, once: true, offset: 10 });
                        }, 1700);
                    }, 1100);
                }
            }else{
                window.onload = function(){
                    setTimeout(function(){
                        pageLoader.addClass('fade-out');
                        setTimeout(function(){
                            pageLoader.remove();
                            $('body').removeClass('loading');
                            AOS.init({ easing: 'ease-in-out-cubic', duration: 750, once: true, offset: 10 });
                        }, 1000);
                    }, 2400);
                }
            }
        }else{
            $('body').removeClass('loading');
            // AOS Animation
            AOS.init({ easing: 'ease-in-out-cubic', duration: 750, once: true, offset: 10 });
        }
    
    });

//     // Page Loader
//     if($('.page-loader').length){
//         window.onload = function(){
//             $('.page-loader').addClass('fade-out');
//             setTimeout(function(){
//                 $('.page-loader').remove();
//                 $('body').removeClass('loading');
//             }, 1350);
//         }
//     }else{
//         $('body').removeClass('loading');
//     }

    
//     // AOS Animation
//     AOS.init({ easing: 'ease-in-out-cubic', duration: 750, once: true, offset: 10 });

// });

function ssPageProcess(){
    var ssPages = $('.ss-page');
    if(ssPages.length){
        var ssPageBtns = $('.ss-page-btn');
        var hash = window.location.hash;

        if(hash){
            var pageId = hash.replace('#', '');
            var activePage = ssPages.filter('[data-page="'+pageId+'"]');
            if(activePage.length){
                ssPages.removeClass('active');
                activePage.addClass('active');
                ssPageBtns.removeClass('active');
                ssPageBtns.filter('[data-page="'+pageId+'"]').addClass('active');
            }
        }
    
        ssPageBtns.click(function(e){
            var target = $('.ss-page[data-page="'+$(this).data('page')+'"]');
            if(target.length){
                e.preventDefault();

                ssPages.removeClass('active');
                target.addClass('active');
                ssPageBtns.removeClass('active');
                $(this).addClass('active');
                
                var slideContainers = target.find('.slide-container');
                if(slideContainers.length){
                    slideContainers.each(function(){
                        $(this).find('.slides').slick('setPosition');
                    });
                }

                AOS.refresh();
            }
        });
    }
}

    // FAQ 01
    var faq01 = $('.faq-01');
    if(faq01.length){
        faq01.each(function(){
            $(this).find('.faq > .question').click(function(e){
                e.preventDefault();
                var parent = $(this).parent();
                if(parent.hasClass('active')){
                    parent.removeClass('active');
                    parent.find('> .answer').slideUp();
                }else{
                    parent.addClass('active');
                    parent.find('> .answer').slideDown();
                }
            });
        });
    }

    // FAQ 02
    var faq02 = $('.faq-02');
    if(faq02.length){
        faq02.each(function(){
            $(this).find('.faq > .question').click(function(e){
                e.preventDefault();
                var parent = $(this).parent();
                if(parent.hasClass('active')){
                    parent.removeClass('active');
                    parent.find('> .answer').slideUp();
                }else{
                    parent.addClass('active');
                    parent.find('> .answer').slideDown();
                }
            });
        });
    }

     // FAQ 06
     var faq06 = $('.faq-06');
     if(faq06.length){
         faq06.each(function(){
             $(this).find('.faq > .question').click(function(e){
                 e.preventDefault();
                 var parent = $(this).parent();
                 if(parent.hasClass('active')){
                     parent.removeClass('active');
                     parent.find('> .answer').slideUp();
                 }else{
                     parent.addClass('active');
                     parent.find('> .answer').slideDown();
                 }
             });
         });
     }

     // FAQ 07
     var faq07 = $('.faq-07');
     if(faq07.length){
         faq07.each(function(){
             $(this).find('.faq > .question').click(function(e){
                 e.preventDefault();
                 var parent = $(this).parent();
                 if(parent.hasClass('active')){
                     parent.removeClass('active');
                     parent.find('> .answer').slideUp();
                 }else{
                     parent.addClass('active');
                     parent.find('> .answer').slideDown();
                 }
             });
         });
     }

    // FAQ 08
     var faq08 = $('.faq-08');
     if(faq08.length){
         faq08.each(function(){
             $(this).find('.faq > .question .btn.btn-action').click(function(e){
                e.preventDefault();
                var self = $(this),
                    parent = $(this).closest('.faq');
                if(parent.hasClass('active')){
                    self.html('ทำแบบสอบถาม');
                    parent.removeClass('active');
                    parent.find('> .answer').slideUp();
                }else{
                    self.html('ปิด');
                    parent.addClass('active');
                    parent.find('> .answer').slideDown();
                }
             });
         });
     }

    // FAQ 09
    var faq09 = $('.faq-09');
    if(faq09.length){
        faq09.each(function(){
            $(this).find('.faq > .question').click(function(e){
                e.preventDefault();
                var parent = $(this).parent();
                if(parent.hasClass('active')){
                    parent.removeClass('active');
                    parent.find('> .answer').slideUp();
                }else{
                    parent.addClass('active');
                    parent.find('> .answer').slideDown();
                }
            });
        });
    }


    // Section 05
    var section05 = $('.section-05');
    if(section05.length){
        section05.each(function(){
            var self = $(this);
            new Swiper(self.find('.swiper-container'), {
                loop: true,
                slidesPerView: 1,
                speed: 800,
                grabCursor: true,
                navigation: {
                    nextEl: self.find('.btn-icon-next'),
                    prevEl: self.find('.btn-icon-prev'),
                },
                pagination: {
                    el: self.find('.dots'),
                    clickable: true,
                },
            });
        });
    }

     // Section 06
     var section06 = $('.section-06');
     if(section06.length){
         section06.each(function(){
             var self = $(this);
             new Swiper(self.find('.swiper-container'), {
                 loop: true,
                 spaceBetween: 20,
                 slidesPerView: 1.1,
                 speed: 800,
                 grabCursor: true,
                 navigation: {
                     nextEl: self.find('.btn-icon-next'),
                     prevEl: self.find('.btn-icon-prev'),
                 },
                 breakpoints: {
                    1299.98: { slidesPerView: 1.1 },
                    991.98: { slidesPerView: 1.1 },
                    767.98: { slidesPerView: 2 },
                    575.98:{ slidesPerView: 1 }
                },
                 pagination: {
                     el: self.find('.dots'),
                     clickable: true,
                 },
             });
         });
     }

     // Section 07
     var section07 = $('.section-07');
     if(section07.length){
         section07.each(function(){
             var self = $(this);
             new Swiper(self.find('.swiper-container'), {
                 loop: true,
                 spaceBetween: 20,
                 slidesPerView: 1,
                 speed: 800,
                 grabCursor: true,
                 navigation: {
                     nextEl: self.find('.btn-icon-next'),
                     prevEl: self.find('.btn-icon-prev'),
                 },
                 pagination: {
                     el: self.find('.dots'),
                     type: "fraction",
                 },
             });
         });
     }

     // Section 09
     var section09 = $('.section-09');
     if(section09.length){
         section09.each(function(){
            let self = $(this);
            let swiperContainer = self.find('.swiper-container');
            
            let childNum = swiperContainer.find('.swiper-slide').length;
            let startIndex = childNum == 3? 1: childNum == 4? 1: childNum > 4? 2: 0;

            let swiperTitle = section09.find('.swiper-title');
            let titles = swiperContainer.find('.swiper-slide').map(function(i,d){
                return $(this).data('title');
            });
            swiperTitle.html(titles[startIndex]);

            let thisSwiper = new Swiper(self.find('.swiper-container'), {
                loop: false,
                centeredSlides: true,
                centerMode: true,
                spaceBetween: 37,
                slidesPerView: 5,
                effect: 'coverflow', 
                coverflowEffect: {
                    rotate: 0,
                    stretch: -40,
                    modifier: 1,
                    slideShadows: true,
                    // depth: 0,
                },
                breakpoints: {
                    1299.98: { slidesPerView:5 },
                    991.98: { slidesPerView:3, spaceBetween:0 },
                    767.98: { slidesPerView:3, spaceBetween:0 },
                    575.98:{ slidesPerView:1 }
                },
                speed: 800,
                grabCursor: true,
                type: 'fraction',
                initialSlide: startIndex,
                navigation: {
                    nextEl: self.find('.btn-icon-next'),
                    prevEl: self.find('.btn-icon-prev'),
                },
            });
            thisSwiper.on('slideChange', function(e){
                swiperTitle.html(titles[thisSwiper.activeIndex]);
            });
        });
     }

      // Section 10
      var section10 = $('.section-10');
      if(section10.length){
          section10.each(function(){
              var self = $(this);
              new Swiper(self.find('.swiper-container'), {
                  loop: true,
                  spaceBetween: 5,
                  slidesPerView: 7,
                  speed: 800,
                  grabCursor: true,
                  navigation: {
                      nextEl: self.find('.btn-icon-next'),
                      prevEl: self.find('.btn-icon-prev'),
                  },
                  breakpoints: {
                     1496.98: { slidesPerView: 6 },
                     1299.98: { slidesPerView: 5 },
                     1199.98: { slidesPerView: 4 },
                     991.98: { slidesPerView: 3 },
                     767.98: { slidesPerView: 3 },
                     575.98: { slidesPerView: 2 },
                     499.98: { slidesPerView: 1 },
                 },
                  pagination: {
                      el: self.find('.dots'),
                      clickable: true,
                  },
              });
          });
      }

      // Section 13
      var section13 = $('.section-13');
      if(section13.length){
          section13.each(function(){
              var self = $(this);
              new Swiper(self.find('.swiper-container'), {
                  loop: true,
                  spaceBetween: 5,
                  slidesPerView: 7,
                  speed: 800,
                  grabCursor: true,
                  navigation: {
                      nextEl: self.find('.btn-icon-next'),
                      prevEl: self.find('.btn-icon-prev'),
                  },
                  breakpoints: {
                     1299.98: { slidesPerView:5},
                     1199.98: { slidesPerView:4,},
                     991.98: { slidesPerView:4,},
                     767.98: { slidesPerView:3,},
                     575.98: { slidesPerView:2, spaceBetween:20},
                 },
                  pagination: {
                      el: self.find('.dots'),
                      clickable: true,
                  },
              });
          });
      }

        // Section 14
        var section14 = $('.section-14');
        if(section14.length){
            section14.each(function(){
                var self = $(this);
                new Swiper(self.find('.swiper-container'), {
                    loop: true,
                    spaceBetween: 5,
                    slidesPerView: 1,
                    speed: 800,
                    grabCursor: true,
                    navigation: {
                        nextEl: self.find('.btn-icon-next'),
                        prevEl: self.find('.btn-icon-prev'),
                    },
                    pagination: {
                        el: self.find('.dots'),
                        clickable: true,
                    },
                });
            });
        }

        // Section 15
        var section15 = $('.section-15');
        if(section15.length){
            section15.each(function(){
                var self = $(this);
                new Swiper(self.find('.swiper-container'), {
                    loop: true,
                    slidesPerView: 1,
                    speed: 800,
                    grabCursor: true,
                    navigation: {
                        nextEl: self.find('.btn-icon-next'),
                        prevEl: self.find('.btn-icon-prev'),
                    },
                    pagination: {
                        el: self.find('.dots'),
                        clickable: true,
                    },
                });
            });
        }

         // Section 18
         var section18 = $('.section-18');
         if(section18.length){
             section18.each(function(){
                 var self = $(this);
                 new Swiper(self.find('.swiper-container'), {
                     loop: true,
                     slidesPerView: 4,
                     spaceBetween: 20,
                     speed: 800,
                     grabCursor: true,
                     navigation: {
                         nextEl: self.find('.btn-icon-next'),
                         prevEl: self.find('.btn-icon-prev'),
                     },
                     pagination: {
                         el: self.find('.dots'),
                         clickable: true,
                     },
                     breakpoints: {
                        1199.98: { slidesPerView:3,},
                        991.98: { slidesPerView:3,},
                        767.98: { slidesPerView:2,},
                        575.98: { slidesPerView:1,},
                    },
                 });
             });
         }

        // Section 21
        var section21 = $('.section-21');
         if(section21.length){
             section21.each(function(){
                 var self = $(this);
                 new Swiper(self.find('.swiper-container'), {
                     loop: true,
                     slidesPerView: 5,
                     spaceBetween: 5,
                     speed: 800,
                     grabCursor: true,
                     navigation: {
                        prevEl: self.find('.btn-icon-prev'),
                        nextEl: self.find('.btn-icon-next'), 
                     },
                     pagination: {
                         el: self.find('.dots'),
                         clickable: true,
                     },
                     breakpoints: {
                        1199.98: { slidesPerView:3,},
                        991.98: { slidesPerView:3,},
                        767.98: { slidesPerView:2,},
                        575.98: { slidesPerView:1,},
                    },
                 });
             });
         }


         
     // Section 22
     var section22 = $('.section-22');
     if(section22.length){
         section22.each(function(){
             var self = $(this);
             new Swiper(self.find('.swiper-container'), {
                 loop: true,
                 spaceBetween: 20,
                 slidesPerView: 3,
                 speed: 800,
                 grabCursor: true,
                 navigation: {
                     nextEl: self.find('.btn-icon-next'),
                     prevEl: self.find('.btn-icon-prev'),
                 },
                 breakpoints: {
                    1299.98: { slidesPerView: 3 },
                    991.98: { slidesPerView: 3 },
                    767.98: { slidesPerView: 2 },
                    575.98:{ slidesPerView: 1 }
                },
                 pagination: {
                     el: self.find('.dots'),
                     clickable: true,
                 },
             });
         });
     }

      // Section 23
      var section23 = $('.section-23');
      if(section23.length){
          section23.each(function(){
              var self = $(this);
              new Swiper(self.find('.swiper-container'), {
                  loop: true,
                  spaceBetween: 20,
                  slidesPerView: 1.2,
                  speed: 800,
                  grabCursor: true,
                  navigation: {
                      nextEl: self.find('.btn-icon-next'),
                      prevEl: self.find('.btn-icon-prev'),
                  },
                  breakpoints: {
                     1299.98: { slidesPerView: 1.1 },
                     991.98: { slidesPerView: 1.1 },
                     767.98: { slidesPerView: 2 },
                     575.98:{ slidesPerView: 1 }
                 },
                  pagination: {
                      el: self.find('.dots'),
                      clickable: true,
                  },
              });
          });
      }

      // Section 24
     var section24 = $('.section-24');
     if(section24.length){
         section24.each(function(){
             var self = $(this);
             new Swiper(self.find('.swiper-container'), {
                 loop: true,
                 spaceBetween: 0,
                 slidesPerView: 1,
                 speed: 800,
                 grabCursor: true,
                 navigation: {
                     nextEl: self.find('.btn-icon-next'),
                     prevEl: self.find('.btn-icon-prev'),
                 },
                 pagination: {
                     el: self.find('.dots'),
                     type: "fraction",
                 },
             });
         });
     }

     var section25 = $('.section-25');
    if(section25.length){
        section25.each(function(){
            var self = $(this);
            new Swiper(self.find('.swiper-container'), {
                loop: true,
                slidesPerView: 1,
                speed: 800,
                grabCursor: true,
                navigation: {
                    nextEl: self.find('.btn-icon-next'),
                    prevEl: self.find('.btn-icon-prev'),
                },
                pagination: {
                    el: self.find('.dots'),
                    clickable: true,
                },
            });
        });
    }

    var section29 = $('.section-29');
    if(section29.length){
        section29.each(function(){
           let self = $(this);
           let swiperContainer = self.find('.swiper-container');
           let childNum = swiperContainer.find('.swiper-slide').length;
           let startIndex = childNum == 3? 1: childNum == 4? 1: childNum > 4? 2: 0;

            let swiperTitle = section29.find('.swiper-title');
            let titles = swiperContainer.find('.swiper-slide').map(function(i,d){
                return $(this).data('title');
            });
            let thisSwiper = new Swiper(self.find('.swiper-container'), {
               loop: false,
               centeredSlides: true,
               centerMode: true,
               spaceBetween: -50,
               slidesPerView: 6,
               effect: 'coverflow', 
               coverflowEffect: {
                   rotate: 0,
                   modifier: 1,
                   slideShadows: true,
                   // depth: 0,
               },
               breakpoints: {
                   1299.98: { slidesPerView:5 },
                   991.98: { slidesPerView:3, spaceBetween:0 },
                   767.98: { slidesPerView:3, spaceBetween:0 },
                   575.98:{ slidesPerView:2 }
               },
               speed: 800,
               grabCursor: true,
               initialSlide: startIndex,
               pagination: {
                el: self.find('.dots'),
                clickable: true,
            },
           });
           thisSwiper.on('slideChange', function(e){
            swiperTitle.html(titles[thisSwiper.activeIndex]);
        });
       });
    }

    var section31 = $('.section-31');
    if(section31.length){
        section31.each(function(){
            let self = $(this);
            let swiperContainer = self.find('.swiper-container');
            let childNum = swiperContainer.find('.swiper-slide').length;
            let startIndex = childNum == 3? 1: childNum == 4? 1: childNum > 4? 2: 0;
            new Swiper(self.find('.swiper-container'), {
               loop: false,
               centeredSlides: true,
               centerMode: true,
               spaceBetween: -50,
               slidesPerView: 6,
               effect: 'coverflow', 
               coverflowEffect: {
                   rotate: 0,
                   modifier: 1,
                   slideShadows: true,
                   // depth: 0,
               },
               breakpoints: {
                   1299.98: { slidesPerView:5 },
                   991.98: { slidesPerView:3, spaceBetween:0 },
                   767.98: { slidesPerView:3, spaceBetween:0 },
                   575.98:{ slidesPerView:2 }
               },
               speed: 800,
               grabCursor: true,
               initialSlide: startIndex,
               navigation: {
                prevEl: self.find('.btn-icon-prev'),
                nextEl: self.find('.btn-icon-next'), 
             },
               pagination: {
                el: self.find('.dots'),
                clickable: true,
            }, 
           });
       });
    }

    var section32 = $('.section-32');
    if(section32.length){
        section32.each(function(){
            let self = $(this);
            new Swiper(self.find('.swiper-container'), {
               loop: false,
               spaceBetween: 20,
               slidesPerView: 4,
               coverflowEffect: {
                   rotate: 0,
                   modifier: 1,
                   slideShadows: true,
                   // depth: 0,
               },
               breakpoints: {
                   1299.98: { slidesPerView:5 },
                   991.98: { slidesPerView:3, spaceBetween:0 },
                   767.98: { slidesPerView:3, spaceBetween:0 },
                   575.98:{ slidesPerView:2 }
               },
               speed: 800,
               grabCursor: true,
             
               navigation: {
                prevEl: self.find('.btn-icon-prev'),
                nextEl: self.find('.btn-icon-next'), 
             },
               pagination: {
                el: self.find('.dots'),
                clickable: true,
            }, 
           });
       });
    }

    // revolution
    var revapi = jQuery('#rev_slider_1').show().revolution({
        sliderLayout: 'auto',
        navigation: {
            arrows: {
                enable: true,
                style: "hesperiden",
                hide_onleave: false
            },
            bullets: {
                enable: false,
                style: "hesperiden",
                hide_onleave: false,
                h_align: "center",
                v_align: "bottom",
                h_offset: 0,
                v_offset: 20,
                space: 5
            }
        },
    });
    $('#quote').on('revolution.slide.onchange', function(e) {
        e.preventDefault;
        self.find('#quote')
        $('#quote').removeClass("text-animation");
        $('#quote').addClass("text-animation");
        console.log('hello');
     
    }, false);

