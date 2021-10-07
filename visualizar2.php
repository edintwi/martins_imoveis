<?php 
  include "include/header.php";
  include('scripts/connection.php');
  include('scripts/view.php');
?>
     
    <section class="container"> 
        <div class="text-container w-50">
          <h1><?php echo $dados['titulo'] ?></h1>
          <h2>Bairro: <?php echo $dados['bairro'] ?></h2>
           <p style="white-space: break-spaces;"><?php echo $dados['descricao']  ?></p>
            <h2>Endereço: </h2>
            <h2>Valor: R$ <?php echo number_format($dados['valor'],2,",","."); ?></h2>
            <a href=" https://api.whatsapp.com/send?phone=5521993576574&text=Ol%C3%A1%2C%20tenha%20interesse%20na%20casa%2Fapartamento%20de%20c%C3%B3digo%3A%20%24%7Bcodigo%7D!">Entre em contato</a>
        </div>


<!-- Images used to open the lightbox -->
<div class="row w-50">
  <div class="column">
    <img src="imagens/02.jpg" onclick="openModal();currentSlide(2)" class="hover-shadow w-100">
  </div>
  <div class="column">
    <img src="imagens/03.jpg" onclick="openModal();currentSlide(3)" class="hover-shadow w-100">
  </div>
  <div class="column">
    <img src="imagens/04.jpg" onclick="openModal();currentSlide(4)" class="hover-shadow w-100">
  </div>
  <div class="column">
    <img src="imagens/01.jpg" onclick="openModal();currentSlide(1)" class="hover-shadow w-100">
  </div>
  <div class="column">
    <img src="imagens/02.jpg" onclick="openModal();currentSlide(2)" class="hover-shadow w-100">
  </div>
  <div class="column">
    <img src="imagens/03.jpg" onclick="openModal();currentSlide(3)" class="hover-shadow w-100">
  </div>
  <div class="column">
    <img src="imagens/04.jpg" onclick="openModal();currentSlide(4)" class="hover-shadow w-100">
  </div>
  <div class="column">
    <img src="imagens/01.jpg" onclick="openModal();currentSlide(1)" class="hover-shadow w-100">
  </div>
  <div class="column">
    <img src="imagens/02.jpg" onclick="openModal();currentSlide(2)" class="hover-shadow w-100">
  </div>
  <div class="column">
    <img src="imagens/03.jpg" onclick="openModal();currentSlide(3)" class="hover-shadow w-100">
  </div>
  <div class="column">
    <img src="imagens/04.jpg" onclick="openModal();currentSlide(4)" class="hover-shadow w-100">
  </div>
  <div class="column">
    <img src="imagens/01.jpg" onclick="openModal();currentSlide(1)" class="hover-shadow w-100">
  </div>
  <div class="column">
    <img src="imagens/02.jpg" onclick="openModal();currentSlide(2)" class="hover-shadow w-100">
  </div>
  <div class="column">
    <img src="imagens/03.jpg" onclick="openModal();currentSlide(3)" class="hover-shadow w-100">
  </div>
  <div class="column">
    <img src="imagens/04.jpg" onclick="openModal();currentSlide(4)" class="hover-shadow w-100">
  </div>
  <div class="column">
    <img src="imagens/01.jpg" onclick="openModal();currentSlide(1)" class="hover-shadow w-100">
  </div>
  <div class="column">
    <img src="imagens/02.jpg" onclick="openModal();currentSlide(2)" class="hover-shadow w-100">
  </div>
  <div class="column">
    <img src="imagens/03.jpg" onclick="openModal();currentSlide(3)" class="hover-shadow w-100">
  </div>
  <div class="column">
    <img src="imagens/04.jpg" onclick="openModal();currentSlide(4)" class="hover-shadow w-100">
  </div>
  <div class="column">
    <img src="imagens/01.jpg" onclick="openModal();currentSlide(1)" class="hover-shadow w-100">
  </div>
  <div class="column">
    <img src="imagens/02.jpg" onclick="openModal();currentSlide(2)" class="hover-shadow w-100">
  </div>
  <div class="column">
    <img src="imagens/03.jpg" onclick="openModal();currentSlide(3)" class="hover-shadow w-100">
  </div>
  <div class="column">
    <img src="imagens/04.jpg" onclick="openModal();currentSlide(4)" class="hover-shadow w-100">
  </div>
</div>

<!-- The Modal/Lightbox -->
<div id="myModal" class="modal">
  <span class="close cursor" onclick="closeModal()">&times;</span>
  <div class="modal-content">

    <div class="mySlides">
      <div class="numbertext">1 / 4</div>
      <img src="imagens/01.jpg" style="width:100%">
    </div>

    <div class="mySlides">
      <div class="numbertext">2 / 4</div>
      <img src="imagens/02.jpg" style="width:100%">
    </div>

    <div class="mySlides">
      <div class="numbertext">3 / 4</div>
      <img src="imagens/03.jpg" style="width:100%">
    </div>

    <div class="mySlides">
      <div class="numbertext">4 / 4</div>
      <img src="imagens/04.jpg" style="width:100%">
    </div>
  </div>
</div>


    </section>

    <script>
        // Open the Modal
        function openModal() {
        document.getElementById("myModal").style.display = "block";
        }

        // Close the Modal
        function closeModal() {
        document.getElementById("myModal").style.display = "none";
        }

        var slideIndex = 1;
        showSlides(slideIndex);

        // Next/previous controls
        function plusSlides(n) {
        showSlides(slideIndex += n);
        }

        // Thumbnail image controls
        function currentSlide(n) {
        showSlides(slideIndex = n);
        }

        function showSlides(n) {
        var i;
        var slides = document.getElementsByClassName("mySlides");
        var dots = document.getElementsByClassName("demo");
        var captionText = document.getElementById("caption");
        if (n > slides.length) {slideIndex = 1}
        if (n < 1) {slideIndex = slides.length}
        for (i = 0; i < slides.length; i++) {
            slides[i].style.display = "none";
        }
        for (i = 0; i < dots.length; i++) {
            dots[i].className = dots[i].className.replace(" active", "");
        }
        slides[slideIndex-1].style.display = "block";
        dots[slideIndex-1].className += " active";
        captionText.innerHTML = dots[slideIndex-1].alt;
        }
    </script>

<?php include "include/footer.php"; ?>