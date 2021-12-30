function jzonCollapse(data){
	switch(data){
		case 'show':
			$('#collapseExample').collapse('show')
			$('.jzonIsHere').removeAttr('onclick').attr('onclick', 'jzonCollapse("hide")')
			break;

		case 'hide':
			$('#collapseExample').collapse('hide')
			$('.jzonIsHere').removeAttr('onclick').attr('onclick', 'jzonCollapse("show")')

			break;
	}
}

function jzonCollapse1(data){
	switch(data){
		case 'show':
			$('#collapseExample1').collapse('show')
			$('.jzonIsHere1').removeAttr('onclick').attr('onclick', 'jzonCollapse1("hide")')
			break;

		case 'hide':
			$('#collapseExample1').collapse('hide')
			$('.jzonIsHere1').removeAttr('onclick').attr('onclick', 'jzonCollapse1("show")')

			break;
	}
}

function loadScam(data){
	limitScam += 10
    $.ajax({
        type: "POST",
        url: "/ajaxs/loadScam.php",
        data: {
            limitScam,
            jzon: true
        },
        dataType: "text",
        beforeSend: function(){
            $(data).html($(data).attr('data-loading')).attr('disabled', 'disabled')    
        },
        complete: function(){
            $(data).html('Táº¢I THĂM Tá» CĂO').removeAttr('disabled')   
        },
        success: function (res) {
            $("#scamReport").html(res)
        }
    });
}

function jzonSearch(data){
	$.ajax({
        type: "POST",
        url: "/ajaxs/search.php",
        data: {
            search_data: $("#search_data").val()
        },
        dataType: "json",
        beforeSend: function(){
            $(data).html($(data).attr('data-loading')).attr('disabled', 'disabled')    
        },
        complete: function(){
            $(data).html('TĂŒM KIáº¾M Dá»® LIá»†U').removeAttr('disabled')   
        },
        success: function (res) {
        	if(res.success){
        		window.location.href="/lua-dao/profile.php?id=" + res.id
        	}else{
        		alert(res.clean)
        	}
        }
    });
}