@extends('layouts.app')
@section('title', 'Laboratuvar')
@section('content')
<x-breadcrumb color="fff" title="Laboratuvar" image="img/intro_img/1.jpg" description="" />

<main role="main">

    <section class="section section--pb">
        <div class="container">
            <div class="section-heading">
                <h2 class="__title">Çavaş <span>Yem</span></h2>
            </div>
            <div class="row">
                <div class="col-6 col-lg-6 col-xl-6">
                    <p>Çavaş Yem, kurulduğu günden bu güne kadar ki süreçte sürekli araştırmaya ve geliştirmeye önem vermektedir. Çünkü üretim sektöründe araştırma ve geliştirme üretim ve kaliteyi artırmanın en faydalı yöntemidir. Kalite Kontrol laboratuvarında yapmış olduğumuz analiz ve izlemeler hammaddenin fabrikaya girişinden ürünün son noktada ki nihai tüketiciye ulaşana kadar devam etmektedir. Kaliteli yem üretmenin en önemli kıstaslarından biri, kaliteli hammadde alımıdır. Bu nedenle fabrikamıza giren hammaddeler için farklı noktalardan numune alınarak, hammaddenin uygunluğu tespit edilmektedir.  Ürünler, üretimin her aşamasında alınan numuneler ile üretilmek istenen rasyonda ki ürünlerle karşılaştırılmaktadır. Yem rasyonlarının hazırlanmasında uzman teknik ekibimizden yararlanılmaktadır. Maksimum müşteri memnuniyeti açısından sistem her an kendini otomatik olarak kontrol etmektedir. 
Firmamız, müşteri memnuniyeti odaklı çalışma sisteminde üretmiş olduğu ürünlerin doğru zaman ve besleme yöntemleri ile tüketilmesini garanti altına almak için saha çalışmalarına gereken özeni göstermektedir. Müşterilerimizi bilinçlendirmek için uzman çalışanlarımız tarafından seminer, bilgilendirme toplantıları ve besi hane ziyaretleri yapılmaktadır.</p>
                    <p style='margin:0cm;font-size:15px;font-family:"Calibri",sans-serif;text-align:justify;'><strong>Laboratuvarımızda Yapılan Analizleri:&nbsp;</strong></p>
                    <ol style="list-style-type: undefined;margin-left:26px;"><strong><span class="fr-close-ol"></span><span class="fr-close-ol"></span><span class="fr-close-ol"></span><span class="fr-close-ol"></span><span class="fr-close-ol"></span></strong>
                        <li><strong><span style="font-family:Calibri;">Nem Tayini&nbsp;</span></strong></li>
                        <li><strong><span style="font-family:Calibri;">K&uuml;l Tayini&nbsp;</span></strong></li>
                        <li><strong><span style="font-family:Calibri;">Nişasta Tayini</span></strong></li>
                        <li><strong><span style="font-family:Calibri;">Protein Tayini&nbsp;</span></strong></li>
                        <li><strong><span style="font-family:Calibri;">Hektolitre Tayini</span></strong></li>
                        <li><strong><span style="font-family:Calibri;">Sel&uuml;loz Tayini</span></strong></li>
                        <li><strong><span style="font-family:Calibri;">Ph Tayini&nbsp;</span></strong></li>
                        <li><strong><span style="font-family:Calibri;">Toplam Aflatoksin Tayini</span></strong></li>
                        <li><strong><span style="font-family:Calibri;">Yağ Tayini&nbsp;</span></strong></li>
                        <li><strong><span style="font-family:Calibri;">Metabolik Enerji Tayini </span></strong></li>
                    </ol>                    
                </div>
                <div class="col-6 col-lg-6 col-xl-6">
                    <div class="row lab">
                        <img class="col-6 p-3" src="{{ asset('images/lab/01.jpg') }}">  
                        <img class="col-6 p-3" src="{{ asset('images/lab/02.jpg') }}">  
                        <img class="col-6 p-3" src="{{ asset('images/lab/03.jpg') }}">  
                        <img class="col-6 p-3" src="{{ asset('images/lab/04.jpg') }}">  
                    </div>           
                </div>
            </div>
        </div>
    </section>
</main>
@endsection
