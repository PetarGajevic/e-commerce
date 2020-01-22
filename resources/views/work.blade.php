@extends('layouts.master')
@section('content')
    <form action="{{ URL::to('work') }}" method="post" enctype="multipart/form-data">
        @csrf
        <label>Select image to upload:</label>
        <input type="file" name="file" id="file">
        <input type="submit" value="Upload" name="submit">
       
    </form>

    
  {{--   <div id="top">
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

    </div> --}}
    
    <canvas id="canvas8" width="500" height="500"></canvas>
    <button id="repeat1">Repeat</button>
    <button id="none1">None</button>

    <div class="row">
        <div class="product-column">
        <div class="row-product">
        <div id="proizvod" class="save-picture disabledbutton" value="1">
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
                <div class="repeat-option">
                    <button id="repeat">Repeat</button>
                    <button id="none">None</button>
                    <button id="delete">Delete</button>
                    <button id="add">Add</button>
                </div>
              </div>
        </div>
    </div>
    </div>
</div>
<div class="product-column">
    <div class="row-product">
        <div id="proizvod1" class="save-picture disabledbutton" value="1">
            <div class="background-div1">
        <img id="logo-canvas1" src="/image/<?php if(!empty($image)){echo $image;} ?>">
        <img class="overlay-panel" src="/images/t-shirt.png">
            </div>
        </div>
    <div class="preview-info">
        <span class="preview-name">
            T-Shirt
        </span>
        <div>
        <button id="edit-product1">Edit</button>
        <button id="enabled-product1" onclick="">Disabled</button>
        </div>
    </div>
</div>
    <div id="product4" class="img-div" data-value="1" style="display:none">
        <div id="app4" >
            <canvas id="c4" width="200" height="300"></canvas>
        </div>
        <div class="product-options1">
            <div class="color-choose">
            
                <div class="container">
                    <div class="output" id="output"></div>
                
                    <div class="result-wrp">
                       <p>Choose a color</p> 
                      <input type="color" id="color1">
                    </div>
                    <label>
                        <span>Scale:</span> 
                        <input type="range" id="scale-control1" value="1" min="0.1" max="3" step="0.1">
                    </label>
                    <button id="alignVertically1">Vertically</button>
                    <button id="alignHorizontally1">Horizontally</button>
                  </div>
            </div>
        </div>
    </div>
    </div>

    {{-- Mugs --}}
    <div class="product-column">
        <div class="row-product">
            <div id="proizvod2" class="save-picture disabledbutton" value="1">
                <div class="background-div2">
            <img id="logo-canvas2" src="/image/<?php if(!empty($image)){echo $image;} ?>">
            <img class="overlay-panel" src="/images/mugs.png">
                </div>
            </div>
        <div class="preview-info">
            <span class="preview-name">
                T-Shirt
            </span>
            <div>
            <button id="edit-product2">Edit</button>
            <button id="enabled-product2" onclick="">Disabled</button>
            </div>
        </div>
    </div>
        <div id="product5" class="img-div" data-value="1" style="display:none">
            <div id="app5" >
                <canvas id="c5" width="200" height="300"></canvas>
            </div>
            <div class="product-options2">
                <div class="color-choose">
                
                    <div class="container">
                        <div class="output" id="output"></div>
                    
                        <div class="result-wrp">
                           <p>Choose a color</p> 
                          <input type="color" id="color2">
                        </div>
                        <label>
                            <span>Scale:</span> 
                            <input type="range" id="scale-control2" value="0.001" min="0.01" max="1" step="0.1">
                        </label>
                        <button id="alignVertically2">Vertically</button>
                        <button id="alignHorizontally2">Horizontally</button>
                      </div>
                </div>
            </div>
        </div>
        </div>
</div>
    </div>
    <div class="save-work">
        <button id="capture" onclick="doCapture();">Sacuvaj</button>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
