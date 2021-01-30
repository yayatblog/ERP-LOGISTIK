<!-- Jumbotron -->
<style>
    .jumbotron {
        background-image: url('http://img1.vitrans.co.id/home3-e2-2494_36-t2942_123.jpg');
        background-size: cover;
        height: 500px;
        width: 100%;
        text-align: center;
        position: relative;
    }

    .info-panel {
        /* background-color: salmon; */
        box-shadow: 0 3px 20px rgba(0, 0, 0, 0.5);
        border-radius: 10px;
        margin-top: -100px;
        background-color: white;
        padding: 15px;
    }

    .info-panel img {
        width: 65px;
        height: 65px;
        margin-right: 15px;
        margin-bottom: 10px;
    }

    .info-panel h4 {
        font-size: 14px;
        font-weight: bold;
        text-transform: uppercase;
    }

    .workingspace {
        margin-top: 100px;
        text-align: center;
    }

    .workingspace h3 {
        font-size: 40px;
        font-weight: 160;
        text-transform: uppercase;
        margin-top: 15px;
    }

    .workingspace p {
        font-size: 15px;
        color: black;
        font-weight: 160;
        margin: 25px 0;
    }

    .testimonial {
        text-align: center;
        font-size: 15px;
        margin-top: 15px;
        font-style: italic;
    }

    .testimonial img {
        box-shadow: 0 3px 20px rgba(0, 0, 0, 0.5);
        height: 100px;
        width: 100px;
    }
    /*Penghalang*/
    .penghalang {
        display: none;
        position: fixed;
        z-index: 1;
        left: 0;
        top: 0;
        width: 100%;
        height: 100%;
        overflow: auto;
        background-color: rgb(0,0,0);
        background-color: rgba(0,0,0,0.4);
    }

    /*Modal */
    .modal-content {
        background-color: #fefefe;
        margin: 15% auto;
        padding: 20px;
        border: 1px solid #888;
        width: 80%;
    }

    /*Tombol X*/
    #tutup {
        color: #aaa;
        float: right;
        font-size: 28px;
        font-weight: bold;
    }

    #tutup:hover,
    #tutup:focus {
        color: black;
        cursor: pointer;
    }
    /* jwpopup box style */
.jwpopup {
    display: none;
    position: fixed;
    z-index: 1;
    padding-top: 110px;
    left: 0;
    top: 0;
    width: 100%;
    height: 100%;
    overflow: auto;
    background-color: rgb(0,0,0);
    background-color: rgba(0,0,0,0.7);
}
.jwpopup-content {
    position: relative;
    background-color: #fefefe;
    margin: auto;
    padding: 0;
    max-width: 500px;
    box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2),0 6px 20px 0 rgba(0,0,0,0.19);
    -webkit-animation-name: animatetop;
    -webkit-animation-duration: 0.4s;
    animation-name: animatetop;
    animation-duration: 0.4s
}

