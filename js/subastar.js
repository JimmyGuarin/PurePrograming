/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


 if (!Modernizr.inputtypes.date) {
        // If not native HTML5 support, fallback to jQuery datePicker
            $('input[type=date]').datepicker({
                // Consistent format with the HTML5 picker
                    'format': 'Y-m-d',
                    'autoclose': true
                },
                // Localization
                $.datepicker.regional['it']
            );
     
             $('input[type=time]').timepicker({
             
              timeFormat: 'HH:mm:ss',
              interval: 30 // 15 minutes
             
             
             });
        
                
                
 }