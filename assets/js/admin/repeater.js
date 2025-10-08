jQuery( document ).ready( function( $ ) {
    // Repeater functionality
    function initRepeater( control ) {
        var repeater = control.container.find( '.repeater-fields' );
        var repeaterVal = control.container.find( '.repeater-val' );
        var values = repeaterVal.val() ? JSON.parse( repeaterVal.val() ) : [];

        repeater.empty();

        values.forEach( function( value, index ) {
            var item = $( '<li class="repeater-item"></li>' );
            var fields = control.params.fields;

            for ( var key in fields ) {
                var field = fields[key];
                var input = '';
                if ( field.type === 'textarea' ) {
                    input = '<textarea data-field="' + key + '" class="widefat">' + ( value[key] || '' ) + '</textarea>';
                } else {
                    input = '<input type="' + field.type + '" data-field="' + key + '" value="' + ( value[key] || '' ) + '" class="widefat" />';
                }
                item.append( '<label>' + field.label + '</label>' + input );
            }

            item.append( '<button type="button" class="button-link button-link-delete repeater-remove">Remove</button>' );
            repeater.append( item );
        } );

        repeater.sortable( {
            update: function() {
                updateRepeaterValue();
            }
        } );

        function updateRepeaterValue() {
            var newValues = [];
            repeater.find( '.repeater-item' ).each( function() {
                var itemValues = {};
                $( this ).find( '[data-field]' ).each( function() {
                    itemValues[ $( this ).data( 'field' ) ] = $( this ).val();
                } );
                newValues.push( itemValues );
            } );
            repeaterVal.val( JSON.stringify( newValues ) ).trigger( 'change' );
        }

        control.container.on( 'click', '.add-repeater-item', function() {
            var item = $( '<li class="repeater-item"></li>' );
            var fields = control.params.fields;

            for ( var key in fields ) {
                var field = fields[key];
                var input = '';
                if ( field.type === 'textarea' ) {
                    input = '<textarea data-field="' + key + '" class="widefat"></textarea>';
                } else {
                    input = '<input type="' + field.type + '" data-field="' + key + '" value="" class="widefat" />';
                }
                item.append( '<label>' + field.label + '</label>' + input );
            }

            item.append( '<button type="button" class="button-link button-link-delete repeater-remove">Remove</button>' );
            repeater.append( item );
            updateRepeaterValue();
        } );

        control.container.on( 'click', '.repeater-remove', function() {
            $( this ).parent().remove();
            updateRepeaterValue();
        } );

        control.container.on( 'change keyup', '[data-field]', function() {
            updateRepeaterValue();
        } );
    }

    wp.customize.control.each( function( control ) {
        if ( control.params.type === 'repeater' ) {
            initRepeater( control );
        }
    } );
} );
