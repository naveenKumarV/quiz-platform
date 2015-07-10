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
            if(!data.answered) {
                $("#" + data.answer).attr({
                    'class': 'choice btn-success'
                });
                if (data.correct == true) {
                    var text = "You have chosen the right option.<br/>";
                } else {
                    var text = "Alas! You chosen the wrong option." +
                            " The correct option is " + "<b>" + data.answer + "</b>" + ".<br/>";
                    var chosen = $('input[type=radio]:checked').val();
                    $("#" + chosen).attr('class', 'choice btn-danger');
                }
                text += "Your score is " + "<b>" + data.score + "</b>";

            }else{
                var text = "You have already answered this question.";
            }
            $("#response").html(text);
            $("#next").fadeIn(2000);
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