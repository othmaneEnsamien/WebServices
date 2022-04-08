

<style>
    .galery{
        display: flex;
        justify-content: center;
        flex-wrap: wrap;
        width: 90%;
        margin: 0 auto; 
       
    }
    .galery a {
        height: 300px;
        width: 600px;
        margin: 20px;
        border-radius: 5px;
        overflow: hidden;
        box-shadow: 0 3px 5px;

    }

    .galery a img{
        height:100%;
        width:100%;object-fit: cover;
    }
    .galery a img:hover{
        transform: scale(1.4);
    }
    h1{
        margin-top:100px;
        font-size: 40px;
        text-align: center;
        text-transform: uppercase;
        font-family: Arial, Helvetica, sans-serif;
        color: rgb(255, 217, 217);


    }
</style>
<div style="background-image: url(images/abstract-backdrop.jpg);width:100%;height:100%;padding:50px"  >

        <h1>Galery Website</h1>
        <div class="galery"  >
        
            <a href="images/ecommerce1.png">
                <img src="images/ecommerce1.png" alt="">
            </a>
         
            <a href="images/a.jpg">
                <img src="images/a.jpg" alt="">
            </a>
    
            <a href="images/ecommerce1.png">
                <img src="images/ecommerce1.png" alt="">
            </a>
         
         
            <a href="images/a.jpg">
                <img src="images/a.jpg" alt="">
            </a>     
         </div>
  
   
</div>
  

@push('scripts')
<script>
    lightgallery(document.queryselector('.galery'));
</script>
@endpush



