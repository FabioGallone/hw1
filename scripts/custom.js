/*pannellum.viewer('panorama', {
    "type": "equirectangular",
    "panorama": "./images/prova.jpg",
    //"autoLoad": true
}); 
*/
pannellum.viewer('panorama', {   
    "default": {
        "firstScene": "entrata",
        "author": "Fabio Gallone",
       
        //"sceneFadeDuration": 1000
    },

    "scenes": {
        "entrata": {
            "title": "Entrata",
            /*
            "hfov": 110,
            "pitch": -3,
            "yaw": 117,
            */
            "type": "equirectangular",
            "panorama": "./images/entrata.jpg",
            //"autoLoad": true,
            "hotSpots": [
                {
                    //"pitch": -2.1, //è l'altezza
                   
                    "type": "scene",
                    "text": "Sala Pesi 1 parte",
                    "sceneId": "Sala"
                }
            ]
        },

        "Sala": {
            "title": "Sala",
            "hfov": 110,
            "yaw": 5,
            "type": "equirectangular",
            "panorama": "./images/sala2.jpg",
            "hotSpots": [
                {
                   // "pitch": -0.6,
                    "yaw": 275,
                    "type": "scene",
                    "text": "Entrata Palestra",
                    "sceneId": "entrata",
                    /*"targetYaw": -23,
                    "targetPitch": 2
                    */


                    
                },


                {
                    // "pitch": -0.6,
                     "yaw": 18,
                     "type": "scene",
                     "text": "Sala pesi 2 parte",
                     "sceneId": "Sala_2",
                     /*"targetYaw": -23,
                     "targetPitch": 2
                     */
 
 
                     
                 }

                
            ]
            
        },

        "Sala_2": {
            "title": "Sala",
            "hfov": 110,
            "yaw": 5,
            "type": "equirectangular",
            "panorama": "./images/sala3.jpg",
            "hotSpots": [
                {
                   // "pitch": -0.6,
                    "yaw": 264,
                    "type": "scene",
                    "text": "Sala pesi 1 parte",
                    "sceneId": "Sala",
                    /*"targetYaw": -23,
                    "targetPitch": 2
                    */


                    
                },

                
            ]
            
        }
    }
});

window.sr = ScrollReveal();



sr.reveal('header button', { delay: 800 });
    
    sr.reveal("#titolo", {
        duration: 1500,
        origin: "top",
        distance: "100px"
    });

   
    sr.reveal(".destra", {
        duration: 1500,
        origin: "left",
        distance: "400px",
        delay: 500,
        duration: 1500
    });

    sr.reveal(".sinistra", {
        duration: 1500,
        origin: "right",
        distance: "400px",
        delay: 500,
        duration: 1500
    });

    sr.reveal(".mappa3d", {
        duration: 1500,
        origin: "top",
        distance: "100px",
        delay: 300,
     
    });

    
    sr.reveal(".flex-container", {
        duration: 1500,
        origin: "bottom",
        distance: "100px",
        delay: 400
    });