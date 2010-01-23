#!/bin/bash
java -jar compiler.jar --js jquery.easing.1.3.js --js jquery.hoverIntent.min.js --js jquery.colorbox.min.js --js app.js --js_output_file app-compiled.js
java -jar compiler.jar --js cufon.js --js Rockwell_Std_400.font.js  --js_output_file app-cufon-compiled.js