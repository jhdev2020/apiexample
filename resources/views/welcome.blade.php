@extends('layout.app') 
@section('content')
<section id="features">
    <div class="container px-5">
        <div class="row gx-5 align-items-center">
            <div class="col-lg-12 order-lg-1 mb-5 mb-lg-0">
                <div class="container-fluid px-5">
                    <div class="row gx-5">
                        <p class="lead fw-normal text-muted mb-5">Con API CP podrás realizar búsquedas de colonias
                            por código postal, municipios y estados de la República Mexicana por nombre.
                        </p>
                        <h4>Documentación técnica</h4>
                        <h5>Pasos para la integración en tu web:</h5>
                        <p>Útiliza una capa de seguridad que tiene el nombre de: <span class="d-flex align-items-center"><span class="small text-danger">api_key_cp </span></span> y la clave a usar es: <span class="d-flex align-items-center"><span class="small text-danger">Key_codigo_postalDDfgQEQwTAiy7676vrt##%@d@i2cASm@*%$*3&</span></span></p>
                        <p>URL principal: <span class="d-flex align-items-center"><span class="small text-danger"> http://localhost/apiexample/public/api/GetDataCP?api_key_cp=Key_codigo_postalDDfgQEQwNADy7676vrt%23%23%@d@i2cASm@*%$*3%26</span></p>
                        <p>La URL utiliza 3 parámetros para acceder a los datos:<br><span class="small text-danger">estado<br>municipio<br>codigo_postal</span></p>
                        <p>Ejemplo; se utiliza el parámetro codigo_postal y el valor 20000: <br> <span class="small text-danger">http://localhost/apiexample/public/api/GetDataCP?api_key_cp=Key_codigo_postalDDfgQEQwNADy7676vrt%23%23%@d@i2cASm@*%$*3%26&estado=&municipio&codigo_postal=20000</span></p>
                        <p>Resutado: <span class="small text-success">{"status":200,"estados":[],"municipios":[{"Municipio":""}],"colonias":[{"Colonia":"Aguascalientes Centro","codigo_postal":20000}]}</span></p>
                        <h5>Mensajes de error</h5>
                        <p>Si la apikey es incorrecta ejemplo: <span class="small text-warning">Key__postalDDfgQEQwNADy7676vrt##%@d@i2cASm@*%$*3&</span><br> Retornara el siguiente JSON <span class="small text-success">{"status":401,"message":"Acceso no autorizado"}</span></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="bg-light">
    <div class="container px-5">
        <div class="row gx-5 align-items-center justify-content-center justify-content-lg-between">
        <h2 class="display-4 lh-1 mb-4">Anexos</h2>
        <div class="col-sm-4 col-md-4">
        <h4>Estados</h4>
            <ul>
                <li>Aguascalientes</li>
                <li>Baja California</li>
                <li>Baja California Sur</li>
                <li>Campeche</li>
                <li>Chiapas</li>
                <li>Chihuahua</li>
                <li>Ciudad de México</li>
                <li>Coahuila de Zaragoza</li>
                <li>Colima</li>
                <li>Durango</li>
                <li>Estado de México</li>
                <li>Guanajuato</li>
                <li>Guerrero</li>
                <li>Hidalgo</li>
                <li>Guadalajara</li>
                <li>Michoacán de Ocampo</li>
                <li>Morelos</li>
                <li>Nayarit</li>
                <li>Nuevo León</li>
                <li>Oaxaca</li>
                <li>Puebla</li>
                <li>Querétaro</li>
                <li>Quintana Roo</li>
                <li>San Luis Potosí</li>
                <li>Sinaloa</li>
                <li>Sonora</li>
                <li>Tabasco</li>
                <li>Tamaulipas</li>
                <li>Tlaxcala</li>
                <li>Veracruz de Ignacio de la Llave</li>
                <li>Yucatán</li>
                <li>Zacatecas</li>
            </ul>
        </div>
        <div class="col-sm-4 col-md-4">
            <h4>Municipios</h4>
            <ul>
                <li>municipio</li>	
                <li>Aguascalientes</li>	
                <li>Asientos</li>	
                <li>Calvillo</li>	
                <li>Costo</li>	
                <li>Jésus María</li>	
                <li>Pabellón de Arteaga</li>	
                <li>Rincón de Romos</li>	
                <li>San Francisco de los Romo</li>	
                <li>Tepezalá</li>	
                <li>Ensenada</li>	
                <li>Mexicali</li>	
                <li>Playas de Rosarito</li>	
                <li>Rodolfo Sánchez Taboada (Maneadero)</li>	
                <li>San Felipe</li>	
                <li>Tecate</li>	
                <li>Tijuana</li>	
                <li>Cabo San Lucas</li>	
                <li>Ciudad Constitución</li>	
                <li>Guerrero Negro</li>	
                <li>Heroica Mulegé</li>	
                <li>La Paz</li>	
                <li>Loreto</li>	
                <li>Puerto Adolfo López Mateos</li>	
                <li>San Ignacio</li>	
                <li>San José del Cabo</li>
            </ul>
        </div>
        <div class="col-sm-4 col-md-4">
            <h4>Códigos Postales</h4>
            <ul>
                <li>20000</li>	
                <li>20010</li>	
                <li>20016</li>	
                <li>20018</li>	
                <li>20020</li>	
                <li>20029</li>	
                <li>20030</li>	
                <li>20040</li>	
                <li>20049</li>	
                <li>20050</li>	
                <li>20059</li>	
                <li>20060</li>	
                <li>20064</li>	
                <li>20070</li>	
                <li>20078</li>	
                <li>20080</li>	
                <li>20089</li>	
                <li>20100</li>	
                <li>20110</li>	
                <li>20115</li>	
                <li>20116</li>	
                <li>20117</li>	
                <li>20118</li>	
                <li>20119</li>	
                <li>20120</li>
            </ul>
        </div>
    </div>
    </div>
</section>
<footer class="bg-black text-center py-5">
    <div class="container px-5">
        <div class="text-white-50 small">
            <div class="mb-2">@jhdev. All Rights Reserved.</div>
            <a href="#!">Contact phone: 7223774904</a>
            <span class="mx-1">&middot;</span>
            <a href="#!">Contact email: gtzjhonatan@gmail.com</a>
        </div>
    </div>
</footer>
@endsection