$(function() {
    $( "#street" ).autocomplete({
        source: "/cs/customer/?&act=root-%3Emain-%3Emain-%3Eparam-%3Eparam-%3Eautocomplete",
        minLength: 2
//        select: function( event, ui ) {
//            log( ui.item ?
//                "Selected: " + ui.item.value + " aka " + ui.item.id :
//                "Nothing selected, input was " + this.value );
//        }
    });
});