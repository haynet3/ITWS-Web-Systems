$(document).ready(function () {
    var option = 1;
    if (option == 1) {
        $.ajax({
            type: "GET",
            url: "websys.json",
            dataType: "json",
            success: function (responseData, status) {
                var output = "<ul>";
                $.each(responseData.items, function (i, item) {
                    output += '<li><a href="' + item.link + '">';
                    output += item.title;
                    output += '</a></li>';
                    output += "Lab Name: " + item.Name;
                    output += '<br>'
                    output += '<br>'
                    output += item.Description;
                    output += '<br>'
                    output += '<br>'
                    output += '<img src="' + item.image + '" width = 500 height = 500>';
                    output += '<hr>'
                });
                output += "</ul>";
                $('#Projects').html(output);
            }, error: function (msg) {
                // there was a problem
                alert("There was a problem: " + msg.status + " " + msg.statusText);
            }
        })
    };
});