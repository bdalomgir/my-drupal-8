function validate_crime_log()
{

	if(validate_input('ReportingPerson','generalmessage','Reporting Person Name') && validate_input('LocationofIncident','generalmessage','Location of Incident') )
	{
		return true;
	}
	else
	{
		return false;
	}
	
	return false;
	//validation functions	
}

function validateFile(file)
{
	if(!file)
	{
		 $('#ImageInfo').html("<br />Please Upload Image ");
		 $('#ImageInfo').addClass("error");
		 $('#ImageInfo').show();
		 return false;
	}
	else
	{
		$('#ImageInfo').removeClass("error");
		return true;
	}
}

function validate_input(id,infoDiv,name){
	if( ($('#'+id).val() == '') || ($('#'+id).val() < 1) || ($('#'+id).val() == name)) {
		//$('#'+infoDiv).before('<br/>');
		//$('#'+id).addClass("error");
		$('#'+infoDiv).html("Please enter "+name);
		//$('#'+infoDiv).addClass("error");
		return false;
	  }
	  else
	  {
		 $('#'+id).removeClass("error");
		 $('#'+infoDiv).text('');
		 $('#'+infoDiv).removeClass("error");
		return true;
	  }
}

function validate_email(id,idInfo){
	 var filter =  /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
	 if(filter.test($("#"+id).val()) == false) {
	   $("#"+id).addClass("error");
	  // $("#"+idInfo).text("Type a valid e-mail please.");
	   $("#"+idInfo).addClass("error");
	   return false;
	  
	 }
	 else{
		$("#"+id).removeClass("error");
		$("#"+idInfo).text("");
		$("#"+idInfo).removeClass("error");
		return true;	
	 }
}

function validateEmail(){
	 var reg = /^([A-Za-z0-9_\-\.])+\@([A-Za-z0-9_\-\.])+\.([A-Za-z]{2,4})$/;
	 if(reg.test($("#email").val()) == false) {
	   $("#email").addClass("error");
	   $("#emailInfo").text("Type a valid e-mail please.");
	   $("#emailInfo").addClass("error");
	   return false;
	  //alert('Invalid Email Address');
	 }
	 else{

		$("#email").removeClass("error");
		$("#emailInfo").text("");
		$("#emailInfo").removeClass("error");
		return true;	
	 }
}

function validateName(){
	//if it's NOT valid
	if(name.val().length < 1){
		name.addClass("error");
		Info.text("Enter First Name");
		Info.addClass("error");
		return false;
	}
	//if it's valid
	else{
		name.removeClass("error");
		Info.removeClass("error");
		return true;
	}
}

function validate_dropdown(id,infoDiv,name)
{
	  if ($('#'+id).val() == '') {
		 $('#'+id).addClass("error");
		 $('#'+infoDiv).html("Please select "+name);
		 $('#'+infoDiv).addClass("error");
		 $('#'+infoDiv).show();
		 return false;
	  }
	  else
	  {
		 $('#'+id).removeClass("error");
		 $('#'+infoDiv).removeClass("error");
		return true;
	  }
}

function ValidatePhone(id,infoDiv,name) {
		var phoneRegExp = /^((\+)?[1-9]{1,2})?([-\s\.])?((\(\d{1,4}\))|\d{1,4})(([-\s\.])?[0-9]{1,12}){1,2}$/;
		var phoneVal = $("#"+id).val();
		var numbers = phoneVal.split("").length;
		if (10 <= numbers && numbers <= 20 && phoneRegExp.test(phoneVal)) {
			
			$('#'+id).removeClass("error");
			$('#'+infoDiv).text('');
			$('#'+infoDiv).removeClass("error");
			return true;
		}
		else
		{
			 $('#'+id).addClass("error");
			 //$('#'+infoDiv).html("Please enter valid "+name);
			 $('#'+infoDiv).addClass("error");
			 $('#'+infoDiv).show();
			 return false;	
		}
}

