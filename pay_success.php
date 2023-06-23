<?php include_once 'helpers/helper.php'; ?>
<?php subview('header.php'); ?>
<style>
* {
    margin: 0;
    padding: 0;
    -webkit-box-sizing: border-box;
    box-sizing: border-box;
}
body {
  background: transparent
}

html {
    font-family: "Poppins", sans-serif;
    font-weight: 300;
    font-size: 10px;
}

h3{
  font-size : 4rem;
  font-weight: 600;
  text-align: center;
}

.container{
    width : 800px;
    height: 70vh;
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    background: white;
    padding: 5rem 7rem;
    border-radius: 1.25rem;
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: space-evenly;
    box-shadow: 0 4px 8px 0 rgba(0,0,0,0.25);
    
      
}

.container-heading{
    margin-bottom: 20px;
    
      
}

.container-image{
    width:100px;
      margin-bottom: 20px;
      
}

.container-welcome{
    font-size: 3rem;
      margin-bottom: 10px;
     
      
}

.container-cube{
    font-size: 3rem;
      margin-bottom: 20px;
     
      
}

.container-text{
    text-align: center;
      font-size: 1.6rem;
      font-weight:400;
      margin-bottom: 20px;
      
      
}    
</style>
  <main>
    <div class="container">
      <h3 class="container-heading">Payment Successful!</h3>
      <img
        class="container-image"
        src="https://res.cloudinary.com/dmnazxdav/image/upload/v1599736321/tick_hhudfj.svg"
        alt="Payment Succesful"
      />
      <h3 class="container-welcome">Thank you for choosing us!!Have a happy and safe Jouney</h3>
      
    </div>
</main>
<?php subview('footer.php'); ?> 
