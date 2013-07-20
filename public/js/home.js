$(window).load(function(){
	$.ajax({
		url: 'https://www.googleapis.com/plus/v1/people/105229919707172563396/activities/public?alt=json&maxResults=1&key=AIzaSyAH2s9q92ED9k6VQJPNjM9z13uPDyxnX-M',
		dataType: 'json',
		success: function(data){
			var html = '',
			annotation,
			content,
			url,
			post = data.items[0].url;

			if(data.items[0].annotation){
				html += data.items[0].annotation + ' - ';
			}
			
			if(data.items[0].object.content){
				html += data.items[0].object.content + '<br>';
			}
			
			if(data.items[0].object.attachments){
				html += '<a href="' + data.items[0].object.attachments[0].url + '">' + data.items[0].object.attachments[0].url + '</a>';
			}
			
			html += '<div class="source"><a href="' + post + '">-via Google+</a></div>';
			$('.status').html(html);
		}
	});
	
	$('.container').animate({marginTop: '0px'});
});