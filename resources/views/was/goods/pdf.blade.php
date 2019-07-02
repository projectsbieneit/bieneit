@php
$er=json_encode(unserialize($codes));
$ar = json_decode($er);

@endphp
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/jsbarcode/3.3.20/JsBarcode.all.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/1.3.5/jspdf.debug.js"></script>
<script src="https://html2canvas.hertzen.com/dist/html2canvas.min.js"></script>
<div id="cc" style="width:210mm;display: inline-flex;height:297mm;">
</div>

<button id="print-btn" class="float-right  btn btn-danger">Generate PDF</button>
@php$k=0;@endphp
@foreach($ar as $key => $bb)

<script>
$('#cc').append('<svg style="width:260px;" id="Q{{$key}}"></svg>');
</script>

@endforeach
@foreach($ar as $key => $bb)
<script>
 JsBarcode("#Q{{$key}}", "{{$bb}}");
</script>
@endforeach

<script>
function startPrintProcess(canvasObj, fileName, callback) {
  var pdf = new jsPDF(),
    pdfConf = {
      pagesplit: false,
      background: '#fff'
    };
  document.body.appendChild(canvasObj); //appendChild is required for html to add page in pdf
  pdf.addHTML(canvasObj, 0, 0, pdfConf, function() {
    document.body.removeChild(canvasObj);
    pdf.addPage();
    pdf.save(fileName + '.pdf');
    callback();
  });
}

$('#print-btn').click(()=>{
    html2canvas(document.querySelector('#cc'),{
    width: 1200,
    height: 1200
  }).then(canvas => {
    var pdf = new jsPDF('p', 'mm', [297, 210]);
			pdf.addImage(canvas.toDataURL('image/jpeg'),'JPEG', 0, 0, 280,0 );
			pdf.save('Barcodes');
		});
        });

</script>