`
<script>
var canvas8 = new fabric.Canvas('canvas8');
fabric.Object.prototype.transparentCorners = false;

  var padding = 0;

  fabric.Image.fromURL('/image/<?php if(!empty($image)){echo $image;} ?>', function(img) {
    img.scaleToWidth(50);
    var patternSourceCanvas = new fabric.StaticCanvas();
    patternSourceCanvas.add(img);
    patternSourceCanvas.renderAll();
    var pattern = new fabric.Pattern({
      source: function() {
        patternSourceCanvas.setDimensions({
          width: img.getScaledWidth() + padding,
          height: img.getScaledHeight() + padding
        });
        patternSourceCanvas.renderAll();
        return patternSourceCanvas.getElement();
      },
      repeat: 'repeat'
    }); 

    var rect = new fabric.Rect({
        width: 250,
        height: 250,
        fill: pattern,
        objectCaching: false
    });

    canvas8.add(rect);
    rect.center().setCoords();





canvas8.on('object:scaling', function(e) {
  if (e.target != null) {
    console.log(e.target);
    var obj = e.target;
        var height = obj.height * obj.scaleY;
        var width = obj.width * obj.scaleX;
        obj.height = height;
        obj.width = width;
        obj.scaleX = 1;
        obj.scaleY = 1;
  }
});

$('#none1').on('click', function(){
        canvas8.clear(); 
      /*   canvas8.remove(img);
        img.scaleToWidth(100);
        */
        canvas8.add(img);
        pattern.repeat = 'no-repeat';
      canvas.requestRenderAll();
        canvas8.requestRenderAll(); 
        console.log("h: " + img.getScaledHeight());
        console.log("w: " + img.getScaledWidth());
    });

    $('#repeat1').on('click', function(){
        canvas8.clear();
      /*   canvas8.remove(img);
        img.scaleToWidth(50);
        canvas8.add(img); */
        
    var patternSourceCanvas = new fabric.StaticCanvas();
    patternSourceCanvas.add(img);
    patternSourceCanvas.renderAll();
    var pattern = new fabric.Pattern({
      source: function() {
        patternSourceCanvas.setDimensions({
          width: img.getScaledWidth() + padding,
          height: img.getScaledHeight() + padding
        });
        patternSourceCanvas.renderAll();
        return patternSourceCanvas.getElement();
      },
      repeat: 'repeat'
    }); 

    var rect = new fabric.Rect({
        width: 250,
        height: 250,
        fill: pattern,
        objectCaching: false
    });

    canvas8.add(rect);
    rect.center().setCoords();
    });
    
});
    




</script>

         
 
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
</script>



<script>
// Canvas for Phone Case
 var padding = 0;
 var image1 = document.getElementById("logo-canvas");
var canvas3 = new fabric.Canvas('c3');
var context = canvas3.getContext('2d');
var imgElement = document.getElementById('myImage');
 fabric.Image.fromURL("/image/<?php if(!empty($image)){echo $image;}  ?>", function(img) {
    img.set({
    
    });
   // img.scaleToHeight(100);
    img.scaleToWidth(200);
    canvas3.add(img);


  
    
    $('#repeat').on('click', function(){
    canvas3.remove(img);
    img.set({
            'top': 0
        });
        img.set({
            'left': 0
        });
        canvas3.add(img);
    canvas3.add(img);
    canvas3.clear(); 
    canvas3.requestRenderAll();
   // img.scaleToHeight(100);
   // img.scaleToWidth(100);
   sleep(300).then(() => {
     //  canvas3.add(img);
    img.scaleToWidth(100);
   // img.scaleToHeight(100);
   //  img.scaleX = 0.1;
   //  img.scaleY = 0.1;  
       
    var patternSourceCanvas = new fabric.StaticCanvas();
    patternSourceCanvas.add(img);
    patternSourceCanvas.renderAll();
    var pattern = new fabric.Pattern({
      source: function() {
        patternSourceCanvas.setDimensions({
          width: img.getScaledWidth() + padding,
          height: img.getScaledHeight() + padding
        });
        patternSourceCanvas.renderAll();
        return patternSourceCanvas.getElement();
      },
      repeat: 'repeat'
    }); 
    var rect = new fabric.Rect({
        width: 5000,
        height: 5000,
        fill: pattern,
        objectCaching: false
    });
  
    
    canvas3.add(rect);
    rect.center().setCoords();
    image1.src = canvas3.toDataURL();
    canvas3.requestRenderAll();
   })
    });

 

    $('#none').on('click', function(){
        canvas3.clear(); 
        img.scaleToWidth(100);
        canvas3.add(img);
        image1.src = canvas3.toDataURL();
        canvas3.requestRenderAll();
    });

    
    $('#scale-control').on('input', function () {
      $(this).trigger('change');
      img.scale(parseFloat($(this).val())).setCoords();
      canvas3.requestRenderAll();
  });
  
  $('#alignVertically').on('click', function(){
    img.centerV(); 
    sleep(100).then(() => {
    img.setCoords();
    image1.src = canvas3.toDataURL();
    })
  });
  
  $('#alignHorizontally').on('click', function(){
    img.centerH();
    sleep(100).then(() => {
    img.setCoords();
    image1.src = canvas3.toDataURL();
})
  });
});
</script>

<script>
// Canvas for T-Shirt
var canvas4 = new fabric.Canvas('c4');
 fabric.Image.fromURL("/image/<?php if(!empty($image)){echo $image;}  ?>", function(img) {
    img.set({
    
    });
    
    img.scaleToHeight(200);
    img.scaleToWidth(200);
    canvas4.add(img);
    $('#scale-control1').on('input', function () {
      $(this).trigger('change');
      img.scale(parseFloat($(this).val())).setCoords();
      canvas4.requestRenderAll();
  });
    var image2 = document.getElementById("logo-canvas1");
  $('#alignVertically1').on('click', function(){
    img.centerV(); 
    sleep(100).then(() => {
    img.setCoords();
    image2.src = canvas4.toDataURL();
    })
  });
  
  $('#alignHorizontally1').on('click', function(){
    img.centerH();
    sleep(100).then(() => {
    img.setCoords();
    image2.src = canvas4.toDataURL();
})
  });
});

// Canvas for Mugs
var canvas5 = new fabric.Canvas('c5');
 fabric.Image.fromURL("/image/<?php if(!empty($image)){echo $image;}  ?>", function(img) {
    img.set({
    
    });
    
    img.scaleToHeight(200);
    img.scaleToWidth(200);
    canvas5.add(img);
    $('#scale-control2').on('input', function () {
      $(this).trigger('change');
      img.scale(parseFloat($(this).val())).setCoords();
      canvas5.requestRenderAll();
  });
    var image3 = document.getElementById("logo-canvas2");
  $('#alignVertically2').on('click', function(){
    img.centerV(); 
    sleep(100).then(() => {
    img.setCoords();
    image3.src = canvas5.toDataURL();
    })
  });
  
  $('#alignHorizontally2').on('click', function(){
    img.centerH();
    sleep(100).then(() => {
    img.setCoords();
    image3.src = canvas5.toDataURL();
})
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
       /*  canvas.discardActiveObject();
         canvas.requestRenderAll();
        canvas1.discardActiveObject();
        canvas1.requestRenderAll();
        canvas2.discardActiveObject();
        canvas2.requestRenderAll(); */
   
        //  sleep(500).then(() => {

 /*    window.scrollTo(0, 0);
    document.getElementById('c').style.border = "none";
    document.getElementById('c1').style.border = "none";
    document.getElementById('c2').style.border = "none";
     */
    var els = document.getElementsByClassName("save-picture");
    Array.prototype.forEach.call(els, function(el) {
    if( el.getAttribute('value')=='0'){
        
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
// })
}  </script>  

@endsection