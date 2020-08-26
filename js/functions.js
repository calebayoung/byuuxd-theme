jQuery( $ => {
	$( () => {
		$( '.uxd-header__menu-icon' ).on( 'click', () => {
			let mobileNav = $( '.uxd-header__mobile-nav' ),
				openIcon = $( '.uxd-header__menu-icon--open' ),
				closeIcon = $( '.uxd-header__menu-icon--close' );
			openIcon.toggleClass( 'hidden' );
			closeIcon.toggleClass( 'hidden' );
			if ( 0 === mobileNav.height() ) {
				mobileNav.height( mobileNav[0].scrollHeight );
			} else {
				mobileNav.height( 0 );
			}
		});
	});
});