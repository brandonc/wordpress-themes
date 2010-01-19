$('#nav a').hover(function() {
	Cufon.replace($(this).find('strong').get(), { color: '#4e8264', textShadow: '1px 1px #0d0e0e' });
}, function() {
	Cufon.replace($(this).find('strong').get(), { color: '#000000', textShadow: 'none' });
});

$('#s').focus(function() {
	$('#searchform label').hide(0);
});

$('#s').blur(function() {
	if($(this).val() == '') {
		$('#searchform label').show(0);
	}
});

$('.modal-close').live('click', function() {
	$.fn.colorbox.close();
	return false;
});

$('a[href$="map/"]').click(function() {
	$.fn.colorbox({ href: '/map', opacity: 0.7,
		onComplete: function() {
			$('.map-container .pushpin').hoverIntent(pushpinhoverconfig_create);
		}
	});
	return false;
});

$('.portraits label').each(function() {
	var width = $(this).parent().width();
	var offset = parseInt((112 - width) / 2);
	$(this).css('left', offset * -1);
});

function get_president_by_year(year) {
	year = parseInt(year);
	if(year >= 1945 && year <= 1953)
		return 'truman';
	else if(year > 1953 && year <= 1961)
		return 'eisenhower';
	else if(year > 1961 && year <= 1963)
		return 'kennedy';
	else if(year > 1963 && year <= 1969)
		return 'johnson';
	else if(year > 1969 && year <= 1974)
		return 'nixon';
	else if(year > 1974 && year <= 1977)
		return 'ford';
	else if(year > 1977 && year <= 1981)
		return 'carter';
	else if(year > 1981 && year <= 1989)
		return 'reagan';
	else if(year > 1989 && year <= 1993)
		return 'bush41';
	else if(year > 1993 && year <= 2001)
		return 'clinton';
	else if(year > 2001 && year <= 2009)
		return 'bush43';
	else if(year > 2009)
		return 'obama';
}

function fx_replace_html(el, html, duration) {
	if(duration === undefined)
		duration = 200;
		
	el.animate({
		opacity: 0
	}, duration, function() {
		el.html(html);
		el.animate({
			opacity: 1.0
		}, duration);
	});
}

var lastpresident = '';

function pushpin_over_action(el) {
	if(el.size() == 0)
		return;
	
	var position = parseInt(el.css('left'));
	var callout = $('.callout');
	var offset = parseInt($('.callout').width() / 2) - 6;
	
	if(position < offset) {
		offset = 0;
		callout.addClass('callout-vertical-left');
		callout.removeClass('callout-vertical-right');
	} else if(position > 940 - offset) {
		offset = callout.width() - 15;
		callout.addClass('callout-vertical-right');
		callout.removeClass('callout-vertical-left');
	} else {
		callout.removeClass('callout-vertical-right');
		callout.removeClass('callout-vertical-left');
	}

	callout.animate({
		left: position - offset
	}, 300, 'easeInQuad', function() { callout.show(100); });
			
	callout.find('h4').html(el.find('.title').text());
	fx_replace_html(callout.find('em'), el.find('.info').text());
	fx_replace_html(callout.find('p'), el.find('.description').text() + '<a href="' + el.parent('a').attr('href') + '"> Read More...</a>');
	
	Cufon.replace('.callout h4', { fontFamily: 'Rockwell Std', textShadow: '1px 1px #161a1c' });
	Cufon.now();
	
	var president = get_president_by_year(parseInt(el.find('.year').text()));
	var saturate = $('<div class="president ' + president + ' saturate"></div>');
	var label = $('.' + president + ' label');
	$('.' + president).append(saturate);
	
	if(lastpresident) {
		$('.' + lastpresident + ' > .saturate').animate({
			opacity: 0.0
		}, 500, function() { $(this).remove(); });
	
		$('.' + lastpresident + ' label').animate({
			opacity: 0.0
		}, 500);
	}
	
	label.animate({
		opacity: 1.0
	}, 500);

	saturate.animate({
		opacity: 1.0
	}, 500);
}

var pushpinhoverconfig_move = {
	sensitivity: 5,
    interval: 150,
    timeout: 200,
	over: function() {
		pushpin_over_action($(this));
	},
	out: function() {
		lastpresident = get_president_by_year(parseInt($(this).find('.year').text()));
	}
};

var pushpinhoverconfig_create = {    
    sensitivity: 3,
    interval: 50,
    timeout: 200,
	over: function() {
		var callout = $('<div class="callout"><h4>' +
							$(this).find('.title').text() +
						'</h4><em>' + $(this).find('.info').text() +
						'</em><p>' + $(this).find('.description').text() +
						'<a href="' + $(this).find('a').attr('href') + '"> Read More...</a></p></div>');

		var pinleft = parseInt($(this).css('left'));
		var pintop = parseInt($(this).css('top'));
		var leftanim = 10;
		if(pinleft > 460) {
			callout.addClass('callout-right');
			callout.css('left', -410);
			leftanim = -350
		} else {
			callout.css('left', 80);
		}

		callout.css('top', -37);
		callout.css('display', 'block');
		callout.css('position', 'relative');
		callout.css('opacity', '0');

		$(this).append(callout);
		Cufon.replace('.callout h4', { fontFamily: 'Rockwell Std', textShadow: '1px 1px #161a1c' });
		Cufon.now();
		callout.animate({
			left: leftanim,
			opacity: 1.0
		}, 200);
	},
	out: function() {
		var callout = $(this).find('.callout');
		var leftanim = 80;
		if(parseInt(callout.css('left')) < 0)
			leftanim = -410;

		callout.animate({
			left: leftanim,
			opacity: 0.0
		}, 200, function() { $(this).remove(); });
	}
};

$('.pushpin').hoverIntent(pushpinhoverconfig_move);
pushpin_over_action($('.pushpin:first'));
lastpresident = get_president_by_year(parseInt($('.pushpin:first').find('.year').text()));