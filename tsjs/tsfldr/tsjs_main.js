(function ($) {
  $(document).ready(function () {
    $._qbn_MobMnuHndlr = () => {
      const exitIcon = $(".exit-icon");
      const togglerMnubtn = $(".togglerMnubtn");
      const nav_cntnr = $(".nav_cntnr");
      const notCollps_menu = $(".notCollps-menu");
      const navbarCollapse = $("#TopMenuModal");
      const topMenu = $("#topMenu");
      const $offcanvas = $("#offcanvasRight");

      // when click on exit icon
      exitIcon.on("click", function () {
        // Hide the menu
        const collapse = bootstrap.Collapse.getInstance(navbarCollapse[0]); // Convert jQuery object to DOM element
        if (collapse) {
          collapse.hide();
          topMenu
            .removeClass("tsbg-bg2 pt-4 tsTopMenu-css")
            .removeAttr("style");
          nav_cntnr.addClass("tsNav_cntnr_css");
          nav_cntnr.removeClass("pt-4 tsbg-F");
          notCollps_menu.addClass("mt-4");
        }
      });

      // when click on hamburger icon
      togglerMnubtn.on("click", function () {
        // when show the menu
        topMenu.addClass("tsbg-bg2 pt-4 tsTopMenu-css");
        nav_cntnr.addClass("tsnav_cntr_opened");
        nav_cntnr.addClass("tsbg-F pt-4");
        notCollps_menu.removeClass("mt-4");
      });
    };
    $.TSAddFunc("_qbn_MobMnuHndlr", $._qbn_MobMnuHndlr);

    //************************** */ tshome page js **********************
    $._tsCanvase_Cats = () => {
      const catsMaster = $(".categories-list").find(".category-master");
      // const storesWebCategoriesSection = $(".tsc-sec-tsstoreslist");
      // const stresMbileOffcnvsCatsSection = s$("#offcanvasRight");
 
      const category_item = $(".category-item");
      const slcted_Cats_Hidn_Inpt = $("#selectedCats");
      let selectedCats = []; // Initialize selectedCats array here

      //*********** */ Handle category-master click*********************
      catsMaster.on("click", (e) => {
        const categoryMaster = $(e.target).closest(".category-master");

        if (categoryMaster.attr("categories") !== undefined && categoryMaster.attr("AllSelected") !== "true") {
          $(".active_bg_black").removeClass("active_bg_black");
          selectedCats = [];
          // Push category values in selectedCats
          $(".category-item .category_value").each(function () {
            const textOnly = $(this).text();
            const filteredText = textOnly.slice(2).trim(); 
            if (!selectedCats.includes(filteredText)) {
              selectedCats.push(filteredText);
            }
          });
          

          categoryMaster.attr("AllSelected", "true");
          slcted_Cats_Hidn_Inpt.attr(
            "data-selectedCats",
            selectedCats.join(",")
          );

          $(".category-item").addClass("active_bg_black");
        } else {
          categoryMaster.attr("AllSelected", "false");
          slcted_Cats_Hidn_Inpt.attr("data-selectedCats", "");
          $(".category-item").removeClass("active_bg_black");
        }
        e.preventDefault();
      });

      //************* */ Handle category-item click*************
      category_item.on("click", (e) => {
        const selectedCateValue = $(e.target).closest(".category-item").find(".category_value").text().slice(2).trim();
        let Filterselectedcats =
          slcted_Cats_Hidn_Inpt.attr("data-selectedCats");
          selectedCats = [];
        selectedCats = Filterselectedcats ? Filterselectedcats.split(",") : [];

        if ($(e.target).closest(".category-item").hasClass("active_bg_black")) {
          $(e.target).closest(".category-item").removeClass("active_bg_black");

          const newSelectedCats = selectedCats.filter(
            (cate) => cate !== selectedCateValue
          );

          slcted_Cats_Hidn_Inpt.attr("data-selectedCats",newSelectedCats.join(","));
        } else {
          $(e.target).closest(".category-item").addClass("active_bg_black");

          if (!selectedCats.includes(selectedCateValue)) {
            selectedCats.push(selectedCateValue);
          }

          slcted_Cats_Hidn_Inpt.attr(
            "data-selectedCats",
            selectedCats.join(",")
          );
        }
      });
    };

    $.TSAddFunc("_tsCanvase_Cats", $._tsCanvase_Cats);

    // ****************FilterBtnCats Handler Function******************
    $._updateFilterBtnCats = () => {
      // Get elements

      const $applyButton = $("#applySort1");
      const $clearButton = $("#clearSort1");

      // Handle clear button click
      $clearButton.on("click", function () {
        const slcted_Cats_Hidn_Inpt = $("#selectedCats");
        const categoryMaster = $(".category-master");
        categoryMaster.attr("AllSelected", "false");
        slcted_Cats_Hidn_Inpt.attr("data-selectedCats", "");
        $(".category-item").removeClass("active_bg_black");
        const $offcanvas = $("#offcanvasRight");
        const offcanvasElement = $offcanvas[0];
        const offcanvasInstance =
          bootstrap.Offcanvas.getInstance(offcanvasElement);
        offcanvasInstance.hide();
      });
      // Handle apply button click
      $applyButton.on("click", function () {
        // Close the offcanvas
        const $offcanvas = $("#offcanvasRight");
        const offcanvasElement = $offcanvas[0];
        const offcanvasInstance =
          bootstrap.Offcanvas.getInstance(offcanvasElement);
        offcanvasInstance.hide();
      });
    };
    $.TSAddFunc("_updateFilterBtnCats", $._updateFilterBtnCats);

    //************************** */ tsstores page js **********************
   


    $.TSAddFunc("_tsstoresCategoriesTags", $._tsstoresCategoriesTags);

    $.TSAddFunc("_tsstoresTemoCard", $._tsstoresTemoCard);
    $._tsstoresPagination = () => {
      const pagination = $(".pagination");

      // Add event listener to child elements of `.pagination`
      pagination.on("click", ".pg_num", function (e) {
        e.preventDefault(); // Prevent default link behavior if it's an anchor
        // Remove the class from previously active element
        $(".active_bg_black").removeClass("active_bg_black");

        // Add the class to the clicked element
        $(this).addClass("active_bg_black");
      });
    };

    //************************** */ End tsstores page js **********************

    // ****************************** Sliders Begain********************************
    $._owlTopSlider = $(".tsc-sec-tstopslider .SliderX").owlCarousel({
      rtl: $.IsRtl,
      //items:1,
      //margin:20,
      //stagePadding:0,
      loop: true,
      nav: false,
      dots: false,
      autoplay: $._tsslof_tstopslider,
      smartSpeed: 500,
      autoplaySpeed: 500,
      autoplayTimeout: $._tsslsp_tstopslider,
      responsive: {
        0: {
          items: 1,
          stagePadding: 0,
        },
        375: {
          items: 1,
          stagePadding: 50,
          margin: 15,
        },
        425: {
          items: 1,
          stagePadding: 50,
          margin: 15,
        },
        550: {
          items: 1,
          stagePadding: 150,
          margin: 25,
        },
        768: {
          items: 1,
          stagePadding: 150,
          margin: 25,
        },
        1000: {
          items: 1,
          stagePadding: 200,
          margin: 25,
        },
        1350: {
          items: 1,
          stagePadding: 300,
          margin: 25,
        },
        1600: {
          items: 1,
          stagePadding: 400,
          margin: 25,
        },
        1800: {
          items: 1,
          stagePadding: 500,
          margin: 25,
        },
      },
    });
    $.TSAddFunc("_owlTopSlider", $._owlTopSlider);

    $._tsnewqbns = $(".tsc-sec-tsnewqbns .SliderX").owlCarousel({
      rtl: $.IsRtl,
      //items:1,
      //margin:20,
      //stagePadding:0,
      loop: true,
      nav: false,
      dots: false,
      autoplay: $._tsslof_tsnewqbns,
      smartSpeed: 200,
      autoplaySpeed: 500,
      autoplayTimeout: $._tsslsp_tsnewqbns,

      responsive: {
        0: {
          items: 1,
          stagePadding: 0,
        },
        375: {
          items: 1,
          stagePadding: 50,
        },
        425: {
          items: 1,
          stagePadding: 50,
        },
        550: {
          items: 2,
        },
        768: {
          items: 3,
        },
        1000: {
          items: 3,
          stagePadding: 0,
          margin: 0,
        },
      },
    });
    $.TSAddFunc("_tsnewqbns", $._tsnewqbns);
    $._tsrelqbns = $(".tsc-sec-tsrelqbns .SliderX").owlCarousel({
      rtl: $.IsRtl,
      //items:1,
      //margin:20,
      //stagePadding:0,
      loop: true,
      nav: false,
      dots: false,
      autoplay: $._tsslof_tsrelqbns,
      smartSpeed: 900,
      autoplaySpeed: 700,
      autoplayTimeout: $._tsslsp_tsrelqbns,

      responsive: {
        0: {
          items: 1,
          stagePadding: 0,
        },
        375: {
          items: 1,
          stagePadding: 50,
        },
        425: {
          items: 1,
          stagePadding: 50,
        },
        550: {
          items: 2,
        },
        768: {
          items: 3,
        },
        1000: {
          items: 3,
          stagePadding: 0,
          margin: 0,
        },
      },
    });
    $.TSAddFunc("_tsrelqbns", $._tsrelqbns);

    $._tsnewoffers = $(".tsc-sec-tsnewoffers .SliderX").owlCarousel({
      rtl: $.IsRtl,
      //items:1,
      //margin:20,
      //stagePadding:0,
      loop: true,
      nav: false,
      dots: false,
      autoplay: $._tsslof_tsnewoffers,
      smartSpeed: 800,
      autoplaySpeed: 600,
      autoplayTimeout: $._tsslsp_tsnewoffers,

      responsive: {
        0: {
          items: 2,
          margin: 20,
          stagePadding: 25,
        },
        375: {
          items: 2,
          margin: 20,
          stagePadding: 25,
        },
        425: {
          items: 2,
          margin: 20,
          stagePadding: 0,
        },
        550: {
          items: 2,
          margin: 20,
        },
        768: {
          items: 3,
          margin: 20,
        },
        1000: {
          items: 4,
          stagePadding: 0,
          margin: 50,
        },
      },
    });
    $.TSAddFunc("_tsnewoffers", $._tsnewoffers);

    //
    $._tsbststores = $(".tsc-sec-tsbststores .SliderX").owlCarousel({
      rtl: $.IsRtl,
      //items:1,
      //margin:20,
      //stagePadding:0,
      loop: true,
      nav: false,
      dots: false,
      autoplay: $._tsslof_tsbststores,
      smartSpeed: 900,
      autoplaySpeed: 800,
      autoplayTimeout: $._tsslsp_tsbststores,

      responsive: {
        0: {
          items: 3,
          margin: 10,
          stagePadding: 10,
        },
        375: {
          items: 4,
          margin: 0,
          stagePadding: 10,
        },
        425: {
          items: 4,
          stagePadding: 15,
        },
        550: {
          items: 4,
          stagePadding: 20,
        },
        768: {
          items: 5,
        },

        1000: {
          items: 6,
        },
      },
    });
    $.TSAddFunc("_tsbststores", $._tsbststores);

    $._tsblogslider = $(".tsc-sec-tsblogslider .SliderX").owlCarousel({
      rtl: $.IsRtl,
      //items:1,
      //margin:20,
      //stagePadding:0,
      loop: true,
      nav: false,
      dots: false,
      autoplay: $._tsslof_tsblogslider,
      smartSpeed: 900,
      autoplaySpeed: 800,
      autoplayTimeout: $._tsslsp_tsblogslider,

      responsive: {
        0: {
          items: 1,
          margin: 20,
          stagePadding: 0,
        },
        375: {
          items: 1,
          margin: 20,
          stagePadding: 50,
        },
        425: {
          items: 2,
          margin: 20,
          stagePadding: 0,
        },
        550: {
          items: 2,
          margin: 25,
        },
        768: {
          items: 2,
          margin: 25,
        },
        1000: {
          items: 3,
          stagePadding: 0,
          margin: 25,
        },
      },
    });

    $.TSAddFunc("_tsblogslider", $._tsblogslider);
    $._tsrelpsts = $(".tsc-sec-tsrelpsts .SliderX").owlCarousel({
      rtl: $.IsRtl,
      //items:1,
      //margin:20,
      //stagePadding:0,
      loop: true,
      nav: false,
      dots: false,
      autoplay: $._tsslof_tsrelpsts,
      smartSpeed: 900,
      autoplaySpeed: 800,
      autoplayTimeout: $._tsslsp_tsrelpsts,

      responsive: {
        0: {
          items: 1,
          margin: 20,
          stagePadding: 0,
        },
        375: {
          items: 1,
          margin: 20,
          stagePadding: 50,
        },
        425: {
          items: 2,
          margin: 20,
          stagePadding: 0,
        },
        550: {
          items: 2,
          margin: 25,
        },
        768: {
          items: 2,
          margin: 25,
        },
        1000: {
          items: 3,
          stagePadding: 0,
          margin: 25,
        },
      },
    });

    $.TSAddFunc("_tsrelpsts", $._tsrelpsts);
    //
    $._tsprtnrs = $(".tsc-sec-tsprtnrs .SliderX").owlCarousel({
      rtl: $.IsRtl,
      //items:1,
      //margin:20,
      //stagePadding:0,
      loop: true,
      nav: false,
      dots: false,
      autoplay: $._tsslof_tsprtnrs,
      smartSpeed: 900,
      autoplaySpeed: 600,
      autoplayTimeout: $._tsslsp_tsprtnrs,

      responsive: {
        0: {
          items: 4,
          margin: 20,
          stagePadding: 0,
        },
        375: {
          items: 4,
          margin: 5,
          stagePadding: 0,
        },
        425: {
          items: 4,
          margin: 5,
          stagePadding: 0,
        },
        550: {
          items: 4,
          margin: 25,
        },
        768: {
          items: 4,
          margin: 25,
        },
        1000: {
          items: 6,
          stagePadding: 0,
          margin: 25,
        },
      },
    });
    $.TSAddFunc("_tsprtnrs", $._tsprtnrs);

    $._tspstslist = $(".tsc-sec-tspstslist .SliderX").owlCarousel({
      rtl: $.IsRtl,
      //items:1,
      //margin:20,
      //stagePadding:0,
      loop: true,
      nav: false,
      autoWidth: true,
      dots: false,
      autoplay: $._tsslof_tspstslist,
      margin: 30,
      smartSpeed: 800,
      autoplaySpeed: 500,
      autoplayTimeout: $._tsslsp_tspstslist,

      responsive: {
        0: {
          items: 4,
          margin: 20,
          stagePadding: 0,
        },
        375: {
          items: 6,
          margin: 10,
          stagePadding: 0,
        },
        425: {
          items: 6,
          margin: 10,
          stagePadding: 0,
        },
        550: {
          items: 4,
          margin: 25,
        },
        768: {
          items: 4,
          margin: 25,
        },
        1000: {
          items: 7,
          stagePadding: 0,
          margin: 20,
        },
      },
    });
    $.TSAddFunc("_tspstslist", $._tspstslist);
    //
    // Handle active state of _tspstslist
    $._actvStateHandlerOfTspstslist = $(".tsc-sec-tspstslist .post-button").click(
      function (e) {
        e.preventDefault();

        if ($(e.target).hasClass("active")) {
          $(e.target).removeClass("active");
        } else {
          $(".tsc-sec-tspstslist .post-button").removeClass("active");
          $(this).addClass("active");
        }
      }
    );

    $.TSAddFunc(
      "_actvStateHandlerOfTspstslist",
      $._actvStateHandlerOfTspstslist
    );
    //
    $._SlidersNav = function () {
      $(".tsc-sec-tsnewqbns .navbtn_next").click(function () {
        $._tsnewqbns.trigger("next.owl.carousel", [500]);
      });
      $(".tsc-sec-tsnewqbns .navbtn_prev").click(function () {
        $._tsnewqbns.trigger("prev.owl.carousel", [500]);
      });
      $(".tsc-sec-tsnewoffers .navbtn_next").click(function () {
        $._tsnewoffers.trigger("next.owl.carousel", [500]);
      });
      $(".tsc-sec-tsnewoffers .navbtn_prev").click(function () {
        $._tsnewoffers.trigger("prev.owl.carousel", [500]);
      });
      $(".tsc-sec-tsbststores .navbtn_next").click(function () {
        $._tsbststores.trigger("next.owl.carousel", [500]);
      });
      $(".tsc-sec-tsbststores .navbtn_prev").click(function () {
        $._tsbststores.trigger("prev.owl.carousel", [500]);
      });
      $(".tsc-sec-tsblogslider .navbtn_next").click(function () {
        $._tsblogslider.trigger("next.owl.carousel", [500]);
      });
      $(".tsc-sec-tsblogslider .navbtn_prev").click(function () {
        $._tsblogslider.trigger("prev.owl.carousel", [500]);
      });
      $(".tsc-sec-tsprtnrs .navbtn_next").click(function () {
        $._tsprtnrs.trigger("next.owl.carousel", [500]);
      });
      $(".tsc-sec-tsprtnrs .navbtn_prev").click(function () {
        $._tsprtnrs.trigger("prev.owl.carousel", [500]);
      });
      $(".tsc-sec-tspstslist .navbtn_next").click(function () {
        $._tspstslist.trigger("next.owl.carousel", [500]);
      });
      $(".tsc-sec-tspstslist .navbtn_prev").click(function () {
        $._tspstslist.trigger("prev.owl.carousel", [500]);
      });
      $(".tsc-sec-tstopslider .navbtn_next").click(function () {
        $._owlTopSlider.trigger("next.owl.carousel", [500]);
      });
      $(".tsc-sec-tstopslider .navbtn_prev").click(function () {
        $._owlTopSlider.trigger("prev.owl.carousel", [500]);
      });
    };

    $.TSAddFunc("_SlidersNav", $._SlidersNav);

    //
  });
})(jQuery);
