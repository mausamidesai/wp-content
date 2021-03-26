// wp register blocks 
wp.blocks.registerBlockStyle( 
    'core/quote', 
    {
        name: 'fancy-quote',
        label: 'Fancy Quote'
    } 
);

wp.blocks.registerBlockStyle( 
    'core/button', 
    {
        name: 'fancy-button',
        label: 'Fancy Button'
    } 
);

//wp.blocks.unregisterBlockStyle( 'core/quote', 'fancy-quote' );

wp.blocks.registerBlockStyle( 
    'core/group', 
    {
        name: 'alignnarrow',
        label: 'Narrow width'
    } 
);

wp.domReady( function() {
//    wp.blocks.unregisterBlockStyle( 'core/quote', 'default' );
    wp.blocks.unregisterBlockStyle( 'core/quote', 'large' );
} );