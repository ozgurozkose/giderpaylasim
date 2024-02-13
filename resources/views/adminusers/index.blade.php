@extends('master')
@section('home_content')
<body>
    <div style="display:flex;">
    <div class="adminContainer">
        <div class="adminHeader">
            <label class="labelHeader">XML</label>
        </div>
        <form action="/admin/readXML" method="post" enctype="multipart/form-data">
        @csrf
        <div class="adminBody">
        <input class="aBodyInput" type="file" id="xmlFile" name="xmlFile">
        
        <button class="aBodyButton" type="submit">Gönder</button>
        </div>
        </form>
        </div>

        
        <div class="adminContainer">
        <div class="adminHeader">
            <label class="labelHeader">XLSX</label>
        </div>
        
        <form action="/admin/readXLSX" method="post" enctype="multipart/form-data">
        @csrf
        <div class="adminBody">
        <input class="aBodyInput" type="file" id="xlsxFile" name="xlsxFile">
        
        <button class="aBodyButton" type="submit">Gönder</button>
        </div>
        </form>
</div>
</div>
</body>
</html>
@endsection