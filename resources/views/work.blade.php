@extends('layouts.master')
@section('content')
    <form action="{{ URL::to('work') }}" method="post" enctype="multipart/form-data">
        @csrf
        <label>Select image to upload:</label>
        <input type="file" name="file" id="file">
        <input type="submit" value="Upload" name="submit">
        <span>{{ $errors->first('file')}}</span>
       
    </form>

    
  
    <canvas id="c" width="200" height="300"></canvas>

    <div class="row">
      {{-- Phone case html --}}
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
                    <input type="range" id="scale-control"  value="0.05" min="0.01" max="0.5" step="0.005">
                </label>
                <button id="alignVertically">Vertically</button>
                <button id="alignHorizontally">Horizontally</button>
                <div class="repeat-option">
                    <button id="repeat">Repeat</button>
                    <button id="none">None</button>
                </div>
              </div>
        </div>
    </div>
    </div>
</div>
{{-- T-shirt html --}}
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
                        <input type="range" id="scale-control1"  value="0.05" min="0.01" max="0.5" step="0.005">
                    </label>
                    <button id="alignVertically1">Vertically</button>
                    <button id="alignHorizontally1">Horizontally</button>
                  </div>
            </div>
        </div>
    </div>
    </div>

    {{-- Mugs html --}}
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
                            <input type="range" id="scale-control2"  value="0.05" min="0.01" max="0.5" step="0.005">
                        </label>
                        <button id="alignVertically2">Vertically</button>
                        <button id="alignHorizontally2">Horizontally</button>
                        <div class="repeat-option">
                          <button id="repeat1">Repeat</button>
                          <button id="none1">None</button>
                      </div>
                      </div>
                </div>
            </div>
        </div>
        </div>


        {{-- Hoodie html --}}
        <div class="product-column">
          <div class="row-product">
              <div id="proizvod3" class="save-picture disabledbutton" value="1">
                  <div class="background-div3">
              <img id="logo-canvas3" src="/image/<?php if(!empty($image)){echo $image;} ?>">
              <img class="overlay-panel" src="/images/hoodie.jpg">
                  </div>
              </div>
          <div class="preview-info">
              <span class="preview-name">
                  T-Shirt
              </span>
              <div>
              <button id="edit-product3">Edit</button>
              <button id="enabled-product3" onclick="">Disabled</button>
              </div>
          </div>
      </div>
          <div id="product6" class="img-div" data-value="1" style="display:none">
              <div id="app6" >
                  <canvas id="c6" width="200" height="300"></canvas>
              </div>
              <div class="product-options3">
                  <div class="color-choose">
                  
                      <div class="container">
                          <div class="output" id="output"></div>
                      
                          <div class="result-wrp">
                             <p>Choose a color</p> 
                            <input type="color" id="color3">
                          </div>
                          <label>
                              <span>Scale:</span> 
                              <input type="range" id="scale-control3"  value="0.05" min="0.01" max="0.5" step="0.005">
                          </label>
                          <button id="alignVertically3">Vertically</button>
                          <button id="alignHorizontally3">Horizontally</button>
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
var canvas = new fabric.Canvas('c');
var imgElement = document.getElementById('myImage');

 var extension = "<?php if(!empty($ext)){echo $ext;} ?>";
    console.log(extension);
    if( extension !="svg"){
 fabric.Image.fromURL("/image/<?php if(!empty($image)){echo $image;} ?>"  , function(img) {
    img.set({
    
    });
    img.scaleToHeight(200);
    img.scaleToWidth(200);
    canvas.add(img);
}); 
    }else{
fabric.loadSVGFromURL("/image/<?php if(!empty($image)){echo $image;} ?>", function(img, options) {
  var img = fabric.util.groupSVGElements(img, options);
  img.scaleToWidth(250);
  canvas.add(img).renderAll();
});
}
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
var imgElement = document.getElementById('myImage');
 fabric.Image.fromURL("/image/<?php if(!empty($image)){echo $image;}  ?>", function(img) {
    img.set({
    
    });
    img.scaleToWidth(250);
    
    canvas3.add(img);

     // Repeat option for Phone case
    $('#repeat').on('click', function(){
    img.set({
            'top': 0
        });
        img.set({
            'left': 0
        });
    canvas3.clear(); 
    canvas3.requestRenderAll();
   sleep(100).then(() => {
    img.scaleToWidth(100);
       
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

 
    // None option for Phone case
    $('#none').on('click', function(){
        canvas3.clear(); 
        img.scaleToWidth(100);
        canvas3.add(img);
        image1.src = canvas3.toDataURL();
        canvas3.requestRenderAll();
    });

    // Scale option for Phone case
    $('#scale-control').on('input', function () {
      $(this).trigger('change');
      img.scale(parseFloat($(this).val())).setCoords();
      canvas3.requestRenderAll();
  });
  
  // Align Vertical option for Phone case
  $('#alignVertically').on('click', function(){
    img.centerV(); 
    sleep(100).then(() => {
    img.setCoords();
    image1.src = canvas3.toDataURL();
    })
  });
  
  // Align Horizontal option for Phone case
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
    
    img.scaleToWidth(250);
    canvas4.add(img);
    var image2 = document.getElementById("logo-canvas1");

    // Scale option for T-shirt
    $('#scale-control1').on('input', function () {
      $(this).trigger('change');
      img.scale(parseFloat($(this).val())).setCoords();
      canvas4.requestRenderAll();
  });
   

    // Align Vertical option for T-shirt
  $('#alignVertically1').on('click', function(){
    img.centerV(); 
    sleep(100).then(() => {
    img.setCoords();
    image2.src = canvas4.toDataURL();
    })
  });
  // Align Horizontal option for T-shirt
  $('#alignHorizontally1').on('click', function(){
    img.centerH();
    sleep(100).then(() => {
    img.setCoords();
    image2.src = canvas4.toDataURL();
})
  });
});
</script> 
<script>

// Canvas for Mugs
var canvas5 = new fabric.Canvas('c5');
 fabric.Image.fromURL("/image/<?php if(!empty($image)){echo $image;}  ?>", function(img) {
    img.set({
    
    });
    
    img.scaleToWidth(250);
    canvas5.add(img);
    var image3 = document.getElementById("logo-canvas2");
    // None option for Mugs
    $('#none1').on('click', function(){
        canvas5.clear(); 
        img.scaleToWidth(100);
        canvas5.add(img);
        image3.src = canvas5.toDataURL();
        canvas5.requestRenderAll();
    });
    // Repeat option for Mugs
    $('#repeat1').on('click', function(){
      img.set({ 'top' : 0});
      img.set({ 'left' : 0});
      canvas5.clear();   
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

    canvas5.add(rect);
    rect.center().setCoords();
    image3.src = canvas5.toDataURL();
    canvas5.requestRenderAll();
    });

    // Scale option for Mugs
    $('#scale-control2').on('input', function () {
      $(this).trigger('change');
      img.scale(parseFloat($(this).val())).setCoords();
      canvas5.requestRenderAll();
  });
    // Align Vertical option for Mugs
  $('#alignVertically2').on('click', function(){
    img.centerV(); 
    sleep(100).then(() => {
    img.setCoords();
    image3.src = canvas5.toDataURL();
    })
  });
  // Align Horizontal option for Mugs
  $('#alignHorizontally2').on('click', function(){
    img.centerH();
    sleep(100).then(() => {
    img.setCoords();
    image3.src = canvas5.toDataURL();
})
  });
});
</script> 

<script>

// Canvas for Hoodie
var canvas6 = new fabric.Canvas('c6');
 fabric.Image.fromURL("/image/<?php if(!empty($image)){echo $image;}  ?>", function(img) {
    img.set({
    
    });
    
   
    img.scaleToWidth(250);
    canvas6.add(img);
    var image4 = document.getElementById("logo-canvas3");

    // Scale option for T-shirt
    $('#scale-control3').on('input', function () {
      $(this).trigger('change');
      img.scale(parseFloat($(this).val())).setCoords();
      canvas6.requestRenderAll();
  });
   

    // Align Vertical option for Hoodie
  $('#alignVertically3').on('click', function(){
    img.centerV(); 
    sleep(100).then(() => {
    img.setCoords();
    image4.src = canvas6.toDataURL();
    })
  });
  // Align Horizontal option for Hoodie
  $('#alignHorizontally3').on('click', function(){
    img.centerH();
    sleep(100).then(() => {
    img.setCoords();
    image4.src = canvas6.toDataURL();
})
  });
});



</script>

<script>
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

}  </script>  

@endsection