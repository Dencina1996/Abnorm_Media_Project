$(document).ready(function() {
	checkUpdates();
	$(document).on('click', '#comment-form-submit', function(event) {
		var name = $('#comment-form-data input:first');
		var comment = $('#comment-form-data textarea:first');
		if (checkEmpty(name) || checkEmpty(comment)) {
			return false;
		}
		$.ajax({
			url: 'submit.php',
			type: 'POST',
			data: {
				data_name: name.val(),
				data_comment: comment.val()
			},
		})
		.done(function() {
			checkUpdates();
		})
		.fail(function(data) {
			alert('Ha ocurrido un problema (Error 500)');
		});
	});
	setInterval(checkUpdates, 60000);
});

function checkEmpty(element) {
	if (element.val().trim().length < 1) {
		alert('One or more fields are empty. Please check below:');
		$(element).css('border', 'solid 1px red');
		return true;
	}
	return false;
}

function checkUpdates() {
	$('.comment').remove();
	$.ajax({
		url: 'comments.php',
		type: 'GET',
	})
	.done(function(data) {
		if (data) {
			data.forEach( function(element, index) {
				// Comment Div
					createElement('div', {class: 'comment'}, '#comment-container');
					// Comment Author Data
						createElement('div', {class: 'comment-author-data'}, '.comment:last');
						// Comment Author
							createElement('label', {class: 'comment-author-name'}, '.comment-author-data:last', element.author);
						// Comment Timestamp
							createElement('label', null, '.comment-author-data:last', ' · '+element.created_at);
					// Comment Body
						createElement('div', {class: 'comment-body'}, '.comment:last');
						// Comment Text
						createElement('label', null, '.comment-body:last', element.comment);
			});
		}
	})
	.fail(function() {
		alert('Ha ocurrido un problema (Error 500)')
	})
}

function createElement(element, attributes, position, text) {
	var object = $(document.createElement(element)); // Element creation
	$.each(attributes, function(key, value) { // Array of attributes
		object.attr(key, value);
	});
	$(object).appendTo(position); // Element placing
	$(object).append(text); // Element text
}