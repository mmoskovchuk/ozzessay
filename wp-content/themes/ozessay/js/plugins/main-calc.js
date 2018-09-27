window.addEventListener('DOMContentLoaded', function () {
    var form = document.querySelector('[data-crm-widget=simplePriceCalc]');

    null !== form && void 0 !== form && form.addEventListener('ready', function () {

        var frontpage = document.querySelector("body").className;
        var homeclass = frontpage.split(" ")[0];
        if (homeclass === "home") {
            // var mainimage = document.createElement("div")
            // mainimage.id = "main-image";
            // mainimage.className = "pad0 hidden-xs";
            // var fblock = document.querySelector('[data-crm-widget=simplePriceCalc] div:nth-child(2)');
            // fblock.id = "fblock";
            // fblock.className = "clearfix";
            // fblock.insertBefore(mainimage, fblock.children[2]);
            document.querySelector(".of-simple-title").innerHTML = "Get a Price Quote:";
        } else {
            document.querySelector(".of-simple-title").innerHTML = "Get a Price Quote:";
        }

        document.querySelector("#of-widgets-simple-price-calc .of-scontinue-btn").innerHTML = "ORDER NOW";

        var numberPage = (function () {

            var number_page_parent = document.querySelector(
                "#of-widgets-simple-price-calc form"
            );
            var newNodeInput = document.createElement("div");

            function renderInput() {
                number_page_parent.appendChild(newNodeInput);
                newNodeInput.id = "number-page-custom";
                $("#number-page-custom")[0].innerHTML =
                    '<div id="btn-down"><i class="fa fa-minus" aria-hidden="true"></i></div><input type="text" id="number-page-input" value="1" maxlength=3/ readonly><div id="btn-up"><i class="fa fa-plus" aria-hidden="true"></i></div>';

            }

            renderInput();


            var btnUp = document.querySelector("#btn-up");
            var btnDown = document.querySelector("#btn-down");
            var input = document.querySelector("#number-page-input");


            // Highlighting text at the focus of a field

            $("#number-page-input").click(function () {
                $(this).select();
            });



            var selectoption = document.querySelectorAll("#calculator-number_page option");
            for (i = 1; i < selectoption.length + 1; i++ ) {
                var optionpart1 = selectoption[i -1].innerText.split("/")[1];
                var optionpart2 = selectoption[i -1].innerText.split("/")[0];
                selectoption[i -1].innerText = optionpart1 + ' (~' + optionpart2 + ')';
            }

            // // Set the default value for the page input field after the caching value

            var mainoptiontext = document.querySelector("#calculator-number_page");
            input.value = mainoptiontext.options[mainoptiontext.selectedIndex].text;

            if ( mainoptiontext.value == 1 ) {
                btnDown.setAttribute('class', 'nono-active');
            }
            // console.log(mainoptiontext.value);

            // We set the range of acceptable values by pressing the button

            btnUp.onclick = function () {
                var mainselect = crmJQuery("#calculator-number_page").val();
                if (mainselect >= 198) {
                    mainselect = 198;
                    btnUp.setAttribute('class', 'nono-active');
                    return;
                }
                var newmainselect = Number(mainselect) + 1;
                crmJQuery("#calculator-number_page").val(newmainselect).trigger("change");
                var mainoptiontext = document.querySelector("#calculator-number_page");
                var updatetext = mainoptiontext.options[mainoptiontext.selectedIndex].text;
                input.value = updatetext;
                btnUp.setAttribute('class', '');
                btnDown.setAttribute('class', '');
            };

            btnDown.onclick = function () {
                var mainselect = crmJQuery("#calculator-number_page").val();
                if (mainselect < 2) {
                    mainselect = 1;
                }
                var newmainselect = Number(mainselect) - 1;
                crmJQuery("#calculator-number_page").val(newmainselect).trigger("change");
                var mainoptiontext = document.querySelector("#calculator-number_page");
                var updatetext = mainoptiontext.options[mainoptiontext.selectedIndex].text;
                input.value = updatetext;
                btnDown.setAttribute('class', '');
                btnUp.setAttribute('class', '');
                if (mainselect == 2) {
                    btnDown.setAttribute('class', 'nono-active');
                    return;
                }
            };


        })();

    });
});