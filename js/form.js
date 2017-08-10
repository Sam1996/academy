jQuery(document).ready(function() {
    
jQuery("#nextpath").submit(function(event){
    
    var firstanswer = jQuery(".first_answer:checked").val();
      var secondanswer = jQuery(".second_answer:checked").val();
      var thirdanswer = jQuery(".third_answer:checked").val();
    
      event.preventDefault();      
      jQuery.ajax({
                    url : 'http://doodlebluemobile.com/edvancer/wp-admin/admin-ajax.php',
                    type : "POST",
                    data : {action: 'MyAjaxFunction',answer1:firstanswer,answer2:secondanswer,answer3:thirdanswer},
                    beforeSend:function(data){
                      jQuery("#divLoading").addClass('show');  
                    },
                    success : function(data) {
                        // alert radio value here
                        console.log(data)
                        jQuery("#myModal").css("display","none");
                        jQuery("#myModal1").css("display","block");
                        jQuery("#course_result_view").html(data);
                    },
                    complete:function(data){
                      jQuery("#divLoading").removeClass('show');  
                    },
                    error:function(data){
                        alert("Error Occured Please Try Again");
                    }
});
    });
    });


