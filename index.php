        <script  src = "js/tesseract.min.js" ></script>

        <script>
		console.log("Processing");
                Tesseract.recognize(
				"OCR.png", 
				"eng",{
  workerPath: "js/worker.min.js",
  langPath: "langs-folder/",
  corePath: "js/tesseract-core.wasm.js",
}).then(function(result){
                    
					
                    console.log(result.data.text);

                    
                   // alert(result.data.text);
                }).finally(function(){
                    
                   
                });
        </script>