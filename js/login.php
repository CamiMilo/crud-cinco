<script>
  // MODAL REGISTRATION USER
    window.onclick = e => {
      const getModal = document.getElementById('modalRegistrateUser')
      if(e.target === getModal){
        hideModal('modalRegistrateUser')
      }
    }
    document.getElementById('showmodalRegistrateUser').addEventListener('click', e => {
      showModal('modalRegistrateUser')
    })
    const getAllBtnClose = document.querySelectorAll('.btn-close') 
    if(getAllBtnClose){
      getAllBtnClose.forEach((e) => {
        e.addEventListener('click', e => {
          hideModal('modalRegistrateUser')
        })
      }) 
    }
    // MODAL REGISTRATION USER

    // EEROR ALER
    const btnCloseAlertError = document.getElementById('btn-clse-alert-error')
    if(btnCloseAlertError){
      btnCloseAlertError.addEventListener('click', e => {
        document.querySelector('.alert-error').classList.remove('show')
        const getUrl = new URL(window.location.href)
        getUrl.searchParams.delete('result')
        getUrl.searchParams.delete('error_msg')
        window.location.href = getUrl
      })
    }
    // EEROR ALER
</script>
</body>
</html>