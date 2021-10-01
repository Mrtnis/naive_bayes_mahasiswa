  <script>
    // function to make bold text
    function boldText(params) {
      // init all id
      let allList = ['dashboard','data_latih','data_uji','cek','profil','logout']
      allList.forEach( oneList => {
        if (oneList == params) {
          document.getElementById(params).classList.add('bold-text')
        } else{
          document.getElementById(oneList).classList.remove('bold-text')
        }
      });
    }
  </script>
    
  </body>
</html>