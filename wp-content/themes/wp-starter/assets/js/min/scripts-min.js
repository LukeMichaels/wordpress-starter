!function($,a,n){$(function(){"use strict";var a=$(".hamburger");a.on("click",function(){a.toggleClass("is-active"),$(".offCanvasMenu").toggleClass("open")}),$("#menu li a").each(function(){var a=$(this);a.html(a.html().replace(/^(\w+)/,'<div class="first-word">$1</div>'))}),$("#search-form").animate({marginTop:"-50px"},200),$(".show-search").toggle(function(){$("#search-form").animate({marginTop:"0"},500)},function(){$("#search-form").animate({marginTop:"-50px"},500)}),$(".close").click(function(){$("#search-form").animate({marginTop:"-50px"},500)}),$(".show-search").click(function(){return $("html, body").animate({scrollTop:0},"fast"),!1})})}(jQuery,this);