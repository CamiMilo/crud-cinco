<script>
    // GET ALL USERS
    const getAllData = () => {
      return <?php echo $get_data; ?>
    }

    // VALIDATORS BY REGISTER USER ----------------------------------------------------------------
    // VALIDATE NAME REGISTER -----------------------------------------
    const validateNameRegister = (getValue) => {
      // GET VALUES
      const getContainerError = document.getElementById('nameRegisterUserError')
      const getInput = document.getElementById('nameRegisterUser')
      let value = getValue

      // VALIDATE INPUT
      if(value === ""){
        getContainerError.textContent = 'Error, el campo es requerido'
        getInput.classList.add('error')
        return false
      }else if(String(value).length > 100){
        getContainerError.textContent = 'Error, el campo no debe exceder los 100 caracteres'
        getInput.classList.add('error')
        return false
      }else if(value[0] === " "){
        getContainerError.textContent = 'Error, el campo no puede empezar con espacios'
        getInput.classList.add('error')
        return false
      }else if(value[String(value).length - 1] === " "){
        getContainerError.textContent = 'Error, el campo no puede terminar con espacios'
        getInput.classList.add('error')
        return false
      }else if(!/^[a-zA-Z0-9ñÑáéíóúÁÉÍÓÚ\s]+$/.test(value)){
        getContainerError.textContent = 'Error, el campo no puede contener caracteres especiales como %, @, $'
        getInput.classList.add('error')
        return false
      }else if(validateDoubleKeySpace(value)){
        getContainerError.textContent = 'Error, el campo no puede contener dos espacios juntos'
        getInput.classList.add('error')
        return false
      }else{
        getContainerError.textContent = ''
        getInput.classList.remove('error')
        return true
      }
    }

    // VALIDATE LAST NAME ----------------------------------------------
    const validateLastNameRegister = (getValue) => {
      // GET VALUES
      const getContainerError = document.getElementById('lastNameRegisterUserError')
      const getInput = document.getElementById('lastNameRegisterUser')
      let value = getValue

      // VALIDATE INPUT
      if(value === ""){
        getContainerError.textContent = 'Error, el campo es requerido'
        getInput.classList.add('error')
        return false
      }else if(String(value).length > 100){
        getContainerError.textContent = 'Error, el campo no debe exceder los 100 caracteres'
        getInput.classList.add('error')
        return false
      }else if(value[0] === " "){
        getContainerError.textContent = 'Error, el campo no puede empezar con espacios'
        getInput.classList.add('error')
        return false
      }else if(value[String(value).length - 1] === " "){
        getContainerError.textContent = 'Error, el campo no puede terminar con espacios'
        getInput.classList.add('error')
        return false
      }else if(!/^[a-zA-Z0-9ñÑáéíóúÁÉÍÓÚ\s]+$/.test(value)){
        getContainerError.textContent = 'Error, el campo no puede contener caracteres especiales como %, @, $'
        getInput.classList.add('error')
        return false
      }else if(validateDoubleKeySpace(value)){
        getContainerError.textContent = 'Error, el campo no puede contener dos espacios juntos'
        getInput.classList.add('error')
        return false
      }else{
        getContainerError.textContent = ''
        getInput.classList.remove('error')
        return true
      }
    }

    // VALIDATE EMAIL ----------------------------------------------
    const validateEmailRegister = (getValue) => {
      // GET VALUES
      const getContainerError = document.getElementById('emailRegisterUserError')
      const getInput = document.getElementById('emailRegisterUser')
      let value = getValue

      // VALIDATE INPUT
      // GET ALL USERS
      const getData = Object.values(getAllData())
      let emails = []
      getData.forEach(e => {
        emails.push(e['fdb_email'])
      })

      if(value === ""){
        getContainerError.textContent = 'Error, el campo es requerido'
        getInput.classList.add('error')
        return false
      }else if(String(value).length > 200){
        getContainerError.textContent = 'Error, el campo no debe exceder los 200 caracteres'
        getInput.classList.add('error')
        return false
      }else if(value[0] === " "){
        getContainerError.textContent = 'Error, el campo no puede empezar con espacios'
        getInput.classList.add('error')
        return false
      }else if(value[String(value).length - 1] === " "){
        getContainerError.textContent = 'Error, el campo no puede terminar con espacios'
        getInput.classList.add('error')
        return false
      }else if(!/^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(value)){
        getContainerError.textContent = 'Error, el correo no es valido'
        getInput.classList.add('error')
        return false
      }else if(emails.includes(value)){
        getContainerError.textContent = 'Error, el correo ya existe'
        getInput.classList.add('error')
        return false
      }else{
        getContainerError.textContent = ''
        getInput.classList.remove('error')
        return true
      }
    }

    // VALIDATE LAST NAME ----------------------------------------------
    const validateAddressRegister = (getValue) => {
      // GET VALUES
      const getContainerError = document.getElementById('addressRegisterUserError')
      const getInput = document.getElementById('addressRegisterUser')
      let value = getValue

      // VALIDATE INPUT
      if(value === ""){
        getContainerError.textContent = 'Error, el campo es requerido'
        getInput.classList.add('error')
        return false
      }else if(String(value).length > 200){
        getContainerError.textContent = 'Error, el campo no debe exceder los 200 caracteres'
        getInput.classList.add('error')
        return false
      }else if(value[0] === " "){
        getContainerError.textContent = 'Error, el campo no puede empezar con espacios'
        getInput.classList.add('error')
        return false
      }else if(value[String(value).length - 1] === " "){
        getContainerError.textContent = 'Error, el campo no puede terminar con espacios'
        getInput.classList.add('error')
        return false
      }else if(!/^[a-zA-Z0-9ñÑáéíóúÁÉÍÓÚ\s\-#]+$/.test(value)){
        getContainerError.textContent = 'Advertencia, solo se permiten los siguientes caracteres especiales: # y -'
        getInput.classList.add('error')
        return false
      }else if(validateDoubleKeySpace(value)){
        getContainerError.textContent = 'Error, el campo no puede contener dos espacios juntos'
        getInput.classList.add('error')
        return false
      }else{
        getContainerError.textContent = ''
        getInput.classList.remove('error')
        return true
      }
    }

    // VALIDATE LAST NAME ----------------------------------------------
    const validatePasswordRegister = (getValue) => {
      // GET VALUES
      const getContainerError = document.getElementById('passwordRegisterUserError')
      const getInput = document.getElementById('passwordRegisterUser')
      let value = getValue

      // VALIDATE INPUT
      if(value === ""){
        getContainerError.textContent = 'Error, el campo es requerido'
        getInput.classList.add('error')
        return false
      }else if(String(value).length > 100){
        getContainerError.textContent = 'Error, el campo no debe exceder los 100 caracteres'
        getInput.classList.add('error')
        return false
      }else if(value[0] === " "){
        getContainerError.textContent = 'Error, el campo no puede empezar con espacios'
        getInput.classList.add('error')
        return false
      }else if(value[String(value).length - 1] === " "){
        getContainerError.textContent = 'Error, el campo no puede terminar con espacios'
        getInput.classList.add('error')
        return false
      }else if(!/[a-z]/.test(value)){
        getContainerError.textContent = 'La contraseña debe tener al menos una letra minúscula'
        getInput.classList.add('error')
        return false
      }else if(!/[A-Z]/.test(value)){
        getContainerError.textContent = 'La contraseña debe tener al menos una letra mayúscula'
        getInput.classList.add('error')
        return false
      }else if(!/\d/.test(value)){
        getContainerError.textContent = 'La contraseña debe tener al menos un número'
        getInput.classList.add('error')
        return false
      }else if(!/[@$!%*?&#]/.test(value)){
        getContainerError.textContent = 'La contraseña debe tener al menos un carácter especial (@, $, !, %, *, ?, &, #)'
        getInput.classList.add('error')
        return false
      }else if(validateDoubleKeySpace(value)){
        getContainerError.textContent = 'Error, el campo no puede contener dos espacios juntos'
        getInput.classList.add('error')
        return false
      }else{
        getContainerError.textContent = ''
        getInput.classList.remove('error')
        return true
      }
    }

    // VALIDATE LAST NAME ----------------------------------------------
    const validateConfirmPasswordRegister = (getValue) => {
      // GET VALUES
      const getContainerError = document.getElementById('confirmPasswordRegisterUserError')
      const getInput = document.getElementById('confirmPasswordRegisterUser')
      let value = getValue

      // VALIDATE INPUT
      if(value === ""){
        getContainerError.textContent = 'Error, el campo es requerido'
        getInput.classList.add('error')
        return false
      }else if(String(value).length > 100){
        getContainerError.textContent = 'Error, el campo no debe exceder los 100 caracteres'
        getInput.classList.add('error')
        return false
      }else if(value[0] === " "){
        getContainerError.textContent = 'Error, el campo no puede empezar con espacios'
        getInput.classList.add('error')
        return false
      }else if(value[String(value).length - 1] === " "){
        getContainerError.textContent = 'Error, el campo no puede terminar con espacios'
        getInput.classList.add('error')
        return false
      }else if(!/[a-z]/.test(value)){
        getContainerError.textContent = 'La contraseña debe tener al menos una letra minúscula'
        getInput.classList.add('error')
        return false
      }else if(!/[A-Z]/.test(value)){
        getContainerError.textContent = 'La contraseña debe tener al menos una letra mayúscula'
        getInput.classList.add('error')
        return false
      }else if(!/\d/.test(value)){
        getContainerError.textContent = 'La contraseña debe tener al menos un número'
        getInput.classList.add('error')
        return false
      }else if(!/[@$!%*?&#]/.test(value)){
        getContainerError.textContent = 'La contraseña debe tener al menos un carácter especial (@, $, !, %, *, ?, &, #)'
        getInput.classList.add('error')
        return false
      }else if(validateDoubleKeySpace(value)){
        getContainerError.textContent = 'Error, el campo no puede contener dos espacios juntos'
        getInput.classList.add('error')
        return false
      }else if(document.getElementById('passwordRegisterUser').value !== value){
        getContainerError.textContent = 'Error, La contraseña no coincide'
        getInput.classList.add('error')
        return false
      }else{
        getContainerError.textContent = ''
        getInput.classList.remove('error')
        return true
      }
    }


    // CALL FUNCTION ------------------------------------------
    // NAME
    document.getElementById('nameRegisterUser').addEventListener('input', e => {
      validateNameRegister(e.target.value)
    })
    // LAST NAME
    document.getElementById('lastNameRegisterUser').addEventListener('input', e => {
      validateLastNameRegister(e.target.value)
    })
    // EMAIL
    document.getElementById('emailRegisterUser').addEventListener('input', e => {
      validateEmailRegister(e.target.value)
    })
    // ADDRESS
    document.getElementById('addressRegisterUser').addEventListener('input', e => {
      validateAddressRegister(e.target.value)
    })
    // PASSWORD
    document.getElementById('passwordRegisterUser').addEventListener('input', e => {
      validatePasswordRegister(e.target.value)
    })
    // CONFIRM PASSWORD
    document.getElementById('confirmPasswordRegisterUser').addEventListener('input', e => {
      validateConfirmPasswordRegister(e.target.value)
    })
    // CALL FUNCTION ------------------------------------------


    // VALIDATE GENERAL -----------------
    const validateFormRegisterUser = (event) => {
      const validateName = validateNameRegister(document.getElementById('nameRegisterUser').value)
      const validateLastName = validateLastNameRegister(document.getElementById('lastNameRegisterUser').value)
      const validateEmail = validateEmailRegister(document.getElementById('emailRegisterUser').value)
      const validateAddress = validateAddressRegister(document.getElementById('addressRegisterUser').value)
      const validatePassword = validatePasswordRegister(document.getElementById('passwordRegisterUser').value)
      const validateConfirmPassword = validateConfirmPasswordRegister(document.getElementById('confirmPasswordRegisterUser').value)
      
      if(validateName == false || validateLastName == false || validateEmail == false || validateAddress == false || validatePassword == false, validateConfirmPassword == false){
        event.preventDefault()
      }
    }

    // EXECUTE FORM --------------------------
    document.addEventListener('DOMContentLoaded', e => {
      const formRegisterUser = document.getElementById('formRegisterUser')
      formRegisterUser.addEventListener('submit', validateFormRegisterUser)
    })

    // VALIDATORS BY REGISTER USER ----------------------------------------------------------------
</script>