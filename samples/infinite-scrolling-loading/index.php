<!DOCTYPE html>
<html>
<head>
    <title>Load Data Dynamically on Page Scroll using jQuery AJAX and PHP</title>
    <style>
        body {
            font-family: Arial;
        }

        .question {
            font-weight: bold;
            background-color: #FFF;
            padding: 7px 0 0 15px;
        }

        .answer {
            font-style: italic;
            background-color: #FFF;
            padding: 0 0 7px 15px;
        }

        #faq-result {
            margin: -10px auto 0;
            line-height: 30px;
            border-radius: 5px;
            min-height: 300px;
        }

        #loader-icon {
            text-align: center;
            display: block;
        }
    </style>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
    <script>
        $(document).ready(function () {
            $('#loader-icon').hide();
            function getResult(url) {
                $.ajax({
                    url: url,
                    type: "GET",
                    beforeSend: function () {
                        setTimeout(() => {
                            $('#loader-icon').show();
                        }, 3000);
                    },
                    complete: function () {
                        $('#loader-icon').hide();
                    },
                    success: function (data) {
                        $("#faq-result").append(data);
                    },
                    error: function () {
                    }
                });
            }

            $(window).scroll(function () {
                if ($(window).scrollTop() == $(document).height() - $(window).height()) {
                    if ($(".pagenum:last").val() <= $(".total-page").val()) {
                        const pagenum = parseInt($(".pagenum:last").val()) + 1;
                        getResult('getresult.php?page=' + pagenum);

                    } else {
                        $('#loader-icon').hide();
                    }
                } else {
                    $('#loader-icon').hide();
                }
            });
        });
    </script>
</head>
<body>
<div id="faq-result">
    <?php include('getresult.php'); ?>
</div>
<div id="loader-icon">
    <img src="LoaderIcon.gif"/>
</div>

</body>
</html>
