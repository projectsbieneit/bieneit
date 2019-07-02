<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<script src="/js/jquery.printPage.js"></script>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.5.2/jquery.min.js"></script>
<script src="http://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.2/modernizr.js"></script>

<style>
.no-js #loader { display: none;  }
.js #loader { display: block; position: absolute; left: 100px; top: 0; }
.se-pre-con {
	position: fixed;
	left: 0px;
	top: 0px;
	width: 100%;
	height: 100%;
	z-index: 9999;
	background: url(http://www.animatedimages.org/data/media/474/animated-printer-image-0008.gif) center no-repeat #fff;
}
.se-pre-con p{
    margin: 0;
    position: absolute;
    top: 60%;
    left: 50%;
    margin-right: -50%;
    transform: translate(-50%, -50%)
}
@media print {
    body{
        width:100%;
    }
    .page-wrapper {
     margin-left: 0px; 
}
  footer {page-break-after: always;}
.topbar{display:none;}
.hidestatus{display:none;}
.left-sidebar{display:none;}
.footer{display:none;}
}
</style>
<script>
$(window).load(function() {
       
});
jsarray = JSON.parse(sessionStorage.getItem("jsArray"));
sessionStorage.clear();
$(document).ready(function(){
    $('#to').html(jsarray.length);
});
function myFunction() {
    window.close();
}

$(function() {

});
$(document).ready(function() {
    var months = ["January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December"];
            var d = new Date();

    var i=0;
console.log(jsarray.length);
for(i=0;i<jsarray.length;i++){
$.get(jsarray[i], function(data){
    $("body").append("<h2>Castramax R-Control</h2>")
    $("body").append("<h4>Castramax R-Control12 | Biene IT GmbH | Ludwigsburg | +49 7141 309 72 70 | info@bieneit.de</h4><br>")

    $("body").append(data);
    $("body").append('<p style="position: fixed;text-align:right; float:right; bottom: 0;">Print Date'+':'+ d.getDate()+'-'+months[d.getMonth()]+'-'+d.getFullYear()+'</p>');
    $("body").append("<footer></footer>");
});
}
console.log(i);
if(i==jsarray.length){

        setTimeout(function () {
            $(".se-pre-con").fadeOut("slow");
        $(".se-pre-con").remove();
        window.print();
       
        }, i+1*1000);
}
    });

</script>
<body id="clone" onafterprint="myFunction()">
<div class="se-pre-con">
<p>Making <span id="to"></span> orders ready to print</p>
</div>

</body>