@extends('layouts.master')
@section('content')
    <form action="{{ URL::to('work') }}" method="post" enctype="multipart/form-data">
        @csrf
        <label>Select image to upload:</label>
        <input type="file" name="file" id="file">
        <input type="submit" value="Upload" name="submit">
       
    </form>

    
    <div id="top">
        <div id="products">

           <div class="prod">
            <div id="product" class="img-div disabledbutton" data-value="1">
            <div id="app" >
        <canvas id="c" width="200" height="250"></canvas>
            </div>
            </div>
            <button id="0" class="btn" onclick="enable('0','product');">Enable</button>
        </div>
       
           
        <div class="prod">
        <div id="product1" class="img-div disabledbutton" data-value="1">
            <div id="app1" >
                <canvas id="c1" width="200" height="250"></canvas>
            </div>
                    </div>
                    <button id="1" class="btn" onclick="enable('1','product1');" >Enable</button>
                </div>
               
            
                <div class="prod">
                    <div></div>
                    <div id="product2" class="img-div disabledbutton" data-value="1">
                    <div id="app2" >
                  
                        <canvas id="c2" width="200" height="250"></canvas>
                    </div>
                            </div>
                            <button id="2" class="btn" onclick="enable('2', 'product2');" >Enable</button>
                        </div>
                        
            
    </div> 
    
    <button id="capture" onclick="doCapture();">Sacuvaj</button>

    </div>
    
    {{-- <canvas id="viewport"></canvas> --}}


    <div class="row">
        <div class="row-product">
        <div id="proizvod" class="disabledbutton">
            <div class="background-div">
        <img id="logo-canvas" src="/image/<?php if(!empty($image)){echo $image;} ?>">
        <img class="overlay-panel" src="/images/phonecase.png">
            </div>
        </div>
    <div class="preview-info">
        <span class="preview-name">
            PhoneCase
        </span>
        <div>
        <button id="edit-product">Edit</button>
        <button id="enabled-product">Disabled</button>
        </div>
    </div>
</div>
<div id="product3" class="img-div" data-value="1" style="display:none">
    <div id="app3" >
        <canvas id="c3" width="200" height="300"></canvas>
    </div>
    <div class="product-options">
        <div class="color-choose">
            {{-- <form id="myForm">
            
            <label class="container" for="red"><input data-image="red" type="radio" name=radioName id="red" value="red"><span class="checkmark"></span></label>
            <label class="container" for="blue"><input data-image="blue" type="radio" name=radioName id="blue" value="blue"><span class="checkmark"></span></label>
            <label class="container" for="black"><input data-image="black" type="radio" name=radioName id="black" value="black"><span class="checkmark"></span></label>
            </form> --}}
            <div class="container">
                <div class="output" id="output"></div>
            
                <div class="result-wrp">
                   <p>Choose a color</p> 
                  <input type="color" id="color">
                </div>
                <label>
                    <span>Scale:</span> 
                    <input type="range" id="scale-control" value="1" min="0.1" max="3" step="0.1">
                </label>
                <button id="alignVertically">Vertically</button>
                <button id="alignHorizontally">Horizontally</button>
              </div>
        </div>
    </div>
    </div>
    </div>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>


         
 
<script>
         var canvas = new fabric.Canvas('c');
var imgElement = document.getElementById('myImage');

 fabric.Image.fromURL("/image/<?php if(!empty($image)){echo $image;} ?>"  , function(img) {
    img.set({
    
    });
    img.scaleToHeight(200);
    img.scaleToWidth(200);
    canvas.add(img);
});
var canvas1 = new fabric.Canvas('c1');
var imgElement = document.getElementById('myImage');
 fabric.Image.fromURL("/image/<?php if(!empty($image)){echo $image;}  ?>", function(img) {
    img.set({
    
    });
    img.scaleToHeight(200);
    img.scaleToWidth(200);
    canvas1.add(img);
});
var canvas2 = new fabric.Canvas('c2');
var imgElement = document.getElementById('myImage');
 fabric.Image.fromURL("/image/<?php if(!empty($image)){echo $image;}  ?>", function(img) {
    img.set({
    
    });
    
    img.scaleToHeight(200);
    img.scaleToWidth(200);
    canvas2.add(img);
});

var canvas3 = new fabric.Canvas('c3');
var imgElement = document.getElementById('myImage');
 fabric.Image.fromURL("/images/<?php if(!empty($image)){echo $image;}  ?>", function(img) {
    img.set({
    
    });
    img.scaleToHeight(100);
    img.scaleToWidth(100);
    canvas3.add(img);
    // 
    $('input[type=range]').on('input', function () {
      $(this).trigger('change');
      img.scale(parseFloat($(this).val())).setCoords();
      canvas3.requestRenderAll();
  });
  
  
  
  $('#alignVertically').on('click', function(){
    img.centerV(); 

  });
  
  $('#alignHorizontally').on('click', function(){

    img.centerH();
  });
  
});



function enable(num, divValue){
    var br = num;
    var myEle = document.getElementById(divValue);
    if(myEle){
        var myEleValue= myEle.getAttribute('data-value');
    }
    if(myEleValue == '0'){
       myEle.setAttribute('data-value', '1');
       $(myEle).addClass("disabledbutton");
        document.getElementById(br).innerHTML = 'Enable';
    } else{
        myEle.setAttribute('data-value', '0');
        $(myEle).removeClass("disabledbutton");
        document.getElementById(br).innerHTML = 'Disable';
    }
}

const sleep = (milliseconds) => {
  return new Promise(resolve => setTimeout(resolve, milliseconds))
}




function doCapture(){
        canvas.discardActiveObject();
         canvas.requestRenderAll();
        canvas1.discardActiveObject();
        canvas1.requestRenderAll();
        canvas2.discardActiveObject();
        canvas2.requestRenderAll();
   
        sleep(500).then(() => {

    window.scrollTo(0, 0);
    document.getElementById('c').style.border = "none";
    document.getElementById('c1').style.border = "none";
    document.getElementById('c2').style.border = "none";
    
    var els = document.getElementsByClassName("img-div");
    Array.prototype.forEach.call(els, function(el) {
    if( el.getAttribute('data-value')=='0'){
        
        html2canvas(el).then(function (canvas){
            
            var imgData = canvas.toDataURL("image/png" , 0.9);
            $.ajax({
                    url: 'savework',
                    type: 'post',
                    headers: {  
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')  
                         } ,
                    dataType: 'text',
                    data: {
                        image : imgData
                    },
                    success:function(msg){
                        console.log(msg);
                    }
                });
        });
      
    }
})
})
}  </script>  

@endsection