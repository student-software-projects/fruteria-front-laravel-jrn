@extends('layouts.app')
@section('content')



    <div class="col-lg-8 mx-auto my-4">
        <div class="card card-body text-center ">
            <h2>Acerca de </h2>
        </div>
    </div>


<div class="col-md-12 mt-5">
    <div class="row">
        <div class="col-md-12 text-center text-white">

            <hr class="border" />
        </div>
        <div class="col-xs-12 col-sm-12 col-md-10 mx-auto">
            <div id="carousel-1" class="carousel slide  " data-ride="carousel" >
                <ol class="carousel-indicators">
                    <li data-target="#carousel-1" data-slide-to="0" class="active"></li>
                    <li data-target="#carousel-1" data-slide-to="1"></li>
                    <li data-target="#carousel-1" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img class="d-block w-100" src="http://www.adecosur.com/wp-content/uploads/2016/07/13315267_475054446017629_3958854313944767088_n.jpg" alt="First slide" >
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100" src="https://4.bp.blogspot.com/-DhHXhSpRWX0/Wq1DBY8XcvI/AAAAAAAABNI/UfGnKyWjykQ5Vd-9PoIpybpsb7omtdUFwCK4BGAYYCw/s1600/coolsty-barcelona-estrena-sa2pe-una-fruteria-de-diseno-06.jpg" alt="Second slide" >
                    </div>
                </div>
                <a class="carousel-control-prev" href="#carousel-1" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carousel-1" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div>
    </div>
</div><hr class="border" />


<div class="col-md-11 shadow p-3 mb-5 bg-white rounded card card-body my-5 mx-auto">
    <div class="row no-gutters">
        <div class="col-md-4">
            <img src="http://2.bp.blogspot.com/-8CSFN7bdxAs/TwA2EUVqzjI/AAAAAAAABVs/w4rI_fzLygU/s1600/Nueva%2Bimagen11.JPG" class="card-img" alt="...">
        </div>
        <div class="col-md-8">
            <div class="card-body">
                <h5 class="card-title">MISION</h5>
                <p class="card-text">Nuestra misión es satisfacer las necesidades de todos nuestros clientes y  partner así como también de nuestros  trabajadores, con el objetivo de maximizar la eficiencia y optimizar la rentabilidad a través de nuestra  diferenciación en calidad de producto, servicio y precio.
                <p class="card-text"><small class="text-muted">Actulizado el {{ date("Y-m-d")  }}</small></p>
            </div>
        </div>
    </div>
</div>

<div class="col-md-11 shadow p-3 mb-5 bg-white rounded card card-body my-5 mx-auto">
    <div class="row no-gutters">
        <div class="col-md-4">
            <img src="https://www.foro3d.com/attachments/136275d1281029615-fruteria-fruteria-final.jpg" class="card-img" alt="...">
        </div>
        <div class="col-md-8">
            <div class="card-body">
                <h5 class="card-title">VISION</h5>
                Nuestra visión es conseguir la fidelización de nuestros clientes a través de comercialización de productos de calidad, a partir de la cual afianzar un crecimiento progresivo y sostenido en el mercado nacional y europeo consolidando nuestra posición como empresa de referencia en el sector con una imagen corporativa propia y diferenciada de sus competidores. Frutas Terrados trabaja para conseguir la máxima calidad, un catálogo de productos diversificado y el mejor servicio al precio más competitivo.</p>
                <p class="card-text"><small class="text-muted">Actulizado el {{ date("Y-m-d")  }}</small></p>
            </div>
        </div>
    </div>
</div>

<div class="container">
    <div class="map-responsive">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3976.92411032952!2d-74.20988058573687!3d4.607607443741915!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8e3f9e22e1a69dad%3A0x37ca3bcc91bfba65!2sCl.%2078%20Sur%20%2378-71%2C%20Bogot%C3%A1!5e0!3m2!1ses!2sco!4v1590105646415!5m2!1ses!2sco" width="900" height="450" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
    </div>
</div>



@endsection
