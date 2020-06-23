var sliderInt;
var sliderNext;
var counter = 1;
var counter1 = 1;
var myInterval;

$(document).ready(function(){
    $('#selector').hide();
    var homeValue = $('#newDashboardValue').val();
    var cid = $('#categoryId').val();
    $('#bodyWrapper').focus();

    $('#bodyWrapper').on('keyup',function(e){
    	// alert(homeValue);
        var myKey = e.keyCode || window.event.keyCode;

        if ((myKey == 97 || myKey == 49) && counter == 1) {
            showPostTitles(1);
            counter = counter + 1;
        }
        if ((myKey == 98 || myKey == 50) && counter1 == 1) {
            showPostTitles(2);
            counter = counter + 1;
        }
        if ((myKey == 99 || myKey == 51) && counter1 == 1) {
            showPostTitles(3);
            counter = counter + 1;
        }
        if ((myKey == 100 || myKey == 52) && counter1 == 1) {
            showPostTitles(4);
            counter = counter + 1;
        }
        if ((myKey == 101 || myKey == 53) && counter1 == 1) {
            showPostTitles(5);
            counter = counter + 1;
        }
        if ((myKey == 102 || myKey == 54) && counter1 == 1) {
            showPostTitles(6);
            counter = counter + 1;
        }
        if ((myKey == 103 || myKey == 55) && counter1 == 1) {
            showPostTitles(7);
            counter = counter + 1;
        }
        if ((myKey == 104 || myKey == 56) && counter1 == 1) {
            showPostTitles(8);
            counter = counter + 1;
        }
        if ((myKey == 105 || myKey == 57) && counter1 == 1) {
            showPostTitles(9);
            counter = counter + 1;
        }

        if ((myKey == 98 || myKey == 50 || myKey == 97 || myKey == 49 || myKey == 99 || myKey == 51 || myKey == 100 || myKey == 52 || myKey == 101 || myKey == 53 || myKey == 102 || myKey == 54 || myKey == 103 || myKey == 55 || myKey == 104 || myKey == 56) && counter1 == 1 && homeValue == 'geoweb') {
        	clearInterval(myInterval);
            if (myKey == 97 || myKey == 49) {
                var char = 1;
            } else if (myKey == 98 || myKey == 50) {
                var char = 2;
            } else if (myKey == 99 || myKey == 51) {
                var char = 3;
            } else if (myKey == 100 || myKey == 52) {
                var char = 4;
            } else if (myKey == 101 || myKey == 53) {
                var char = 5;
            } else if (myKey == 102 || myKey == 54) {
                var char = 6;
            } else if (myKey == 103 || myKey == 55) {
                var char = 7;
            }else if (myKey == 104 || myKey == 56) {
                var char = 8;
            }else if (myKey == 105 || myKey == 57) {
                var char = 9;
            }

            showPostContent(char, cid);
            counter1 = counter1 + 1;
        }

        if (myKey == 13 && counter == 1) {
            goToHome();
            counter = counter + 1;
        }
    });


    // for animation
    $("#animation_div div").hide();
    $("#animation_div div:first").fadeIn('fast');
    $("#animation_div .animationDiv:first").fadeIn('fast');
    $("#animation_div .animationCaption:first").fadeIn('fast');
});

// for main pages
function startSlider(sliderInt, sliderNext) {
    $("#animation_div").fadeIn('slow');
    count = $("#animation_div>div.takeMeOnly").size();
    loop = setInterval(function () {
        if ((sliderNext > count) || (sliderNext == 0)) {
            sliderInt = 0;
            sliderNext = 1;
        }
        if (sliderNext % 3 != 0) {
            $("#animation_div>div.takeMeOnly").slideUp(1500);
            $("#animation_div>div#" + sliderNext).slideDown(1500);
        } else {
            $("#animation_div>div.takeMeOnly").fadeOut(1500);
            $("#animation_div>div#" + sliderNext).fadeIn(1500);
        }
        $("#animation_div>span").fadeOut('slow');
        $("#animation_div>span#charter" + sliderNext).fadeIn('slow');
        $("#animation_div>span#caption" + sliderNext).fadeIn('slow');

        sliderInt = sliderNext;
        sliderNext = sliderNext + 1;
    }, 15000);
}

function showPostTitles(selector) {
    $url = $('#homeRoute').val() + "/home";

    // alert($url);

    var dataa = 'selector=' + selector;

    // alert(dat);

    $.ajax({
        url: $url,
        data: dataa,
        dataType: "html",
        cache: false,
        type: "GET",
        success: function (rval) {
            $urlNew = $('#homeRoute').val() + "/home/posts/"+rval;
            if(rval > 0){
                window.location.href = $urlNew;
            }
        }
    });
}

function goToHome(){
    $url = $('#homeRoute').val();

    window.location.href = $url;
}

function showPostContent(val, cid){
	$('#selector').show(200).val(val);
	$('#selector').focus();
    // alert($('#selector').val());

    $('#selector').on('keyup',function(e){
        $value = this.value;
        var myKey = e.keyCode || window.event.keyCode;

        if(myKey == 13){
            $url = $('#homeRoute').val() + "/home/postsContent/"+$value+"/"+cid;
            window.location.href = $url;
        }
    });
}

$(document).ready(function(){
    $('#adminContainer').focus();
    $('#adminContainer').on('keyup keypress', function(e) {
      var keyCode = e.keyCode || e.which;
      if (keyCode === 13) {
        e.preventDefault();
        return false;
      }
    });

    $('#bodyWrapper1').focus();
    var counter1 = 1;
    var homeValue = $('#newDashboardValue').val();
    var cid = $('#categoryId').val();

    $('#bodyWrapper1').on('keyup',function(e){
    	// alert(homeValue);
        var myKey = e.keyCode || window.event.keyCode;

        if ((myKey == 98 || myKey == 50 || myKey == 97 || myKey == 49 || myKey == 99 || myKey == 51 || myKey == 100 || myKey == 52 || myKey == 101 || myKey == 53 || myKey == 102 || myKey == 54 || myKey == 103 || myKey == 55 || myKey == 104 || myKey == 56) && counter1 == 1 && homeValue == 'geoweb') {
        	clearInterval(myInterval);
            if (myKey == 97 || myKey == 49) {
                var char = 1;
            } else if (myKey == 98 || myKey == 50) {
                var char = 2;
            } else if (myKey == 99 || myKey == 51) {
                var char = 3;
            } else if (myKey == 100 || myKey == 52) {
                var char = 4;
            } else if (myKey == 101 || myKey == 53) {
                var char = 5;
            } else if (myKey == 102 || myKey == 54) {
                var char = 6;
            } else if (myKey == 103 || myKey == 55) {
                var char = 7;
            }else if (myKey == 104 || myKey == 56) {
                var char = 8;
            }else if (myKey == 105 || myKey == 57) {
                var char = 9;
            }

            showPostContent(char, cid);
            counter1 = counter1 + 1;
        }

        if (myKey == 13) {
            goToHome();
            counter = counter + 1;
        }
    });

    var description_box = $('#animation_div');
    if (description_box.height() < $(description_box.find('#postsContent')).height()) {
        $(description_box.find('#postsContent')).wrap('<marquee direction="up" height="100%" scrollamount=5>');
    }

    var posts_box = $('#postsDiv');
    if (posts_box.height() < $(posts_box.find('#postsTitles')).height()) {
        $(posts_box.find('#postsTitles')).wrap('<marquee direction="up" height="100%" scrollamount=5>');
    }
});
