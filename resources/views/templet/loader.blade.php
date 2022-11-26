<style>
      /* Center the loader */
      #loader {
          position: absolute;
          left: 50%;
          top: 50%;
          z-index: 1;
          width: 120px;
          height: 120px;
          margin: -76px 0 0 -76px;
          border: 16px solid #f3f3f3;
          border-radius: 50%;
          border-top: 16px solid #3498db;
          -webkit-animation: spin 2s linear infinite;
          animation: spin 2s linear infinite;
      }
  
      @-webkit-keyframes spin {
          0% {
              -webkit-transform: rotate(0deg);
          }
  
          100% {
              -webkit-transform: rotate(360deg);
          }
      }
  
      @keyframes spin {
          0% {
              transform: rotate(0deg);
          }
  
          100% {
              transform: rotate(360deg);
          }
      }
  
      /* Add animation to "page content" */
      .animate-bottom {
          position: relative;
          -webkit-animation-name: animatebottom;
          -webkit-animation-duration: 1s;
          animation-name: animatebottom;
          animation-duration: 1s
      }
  
      @-webkit-keyframes animatebottom {
          from {
              bottom: -100px;
              opacity: 0
          }
  
          to {
              bottom: 0px;
              opacity: 1
          }
      }
  
      @keyframes animatebottom {
          from {
              bottom: -100px;
              opacity: 0
          }
  
          to {
              bottom: 0;
              opacity: 1
          }
      }
  
      #myDiv {
          display: none;
          text-align: center;
      }
  </style>

  <script>
    var myVar;

    function myFunction() {
        myVar = setTimeout(showPage, 700);
    }

    function showPage() {
        document.getElementById("loader").style.display = "none";
        document.getElementById("myDiv").style.display = "block";
    }
</script>