<script type="text/javascript">
/*============================================================================================*/
/*============================================================================================*/
/*=============================BAGIAN UNTUK WAKTU PENGERJAAN==================================*/
/*============================================================================================*/
/*============================================================================================*/

// var waktu_test = 1000;
var waktu_test = localStorage.getItem('waktu_ujian');;
// Update the count down every 1 second
var x = setInterval(function() {

    // Get todays date and time
    var now = new Date().getTime();

    // Find the distance between now an the count down date
    var distance = waktu_test;

    // Time calculations for days, hours, minutes and seconds
  	var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
    var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
    var seconds = Math.floor((distance % (1000 * 60)) / 1000);

    // Output the result in an element with id="demo"
    document.getElementById("demo").innerHTML = hours + "h " + minutes + "m " + seconds + "s ";
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
	            title: "WAKTU ANDA SUDAH HABIS",
	            text: "MOHON MAAF , ANDA TELAH SELESAI MENGERJAKAN UJIAN INI",
	            type: "success"
	        }, function() {
	        	document.getElementById("selesai_kerja_soal").click();
	        	$('#ulangi_button').hide();
	        	$('#selesai_button').hide();
	        	$('#lihat_nilai_button').show();
	        	$('#tidak_habis_waktu').hide();
	        	$('#habis_waktu').show();
	        	$('#mengecek_jawaban').hide();
	        });
	    }, 10);
		document.getElementById("demo").innerHTML = "WAKTU HABIS";
		
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
		if (localStorage.getItem('status_ujian') == 'berlangsung' ) {
			waktu_test=waktu_test-1000;
		}else{
			waktu_test=-1000;
		}
		
		
    }

		if (navigator.onLine) {
			var data_waktu = {
				'waktu_ujian' : waktu_test,
		        '<?php echo $this->security->get_csrf_token_name(); ?>': '<?php echo $this->security->get_csrf_hash(); ?>'
			}

			$.ajax({
			    url: '<?php echo site_url() ?>Admin/data_waktu/'+localStorage.getItem('token'),
			    data: data_waktu,
			    type: 'post',
			    success: function(data){
			    	// sukses
			    }
			});
			localStorage.setItem('waktu_ujian', waktu_test);
		}else{			
			localStorage.setItem('waktu_ujian', waktu_test);
		}
}, 1000);


/*============================================================================================*/
/*============================================================================================*/
/*=============================================SOAL KONTEN====================================*/
/*============================================================================================*/
/*============================================================================================*/

// nnti ada statement klo sudah mulai , soalnya akan di load

load_soal();
load_total_nomor();
// nanti di ubah
function load_soal() {
	$.ajax({
	    url: '<?php echo site_url() ?>Admin/load_soal/'+localStorage.getItem('kode_ujian'),
	    type: 'post',
	    success: function(data){
        	$('#soal_konten').html(data);
	    }
	});
}
function load_total_nomor() {
	$.ajax({
	    url: '<?php echo site_url() ?>Admin/load_total_nomor/'+localStorage.getItem('kode_ujian'),
	    type: 'post',
	    success: function(data){
        	$('#total_nomor_soal').html(data);
	    }
	});
}
</script>