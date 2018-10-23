<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Template PWA</title>

        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:regular,bold,italic,thin,light,bolditalic,black,medium&amp;lang=en">
        <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
        <link rel="stylesheet" href="https://code.getmdl.io/1.3.0/material.cyan-light_blue.min.css">
        <link rel="stylesheet" href="styles.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
        <script src="https://viralpatel.net/blogs/demo/jquery/get-text-without-child-element/jquery.justtext.1.0.js"></script>

        <style>

        #search {
  width: 100%;
  height: 80px;


  padding: 15px;
  z-index: 5;

  background: #25b99a;
  box-shadow: 0px 2px 4px rgba(44, 62, 80, 0.15);
  border-bottom-right-radius: 10px;
  border-bottom-left-radius: 10px;
}

#search input {
  width: 100%;
  height: 50px;
  float: left;
  color: #fff;
  font-size: 15px;
  font-weight: 400;
  text-indent: 18px;
  padding: 0 60px 0 0;
  background: rgba(255, 255, 255, 0.2);
  border-radius: 5px 25px 25px 5px;
  border: 0px;
  box-shadow: none;
  outline: none;

  -webkit-appearance: none;
  -moz-appearance: none;
}

#search input::-webkit-input-placeholder {
  color: rgba(255, 255, 255, 0.75);
}

#search input:-moz-input-placeholder {
  color: rgba(255, 255, 255, 0.75);
}

#search input::-moz-input-placeholder {
  color: rgba(255, 255, 255, 0.75);
}

#search input:-ms-input-placeholder {
  color: rgba(255, 255, 255, 0.75);
}

#search button {
  width: 50px;
  height: 50px;

  position:absolute;
  top:40px;
  right:40px;
  z-index:2;

  border-radius: 25px;
  background: #fff;
  border: 0px;
  box-shadow: none;
  outline: none;
  cursor: pointer;

  -webkit-appearance: none;
  -moz-appearance: none;
}

#search button svg {
  width: 16px;
  height: 16px;

  position: absolute;
  top: 50%;
  left: 50%;

  margin: -8px 0 0 -8px;
}

#search button svg .fill {
  fill: #25b99a;
}



.butt
{
position: absolute;
top:10px;
right:10px;
}

#countryList{
  width:100%;
}

.pricediv
{


  float:right;
}

.quantitydiv input
{
  float:right;
  width:20%;
  margin-left: 15px;
}

.linepricediv
{
    float:right;
    position:absolute;
    top:55%;
    right:10px;
}

#spantotal
{
  float:left;
  width:80%;
  text-align: right;
}
#totalprice
{

  float: right;
  text-align: right;
    clear: both;
    width: 20%;
    margin-bottom: 10px;
    font-size: 20px;
    padding-top: 11px;
}


