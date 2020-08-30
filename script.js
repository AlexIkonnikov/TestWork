$(document).ready(function(){

      $("#form__range1").change(function(){
        $("#form__place1").val(this.value);
      });

      $("#form__range2").change(function(){
        $("#form__place2").val(this.value);
      });


      $("#form__range1").on("input", function(){
        $("#form__place1").val(this.value);
        var val = $('#form__range1').val();
        val = (val*100)/(3000000);
        $('#form__range1').css({'background':'-webkit-linear-gradient(left ,#84aa31 0%,#84aa31 '+val+'%,#1e1f22 '+val+'%, #1e1f22 100%)'});
      });

      
      $("#form__place1").on("input", function(){
        $("#form__range1").val(this.value);
        var val = $("#form__place1").val();
        val = (val*100)/(3000000);
        $('#form__range1').css({'background':'-webkit-linear-gradient(left ,#84aa31 0%,#84aa31 '+val+'%,#1e1f22 '+val+'%, #1e1f22 100%)'});
      });


      $("#form__range2").on("input", function(){
        $("#form__place2").val(this.value);
        var val = $('#form__range2').val();
        val = (val*100)/(3000000);
        $('#form__range2').css({'background':'-webkit-linear-gradient(left ,#84aa31 0%,#84aa31 '+val+'%,#1e1f22 '+val+'%, #1e1f22 100%)'});
      });

      $("#form__place2").on("input", function(){
        $("#form__range2").val(this.value);
        var val = $("#form__place2").val();
        val = (val*100)/(3000000);
        $('#form__range2').css({'background':'-webkit-linear-gradient(left ,#84aa31 0%,#84aa31 '+val+'%,#1e1f22 '+val+'%, #1e1f22 100%)'});
      });

      $.datepicker.regional['ru'] = {
        closeText: 'Закрыть',
        prevText: 'Предыдущий',
        nextText: 'Следующий',
        currentText: 'Сегодня',
        monthNames: ['Январь','Февраль','Март','Апрель','Май','Июнь','Июль','Август','Сентябрь','Октябрь','Ноябрь','Декабрь'],
        monthNamesShort: ['Янв','Фев','Мар','Апр','Май','Июн','Июл','Авг','Сен','Окт','Ноя','Дек'],
        dayNames: ['воскресенье','понедельник','вторник','среда','четверг','пятница','суббота'],
        dayNamesShort: ['вск','пнд','втр','срд','чтв','птн','сбт'],
        dayNamesMin: ['Вс','Пн','Вт','Ср','Чт','Пт','Сб'],
        weekHeader: 'Не',
        dateFormat: 'dd.mm.yy',
        firstDay: 1,
        isRTL: false,
        showMonthAfterYear: false,
        yearSuffix: ''
    };
    $.datepicker.setDefaults($.datepicker.regional['ru']);
    

      
      $(function(){
        $("#datepicker").datepicker();
        $("#datepicker").datepicker("setDate", new Date());
    });

      $("input:radio").change(function(){
        if ($(".yes").prop("checked"))
        {
          $("#form__place2").attr('disabled', false);
          $("#form__range2").attr('disabled', false);
        }
        else{
          $("#form__place2").attr('disabled', true);
          $("#form__range2").attr('disabled', true);
        }
      });

      

    
  
      $(".form").submit(function(evt){
        evt.preventDefault();
        $.ajax({
          url: "calc.php",
          type: "POST",
          dataType: "json",
          data: $(".form").serialize(),
          cache: false,
          beforeSend: function(xhr, opt){
            if($("#form__place1").val() == '' || $("#datepicker").datepicker().val() == ""){
              xhr.abort();
              alert('Введите недостающие данные!')
              return false;
            }
             else if($(".yes").prop('checked') == true && $("#form__place2").val() == '') {
              xhr.abort();
              alert('Введите недостающие данные!')
              return false;
            }
            else {
              return true;
            }
          },
          success: function(data) { 
            result = data ["summn"];
            result = result.toFixed(0);
            result = String(result).replace(/(\d)(?=(\d{3})+([^\d]|$))/g, '$1 ');
            $(".form__result").text("Результат: " + result + " Р.");
          },
          
        });
       
      });
});

