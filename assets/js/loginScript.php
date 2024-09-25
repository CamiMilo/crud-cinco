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

    // btnCloseAlertError.previousElementSibling

    // PASSWORD INPUT 
    const getAllMateriaSymbolsOutlined = document.querySelectorAll('.material-symbols-outlined')
    document.addEventListener('DOMContentLoaded', f => {
      getAllMateriaSymbolsOutlined.forEach((e) => {
        const getInputPassword = e.previousElementSibling
        if(getInputPassword.type == 'password'){
          e.textContent = 'visibility'
        }else{
          e.textContent = 'visibility_off'
        }
      })
    })

    getAllMateriaSymbolsOutlined.forEach((f) => {
      f.addEventListener('click', e => {
        const getInputPassword = e.target.previousElementSibling
        if(getInputPassword.type == 'text'){
          getInputPassword.type = 'password'
          e.target.textContent = 'visibility'
        }else{
          getInputPassword.type = 'text'
          e.target.textContent = 'visibility_off'
        }
      })
    })
    // PASSWORD INPUT 

</script>
