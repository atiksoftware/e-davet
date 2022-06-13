module.exports = { 
    content: [ 
        "./resources/views/editor/*.blade.php",    
        "./resources/views/components/*.blade.php",  
    ],
    theme: { 
        extend: {
            colors : {
                primary : '#1a73e8',
                primarydark : '#1160c8',
            }, 
        },
    },
    plugins: [ 
    ],
}