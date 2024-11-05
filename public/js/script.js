$(document).ready(function() {
    var rating_data = 0;

    // Menampilkan modal untuk menambahkan ulasan
    $('#add_review').click(function() {
        $('#review_modal').modal('show');
    });

    // Menangani hover bintang rating
    $(document).on('mouseenter', '.submit_star', function() {
        rating_data = $(this).data('rating');
        reset_background();
        for (var count = 1; count <= rating_data; count++) {
            $('#submit_star_' + count).addClass('text-warning');
        }
    });

    // Mengatur ulang latar belakang bintang
    function reset_background() {
        for (var count = 1; count <= 5; count++) {
            $('#submit_star_' + count).removeClass('text-warning');
            $('#submit_star_' + count).addClass('star-light');
        }
    }

    // Mengatur ulang bintang saat mouse keluar
    $(document).on('mouseleave', '.submit_star', function() {
        reset_background();
        for (var count = 1; count <= rating_data; count++) {
            $('#submit_star_' + count).removeClass('star-light');
            $('#submit_star_' + count).addClass('text-warning'); // Tetap menyoroti bintang yang dipilih
        }
    });

    // Menangani klik pada bintang untuk memilih rating
    $(document).on('click', '.submit_star', function() {
        rating_data = $(this).data('rating');
    });

    // Menangani penyimpanan ulasan
    $(document).on('click', '#save_review', function() {
        var user_name = $('#user_name').val();
        var user_review = $('#user_review').val();

        if (user_name == '' || user_review == '' || rating_data === 0) {
            alert('All fields are required');
            return false;
        } else {
            $.ajax({
                url: 'add_review.php',
                method: 'POST',
                data: {
                    user_name: user_name,
                    user_review: user_review,
                    rating_data: rating_data
                },
                success: function(data) {
                    $('#review_modal').modal('hide'); // Tutup modal setelah sukses
                    alert(data); // Tampilkan pesan sukses dari server
                    reset_review_form();
                    load_rating_data(); // Muat ulang rating untuk mencerminkan ulasan baru
                },
                error: function(jqXHR, textStatus, errorThrown) {
                    alert('Error: ' + textStatus + ' - ' + errorThrown); // Informasikan kesalahan
                    console.error('Error details:', jqXHR.responseText); // Log error response dari server
                }
            });
        }
    });

    // Mengatur ulang form ulasan
    function reset_review_form() {
        $('#user_name').val('');
        $('#user_review').val('');
        rating_data = 0;
        reset_background();
    }

    // Memuat data rating
    function load_rating_data() {
        $.ajax({
            url: "add_review.php", // Mengubah ke add_review.php sesuai dengan file PHP yang digunakan
            method: "POST",
            data: { action: 'load_data' },
            dataType: "JSON",
            success: function(data) {
                $('#average_rating').text(data.average_rating);
                $('#total_review').text(data.total_review);

                var count_star = 0;

                $('.main_star').each(function() {
                    count_star++;
                    if (Math.ceil(data.average_rating) >= count_star) {
                        $(this).addClass('text-warning');
                        $(this).removeClass('star-light');
                    }
                });

                $('#total_five_star_review').text(data.five_star_review);
                $('#total_four_star_review').text(data.four_star_review);
                $('#total_three_star_review').text(data.three_star_review);
                $('#total_two_star_review').text(data.two_star_review);
                $('#total_one_star_review').text(data.one_star_review);

                $('#five_star_progress').css('width', (data.five_star_review / data.total_review) * 100 + '%');
                $('#four_star_progress').css('width', (data.four_star_review / data.total_review) * 100 + '%');
                $('#three_star_progress').css('width', (data.three_star_review / data.total_review) * 100 + '%');
                $('#two_star_progress').css('width', (data.two_star_review / data.total_review) * 100 + '%');
                $('#one_star_progress').css('width', (data.one_star_review / data.total_review) * 100 + '%');

                if (data.review_data.length > 0) {
                    var html = '';
                    for (var count = 0; count < data.review_data.length; count++) {
                        html += '<div class="row mb-3">';
                        html += '<div class="col-sm-1"><div class="rounded-circle bg-danger text-white pt-2 pb-2"><h3 class="text-center">' + data.review_data[count].user_name.charAt(0) + '</h3></div></div>';
                        html += '<div class="col-sm-11"><div class="card">';
                        html += '<div class="card-header"><b>' + data.review_data[count].user_name + '</b></div>';
                        html += '<div class="card-body">';
                        for (var star = 1; star <= 5; star++) {
                            var class_name = (data.review_data[count].rating >= star) ? 'text-warning' : 'star-light';
                            html += '<i class="fas fa-star ' + class_name + ' mr-1"></i>';
                        }
                        html += '<br />' + data.review_data[count].user_review;
                        html += '</div>';
                        html += '<div class="card-footer text-right">On ' + data.review_data[count].datetime + '</div>';
                        html += '</div></div></div>';
                    }
                    $('#review_content').html(html);
                }
            },
            error: function(jqXHR, textStatus, errorThrown) {
                alert('Error loading rating data: ' + textStatus);
                console.error('Error details:', jqXHR.responseText); // Log error response dari server
            }
        });
    }

    // Toggle Sidebar Menu
    document.getElementById("sidebarToggle").onclick = function() {
        const sidebar = document.getElementById("sidebarMenu");
        sidebar.style.display = sidebar.style.display === "none" ? "block" : "none";
    };
});