#genbill
{
position: relative;
    text-align: right;
  float:right;
}
/*
1.Budget Setter
2.Sort by price
3.BG color change on exceeding Budget
4.Payment Gateway

1.prplan ka + button barabar karna hai

1.AR shopping recipe recommends
2.Easter egg concept

1.Purchase History pura baaki hai

1.MAP

1.Login section    rahul kar ra hai na?? haa
2.googl

isme kya karega ??
purchase hist tho cust ka database banane ke baad hi chalu karsakte hai
Map ka kuch kar sakte

aisa kuch na??

kya hua?? kuch nahi pak raha hai isliye kya kar ra hai dekha
movie dek  koko dekh ke ho gayame
me kuch du kya bol mere pas stock hai
mere pas bohot kuch  dekne ke liye hai par kaam bhi hai na

ni tho aur kisi ko puchte hai relating to iot or something
Ok baad me sochte chod abhi
ok bye me jara hu abhi
tere pas maam ka ajax files haikya jo maam ne sikhaya that
ni re
ek baar saiprasad ko puchke de shyad uske pas add_shopping_cartokkokokokokoko
baap tha who echo
kon
phle namrata maam ko puchte hai{

}
*/



        ul.todo {
          list-style-type: none;
          padding-left: 0px;
          background: white;
          width: 100%;
          float: left;
        }

        ul.todo li {
          width: 100%;
          min-height: 50px;
          float: left;
          font-size: 14px;
          font-weight: 500;
          color: #444;
          line-height: 22px;

          background: #e0e0e0;
          border-radius: 5px;
          position: relative;
          box-shadow: 0px 1px 2px rgba(44, 62, 80, 0.10);
          margin: 0 0 10px 0;
          padding: 14px 100px 14px 14px;
          word-break: break-word;
        }



           ul{
                background-color:#eee;
                cursor:pointer;
           }
           li{
                padding:12px;
           }


        #view-source {
          position: fixed;
          display: block;
          right: 0;
          bottom: 0;
          margin-right: 40px;
          margin-bottom: 40px;
          z-index: 900;
        }


        </style>

    <!-- Add to home screen for Safari on iOS -->
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <meta name="apple-mobile-web-app-title" content="Template PWA">
    <link rel="apple-touch-icon" href="images/icons/icon-152x152.png">
    <!-- Windows -->
    <meta name="msapplication-TileImage" content="images/icons/icon-144x144.png">
    <meta name="msapplication-TileColor" content="#2F3BA2">

    <link rel="icon"
         type="image/png"
         href="images/icons/icon-144x144.png">


         <meta charset="utf-8">
         <meta http-equiv="Content-Type" content="text/html; charset=utf-8">

  </head>
  <body>


      <div class="demo-layout mdl-layout mdl-js-layout mdl-layout--fixed-drawer mdl-layout--fixed-header">

        <header class="demo-header mdl-layout__header mdl-color--grey-100 mdl-color-text--grey-600">
          <div class="mdl-layout__header-row">
            <span class="mdl-layout-title">Preplan Purchase</span>
            <div class="mdl-layout-spacer"></div>

        </header>
        <div class="demo-drawer mdl-layout__drawer mdl-color--blue-grey-900 mdl-color-text--blue-grey-50">
          <header class="demo-drawer-header">
            <img src="images/user.jpg" class="demo-avatar">
            <div class="demo-avatar-dropdown">
              <span>hello@example.com</span>
              <div class="mdl-layout-spacer"></div>
              <button id="accbtn" class="mdl-button mdl-js-button mdl-js-ripple-effect mdl-button--icon">
                <i class="material-icons" role="presentation">arrow_drop_down</i>
                <span class="visuallyhidden">Accounts</span>
              </button>
              <ul class="mdl-menu mdl-menu--bottom-right mdl-js-menu mdl-js-ripple-effect" for="accbtn">
                <li class="mdl-menu__item">hello@example.com</li>
                <li class="mdl-menu__item">info@example.com</li>
                <li class="mdl-menu__item"><i class="material-icons">add</i>Add another account...</li>
              </ul>
            </div>
          </header>

          <nav class="demo-navigation mdl-navigation mdl-color--blue-grey-800">
            <a class="mdl-navigation__link" href="index.php"><i class="mdl-color-text--blue-grey-400 material-icons" role="presentation">home</i>Home</a>
            <a class="mdl-navigation__link" href="#"><i class="mdl-color-text--blue-grey-400 material-icons" role="presentation">add_shopping_cart</i>Preplan Purchase</a>
            <a class="mdl-navigation__link" href="ar/index.html"><i class="mdl-color-text--blue-grey-400 material-icons" role="presentation">control_camera</i>AR Shopping</a>
            <a class="mdl-navigation__link" href=""><i class="mdl-color-text--blue-grey-400 material-icons" role="presentation">history</i>Purchase History</a>
            <a class="mdl-navigation__link" href=""><i class="mdl-color-text--blue-grey-400 material-icons" role="presentation">redeem</i>Redeem Points</a>
            <a class="mdl-navigation__link" href=""><i class="mdl-color-text--blue-grey-400 material-icons" role="presentation">map</i>Map</a>
          </nav>
        </div>


        <main class="mdl-layout__content mdl-color--grey-100">
          <div class="mdl-grid demo-content">

            <div class="demo-charts mdl-color--white mdl-shadow--2dp mdl-cell mdl-cell--12-col mdl-grid">



		<div id="search">
			<input type="text" placeholder="Enter Product Name..." id="country">
			<button id="addcart">
				<svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"viewBox="0 0 16 16" style="enable-background:new 0 0 16 16;" xml:space="preserve"><g><path class="fill" d="M16,8c0,0.5-0.5,1-1,1H9v6c0,0.5-0.5,1-1,1s-1-0.5-1-1V9H1C0.5,9,0,8.5,0,8s0.5-1,1-1h6V1c0-0.5,0.5-1,1-1s1,0.5,1,1v6h6C15.5,7,16,7.5,16,8z"/></g></svg>
			</button>
		</div>






                <div id="countryList"></div>
                <span id="spantotal" class="mdl-layout-title">Total :</span>
                <div id="totalprice"></div>
                <p>Cart Items</p>
                <button id="sort">Sort</button>
                <ul class="todo" id="todo"></ul>

                <button id="savepre" class="mdl-button mdl-js-button mdl-button--raised mdl-button--accent mdl-button--colored">Save preplan</button>

            </div>
          </div>
        </main>
      </div>

      <script>
       $(document).ready(function(){
            $('#country').keyup(function(){
                 var query = $(this).val();
                 if(query != '')
                 {
                      $.ajax({
                           url:"search.php",
                           method:"POST",
                           data:{query:query},
                           success:function(data)
                           {

                                $('#countryList').fadeIn();
                                $('#countryList').html(data);
                           }
                      });
                 }
            });
            $(document).on('click', '#dropdown', function(){
                 $('#country').val($(this).text());
                 $('#countryList').fadeOut();
            });
       });


       var addcart=document.getElementById('addcart');

       addcart.addEventListener("click", add);

       function add(){

         var input=document.getElementById('country').value;


         var list=document.getElementById('todo');

         var item= document.createElement('li');
         item.setAttribute("id","listofproducts");

         item.innerText=input;

         var quantitydiv=document.createElement('div');

         var pricediv=document.createElement('div');

         var buttondiv=document.createElement('div');

         var linepricediv=document.createElement('div');

         var inp = document.createElement("INPUT");
         inp.setAttribute("type", "number");
         inp.setAttribute("value","1");
         inp.setAttribute("id","quantity");


         var remove=document.createElement('button');


         var query1= input;

         $.ajax({
              url:"pdetails.php",
              method:"POST",
              data:{query:query1},
              success:function(response)
              {
                response = jQuery.parseJSON(response);

                    pricediv.innerHTML=response.message;

                    linepricediv.innerHTML=response.message;

              }
         });


         list.insertBefore(item, list.childNodes[0]);

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





         remove.addEventListener('click',removeitem);
         var removeSVG ='<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M6 19c0 1.1.9 2 2 2h8c1.1 0 2-.9 2-2V7H6v12zM19 4h-3.5l-1-1h-5l-1 1H5v2h14V4z"/><path d="M0 0h24v24H0z" fill="none"/></svg>';


         remove.classList.add('remove');
         remove.innerHTML = removeSVG;

         inp.addEventListener('change',updatelineprice);

         updatetotaladd();
      }


      var subtotal=0;

      function updatetotaladd()
      {
        var query2=document.getElementById('country').value;


        $.ajax({
             url:"pdetails.php",
             method:"POST",
             data:{query:query2},
             success:function(response)
             {
               response = jQuery.parseJSON(response);

               var t=parseFloat(document.getElementById('totalprice').innerHTML);
                   document.getElementById('totalprice').innerHTML=t+parseFloat(response.message);

             }
        });


                 document.getElementById('country').value="";

      }




    function updatelineprice()
     {
       qua=this.value;
        var par=this.parentNode.parentNode;
        var pri=par.children[2].innerHTML;

        par.children[0].innerHTML=qua*pri;

        updatetotal();
            }

