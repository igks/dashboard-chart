// Side bar 
function actmenu(){
	var NavHigh = $('.container-header').height();
	var SideBarWidth = $('#mySidenav').width();
	var WinWidth = $(window).width();
	if (SideBarWidth == 0) {
		$('.menu-icon').removeClass('fa-bars');
		$('.menu-icon').addClass('fa-times');
		if (WinWidth < 768) {
			$('#mySidenav').css('width','100%');
			$('#mySidenav').css('top',NavHigh);
		} else {
			$('#mySidenav').css('width','150px');
			$('#main').css('marginLeft','150px');
		}
	} else {
		$('.menu-icon').removeClass('fa-times');
		$('.menu-icon').addClass('fa-bars');
		$('#mySidenav').css('width','0');
		$('#main').css('marginLeft','0');
		$('#mySidenav').css('top','0');
	}
}
// end of side navigation
// Image preview
function previewImage() {
    document.getElementById("image-preview").style.display = "block";
    document.getElementById("image-preview").style.height = "150px";
		document.getElementById("image-preview").style.width = "150px";
    var oFReader = new FileReader();
     oFReader.readAsDataURL(document.getElementById("image-source").files[0]);

    oFReader.onload = function(oFREvent) {
      document.getElementById("image-preview").src = oFREvent.target.result;
    };
  };
// end image preview
// Sweat alert
//tambah/diubah/dihapus
const flash = $('.flash').data('flash');

if (flash) {
	Swal({
		title: 'Data berhasil ' + flash,
		text: '',
		type: 'success'
	});
}
// konfirmasi hapus
$('.tombolHapus').click(function(event) {
  event.preventDefault();
	const href = $(this).attr('href');

	Swal({
		title: 'Apakah anda yakin?',
		text: "Data akan dihapus dan tidak dapat dikembalikan lagi!",
		type: 'warning',
		showCancelButton: true,
		confirmButtonColor: '#3085d6',
		cancelButtonColor: '#d33',
		confirmButtonText: 'Hapus data!'
	}).then((result) => {
		if (result.value) {
			document.location.href = href;
		}
	});
});
// end sweat alert

$(function() {
		// Data tables
    $("#table-data").DataTable();
});

