$(document).ready(function(){$(window).resize(function(){if($(window).width()>=980){$(".navbar .dropdown-toggle").hover(function(){$(this).parent().toggleClass("show");$(this).parent().find(".dropdown-menu").toggleClass("show")});$(".navbar .dropdown-menu").mouseleave(function(){$(this).removeClass("show")})}})});$('#nav-toggle4').on('click',function(){$(".close4").trigger("click");if($(this).hasClass("navBtnActive4")){$("#bs-navbar4").animate({left:"-100%"},250);$(this).removeClass('navBtnActive4')}else{$("#bs-navbar4").animate({left:"0"},250);$(this).addClass('navBtnActive4');$('body').addClass('theme-nav4');$('body').removeClass('normal-state4')}});$('.close4').on('click',function(){$("#bs-navbar4").animate({left:"-100%"},250);$("#nav-toggle4").removeClass('navBtnActive1');$('body').removeClass('theme-nav4');$('body').addClass('normal-state4');setTimeout(function(){$('body').removeClass("normal-state4")},750)})