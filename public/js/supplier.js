$(document).ready(function () {
    // $('.pagination').parent().addClass("");
    console.log('success');
});

let searchData = $('#search').serialize();

$.ajax({
    url: `account-list/data?page=` + page,
    method: 'GET',
    data: searchData,
    success: function (data) {
        $('#data').html(data)
    },
    error: function (error) {
        toastr['error']('Something Error');
    }
})
