const swal = $('.swal').data('swal');
if (swal){
	Swal.fire({
		title: 'Pesan Berhasil Dikirim',
		text: 	swal,
		icon: 	'success'
	})
}