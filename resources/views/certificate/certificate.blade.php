<!doctype html >
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Certificate</title>
</head>
<body>
Downloading your certificarte...<br>
<script src="https://unpkg.com/jspdf@1.4.1/dist/jspdf.min.js"></script>
<script>
    let imgData = '{!! $image !!}';
    function generatePdf(){
        let doc = new jsPDF('l','mm',[926.041666667,654.84375]);
        let width = doc.internal.pageSize.width;
        let height = doc.internal.pageSize.height;
        doc.addImage(imgData, 'JPEG', 0,0,width,height);
        doc.save('certificate.pdf');
    }
    generatePdf();
</script>
</body>
</html>