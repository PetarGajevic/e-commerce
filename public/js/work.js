
$(document).ready(function(){
    $('#edit-product').click(function() {
        if(document.getElementById('product3').style.display == 'none'){
            document.getElementById('product3').style.display = 'flex';
        }else{
            document.getElementById('product3').style.display = 'none';
        }
    });
    $('#enabled-product').click(function(){
        if($('#proizvod').hasClass('disabledbutton')){
            $('#proizvod').removeClass('disabledbutton');
            $('#enabled-product').html('Enabled');
        }else{
            $('#proizvod').addClass('disabledbutton');
            $('#enabled-product').html('Disabled');
        }
    });
    // canvas on change show product
    $('#product3').mouseup(function(){
        var image = document.getElementById("logo-canvas");
        image.src = canvas3.toDataURL();
    });

    $('.color-choose input').on('click', function(){
        var phonecase = $(this).attr('data-image');
    });

    // Change phone case color
    var colorInput = document.querySelector('#color');
    colorInput.addEventListener('input', ()=>{
      $('.background-div').css("background-color", colorInput.value);
    });
    // Scale control
  


    


    
});


