<?php
include "includes/header.php";
include "includes/navbar.php";
?>

<body class="video_body">
    <div class="container">
        <div class="row mt-4">
            <div class="col">
                <div class="card">
                    <div class="card-body">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-3 px-3 mt-2">
                                    <div class="t-dropdown-block">
                                        <div class="t-dropdown-select">
                                            <input type="text" class="t-dropdown-input form-control"
                                                placeholder="Select a Subject" />
                                            <span class="t-select-btn">
                                            </span>
                                        </div>
                                        <ul class="t-dropdown-list">
                                            <div class="input-icon mt-2">
                                                <input type="text" class="form-control" placeholder="search subject"
                                                    autofocus>
                                            </div>
                                            <span class="t-dropdown-item sofware_head">SOFTWARE</span>
                                            <li class="t-dropdown-item">IT TOOLS &amp; NETWORK BASICS</li>
                                            <li class="t-dropdown-item">WEB DESIGNING & PUBLISHING</li>
                                            <span class="t-dropdown-item DM">Digital Marketing</span>
                                            <li class="t-dropdown-item">DIGITAL MARKETING</li>
                                            <li class="t-dropdown-item ad_web_eng">ADVANCED WEBSITE ENGINEERING
                                            </li>
                                            <li class="t-dropdown-item">JQUERY</li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-lg-9 mt-2">
                                    <form action="">
                                        <input type="text" placeholder="Search video by title " class="form-control">
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


</body>

<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script>
    $(document).ready(function () {
        //DropDown input - select
        $(".t-dropdown-input").on("click", function () {
            $(this).parent().next().slideDown("fast");
        });

        $(".t-select-btn").on("click", function () {
            $(".t-dropdown-list").slideUp("fast");

            if (!$(this).prev().attr("disabled")) {
                $(this).prev().trigger("click");
            }
        });

        $(".t-dropdown-input").width(
            $(".t-dropdown-select").width() - $(".t-select-btn").width() - 13
        );

        $(".t-dropdown-list").width($(".t-dropdown-select").width());

        $(".t-dropdown-input").val("");

        $("li.t-dropdown-item").on("click", function () {
            var text = $(this).html();
            $(this).parent().prev().find(".t-dropdown-input").val(text);
            $(".t-dropdown-list").slideUp("fast");
        });

        $(document).on("click", function (event) {
            if (
                $(event.target).closest(".t-dropdown-input, .t-select-btn").length
            )
                return;
            $(".t-dropdown-list").slideUp("fast");
            event.stopPropagation();
        });
        // END //
    });
</script>
<?php
include "includes/footer.php";
?>