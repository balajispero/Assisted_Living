
$('.numberonly').keyup(function() {
    var $th = $(this);
    $th.val( $th.val().replace(/[^0-9]/g, function(str) { return ''; } ) );
});
$('.alphaonly').keyup(function() {
    var $th = $(this);
    $th.val( $th.val().replace(/[^a-zA-Z ]/g, function(str) { return ''; } ) );
});

/**************** Barthel index validation******************/
$('.bi1number').keyup(function() {
    var $th = $(this);
    $th.val( $th.val().replace(/[^0-2]{1}/g, function(str) { return ''; } ) );
});
$('.bi2number').keyup(function() {
    var $th = $(this);
    $th.val( $th.val().replace(/[^0-1]{1}/g, function(str) { return ''; } ) );
});
$('.bi3number').keyup(function() {
    var $th = $(this);
    $th.val( $th.val().replace(/[^0-3]{1}/g, function(str) { return ''; } ) );
});
/**************** Barthel index validation******************/
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

        /*********************Start Calculate Age**********************/
          function calAge() {
        
            var dob=$("#birthday").val();
            dob = new Date(dob);
            var today = new Date();
            var age = Math.floor((today-dob) / (365.25 * 24 * 60 * 60 * 1000));
            $('#age').val(age);
            /*document.getElementById("result").innerHTML =  
             "Age is: "+ age + "";*/
          }
        /*********************End Calculate Age**********************/

        /*********************Show maxdate today in calender**********************/
         $(function(){
        var dtToday = new Date();
    
        var month = dtToday.getMonth() + 1;// jan=0; feb=1 .......
        var day = dtToday.getDate();
        var year = dtToday.getFullYear() - 0;
        if(month < 10)
            month = '0' + month.toString();
        if(day < 10)
            day = '0' + day.toString();
        var minDate = year + '-' + month + '-' + day;
        var maxDate = year + '-' + month + '-' + day;
        $('#cTo').attr('max', maxDate);
        }); 
        /*********************Show maxdate today in calender**********************/