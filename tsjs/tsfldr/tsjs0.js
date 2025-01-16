(function($) {
	$(document).ready(function() {
		$.IsRtl = true;
        $.DirectionFn = function () {
            const Dir = document.querySelector("html").getAttribute("dir");
            if(Dir == "rtl") {
                $.IsRtl = true;
            }else if(Dir == "ltr"){
                $.IsRtl = false;
            }
            else {
                $.IsRtl = false;
            }
        };
        $.DirectionFn();
        //
        $.TSInitMenu = function() {
/*             document.getElementsByClassName('tsc-mnu-close')[0].addEventListener('click', function () {
                var navbarCollapse = document.getElementById('TopMenuModal');
                if (navbarCollapse.classList.contains('show')) {
                // If the menu is open, close it
                new bootstrap.Collapse(navbarCollapse, {toggle: false}).hide();
                } else {
                // If the menu is closed, open it
                new bootstrap.Collapse(navbarCollapse, {toggle: false}).show();
                }
            });
 */            //TiknoSoft ----------------------->>
            /*const currentlocate = location.href; // Return the Current page..
            const menuItem = document.querySelectorAll('#TopMenuModal .tsc-mnu-blk .tsc-mnu-lnk');
            const menulength = menuItem.length;
            for(let i=0;i<menulength;i++){
                if(menuItem[i].href === currentlocate) {
                    menuItem[i].classList.add("active")
                }
            }*/
            //-------Menu---------
            const _SetActive = function(SrcEle) {
                const currentlocate = location.href; // Return the Current page..
                $("#TopMenuModal .tsc-mnu-blk .tsc-mnu-lnk").each((index, element) => {
                    element.classList.remove("active");
                    if(element === SrcEle || ((SrcEle == null) && (element.href === currentlocate))){
                        element.classList.add("active");
                    }
                });
            }
            $("#TopMenuModal .tsc-mnu-blk .tsc-mnu-lnk").click(function(){
                _SetActive(this);
            });
            _SetActive();	//One Time at Begin
        }
        //---------------------------
        // List of Sliders
        $.TSFuncsList = {};
        $.TSAddFunc = function(funcName, funcRef) {
            if (!$.TSFuncsList[funcName]) {
                $.TSFuncsList[funcName] = funcRef;
            }
        }
        //
        $.TSCallFuncs = function()
		{
            $.each($.TSFuncsList, function(key, func) {
                if (typeof func === 'function') {
                    func(); // Call the function
                }
            });
            //
        }
        //----
        $.InitCF7TSFix = function() {
            var form = $('.wpcf7-form');
            var spinner = $('.form7-spinner');

            form.on('submit', function() {
                spinner.show();
            });

            $(document).on('wpcf7mailsent wpcf7invalid wpcf7spam wpcf7mailfailed', function() {
                spinner.hide();
            });
        };
        //----
        $.initOther = function() {
            //scroll top
            var scrollButton = $("#ts-gototop");
            $(window).on('scroll',function () {
                if ($(this).scrollTop() >= 700) {
                    scrollButton.fadeIn(1000);
                } else {
                    scrollButton.fadeOut(1000);
                }
            });
            //click to scroll top
            scrollButton.on('click', function () {
                $('html,body').animate({
                    scrollTop: 0
                }, 600);
                return false;
            });
            //scroll top

            //---- Form7
        }
        //
        //To be called at OwlCaousels Initialization
        $.EnhanceOwlItemsCss = function(event) {
            var items = $(event.target).find('.owl-item');
            // Clear previous classes
            items.removeClass('prev-item next-item');
            // Find the index of the center item
            var centerItem = items.filter('.center');
            var centerIndex = items.index(centerItem);
            // Identify previous and next items
            var prevItem = centerItem.prev('.owl-item').length ? centerItem.prev('.owl-item') : items.last();
            var nextItem = centerItem.next('.owl-item').length ? centerItem.next('.owl-item') : items.first();
            // Add classes to previous and next items
            prevItem.addClass('prev-item');
            nextItem.addClass('next-item');
        }
        //------
		$.TSInitMenu();
		$.InitCF7TSFix();
        $.initOther();
		//$.TSCallFuncs();  //Moved to tsjsz.js
	});
})(jQuery);
