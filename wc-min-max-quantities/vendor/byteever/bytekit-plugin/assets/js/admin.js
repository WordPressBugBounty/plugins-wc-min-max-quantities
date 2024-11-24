jQuery(document).ready(($) => {
	'use strict';
	$('.notice.bk-notice').on('click', '.notice-dismiss, [data-dismiss], [data-snooze]', function (e) {
		e.preventDefault();
		var $this = $(this),
			$notice = $(this).closest('.notice'),
			data = $notice.data();

		console.log( $this.attr('data-snooze') )
		console.log( $this.data('snooze') )

		// if the clicked element has a data-dismiss attribute, we will set the sub-action to dismiss with the value of the attribute.
		if ( undefined !== $this.attr('data-snooze') ) {
			data.snooze = 'yes';
			data.snooze_time = $this.attr('data-snooze');
		}

		if (!data.action || !data.notice_id) {
			return;
		}

		$.ajax({
			url: ajaxurl, // always defined when running in WP Admin
			type: 'POST',
			data: data,
			xhrFields: {
				withCredentials: true
			},
			success: function (response) {
				if (response.success) {
					$notice.fadeOut();
				}
			}
		});
	});
});
