$(function() {
	customSelect();
	tooltipHelperInput();
});


/* ------------------------- 
 * customSelect 
 * -------------------------
 */

var customSelect = function() {
    $("select.custom-select").selectpicker({style: 'btn-inverse', menuStyle: 'dropdown-inverse'});
}



/* ------------------------- 
 * tooltipHelperInput 
 * -------------------------
 */

var tooltipHelperInput = function() {
	var input = $("input");

	input.each(function(i) {

		if (typeof $(this).attr("data-helper") != "undefined" && $(this).attr("data-helper") != "") {
			mountTooltip($(this));
		}
	});
}



/* ------------------------- 
 * mountTooltip
 * ------------------------- 
 *
 * @params element object
 */

var mountTooltip = function( element ) {
	var html = "";

	html  = "<div class='tooltip fade in right' style='display:none'>";
	html += "<div class='tooltip-arrow'></div>";
	html += "<div class='tooltip-inner'>" + element.attr("data-helper") + "</div>";
	html += "</div>";

	element.parent().append(html);

	eventHoverTooltip( element )
}



/* ------------------------- 
 * eventHoverTooltip
 * ------------------------- 
 *
 * @params seletor object
 */

var eventHoverTooltip = function( seletor ) {

	seletor.focusin(function() {
		seletor.parent().css({ "position": "relative" });
		seletor.siblings(".tooltip").css({ "position": "absolute", "top": seletor.position().top, "left": (seletor.width() + 15) });
		seletor.siblings(".tooltip").children(".tooltip-arrow").css({ "top": "22px" });
		seletor.siblings(".tooltip").show();
	}).focusout(function() {
		seletor.parent().removeAttr("style");
		seletor.siblings(".tooltip").removeAttr("style");
		seletor.siblings(".tooltip").hide();
	});
}

