<!DOCTYPE html>
<html>
    <head>
        <title>My page</title>

        <link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">
        <link href='https://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
        <link href='https://fonts.googleapis.com/css?family=Indie+Flower' rel='stylesheet' type='text/css'>

        <style>
            html, body {
                height: 100%;
            }

            body {
                margin: 0;
                padding: 0;
                width: 100%;
                display: table;
                font-weight: 100;
                font-family: 'Lato';
            }

            .container {
                text-align: center;
                display: table-cell;
                vertical-align: middle;
            }

            .content {
                text-align: center;
                display: inline-block;
            }

            .title {
                font-size: 96px;
            }

            .mytext {
                font-family: 'Montserrat', sans-serif;
            }

            .pisani {
                font-family: 'Indie Flower', cursive;
            }
        </style>
    </head>
    <body>
        <div class="container">
            <div class="content">
                <div class="title">my Page</div>
                <h1>only MY PAGE </h1>
                <hr>
<?php 
if($var1 == "mirko")
{
    echo "<b>OOOOOOOOO</b><br>";
}
?>
@if ($var1 == "mirko")
    <p class="pisani">I Love Mirka</p><br>
@endif

                <p>{{ $var1 }}</p>
                <p>{{ $var2 }}</p>
                <p>{{ $var3 }}</p>

<ul>
@foreach ($orders as $order) 
    <li>{{$order->name}}   </li>
@endforeach
</ul>
                <p> only only some text </p>
                <p class="mytext"> only only some text </p>
                <p class="pisani"> only only some text </p>
                <br>

                Lorem Ipsum
"Neque porro quisquam est qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit..."
"There is no one who loves pain itself, who seeks after it and wants to have it, simply because it is pain..."

Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus molestie faucibus nulla, tempor commodo nunc posuere id. Proin lobortis ut nisl sed finibus. Praesent ut malesuada ante. Nam volutpat enim tortor, id gravida mauris imperdiet ut. Etiam sit amet mauris id dui congue porttitor ac non arcu. Duis viverra lectus odio, vel elementum magna consectetur non. Cras eget imperdiet nisl. Praesent dignissim ac justo ut varius. Vestibulum nec venenatis justo. Donec eu justo posuere, posuere arcu non, pellentesque lectus. Mauris eget lectus quam. Cras in blandit arcu, eu faucibus arcu. Nulla facilisi. Integer sed leo volutpat, bibendum orci ac, tincidunt nibh. Phasellus placerat a nulla quis accumsan. Interdum et malesuada fames ac ante ipsum primis in faucibus.

Aenean id sapien sed purus bibendum feugiat. Ut placerat turpis id eros consequat rhoncus. Nam a tincidunt erat. Nunc mollis eros sem, ut eleifend tortor dignissim ac. Donec risus libero, malesuada pulvinar felis et, tristique sollicitudin justo. Nunc condimentum ipsum at metus rutrum, ut congue orci lacinia. Aenean vehicula porttitor rhoncus. Sed quis ipsum felis. Vivamus sit amet dolor blandit sapien accumsan rutrum.

Cras blandit eu justo nec congue. Suspendisse tellus erat, semper non tempor id, consequat et dui. Nullam sodales non dui non fringilla. Vivamus cursus sit amet justo pulvinar blandit. Etiam dignissim porta elit ullamcorper volutpat. Phasellus porttitor quis nulla ac aliquam. Vivamus eget enim in lacus sodales suscipit nec sed orci. Morbi quis mauris congue, vulputate sem in, consequat ligula.

Suspendisse maximus mattis lacus, at efficitur sapien facilisis ut. Integer nec congue dui. Nam diam est, dictum vel viverra et, dapibus at nisl. Duis eget libero aliquam, facilisis ex non, maximus neque. Donec diam urna, porta ut massa et, semper gravida diam. Nunc sit amet tempus nisi. Fusce faucibus imperdiet est sed consequat. Donec pulvinar placerat massa, quis volutpat erat fringilla vitae. Ut tristique non lorem non scelerisque. Curabitur at odio at erat pellentesque tempor. Cras consequat ipsum velit, non interdum nibh sollicitudin sit amet. Integer rhoncus urna velit, pellentesque bibendum sapien ultricies quis. Curabitur viverra, ligula a feugiat cursus, libero sem semper arcu, sit amet gravida massa nulla vitae lacus. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum lacinia ultricies vulputate.

Morbi sed scelerisque felis. Duis et lacus non felis finibus tincidunt. Curabitur quis varius sapien. Duis a efficitur elit. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Quisque ultricies ex vitae turpis sodales, a volutpat neque laoreet. Aenean non lorem bibendum, imperdiet est ut, mollis odio. Cras diam risus, aliquet sed sem ut, facilisis suscipit turpis.

Generated 5 paragraphs, 424 words, 2832 bytes of Lorem Ipsum
            </div>
        </div>
    </body>
</html>
