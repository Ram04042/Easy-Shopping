
var $selectVideo = $('#selectVideo');

var selectVideo = $selectVideo[0];
var updateDevice = function(){
    navigator.mediaDevices.enumerateDevices().then(deviceInfos=>{
        var oldVal = selectVideo.value;
        selectVideo.innerHTML = "";
        var defaultVideoDeviceId = undefined;
        for(var i = 0; i < deviceInfos.length; ++i){
            var info = deviceInfos[i];
            if(info.kind != 'videoinput'){
                continue;
            }
            if(!defaultVideoDeviceId){defaultVideoDeviceId = info.deviceId;}
            var option = document.createElement('option');
            option.value = info.deviceId;
            option.text = info.label || 'camera '+ (selectVideo.length + 1);
            $selectVideo.append(option);
        }
        selectVideo.value = oldVal || defaultVideoDeviceId;
    });
};

var playvideo = ()=>{
    var video = $('#theVideo')[0];

    if (video.srcObject) {
        kConsoleLog('======stop video========');
        video.srcObject.getTracks().forEach(function(track) {
          track.stop();
        });
    }

    kConsoleLog('======before video========');
    var constraints = {
        video: {
            width: { ideal: 1280 },
            height: { ideal: 720 },
            facingMode: { ideal: 'environment' }
        }
    };
    if(selectVideo.value){
        constraints.video.facingMode = undefined;
        constraints.video.deviceId = {exact: selectVideo.value};

        // if width & height doesn't exist, safair would not play the selected video, so we remove width & height in desktop safari
        var isDeskTopSafari = /Safari/.test(navigator.userAgent) && !/Chrome/.test(navigator.userAgent) && !((/iPhone/i.test(navigator.platform) || /iPod/i.test(navigator.platform) || /iPad/i.test(navigator.userAgent)) && !!navigator.appVersion.match(/(?:Version\/)([\w\._]+)/));
        if(isDeskTopSafari){
            constraints.video.width = undefined;
            constraints.video.height = undefined;
        }
    }

    navigator.mediaDevices.getUserMedia(constraints).then((stream)=>{
        kConsoleLog('======get video========');
        video.srcObject = stream;
        video.onloadedmetadata = ()=>{
            kConsoleLog('======play video========');
            video.play();
            kConsoleLog('======played video========');

            $('#btn-startReadVideo').removeAttr('disabled');

            updateDevice();
        };
    }).catch((ex)=>{
        kConsoleLog(ex);
    });
};
$selectVideo.change(playvideo);

$('#btn-startReadVideo').click(()=>{
    $('#divReading').show();
    $('#btn-startReadVideo').hide();
    $('#btn-stopReadVideo').show();
    isLooping = true;
    loopReadVideo();
});
$('#btn-stopReadVideo').click(()=>{
    $('#btn-stopReadVideo').hide();
    $('#btn-startReadVideo').show();
    isLooping = false;
    $('#divReading').hide();
});
var isLooping = false;
var loopReadVideo = function(){
    if(!isLooping){
        return;
    }
    kConsoleLog('======= once read =======')
    var timestart = (new Date()).getTime();

    var video = $('#theVideo')[0];
    barcodeReader.decodeVideo(video).then((results)=>{
        kConsoleLog('time cost: ' + ((new Date()).getTime() - timestart) + 'ms');
        for(var i=0;i<results.length;++i){
            var result = results[i];
            kConsoleLog(result.BarcodeText);

            cartitem(result.BarcodeText);

        }
        // video in safair would stuck, so leave 2s for adjusting video
        setTimeout(loopReadVideo, 2000);
    }).catch(ex=>{
        kConsoleLog(ex);
        setTimeout(loopReadVideo, 2000);
        throw ex;
    });
};




function cartitem(data)
{
  var list=document.getElementById('todo');

  var item= document.createElement('li');

  var productnamediv= document.createElement('div')

  var quantitydiv=document.createElement('div');

  var pricediv=document.createElement('div');

  var buttondiv=document.createElement('div');

  var linepricediv=document.createElement('div');

  var inp = document.createElement("INPUT");
  inp.setAttribute("type", "number");
  inp.setAttribute("value","1");
  inp.setAttribute("id","quantity");


  var remove=document.createElement('button');


  var query1=data;


    $.ajax({
         url:"scanpdetails.php",
         method:"POST",
         data:{query:query1},
         success:function(response)
         {
           response = jQuery.parseJSON(response);
              alert(response.price);

              productnamediv.innerHTML=response.product_name;
              pricediv.innerHTML=response.price;

              linepricediv.innerHTML=response.price;
         }
    });



  list.appendChild(item);

  item.appendChild(productnamediv);

  item.appendChild(linepricediv);

  item.appendChild(quantitydiv);
  quantitydiv.appendChild(inp);
  item.appendChild(pricediv);
  item.appendChild(buttondiv);
  buttondiv.appendChild(remove);



  linepricediv.classList.add('linepricediv');
  buttondiv.classList.add('butt');
  pricediv.classList.add('pricediv');
  quantitydiv.classList.add('quantitydiv');
  productnamediv.classList.add('productnamediv');





  remove.addEventListener('click',removeitem);
  var removeSVG ='<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M6 19c0 1.1.9 2 2 2h8c1.1 0 2-.9 2-2V7H6v12zM19 4h-3.5l-1-1h-5l-1 1H5v2h14V4z"/><path d="M0 0h24v24H0z" fill="none"/></svg>';


  remove.classList.add('remove');
  remove.innerHTML = removeSVG;

  inp.addEventListener('change',updatelineprice);

  updatetotaladd(data);

}




var subtotal=0;

function updatetotaladd(data)
{
  var query2=data;
alert(data);

      $.ajax({
           url:"scanpdetails.php",
           method:"POST",
           data:{query:query2},
           success:function(response)
           {
             response = jQuery.parseJSON(response);


                var t=parseFloat(document.getElementById('totalprice').innerHTML);
                    document.getElementById('totalprice').innerHTML=t+parseFloat(response.price);


           }
      });

}





function removeitem()
{
  var item=this.parentNode.parentNode;
  var parent=item.parentNode;
  parent.removeChild(item);
  updatetotal();
}


updatetotal();

function updatelineprice()
{
  qua=this.value;
   var par=this.parentNode.parentNode;
   var pri=par.children[3].innerHTML;

   par.children[1].innerHTML=qua*pri;

   updatetotal();
}


function updatetotal()
{

  var subtotal=0;
  $('.todo li').each(function () {


    subtotal += parseFloat(this.children[1].innerHTML);

      });

      document.getElementById('totalprice').innerHTML=subtotal;
}
