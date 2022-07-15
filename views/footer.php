<footer>
  <p class="copyright">Copyright @ 2022 - Carlos R. Callejas</p>
</footer>
<script>
let vistaPrevia = (event) => {
  let leer_img = new FileReader();
  //   console.log(leer_img);
  let id_img = document.getElementById('img-previa');

  leer_img.onload = () => {
    if (leer_img.readyState == 2) {
      id_img.src = leer_img.result;
      //       console.log(id_img);
    }
  }
  console.log(leer_img);
  leer_img.readAsDataURL(event.target.files[0]);
}
</script>

</body>

</html>