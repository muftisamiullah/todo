$(function() {
  $('input[name="date"]').daterangepicker({
     minDate:moment(),
    singleDatePicker: true,
    showDropdowns: true,
   
   
  });

  
});

//ajax calls

$(document).ready(function(){

      $('#getTaskData').submit(function(event){
         event.preventDefault();
        
        $.ajax({
         
          url:'save.php',
          data:{
            task:$('#task').val(),
            radio:$("input[name='radio']:checked").val(),
            date:$('#datepicker').val(),
            
          },
          type:'POST',
          dataType:'JSON',
          success:function(data,status,xhr){
            console.log('success');
            console.log(data);
            console.log(status);
            console.log(xhr);
          },
          error:function(data,status,xhr){
            console.log('error');
            console.log(data.message);
            console.log(status);
            console.log(xhr);

          
          },

        });
        

      });//submit close



});