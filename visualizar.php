<?php 
  include "include/header.php";
  include('scripts/connection.php');
  include('scripts/view.php');

?>

     
    <section class="container"> 
        <div class="text-container w-50">
          <h1><?php echo $dados['titulo'] ?></h1>
          <h2>Bairro: <?php   ?></h2>
           <p style="white-space: break-spaces;"><?php echo $dados['descricao']  ?></p>
           <p style="white-space: break-spaces;"><h3>Endereço: <?php echo $dados['endereco']  ?> </p> </h3>
           <h2>Código: <?php echo $dados['id_imoveis']  ?></h2>
           <h2>Valor: R$ <?php echo number_format($dados['valor'],2,",","."); ?></h2>
            <a href=" https://api.whatsapp.com/send?phone=5521993576574&text=Ol%C3%A1%2C%20tenha%20interesse%20na%20casa%2Fapartamento%20de%20c%C3%B3digo%3A%20%24%7Bcodigo%7D!">Entre em contato</a>
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
    </script>

    

<?php include "include/footer.php"; ?>