<!DOCTYPE html>
<html>
<head>
<title>Load Data Dynamically on Page Scroll using jQuery AJAX, PHP and MySQL</title>
    <style>
        .well {
            padding: 5px;
        }
    </style>
</head>
<body>

<div class="container">
    <h2>Example: Load Data On Page Scroll Using jQuery, PHP and MySQL</h2>
    <div id="messages">
        <?php include('load.php'); ?>
    </div>
    <div id="loader" style="text-align:center;"><img src="spinner.gif"/></div>
</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>

<script>
    $(document).ready(function () {
        $('#loader').hide();
        $(window).scroll(function () {
            if ($(window).scrollTop() == $(document).height() - $(window).height()) {
                if ($(".page_number:last").val() <= $(".total_record").val()) {
                    const page_num = parseInt($(".page_number:last").val()) + 1;
                    loadRecords('load.php?page=' + page_num);
                } else {
                    $('#loader').hide();
                }
            } else {
                $('#loader').hide();
            }
        });
    });

    function loadRecords(url) {
        $.ajax({
            url: url,
            type: "GET",
            data: {
                total_record: $(".total_record").val()
            },
            beforeSend: function () {
                setTimeout(() => {
                    $('#loader').show();
                }, 1000);
            },
            complete: function() {
                $('#loader').hide();
            },
            success: function(data) {
                $("#messages").append(data);
            },
            error: function() {
            }
        }).done(function(data) {
            console.log(url);
            //console.log("data: " + JSON.stringify(data));
        });
    }
</script>
</body>
</html>