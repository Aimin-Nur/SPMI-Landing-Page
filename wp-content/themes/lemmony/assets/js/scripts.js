var ready = (callback) => {
    if (document.readyState != "loading") callback();
    else document.addEventListener("DOMContentLoaded", callback);
}

ready(() => { 
    const is_reduced_motion = window.matchMedia(`(prefers-reduced-motion: reduce)`) === true || window.matchMedia(`(prefers-reduced-motion: reduce)`).matches === true;
    if( is_reduced_motion ) {
        console.info( "%cBased on the accessibility settings of your operating system, this website has limited animations.", 'font-weight: bold' );
    }


    /*
    ** Change icon - Social icons link
    */
    document.querySelectorAll(".wp-social-link-chain svg").forEach( item => {
        item.setAttribute( 'viewBox', '0 0 24 24' );
        item.innerHTML = '<path d="M8.75,21.4A5.77,5.77,0,0,1,8.16,9.89a1,1,0,0,1,1.09.89,1,1,0,0,1-.89,1.1A3.73,3.73,0,0,0,6.08,13a3.77,3.77,0,0,0,5.34,5.33A3.7,3.7,0,0,0,12.5,16a1,1,0,0,1,1.1-.9,1,1,0,0,1,.89,1.1A5.77,5.77,0,0,1,8.75,21.4Zm1.42-6.16A1,1,0,0,1,9.46,15a1,1,0,0,1,0-1.41l4.82-4.83a1,1,0,0,1,1.42,1.42L10.87,15A1,1,0,0,1,10.17,15.24ZM16.59,14a1,1,0,0,1-.09-2,3.73,3.73,0,0,0,2.27-1.08A3.77,3.77,0,0,0,16.1,4.5h0a3.73,3.73,0,0,0-2.66,1.1,3.8,3.8,0,0,0-1.09,2.28,1,1,0,0,1-1.09.9,1,1,0,0,1-.9-1.1A5.78,5.78,0,1,1,16.7,14Z"/>';
    });


    /*
    ** Change icon - Search
    */
    document.querySelectorAll(".wp-block-search__button svg").forEach( item => {
        item.setAttribute( 'viewBox', '0 0 32 32' );
        item.innerHTML = '<path d="M29.243,31c-0.384,0-0.768-0.146-1.061-0.439l-4.184-4.183c-2.384,1.829-5.364,2.917-8.595,2.917 c-7.801,0-14.147-6.347-14.147-14.147S7.604,1,15.404,1s14.147,6.347,14.147,14.147c0,3.492-1.272,6.693-3.377,9.163l4.129,4.129 c0.586,0.586,0.586,1.535,0,2.121C30.011,30.854,29.627,31,29.243,31z M15.404,4C9.258,4,4.257,9,4.257,15.147 c0,6.146,5.001,11.147,11.147,11.147s11.147-5.001,11.147-11.147C26.552,9,21.551,4,15.404,4z"/>';
    });


    /*
    ** Read time counter
    */
    if( document.querySelector('.lemmony-read-time-counter') ) {
        var read_time = 0;
        if( document.querySelector('.entry-content.wp-block-post-content') ) {
            var post_content = document.querySelector('.entry-content.wp-block-post-content').innerHTML;
            post_content = post_content.replace(/<[^>]*>?/gm, '');
            post_content = post_content.replace(/(\r\n|\n|\r)/gm, "");
            var post_content_words = post_content.split(' ').length;
            if( post_content_words / 200 > 1 ) {
                read_time = Math.floor( post_content_words / 200 );
        
                if( post_content_words / 200 > 0.25 ) {
                    read_time++;
                }
            } else {
                read_time = 1;
            }
        }
        document.querySelector('.lemmony-read-time-counter').prepend( read_time + ' ' );
    }


    /*
    * Animation - Background Parallax
    */  
    if( typeof simpleParallax !== 'undefined' && !is_reduced_motion ) {
        var parallax = document.querySelectorAll('.lemmony-parallax .wp-block-cover__image-background');
        if( parallax ) {
            parallax.forEach( image => {
                new simpleParallax(image, {
                    overflow: false,
                    delay: .5,
                    transition: 'cubic-bezier(0,0,0,1)',
                    scale: 1.2
                });
            });
        }
    }


    /*
    ** Animation - Blocks 
    */
    var sections = document.querySelectorAll('.lemmony-animation');
    if( sections && !is_reduced_motion ) {
        sections.forEach( (section, index) => {
            section.classList.add( 'animation-inited' );
        });    

        function reveal() {
            sections.forEach((section) => {
                if( lemmony_is_element_in_viewport( section ) ) {
                    section.classList.add("animate");
                } else {
                    section.classList.remove("animate");
                }
            });
        } 

        window.addEventListener( "load", reveal );
        window.addEventListener( "scroll", reveal );
        window.addEventListener( "resize", reveal );
    }

    function lemmony_is_element_in_viewport( el ) {
        var rect = el.getBoundingClientRect();
        var windowHeight = ( window.innerHeight || document.documentElement.clientHeight );
        var windowWidth = ( window.innerWidth || document.documentElement.clientWidth );
        var verticallyInView = ( rect.top <= windowHeight ) && (( rect.top + rect.height ) >= 0 );
        var horizontallyInView = ( rect.left <= windowWidth ) && (( rect.left + rect.width ) >= 0 );

        return ( verticallyInView && horizontallyInView );
    }


    /*
    ** Animation - Counter
    */
    var counters = document.querySelectorAll('.wp-block-lemmony-companion-counter .lemmony-counter-wrapper');
    if( counters ) {
        counters.forEach( counter => {
            new CountUp( counter.querySelector('.lemmony-counter-number'), counter.getAttribute('data-end'), {
                startVal: parseInt( counter.getAttribute('data-start') ), 
                enableScrollSpy: true,
                duration: !is_reduced_motion ? parseInt( counter.getAttribute('data-duration') ) : 0,
                scrollSpyOnce: false,
                scrollSpyDelay: 100,
            });
        });
    }


    /*
    ** Animation - Typing text
    */
    var typedTexts = document.querySelectorAll('.lemmony-typing-wrapper');
    if( typedTexts && !is_reduced_motion ) {
        var options2 = {
            rootMargin: '0px',
            threshold: 0.25
        }

        var callback2 = ( entries ) => {
            entries.forEach( entry => {
                let typedText = entry.target;
                if( entry.intersectionRatio >= 0.25 && !typedText.classList.contains( "active" ) ) {
                    typedText.classList.add( "active" );
                    let content = [];
                    typedText.querySelectorAll('.lemmony-typing-item').forEach( item => {
                        content.push( item.innerHTML );
                    });
            
                    if( content.length ) {
                        new Typed( typedText.querySelector(".lemmony-typing-action"), {
                            strings: content,
                            typeSpeed: 75,
                            backSpeed: 25,
                            backDelay: 3000,
                            startDelay: 500,
                            loop: true,
                        });
                    }
                }
            });
        };
        
        var observer2 = new IntersectionObserver( callback2, options2 )
        typedTexts.forEach(( item, index ) => {
            observer2.observe( item );
        });
    }


    /*
    ** Navigation - Fullscreen dropdown collapse
    */
    var navigation_items = document.querySelectorAll('.wp-block-navigation-submenu__toggle');
    if( navigation_items ) {
        navigation_items.forEach( item => {
            item.addEventListener("click", ( item2 ) => {
                item2.target.previousSibling.classList.toggle('is-menu-open');
                item2.target.nextSibling.classList.toggle('is-menu-open');
            });
        });
    }


    /*
    ** Accordion block
    */
    var accordions = document.querySelectorAll('.wp-block-lemmony-companion-accordion');
    if( accordions ) {
        accordions.forEach( item => {
            item.querySelector('.lemmony-accordion-icon').addEventListener( "click", ( item2 ) => {
                item2.target.parentNode.classList.toggle('is-open');
            });

            item.querySelector('.lemmony-accordion-title').addEventListener( "click", ( item2 ) => {
                item2.target.parentNode.parentNode.classList.toggle('is-open');
            });
        });
    }


    /*
    ** Hero auto slider block
    */
    if( typeof Splide !== 'undefined' ) {
        var splides = document.querySelectorAll('.lemmony-splide');
        if( splides ) {
            splides.forEach( item => {
                let ratio = item.getAttribute('data-aspect-ratio');
                if( ratio ) {
                    let parts = ratio.split(":");
                    ratio = parseFloat(parts[1]) / parseFloat(parts[0]);
                }

                let speed = item.getAttribute('data-speed');
                let speedMap = {
                    "slow": 9000,
                    "normal": 4500,
                    "fast": 3000,
                };

                var splide = new Splide( item, {
                    drag: false,
                    type: 'loop',
                    direction: 'ttb',
                    wheel: true,
                    releaseWheel: true,
                    heightRatio: ratio ? ratio : 1,
                    gap: '15vh',
                    speed: 1000,
                    easing: 'cubic-bezier(1, 0, 0.1, 0.95)',
                    arrows: false,
                    pagination: false,
                    autoplay: true,
                    interval: speed ? speedMap[speed] : speedMap['normal'],
                    pauseOnHover: false,
                    waitForTransition: true,
                    resetProgress: false,
                    wheel: false,
                });
                splide.mount();
            });
        }
    }


    /*
    ** Mobile navigation menu and X syncer
    */
    var navigation_icons = document.querySelectorAll('.wp-block-navigation__responsive-container-open');
    if( navigation_icons ) {
        navigation_icons.forEach( item => {
            item.addEventListener("click", () => {
                var top = item.getBoundingClientRect().top;
                document.querySelector('.wp-block-navigation__responsive-dialog').style.paddingTop = ( top ) + 'px';
                if( top > 40 ) {
                    document.querySelector('.wp-block-navigation__responsive-container-close').style.top = top + 'px';
                }
            });
        });
    }

});