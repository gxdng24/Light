/**
 * demo3.js
 * http://www.codrops.com
 *
 * Licensed under the MIT license.
 * http://www.opensource.org/licenses/mit-license.php
 * 
 * Copyright 2018, Codrops
 * http://www.codrops.com
 */
{
    // the settings for each one of the slides uncover instances.
    const uncoverOpts = [
        {
            // total number of slices.
            slicesTotal: 5,
            // slices color.
            slicesColor: '#fff',
            // 'vertical' || 'horizontal'.
            orientation: 'horizontal',
            // 'bottom' || 'top' for vertical orientation and 'right' || 'left' for horizontal orientation.
            slicesOrigin: {show: 'left', hide: 'left'}
        },
		{
            slicesTotal: 5,
            slicesColor: '#fff',
            orientation: 'horizontal',
            slicesOrigin: {show: 'right', hide: 'right'}
		}
		
		];
        
    const uncoverAnimation = [
        {
            show: {
                slices: {duration: 600, delay: (_,i,t) => (t-i-1)*100, easing: 'easeInOutCirc'}
            },
            hide: {
                slices: {duration: 600, delay: (_,i,t) => (t-i-1)*100, easing: 'easeInOutCirc'}
            }
        }
    ];

    const items = Array.from(document.querySelectorAll('.grid > .grid__item'));
    
    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if ( entry.intersectionRatio > 0.5 ) {
                uncoverArr[items.indexOf(entry.target)].show(true, uncoverAnimation.show);
            }
            else {
                uncoverArr[items.indexOf(entry.target)].hide(true, uncoverAnimation.hide);
            }
        });
    }, { threshold: 0.5 });
    
    let uncoverArr = [];

    imagesLoaded(document.querySelectorAll('.slide__img'), {background: true}, () => {
        //document.body.classList.remove('loading');

        items.forEach((item, pos) => {	
if (pos % 2 ==0){
	        uncoverArr.push(new Uncover(item.querySelector('.scroll-img'), uncoverOpts[1]));
}
else{
	        uncoverArr.push(new Uncover(item.querySelector('.scroll-img'), uncoverOpts[0]));
}

            //uncoverArr.push(new Uncover(item.querySelector('.scroll-img'), uncoverOpts[0]));
            observer.observe(item);
			//console.log(item);
			//console.log(pos);
        });
    });

	
	
	}
