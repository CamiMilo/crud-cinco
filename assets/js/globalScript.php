<script>
  // MODAL CONFIG ---------------------------------------------------------
  // SHOW MODAL
  const showModal = (modal) => {
    const getModal = document.getElementById(modal)
    getModal.classList.add('show')
    getModal.firstElementChild.classList.add('show')
  }

  // HIDE MODAL
  const hideModal = (modal) => {
    const getModal = document.getElementById(modal)
    getModal.classList.remove('show')
    getModal.firstElementChild.classList.remove('show')
  }
  // MODAL CONFIG ---------------------------------------------------------

  // FUNCTIONS
  const validateDoubleKeySpace = (value) => {
    let arrayValue = []
    for(index of value){
      arrayValue.push(value)  
    }
    for(let i = 0; i < arrayValue[0].length; i++){
      if(arrayValue[0][i - 1] == " "){
        if(arrayValue[0][i] == " "){
          return true
        }
      }
    }
    return false
  }
</script>
