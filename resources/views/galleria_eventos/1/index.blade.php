<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <style type="text/css">

        .gallerycontainer{
            position: relative;
            /*Add a height attribute and set to largest image's height to prevent overlaying*/
        }

        .thumbnail img{
            border: 1px solid white;
            margin: 0 5px 5px 0;
        }

        .thumbnail:hover{
            background-color: transparent;
        }

        .thumbnail:hover img{
            border: 1px solid blue;
        }

        .thumbnail span{ /*CSS for enlarged image*/
            position: absolute;
            background-color: lightyellow;
            padding: 5px;
            left: -1000px;
            border: 1px dashed gray;
            visibility: hidden;
            color: black;
            text-decoration: none;
        }

        .thumbnail span img{ /*CSS for enlarged image*/
            border-width: 0;
            padding: 2px;
        }

        .thumbnail:hover span{ /*CSS for enlarged image*/
            visibility: visible;
            top: 0;
            left: 230px; /*position where enlarged image should offset horizontally */
            z-index: 50;
        }

    </style>


</head>
<body>

<div class="gallerycontainer">

    <a class="thumbnail" href="#thumb"><img src="http://lorempixel.com/400/200" width="100px" height="66px" border="0" /><span><img src="http://lorempixel.com/400/200" /><br />Simply beautiful.</span></a>

    <a class="thumbnail" href="#thumb"><img src="http://lorempixel.com/400/200" width="100px" height="66px" border="0" /><span><img src="http://lorempixel.com/400/200" /><br />So real, it's unreal. Or is it?</span></a>

    <br />

    <a class="thumbnail" href="#thumb"><img src="http://lorempixel.com/400/200" width="100px" height="75px" border="0" /><span><img src="http://lorempixel.com/400/200" /><br />Sushi for dinner anyone?</span></a>

    <a class="thumbnail" href="#thumb"><img src="http://lorempixel.com/400/200" width="100px" height="70px" border="0" /><span><img src="http://lorempixel.com/400/200" /><br />Run wild with horses.</span></a>

    <br />

    <a class="thumbnail" href="#thumb">Dynamic Drive<span><img src="media/dynamicdrive.gif" /><br />Dynamic Drive</span></a>

    <br />

    <a class="thumbnail" href="#thumb">Zoka Coffee<span><img src="media/zoka.gif" /><br />Zoka Coffee</span></a>

</div>



</body>
</html>