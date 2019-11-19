<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">

<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>

</head>
<body>
<br>
<div class="container" style="width: 500px">
    <h3 align="center">Autocomplete</h3>
    <label>Enter Countrys name</label>
    <input type="text" name="source" id="source" class="form-control" placeholder="Enter Country"/>
    <div id="sourcelist"></div>
    <input type="text" name="source" id="destination" class="form-control" placeholder="Enter Country"/>
    <div id="destinationlist"></div>
</div>
</body>
</html>



<script>
$(function () {
    $("#source").autocomplete({
        minLength: 1,
        source: function (request, response) {
            $.ajax({
                url: 'search1.php',
                dataType: "jsonp",
                data: {
                    q: request.term
                },
                success: function (data) {

                    response(data);
                }
            });
        },
    })
        ._renderItem = function (ul, item) {
        return $("<li></li>")
            .data("item.autocomplete", item);
    };
});

$(function () {
    $("#destination").autocomplete({
        minLength: 1,
        source: function (request, response) {
            $.ajax({
                url: "search1.php",
                dataType: "jsonp",
                data: {
                    q: request.term
                },
                success: function (data) {

                    response(data);
                }
            });
        },
    })
        ._renderItem = function (ul, item) {
        return $("<li></li>")
            .data("item.autocomplete", item);
    };
});
</script>