.jwpopup-head {
	font-size: 11px;
    padding: 1px 16px;
    color: white;
    background: #006faa; /* For browsers that do not support gradients */
    background: -webkit-linear-gradient(#006faa, #002c44); /* For Safari 5.1 to 6.0 */
    background: -o-linear-gradient(#006faa, #002c44); /* For Opera 11.1 to 12.0 */
    background: -moz-linear-gradient(#006faa, #002c44); /* For Firefox 3.6 to 15 */
    background: linear-gradient(#006faa, #002c44); /* Standard syntax */
}
.jwpopup-main {padding: 5px 16px;}
.jwpopup-foot {
	font-size: 12px;
    padding: .5px 16px;
    color: #ffffff;
    background: #006faa; /* For browsers that do not support gradients */
    background: -webkit-linear-gradient(#006faa, #002c44); /* For Safari 5.1 to 6.0 */
    background: -o-linear-gradient(#006faa, #002c44); /* For Opera 11.1 to 12.0 */
    background: -moz-linear-gradient(#006faa, #002c44); /* For Firefox 3.6 to 15 */
    background: linear-gradient(#006faa, #002c44); /* Standard syntax */
}

/* tambahkan efek animasi */
@-webkit-keyframes animatetop {
    from {top:-300px; opacity:0}
    to {top:0; opacity:1}
}

@keyframes animatetop {
    from {top:-300px; opacity:0}
    to {top:0; opacity:1}
}

/* style untuk tombol close */
.close {
	margin-top: 7px;
    color: white;
    float: right;
    font-size: 28px;
    font-weight: bold;
}
.close:hover, .close:focus {
    color: #999999;
    text-decoration: none;
    cursor: pointer;
}
    }
</style>
<div class="">

    <div class="jumbotron jumbotron-fluid">
        <div class="container">
            <!-- <h1 class="display-4 text-white">Syukuri Apa Yang Kita <span>Punya</span>, Bukan <span>Mengeluh!</span>
            </h1> -->
            <h2 class="display-4 text-white" style="font-family: Berlin Sans FB Black; font-size: 60px;
-webkit-text-stroke: 3px black;">Kami melayani pengiriman produk fresh dan frozen untuk semua tujuan Jabodetabek, Pulau Jawa dan Bali, Lombok, Sumatera</h2>
            <button id="tombolku" class="btn btn-primary">Motivation</button>
    <!-- <div id="myModal" class="penghalang">
        <div class="modal-content">
            <span id="tutup">&times;</span>
            <p>ini adalah Modal..</p>
        </div>
    </div> -->
        </div>
    </div>
   <div id="myModal" class="jwpopup">
	<!-- jwpopup content -->
	<div class="jwpopup-content" >
		<div class="jwpopup-head">
            <span id="tutup">&times;</span>

			<h2>Notes</h2>
		</div>
		<div class="jwpopup-main">
			<p>Kehidupan ini bukan hanya tentang memiliki, tetapi tentang menghargai dan bersyukur atas yang sudah kita miliki.</p>
		</div>
		<div class="jwpopup-foot">
			<p>Mario Teguh</p>
		</div>
	</div>
</div>
    <!-- Akhir Jumbotron -->
    <!-- Container -->
    <div class="container">
        <!-- Info Panel -->
        <div class="row justify-content-center">
            <div class="col-10 info-panel">
            <style>
                .catatan{
                    font-size:14px;
                }
            </style>
                <div class="row">
                    <div class="col-lg">
                        <img src="http://img2.vitrans.co.id/icon_call-08-2942_125-t2942_109.png" alt="Employee" class="float-left">
                        <h4>On Call</h4>
                        <p class="catatan">Kami melayani pengiriman produk fresh dan frozen untuk semua tujuan Jabodetabek, Pulau Jawa dan Bali, Lombok, Sumatera</p>
                    </div>
                    <div class="col-lg">
                        <img src="http://img3.vitrans.co.id/icon_driver-40-2942_126-t2942_109.png" alt="High Res" class="float-left">
                        <h4>Dedicated contract | Included Driver</h4>
                        <p class="catatan">Kami menyediakan truk kontrak bulanan termasuk dengan driver, biaya BBM, operasianal dan perawatan kendaraan ( all in )</p>
                    </div>
                    <div class="col-lg">
                        <img src="http://img4.vitrans.co.id/icon_truct-38-2942_127-t2942_109.png" alt="Security" class="float-left">
                        <h4>Dedicated contract | Truck Only</h4>
                        <p class="catatan">Kami menyediakan pula truk untuk kontrak bulanan tanpa driver, pihak penyewa yang menyediakan driver dan biaya operasianal</p>
                    </div>
                </div>
            </div>
        </div>
        <!-- Akhir Info Panel -->

        <!-- Working Space -->
        <div class="row workingspace">
            <div class="col">
                <img src="http://img2.vitrans.co.id/coltdiesel_engkel-12-2942_161-t2942_112.jpg" alt="Workingspace" class="img-fluid">
            </div>
            <div class="col">
                <h3>You <span>Work</span> like at <span>home</span></h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Iusto optio ab perspiciatis unde.</p>
                <button class="btn btn-primary tombol">Gallery</button>
            </div>
        </div>
        <!-- Akhir Working Space -->
    </div>
    <!-- Testimonial -->
    <section class="testimonial">
        <div class="row justify-content-center">
            <div class="col-8">
                <h5>Don't let the fear of losing be greater than the excitement of winning.</h5>
                <h5>(Robert Kiyosaki)</h5>
            </div>
            <div class="col-8">
        <h5>If you can dream it, you can do it.</5>
                <h5>(Walt Disney)</h5>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-6 justify-content-center d-flex">
                <figure class="figure">
                    <img src="http://img4.vitrans.co.id/logo-9c-2942_103-t2942_105.png" alt="Testi 1" class="figure-img img-fluid rounded-circle">
                    <figcaption class="figure-caption">
                        <h3>VITRANS</h3>
                        <span>REFRIGRATED TRANSPORT SERVICES</span>
                    </figcaption>
                </figure>
            </div>
        </div>
    </section>
    <img itemprop="image" class="style_2942_114 data_2942_916" src="http://img3.vitrans.co.id/mapemall-6b-2942_130-t2942_114.jpg" alt="Other Information COVERAGE AREA mapemall">
    <!-- Akhir Container -->
    <div style="text-align:center;font-family:sans-serif" itemscope="" itemtype="http://schema.org/Thing"><h1 class="style_2494_92 data_2494_346 text"><span itemprop="name">Transportasi Truk Pendingin</span></h1><img itemprop="image" class="data_2942_904" src="http://img4.vitrans.co.id/line_title-8330e-2942_107.png" alt="Other Information Transportasi Truk Pendingin coltdiesel engkel"><div class="data_2942_905 text"></div><div class="style_2942_122 data_2494_347 text"><span class="facenter"><b>VITRANS</b> |PT. Selaras Mandiri Raya Trans| adalah Perusahaan yang bergerak dalam jasa <b>transportasi truk pendingin</b>, melayani jasa pengiriman berbagai macam produk fresh dan beku (chilled and frozen) seperti : buah buahan segar, sayuran segar, ikan, daging ayam, daging sapi dan hasil olahannya (nugget, sosis), ice cream, susu, coklat, obat-obatan (vaksin) dan semua jenis produk yang membutuhkan suhu ruang seperti yang di inginkan.<br><br>Kami berpengalaman sejak tahun 2010 dalam industri <b>transportasi truk berpendingin</b>, memberikan pengalaman, pengetahuan dan keahlian yang baik untuk memastikan pengiriman produk tepat waktu serta dengan suhu yang terjaga ke seluruh kota tujuan di pulau Jawa, Bali, Lombok dan Sumatera.<br></span></div></div>
</div>
<script>
    var modal = document.getElementById('myModal');
    var btn = document.getElementById("tombolku");
    var span = document.getElementById("tutup");

    btn.onclick = function() {
        modal.style.display = "block";
    }

    span.onclick = function() {
        modal.style.display = "none";
    }

    window.onclick = function(e) {
        if (e.target == modal) {
            modal.style.display = "none";
        }
    }
    
</script>