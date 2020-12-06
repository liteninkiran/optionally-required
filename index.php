<!DOCTYPE html>
<html>
    <head>

        <title>Test</title>

    </head>

    <body>

        <input type="radio" id="DF1" name="DF" value="1">
        <label for="DF1">Option 1</label><br>

        <input type="radio" id="DF2" name="DF" value="2">
        <label for="DF2">Option 2</label><br>

        <input type="radio" id="DF3" name="DF" value="3">
        <label for="DF3">Other, please specify</label><br>

        <div>
            <div>
                 <input type="text" id="othertext">
            </div>
        </div>

        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script>

            $(document).ready(function()
            {
                $("#othertext").hide();
                $('input[type=radio][name=DF]').change(function()
                {
                    if($(this).val() == 3)
                    {
                        $("#othertext").show();
                        $("#othertext").attr('required', '');
                    }
                    else
                    {
                        $("#othertext").hide();
                        $("#othertext").removeAttr('required', '');
                    }
                });
            });

        </script>


    </body>

</html>
