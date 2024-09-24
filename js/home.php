<script>
  window.onclick = e => {
    const btnProfile = document.querySelector('.btn-profile')
    if(e.target === btnProfile){
      document.querySelector('.btn-profile-hover').classList.toggle('show')
    }
  }
</script>
</body>
</html>