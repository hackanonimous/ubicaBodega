<script type="text/javascript">
    let btnExit=document.querySelector('.btn-exit-system');
    btnExit.addEventListener('click',(e)=>{
      e.preventDefault();
      Swal.fire({
          title: 'Esta seguro de cerrar la sesion?',
          text: "Esta a punto de cerrar sesion y salir del sistema",
          icon: 'question',
          showCancelButton: true,
          confirmButtonColor: '#3085d6',
          cancelButtonColor: '#d33',
          confirmButtonText: 'Si, Salir!',
          cancelButtonText: 'No, cancelar'
        }).then((result) => {
          if (result.value) {
              let url='<?php echo SERVERURL;?>ajax/loginAjax.php';
              let token='<?php echo $lc->encryption($_SESSION['token_spm']);?>';
              let usuario='<?php echo $lc->encryption($_SESSION['id_sel']);?>';

              let datos=new FormData();
              datos.append("token",token);
              datos.append("usuario",usuario);

              fetch(url,{
                  method:'POST',
                  body: datos
              })
              .then(respuesta=>respuesta.json())
              .then(respuesta=>{
                return alertas_ajax(respuesta);
            })
          }
        });
    });
</script>