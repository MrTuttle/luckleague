jQuery(document).ready(function($){var t=$(".isotope-grid"),e=$("#isotope li");$(e).on("click","a",function(t){t.preventDefault(),$(e).find("a").removeClass("current"),$(this).addClass("current")}),$(e).on("click",function(e){e.preventDefault();var i="."+$(this).attr("id")+" ";t.isotope({itemSelector:".item",layoutMode:"fitRows",filter:i})})});