(function($) {
  $(document).ready(function() {
        /* Browser detection patch */
    /* http://pupunzi.open-lab.com/2012/08/14/jquery-1-8-and-browser-detection/ */
    jQuery.browser = {};
    jQuery.browser.mozilla = /mozilla/.test(navigator.userAgent.toLowerCase()) && !/webkit/.test(navigator.userAgent.toLowerCase());
    jQuery.browser.webkit = /webkit/.test(navigator.userAgent.toLowerCase());
    jQuery.browser.opera = /opera/.test(navigator.userAgent.toLowerCase());
    jQuery.browser.msie = /msie/.test(navigator.userAgent.toLowerCase());
    
    function isCompatibilityMode() {
        var IE7BrowserMode = ($.browser.msie && $.browser.version == 7.0);
        var IE7DocumentMode = ($.browser.msie && document.documentMode && document.documentMode == 7);
        var compatibilityMode = ( IE7BrowserMode || IE7DocumentMode );
        return compatibilityMode;
        //alert( "Is IE in Compatibility Mode? " + compatibilityMode );
    }
    
    if(isCompatibilityMode()) {
       alert('Please turn off compatibility mode to view website.');
    }
    
    //$(".expandBg").click(function() {
    //	console.log(this);
		$(".expandBg").toggle(
		  function () {
			$(this).css("background-position","0 100%");
			$(".expandedDiv").show();
		  },function(){
			$(".expandedDiv").hide();
			$(this).css("background-position","0 0");
		  }
		);
    //});
	
    $('#block-views-clery-def-accordian-block .views-row span a').click(function(e) {
      e.preventDefault();
    });
    
    $('#block-views-clery-def-accordian-block .views-row div.a-legand').click(function() {
      //$('#block-views-clery-def-accordian-block .views-row div.a-legand').removeClass('current');
      //$('#block-views-clery-def-accordian-block .views-row .views-field-body').not($(this).next()).slideUp();      
      $(this).next().slideToggle();
      $(this).toggleClass('current');
    });
    //$('#block-views-clery-def-accordian-block .views-row-1 div.a-legand').click();
    
    $('.fixed_banner_nav ul.basic li:first-child .menuList ul.menu').show();
    $('.fixed_banner_nav ul.basic li.first-level:first-child a').addClass('active');
    $('.fixed_banner_nav ul.basic li.first-level > a').mouseover(function() {
      $('.fixed_banner_nav ul.basic li .menuList ul.menu').hide();
      $('.fixed_banner_nav ul.basic li.first-level > a').removeClass('active');
      $(this).addClass('active');
      $(this).next(".menuList").find("ul.menu").show();
    }).mouseout(function(){
      //$(this).next(".menuList").find("ul.menu").hide();
    });
    
    if($('#block-views-warning-display-block').size() > 0 ) {
	$('.fixed_banner_nav').hide();
	$('.call_btn').addClass('with_alert');
    }
    
    $('.region-slideshow #block-views-warning-display-block .expandBgW').click(function(e) {
      e.stopPropagation();
      e.preventDefault();
      $('#block-views-warning-display-block').toggleClass('expand');
      $('.region-slideshow #block-views-warning-display-block .expandBgW').toggleClass('active');
      $('.call_btn').toggleClass('expand_height');
    });
    
    if ($('.innerPage .dark_box .region-rightmenu .block-menu-block h2, .innerPage .dark_box .region-blogmenu #block-views-news-category-block h2').size() > 0) {
	$('.innerPage .dark_box .region-rightmenu .block-menu-block h2, .innerPage .dark_box .region-blogmenu #block-views-news-category-block h2').text(' - Navigate This Section - ');
	$('.innerPage .dark_box .region-rightmenu .block-menu-block h2, .innerPage .dark_box .region-blogmenu #block-views-news-category-block h2').click(function() {
	      $(this).parent().find('ul.menu').slideToggle('slow');
	      $(this).parent().find('.item-list ul').slideToggle('slow');
	});
    }
   
   if($('.region-slideshow').size() < 1) {
      $('.innerSidebar').addClass('without-slideshow');
   }
   
   if ($('.filter_box ul li a').size() > 0) {
     $('.filter_box ul li a').click(function(e) {
	e.preventDefault();
	var rrr = $(this).attr('rel');
	showonlyone(rrr);
     });
   }
   
   function showonlyone(thechosenone) {
	$('div[title|="work"]').each(function(index) {
	if ($(this).attr("id") == thechosenone) {
	$(this).show().animate({opacity : 1.0},1000);
	}
	else {
	$(this).hide().animate({opacity : 0},500);
	}
	});
    }
   
   if($('form#search-form .fieldset-legend').size() > 0) {
     $('form#search-form .fieldset-legend').click(function() {
	$(this).parent().next().toggle();
	$('form#search-form #edit-advanced').toggleClass('indi-height');
     });
   }
   
   if($('form#views-exposed-form-staff-directory-page').size() > 0) {
     //console.log($('form#views-exposed-form-staff-directory-page #edit-field-staff-category-value option[value="All"]').text());
     $('form#views-exposed-form-staff-directory-page #edit-field-staff-category-value option[value="All"]').text('-Select Department-');
     $('form#views-exposed-form-staff-directory-page #edit-field-name-value').attr('placeholder', 'Enter a Name');
     
   }
   if($('.page-search form#search-form input#edit-submit').size() > 0) {
     $('.page-search form#search-form input#edit-submit').val('Search');       
   }
   //Sidebar accordian Menu
   $('.region-rightmenu ul.menu li.expanded ul').hide();
	 $('.region-rightmenu ul.menu li.expanded').prepend('<span class="tiki"></span>');
	 $('.region-rightmenu ul.menu li.expanded > span.tiki').click(function(e) {
	   e.preventDefault();
	   $(this).toggleClass('expand');
	   $(this).next().next().slideToggle("slow");
	 });
//     var share_buttons = "<div class='socials'><ul>";
//     share_buttons += "<li><a href='#' title='Share' class='share'>Share</a></li>";
//     share_buttons += "<li><a href='https://www.facebook.com/sharer/sharer.php?u="+ window.location.href +"' target='_blank' title='Facebook' class='facebook'>Facebook</a></li>";
//     share_buttons += "<li><a href='https://twitter.com/share' title='Twitter' class='twitter'>Twitter</a></li>";
//     share_buttons += "<li><a href='http://www.linkedin.com/shareArticle?mini=true&url="+ window.location.href +"&title=" + document.title + "&summary=' target='_blank' class='linkedin'>LinkedIn</a></li>";
//     share_buttons += "<li><a href='http://pinterest.com/pin/create/button/?url=" + window.location.href + "&media=&description=" + document.title + "' class='pin-it-button pinterest' count-layout='horizontal'>Pinterest</a></li>";
//     share_buttons += "<li><a href='#' title='Mail' class='mail'>Mail</a></li>";
//     share_buttons += "</ul></div>";
//     $(".field-name-field-post-image ").append(share_buttons);
//     if($('.socials ul li a').size() > 0) {
//        $('.socials ul li a').live('click', function(e) {
//	//e.preventDefault();
//        });
//     }
  });

})(jQuery);