
    function openProfile(){
        document.getElementById('dropdown').style.display = 'none';
        document.getElementById('profileCard').style.display = 'flex';
        document.getElementById('home').style.display = 'none';
    }

    function hideProfile() {
        const screenWidth = window.innerWidth;
        const dropdown = document.getElementById('dropdown');
        const profileCard = document.getElementById('profileCard');
        document.getElementById('home').style.display = 'block';

      
        if (screenWidth > 850) {
          dropdown.style.display = 'flex';
          profileCard.style.display = 'none';
        } else {
          dropdown.style.display = 'flex';
          profileCard.style.display = 'none';
        }
      }
      
      window.addEventListener('resize', () => {
        const screenWidth = window.innerWidth;
        const dropdown = document.getElementById('dropdown');
        const profileCard = document.getElementById('profileCard');
      
        if (screenWidth > 850) {
          dropdown.style.display = 'none';
          profileCard.style.display = 'none';
        }
      });


   
    