updatetotal();
    function updatetotal()
    {

      var subtotal=0;
      $('.todo li').each(function () {


        subtotal += parseFloat(this.children[0].innerHTML);

          });

          document.getElementById('totalprice').innerHTML=subtotal;
    }



      function removeitem()
      {
        var item=this.parentNode.parentNode;
        var parent=item.parentNode;
        parent.removeChild(item);
        updatetotal();
      }



      document.getElementById('sort').addEventListener("click", sortList);


      function sortList() {
  var list, i, switching, b, shouldSwitch;
  list = document.getElementById("todo");
  switching = true;
  /*Make a loop that will continue until
  no switching has been done:*/
  while (switching) {
    //start by saying: no switching is done:
    switching = false;
    b = $('ul.todo li');
    //Loop through all list-items:
    for (i = 0; i < (b.length - 1); i++) {
      //start by saying there should be no switching:
      shouldSwitch = false;
      /*check if the next item should
      switch place with the current item:*/
      if ( parseFloat(b[i].children[0].innerHTML) < parseFloat(b[i+1].children[0].innerHTML) ) {
        /*if next item is alphabetically
        lower than current item, mark as a switch
        and break the loop:*/
        shouldSwitch = true;
        break;
      }
    }
    if (shouldSwitch) {
      /*If a switch has been marked, make the switch
      and mark the switch as done:*/
      b[i].parentNode.insertBefore(b[i + 1], b[i]);
      switching = true;
    }
  }
}



  var savepre=document.getElementById('savepre');
   savepre.addEventListener('click',saveprefn);





 function saveprefn()
 {


    var TableData;
    TableData = storeTblValues()
    TableData = $.toJSON(TableData);

    alert(TableData);

    function storeTblValues()
    {
        var TableData = new Array();

        $('.todo li').each(function(row){


            TableData[row]={
                "pname" : this.childNodes[0].nodeValue
                , "qua" :this.children[1].children[0].value
                }
          row=row+1;


        });


        return TableData;
    }



    $.ajax({
    url: "storepredb.php",
    method: "POST",
    data: {pTableData:TableData} ,
    success: function(msg){
        // return value stored in msg variable
        alert(msg);
    }
});




 }


       </script>


       <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-json/2.6.0/jquery.json.min.js"></script>
      <script src="https://code.getmdl.io/1.3.0/material.min.js"></script>
  </body>
  </html>
