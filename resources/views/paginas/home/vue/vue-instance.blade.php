

   

    var app = new Vue({
    el: '#app',    
    data:{
      empresa: {!! json_encode($Empresa) !!},
      blogs:   {!! json_encode($blogs) !!},
      cargando:false,
      scrolled:false,
      windowWidth: window.innerWidth,

      

    },
mounted: function mounted () {        

 this.$nextTick(() => {
    window.addEventListener('resize', () => {
      this.windowWidth = window.innerWidth
    });
  })


},

methods:{ 



    contacto_evento:function(){
      
      gtag('event', 'contacto');
    },
    comparar_si_son_iguales:function(valor1,valor2){
      if(valor1 == valor2)
      {
      return true;
      }
      else{
      return false;
      }
    },



    se_muestra:function(valor){

    if(valor == '' || valor == null || valor == 'no')
    {
      return false;
    }
    else
    {
      return true;
    }
    },
    handleScroll: function() {
        
          this.scrolled = window.scrollY > 0;
          
         

      },   
    
},
computed:{
  mostrar_logo_nav:function(){    

    if(this.scrolled)
    {
      return true;
    }  
    else
    {
     return false;
    }
  },
  mostrar_para_grande:function(){
    if(this.windowWidth > 990)
    {
      return true;
    }  
    else
    {
     return false;
    }
  },
  mostrar_para_celuar:function(){
   if(this.windowWidth <= 990)
    {
      return true;
    }  
    else
    {
     return false;
    }
  }

},
 watch: {
    windowWidth(newHeight, oldHeight) {
     window.addEventListener('resize', () => {
      this.windowWidth = window.innerWidth
    });
    }
    },  

     
      created () {
        window.addEventListener('scroll', this.handleScroll);
      },
      destroyed () {
        window.removeEventListener('scroll', this.handleScroll);
      }

}

     

   

   );







































