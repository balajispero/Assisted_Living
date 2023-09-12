
$('.numberonly').keyup(function() {
    var $th = $(this);
    $th.val( $th.val().replace(/[^0-9]/g, function(str) { return ''; } ) );
});
$('.alphaonly').keyup(function() {
    var $th = $(this);
    $th.val( $th.val().replace(/[^a-zA-Z ]/g, function(str) { return ''; } ) );
});

/**************** mobile number validation******************/

/*$('.numberonly').keyup(function() {
    var input = document.getElementById('phone_office');
    var pattern = /^[7-9][0-9]{0,8}$/;
    var value = input.value;
    !pattern.test(value) && (input.value = value = '');
    input.addEventListener('input', function() {
        var currentValue = this.value;
        if(currentValue && !pattern.test(currentValue)) this.value = value;
        else value = currentValue;
    });
})();*/
    
/**************** mobile number validation******************/