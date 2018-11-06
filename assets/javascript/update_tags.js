var frequency = 700;

var tags = [];
$("#filters button").each(function (index, elem) {
	if ($(elem).data("filter") != "*") {
		tags.push($(elem).text());
	}
});

/**
 * Randomize array element order in-place.
 * Using Fisher-Yates shuffle algorithm.
 */
function shuffleArray(array) {
    for (var i = array.length - 1; i > 0; i--) {
        var j = Math.floor(Math.random() * (i + 1));
        var temp = array[i];
        array[i] = array[j];
        array[j] = temp;
    }
    return array;
}

function replaceAll(find, replace, str) {
  return str.replace(new RegExp(find, 'g'), replace);
}

function updateTags() {
	var used_tags = [];
	$("h3.laptop a.button_headline").each(function (index, elem) {
		used_tags.push($(elem).text());
	});

	var order_index = Math.floor((Math.random() * 4) + 1);
	var sub_index = Math.floor(Math.random() * (tags.length - 1));
	var tag = tags[sub_index];

	while ($.inArray(tag, used_tags) != -1) {
		sub_index = Math.floor(Math.random() * (tags.length - 1));
		tag = tags[sub_index];
	}

	var tag_replaced = replaceAll(" ", "_", tag);
	$(".o" + order_index).fadeOut(function() {
		$(this).attr("data-filter", tag_replaced);
		$(this).text(tag).fadeIn();
	});
	setTimeout(updateTags, frequency);
}
setTimeout(updateTags, frequency);