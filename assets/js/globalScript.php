<script>
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
  // FUNCTIONS


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


  // INPUT CONTROL
  const getAllInputs = document.querySelectorAll('input')
  getAllInputs.forEach((e) => {
    e.addEventListener('focus', e => {
      e.target.previousElementSibling.classList.add('active')
    })
    e.addEventListener('blur', e => {
      if(!e.target.value.length > 0){
        e.target.previousElementSibling.classList.remove('active')
      }
    })
  })
  // INPUT CONTROL
</script>
