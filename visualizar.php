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
           <p style="white-space: break-spaces;"><h3>Endereço: <?php echo $dados['endereco']  ?> </p> </h3>
           <h2>Código: <?php echo $dados['id_imoveis']  ?></h2>
           <h2>Valor: R$ <?php echo number_format($dados['valor'],2,",","."); ?></h2>
            <a href="https://api.whatsapp.com/send?phone=5521987552142&text=Oi%20estou%20interessado%20em%20um%20Ap%2FCasa%2FTerreno!!">Entre em contato</a>
        </div>

<?php $dir = $dados['diretorio_thumb'];
    $files = scandir($dir); 
?>  

<!-- Images used to open the lightbox -->

<div class="row w-50">
<?php $num = 1; ?>
<?php foreach ($files as $file){ ?>
<?php $caminho = $dir."/".$file?>
<?php if ($file != '.' && $file != '..'){ ?>
  <div class="column">
   <img src="<?php echo $caminho ?>" onclick="openModal();currentSlide(<?php echo $num ?>)" class="hover-shadow w-100">
  </div>
<?php $num++ ?>
<?php }}; ?>


</div>

<!-- The Modal/Lightbox -->

<div id="myModal" class="modal">
  
<span class="close cursor" onclick="closeModal()">&times;</span>

  
<div class="modal-content">
  <?php foreach ($files as $file){ ?>
  <?php $caminho = $dir."/".$file?>
  <?php if ($file != '.' && $file != '..'){ ?> 
    <div class="mySlides">
      <div class="numbertext"></div>
      <img src="<?php echo $caminho ?>" style="width:100%">
      <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
      <a class="next" onclick="plusSlides(1)">&#10095;</a>
    </div>
<?php }}; ?>   
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
        document.onkeydown = function(event) {
       event = event || window.event;
      switch (event.keyCode || event.which) {
        case 37:
            clearInterval(autoscroll);
            navigate( 'prev' );
            autoscroll = setInterval(function() {navigate( 'next' )}, 5000);
            break;
        case 39:
            clearInterval(autoscroll);
            navigate( 'next' );
            autoscroll = setInterval(function() {navigate( 'next' )}, 5000);
            break;
    }}
    </script>

    

<?php include "include/footer.php"; ?>