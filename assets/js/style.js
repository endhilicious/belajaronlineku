// script waktu pelaksanaan ujian
// Set the date we're counting down to
// var countDownDate = new Date("Jan 5, 2018 15:37:25").getTime();
	var haha = 10000;
// Update the count down every 1 second
var x = setInterval(function() {

    // Get todays date and time
    var now = new Date().getTime();

    // Find the distance between now an the count down date
    var distance = haha;

    // Time calculations for days, hours, minutes and seconds
  	var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
    var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
    var seconds = Math.floor((distance % (1000 * 60)) / 1000);

    // Output the result in an element with id="demo"
    document.getElementById("demo").innerHTML = hours + "h "
    + minutes + "m " + seconds + "s ";
    // If the count down is over, write some text
    if (distance < 0) {
				window.onbeforeunload = function() {
				 return null;
				};
        clearInterval(x);
		    setTimeout(function() {
						function disableF5(e) { if (e.which == 116) e.preventDefault(); };
						// To disable f5
						$(document).bind("keydown", disableF5);
					  swal({
		            title: "Wow!",
		            text: "Message!",
		            type: "success"
		        }, function() {
		            window.location = "welcome/finish";
		        });
		    }, 10);
				document.getElementById("demo").innerHTML = "EXPIRED";
    }else {
			function goodbye(e) {
    if(!e) e = window.event;
    //e.cancelBubble is supported by IE - this will kill the bubbling process.
    e.cancelBubble = true;
    e.returnValue = 'You sure you want to leave/refresh this page?';

    //e.stopPropagation works in Firefox.
    if (e.stopPropagation) {
        e.stopPropagation();
        e.preventDefault();
    }
}
window.onbeforeunload=goodbye;

			function disableF5(e) { if (e.which == 116) e.preventDefault(); };
			// To disable f5
			$(document).bind("keydown", disableF5);
    }


		// haha=haha-1000;
}, 1000);
// end script waktu pelaksanaan ujian

// script untuk pindah" soal
console.log($('input[name="genderS"]:checked').val());
var $i = 1;
$(document).ready(function(){
		$("li.nomor a").click(function(e) {
			// $i = parseInt(document.querySelector("li.active p").innerHTML) ;
			// console.log($i);
			$i = parseInt($(this).attr('seq'));
		});
    $("button#tambah").click(function(){
				$("li.active").removeClass("active");
				$("div.active").removeClass("active in");
				$("li#"+$i+"").removeClass("active");
				$("div#menu"+$i+"").removeClass("active in");
				$i = $i+1;
				$("li#"+$i+"").addClass("active");
        $("div#menu"+$i+"").addClass("active in");
    });
    $("button#kurang").click(function(){
				$("li.active").removeClass("active");
				$("div.active").removeClass("active in");
				$("li#"+$i+"").removeClass("active");
				$("div#menu"+$i+"").removeClass("active in");
				$("div#menu"+$i+"").removeClass("in");
				$i = $i-1;
				$("li#"+$i+"").addClass("active");
        $("div#menu"+$i+"").addClass("active in");
    });
});

// end script untuk pindah" soal