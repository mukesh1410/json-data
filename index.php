<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Read JSON Data</title>
    <link rel="stylesheet" href="css/style.css">
    <script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>
</head>
<body>
    <div id="main">
        <div id="header">
            <h1>Read JSON Data</h1>
        </div>
        <div id="load-data"></div>
    </div>
    <script>
        $(document).ready(function(){
            // $.ajax({
            //     // url: "https://jsonplaceholder.typicode.com/posts",
            //     url: "json/index.json",
            //     type: "GET",
            //     success: function(data){
            //         $.each(data, function(key,value){   //loop in ajax
            //             $("#load-data").append(value.id + " " + value.title + "<br>");
            //         });
            //         // $("#load-data").append(data.id + " " + data.title);
            //     }
            // });

            $.getJSON( //shortcut function to read data 
                "json/index.json",
                function(data){
                    $.each(data, function(key,value){   //loop in ajax
                        $("#load-data").append(value.id + " " + value.title + "<br>");
                    });
                }
            );

            
        });
    </script>
</body>
</html>