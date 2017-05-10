/**
 * File navigation.js.
 *
 * Handles toggling the navigation menu for small screens and enables TAB key
 * navigation support for dropdown menus.
 */
( function() {
	var container, button, menu, links, i, len;

	container = document.getElementById( 'site-navigation' );
	if ( ! container ) {
		return;
	}

	button = container.getElementsByTagName( 'button' )[0];
	if ( 'undefined' === typeof button ) {
		return;
	}

	menu = container.getElementsByTagName( 'ul' )[0];

	// Hide menu toggle button if menu is empty and return early.
	if ( 'undefined' === typeof menu ) {
		button.style.display = 'none';
		return;
	}

	menu.setAttribute( 'aria-expanded', 'false' );
	if ( -1 === menu.className.indexOf( 'nav-menu' ) ) {
		menu.className += ' nav-menu';
	}

	button.onclick = function() {
		if ( -1 !== container.className.indexOf( 'toggled' ) ) {
			container.className = container.className.replace( ' toggled', '' );
			button.setAttribute( 'aria-expanded', 'false' );
			menu.setAttribute( 'aria-expanded', 'false' );
		} else {
			container.className += ' toggled';
			button.setAttribute( 'aria-expanded', 'true' );
			menu.setAttribute( 'aria-expanded', 'true' );
		}
	};

	// Get all the link elements within the menu.
	links    = menu.getElementsByTagName( 'a' );

	// Each time a menu link is focused or blurred, toggle focus.
	for ( i = 0, len = links.length; i < len; i++ ) {
		links[i].addEventListener( 'focus', toggleFocus, true );
		links[i].addEventListener( 'blur', toggleFocus, true );
	}

	/**
	 * Sets or removes .focus class on an element.
	 */
	function toggleFocus() {
		var self = this;

		// Move up through the ancestors of the current link until we hit .nav-menu.
		while ( -1 === self.className.indexOf( 'nav-menu' ) ) {

			// On li elements toggle the class .focus.
			if ( 'li' === self.tagName.toLowerCase() ) {
				if ( -1 !== self.className.indexOf( 'focus' ) ) {
					self.className = self.className.replace( ' focus', '' );
				} else {
					self.className += ' focus';
				}
			}

			self = self.parentElement;
		}
	}

	/**
	 * Toggles `focus` class to allow submenu access on tablets.
	 */
	( function( container ) {
		var touchStartFn, i,
			parentLink = container.querySelectorAll( '.menu-item-has-children > a, .page_item_has_children > a' );

		if ( 'ontouchstart' in window ) {
			touchStartFn = function( e ) {
				var menuItem = this.parentNode, i;

				if ( ! menuItem.classList.contains( 'focus' ) ) {
					e.preventDefault();
					for ( i = 0; i < menuItem.parentNode.children.length; ++i ) {
						if ( menuItem === menuItem.parentNode.children[i] ) {
							continue;
						}
						menuItem.parentNode.children[i].classList.remove( 'focus' );
					}
					menuItem.classList.add( 'focus' );
				} else {
					menuItem.classList.remove( 'focus' );
				}
			};

			for ( i = 0; i < parentLink.length; ++i ) {
				parentLink[i].addEventListener( 'touchstart', touchStartFn, false );
			}
		}
	}( container ) );
} )();



jQuery(document).ready(function() {


  $( ".menu-text" ).on("click", function(e) {
    	$( e.target ).toggleClass(  "menu-text"  );
    	$( e.target ).toggleClass(  "menu-close"  );
    	$( "div.menu-default" ).toggleClass(  "menu"  );
    	$( ".pie1" ).toggleClass(  "pie"  );
    	$( ".slice1" ).toggleClass(  "slice"  );
    	$( ".slice-contents1" ).toggleClass(  "slice-contents"  );
    	$( ".slice2" ).toggleClass(  "slice"  );
    	$( ".slice-contents2" ).toggleClass(  "slice-contents"  );
    	$( ".slice3" ).toggleClass(  "slice"  );
    	$( ".slice-contents3" ).toggleClass(  "slice-contents"  );
    	$( ".slice4" ).toggleClass(  "slice"  );
    	$( ".slice-contents4" ).toggleClass(  "slice-contents"  );
    	$( ".slice5" ).toggleClass(  "slice"  );
    	$( ".slice-contents5" ).toggleClass(  "slice-contents"  );
    	$( ".label1" ).toggleClass(  "radial-label1"  );
    	$( ".label2" ).toggleClass(  "radial-label2"  );
    	$( ".label3" ).toggleClass(  "radial-label3"  );
    	$( ".label4" ).toggleClass(  "radial-label4"  );
    	$( ".label5" ).toggleClass(  "radial-label5"  );
    	$( ".logo-overlay1" ).toggleClass(  "logo-overlay"  );
      })


      $( ".dropdown-arrow" ).on("click", function(e) {
        $( e.target ).toggleClass(  "dropdown-reverse"  );
        $( ".avatar-nest" ).toggleClass(  "avatar-nest-full"  );
      })

      
      $( ".avatar" ).on("click", function(e) { 
        $( ".profile-card" ).addClass(  "avatar-profile-card"  );
      })

      $( ".close-card-x" ).on("click", function(e) { 
        $( ".profile-card" ).removeClass(  "avatar-profile-card"  );
      })
})
