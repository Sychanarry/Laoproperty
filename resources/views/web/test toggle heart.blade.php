<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="fontawesome.min.css">
  <rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>

<style>


</style>

</head>

<img src="{{asset('image/heart-white.png')}}" id="#1" class="nav-toggle">
<div id="1" style="display:none"></div>

<script>
  $(function(){
  $('.nav-toggle').on('click', function(){
    var t = $(this);
    var imgSrc = t.attr('src');
    var divId = t.attr('id');
    $(divId).toggle('slow', function() {
      if (imgSrc === '{{asset('image/heart-white.png')}}') {
        t.attr({'src' : '{{asset('image/heart.png')}}'});
      } else {
        t.attr({'src' :'{{asset('image/heart-white.png')}}'});
      }
     });
  });
});
</script>
</html>
