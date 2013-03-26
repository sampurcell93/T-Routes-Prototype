/* Load this script using conditional IE comments if you need to support IE 7 and IE 6. */

window.onload = function() {
	function addIcon(el, entity) {
		var html = el.innerHTML;
		el.innerHTML = '<span style="font-family: \'iconminia\'">' + entity + '</span>' + html;
	}
	var icons = {
			'icon-search' : '&#x61;',
			'icon-checkmark' : '&#x62;',
			'icon-close' : '&#x63;',
			'icon-equalizer' : '&#x64;',
			'icon-cog' : '&#x65;',
			'icon-location' : '&#x66;',
			'icon-refresh' : '&#x67;',
			'icon-compass' : '&#x68;',
			'icon-star' : '&#x69;',
			'icon-star-2' : '&#x6a;',
			'icon-pencil' : '&#x6b;'
		},
		els = document.getElementsByTagName('*'),
		i, attr, html, c, el;
	for (i = 0; i < els.length; i += 1) {
		el = els[i];
		attr = el.getAttribute('data-icon');
		if (attr) {
			addIcon(el, attr);
		}
		c = el.className;
		c = c.match(/icon-[^\s'"]+/);
		if (c && icons[c[0]]) {
			addIcon(el, icons[c[0]]);
		}
	}
};