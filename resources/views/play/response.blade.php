<script>
    $(document).ready(function()
    {
        url = ($("#question").attr("action"));
        $.ajaxSetup({ headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        } });
        function onPostClick(event)
        {
            input = $('input[type=radio]:checked').val();
            if(input == 'A' || input == 'B'||
               input == 'C' || input == 'D'){
                $.post(url, {answer:input}, onSuccess);
            }else{
                alert('Please, adhere to the rules.' +
                ' The option selected must be among A, B, C, D.');
            }
        }
        function onSuccess(data, status, xhr)
        {
            $("#post").fadeOut();
            $("#"+data.answer).attr({
                'class' : 'choice btn-success'
            });
            if (data.correct == true) {
                var text = "You have chosen the right option.";
            } else {
                var text = "Alas! You choosen the wrong option." +
                        " The correct option is " + data.answer;
                var chosen = $('input[type=radio]:checked').val();
                $("#"+chosen).attr('class','choice btn-danger');
            }
            text += "Your score is " + data.score;
            $("#response").text(text);
            $("#next").fadeIn(2000);
            console.log(data, status, xhr,xhr.status);
        }
        $('#post').on('click', onPostClick);

        var choices = $('.choice');

        choices.on('click', function(event) {
            var choice = $(event.target);
            choice.attr({
                'class' : 'choice btn-info'
            });
            choice.find('[name="answer"]')
                    .prop('checked', true)
                    .trigger('change');
            console.log($('input[type=radio]:checked').val());
        });

        var inputs = $('.choice input');
        inputs.on('change', function(event) {
            var input = $(event.target);
            var choice = $(this).closest('.choice');
            $('.choice.active').removeClass('active');
            $('.choice.btn-info').removeClass('btn-info')
                    .addClass('shadow');
            choice.addClass('active').removeClass('shadow');
            choice.addClass('btn-info');
        });
    });
</script>