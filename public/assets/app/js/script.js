
$(function(){ 'use strict';

    // Topnav
    var topnav = $('nav.topnav'),
        topnavMinisite = $('nav.topnav-minisite');
    var sidenav = $('nav.sidenav'),
        sidenavMenus = sidenav.find('.menu-container'),
        sidenavToggle = $('nav .sidenav-toggle');
    var accessPanel = $('.side-panel.access-panel');

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
            self.html('คัดลอกสำเร็จ');
            if(popup.length){
                setTimeout(function(){
                    popup.removeClass('active');
                }, 1200);
            }
            setTimeout(function(){
                copyReady = true;
                self.closest('.toggle-target').removeClass('active');
                self.html('คัดลอก');
            }, 2000);
        }
    });
    

    // Tab Container
    var tabContainers = $('.tab-container');
    if(tabContainers.length){
        tabContainers.each(function(){
            var self = $(this),
                tabs = self.find('.tabs > .tab'),
                tabContents = self.find('.tab-contents > .tab-content');
            tabs.click(function(e){
                var target = tabContents.filter('[data-tab="'+$(this).data('tab')+'"]'),
                    slideContainers = target.find('.slide-container');
                if(target.length){
                    e.preventDefault();
                    tabs.removeClass('active');
                    $(this).addClass('active');

                    tabContents.removeClass('active');
                    target.addClass('active');
                    
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


    // Page Loader
    if($('.page-loader').length){
        window.onload = function(){
            $('.page-loader').addClass('fade-out');
            setTimeout(function(){
                $('.page-loader').remove();
                $('body').removeClass('loading');
            }, 1350);
        }
    }else{
        $('body').removeClass('loading');
    }

    
    // AOS Animation
    AOS.init({ easing: 'ease-in-out-cubic', duration: 750, once: true, offset: 10 });

});

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
                    self.html('ปิดแบบสอบถาม');
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
                 slidesPerView: 3,
                 speed: 800,
                 grabCursor: true,
                 navigation: {
                     nextEl: self.find('.btn-icon-next'),
                     prevEl: self.find('.btn-icon-prev'),
                 },
                 breakpoints: {
                    1299.98: { slidesPerView: 3 },
                    991.98: { slidesPerView: 2 },
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
                 type: "fraction",
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
             var self = $(this);
             new Swiper(self.find('.swiper-container'), {
                 loop: true,
                 spaceBetween: 30,
                 slidesPerView: 5,
                 effect: 'coverflow', 
                 coverflowEffect: {
                     rotate: 0,
                     stretch: -40,
                     // depth: 0,
                     modifier: 1,
                     slideShadows : true
                 },
                 breakpoints: {
                    1299.98: { slidesPerView:5},
                    991.98: { slidesPerView:3,  spaceBetween:0},
                    767.98: { slidesPerView:3, spaceBetween:0},
                    575.98:{ slidesPerView:1}
                },
                 speed: 800,
                 grabCursor: true,
                 type: "fraction",
                 navigation: {
                     nextEl: self.find('.btn-icon-next'),
                     prevEl: self.find('.btn-icon-prev'),
                 },
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
                     1599.98: { slidesPerView:6},
                     1299.98: { slidesPerView:5},
                     1199.98: { slidesPerView:4,},
                     991.98: { slidesPerView:3,},
                     767.98: { slidesPerView:3,},
                     575.98: { slidesPerView:2},
                     499.98: { slidesPerView:1},
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
                //     breakpoints: {
                //        1299.98: { slidesPerView:5},
                //        1199.98: { slidesPerView:4,},
                //        991.98: { slidesPerView:4,},
                //        767.98: { slidesPerView:3,},
                //        575.98: { slidesPerView:2, spaceBetween:20},
                //    },
                    pagination: {
                        el: self.find('.dots'),
                        clickable: true,
                    },
                });
            });
        }