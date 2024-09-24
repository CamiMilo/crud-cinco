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
</script>
