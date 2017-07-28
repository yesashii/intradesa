<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title>jQuery Photo Wall</title>
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
    @include('galleria_eventos.2.photowall_js')
    @include('galleria_eventos.2.photowall_css')
    <style type="text/css">
        html,body {
            background:#fff;
        }
        #gallery {

        }
        * {
            padding:0;
            margin: 0;
            outline: none !important;
        }

    </style>
    <script src="https://unpkg.com/axios/dist/axios.min.js"></script>
    <script type="text/javascript">
        $(document).ready(function(){
            PhotoWall.init({
                el:                 '#gallery'               // Gallery element
                ,zoom:              true                     // Use zoom
                ,zoomAction:        'mouseenter'             // Zoom on action
                ,zoomTimeout:       500                      // Timeout before zoom
                ,zoomDuration:      100                      // Zoom duration time
                ,zoomImageBorder:   5                         // Zoomed image border size
                ,showBox:           true                     // Enavle fullscreen mode
                ,showBoxSocial:     true                     // Show social buttons
                ,padding:           5                        // padding between images in gallery
                ,lineMaxHeight:     150                      // Max set height of pictures line
                ,lineMaxHeightDynamic: true                  // Dynamic lineMaxHeight. If set to True,
                                                             // then line height will be changing on
                                                             // resize, coressponding to
                                                             // baseScreenHeight param
                ,baseScreenHeight:  600                      // Base screen size from wich calculating dynamic lineMaxHeight
            });
            // Max image width form Picasa
            // 94, 110, 128, 200, 220, 288, 320, 400, 512, 576, 640, 720, 800, 912,
            // 1024, 1152, 1280, 1440, 1600

            axios.get('/trae_fotos_galeria')
                .then(function (response) {
                    console.log(response.data.entry.media_group.media_content.url);
                        var photos = {};

                        var e     = response.data.entry.media_group;
                        var id    = response.data.entry.gphoto_id._t;

                        var t1h   = e.media_thumbnail[2].height;
                        var t1w   = e.media_thumbnail[2].width;
                        var t1src = e.media_thumbnail[2].url;

                        var t2w   = Math.round(t1w * 1.5);
                        var t2h   = Math.round(t1h * 1.5);

                        var t2src = e.media_content.url+'/../../w'+t2w+'-h'+t2h+'/';

                        var bsrc  = e.media_content.url;
                        var bw    = e.media_content.width;
                        var bh    = e.media_content.height;


                       photos[id] = {id:id,img:bsrc,width:bw,height:bh,th:{src:t1src,width:t1w,height:t1h,zoom_src:t2src,zoom_factor:1.5}};


                    PhotoWall.load(photos);

                })
                .catch(function (error) {
                    console.log(error);
                });

        });
    </script>
</head>
<body>
<div id="gallery">
    <div class="body">
    </div>
</div>
<div id="fb-root"></div>
</body>
</html>
