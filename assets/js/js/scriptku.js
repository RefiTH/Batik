const flashData = $('.flash-data').data('flashdata');

if (flashData) {
    Swal.fire({
        title: 'Your Data',
        text: 'succcess' + flashData,
        icon: 'success'
    });
}